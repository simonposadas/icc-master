<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Equipment;

/**
 * 
 */
class InventoryController extends Controller {

    /**
     * View directory
     * @var type 
     */
    protected $view = 'admin.';

    /**
     * Display all the equipments
     * @return type
     */
    public function index() {
        return view($this->view . 'inventory', ['equipments' => Equipment::all()]);
    }

        /*  -- - - -- SEARCH -- - - -- */

     public function scopeSearch2()
    {
        $searchItem = $_GET["searchItem2"];

        $result = \DB::table('equipment')
        ->where('equipment_name', $searchItem)
        ->OrWhere('equipment_id', $searchItem)
        ->OrWhere('quantity', $searchItem)
        ->select('equipment.*')->get();
        //return empty(request()->search) ? $q : $q->where('cust_fname', 'like', '%'.request()->search.'%');
        return view('admin.inventory')->with('equipments', $result);
    }

    
    
    /* x xx SEARCH xx x */

    /**
     * Show the specified resource
     * @param Request $request
     * @return type
     */
    public function show(Request $request) {
        return response()->json(Equipment::find($request->equipment_id));
    }

    /**
     * Store the newly created resource
     * @param Request $request
     * @return type
     */
    public function store(Request $request) {
        if (Equipment::create($request->only(['equipment_name', 'cost', 'quantity']))) {
            alert()->success('Successfully added equipment.', 'Success')->persistent('Close');
            return redirect()->back();
        }
        alert()->error('Something went wrong... Please try again.', 'Error')->persistent('Close');
        return redirect()->back();
    }

    /**
     * Update the specified resource
     * @param Request $request
     * @return type
     */
    public function update(Request $request) {
        if (Equipment::find($request->equipment_id)->update($request->only('equipment_name', 'cost', 'quantity'))) {
            alert()->success('Successfully updated equipment.', 'Success')->persistent('Close');
            return redirect()->back();
        }
        alert()->error('Something went wrong... Please try again.', 'Error')->persistent('Close');
        return redirect()->back();
    }

    /**
     * Delete the specified resource
     * 
     * @param Request $request
     * @return type
     */
    public function destroy(Request $request) {
        if (Equipment::destroy($request->equipment_id))
            return response()->json(['success' => true, 'message' => 'Successfully deleted the equipment', 'title' => 'Success']);
        return response()->json(['success' => false, 'message' => 'Something went wrong... Please try again.', 'title' => 'Error']);
    }

}
