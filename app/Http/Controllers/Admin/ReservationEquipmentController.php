<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ReservationEquipment;
use App\Model\ReservationDetail;
use App\Model\Equipment;
use App\Http\Requests\Reservation\Equipment\ReservEquipIdRequest;

/**
 * 
 */
class ReservationEquipmentController extends Controller {

    /**
     * View directory
     */
    protected $view = 'admin.reservation.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\App\Http\Requests\Reservation\ReservationIdRequest $reservationIdRequest) {
        $reservation_detail = ReservationDetail::find($reservationIdRequest->reserv_id);
        $reservation_detail->equipment;

        return view($this->view . 'equipment', [
            'reservation_detail' => $reservation_detail,
            'equipments' => $this->create_dropdown(Equipment::all(), 'equipment_id', 'equipment_name')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \App\Http\Requests\Reservation\Equipment\ReservationEquipmentStoreRequest $reservationEquipmentStoreRequest
     * @return type
     */
    public function store(\App\Http\Requests\Reservation\Equipment\ReservationEquipmentStoreRequest $reservationEquipmentStoreRequest) {
        /**
         * check if quantity is greater than instocks
         */
        if ($reservationEquipmentStoreRequest->quantity > $reservationEquipmentStoreRequest->in_stock) {
            $errors = new \stdClass();
            $errors->quantity = ["The quantity must not be greater than in-stocks"];
            return redirect()->back()
                            ->withErrors($errors)
                            ->withInput()
                            ->with('err_store', 1);
        }
        $stock = $reservationEquipmentStoreRequest->in_stock - $reservationEquipmentStoreRequest->quantity;
        if (ReservationEquipment::create($reservationEquipmentStoreRequest->only(['reserv_id', 'equipment_id', 'quantity']))) {
            Equipment::find($reservationEquipmentStoreRequest->equipment_id)->update(['quantity' => $stock]);
            alert()->success('Successfully tag an equipment.', 'Success')->persistent('Close');
            return redirect()->back();
        }
        alert()->error('Something went wrong... Please try again.', 'Error')->persistent('Close');
        return redirect()->back();
    }

        /**
     * Create dropdown object
     * 
     * @param type $obj
     * @param type $key
     * @param type $name
     * @return type
     */
    public function create_dropdown($obj, $key, $name) {
        $ret = [];
        foreach ($obj as $data) {
            $ret[$data->$key] = $data->equipment_name;
        }
        return $ret;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ReservEquipIdRequest $reservEquipIdRequest) {
        $reservation_equipment = ReservationEquipment::find($reservEquipIdRequest->id);
        $reservation_equipment->equipment;
        return response()->json($reservation_equipment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param ReservEquipIdRequest $reservEquipIdRequest
     * @return type
     */
    public function destroy(ReservEquipIdRequest $reservEquipIdRequest) {
        $reservation_equip = ReservationEquipment::find($reservEquipIdRequest->id);
        $qty = $reservation_equip->quantity;
        
        /**
         * current equipment stock
         */
        $equipment = Equipment::find($reservation_equip->equipment_id);
        $stock = $equipment->quantity;
        
        if ($equipment->update(['quantity' => ($qty + $stock)]))
            if ($reservation_equip->delete()) 
                return response()->json(['success' => true, 'message' => 'Successfully untag equipment', 'title' => 'Success']);
            return response()->json(['success' => false, 'message' => 'Somethng went wrong.. Please try again.', 'title' => 'Error']);
    }

}
