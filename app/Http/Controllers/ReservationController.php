<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PackageType;
use App\Model\PackageDetail;
use App\Model\CustomerInfo;
use App\Model\EventDetail;
use App\Model\ReservationDetail;
use Session;
/**
 *
 */
class ReservationController extends Controller {

    /**
     * View directort
     * @var type
     */
    protected $view = 'reservation.';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $events_data = [];
        foreach (ReservationDetail::all() as $reservation_detail) {
            $obj = new \stdClass();
            $event_detail = $reservation_detail->event_detail;
            $obj->title = config()->get('constants.event_types')[$event_detail->event_type] . ' @ ' . $event_detail->place;
            $obj->start = $reservation_detail->reserv_date . 'T' . $reservation_detail->reserv_time;
            $obj->end = $reservation_detail->reserv_date . 'T'
                    . date("H:i:s", strtotime("$reservation_detail->reserv_date $reservation_detail->reserv_time + 4 hours"));
            $obj->allDay = false;
            $events_data [] = $obj;
        }

        return view($this->view . 'index', ['events_data' => $events_data]);
    }

    /**
     * Return event details
     * @return typePopulate the event details view
     */
    public function details() {
        
        return view($this->view . 'details');

    }

    /**
     * Validate event details request
     *
     * @param \App\Http\Requests\Reservation\ValidateDetailsRequest $validateDetailsRequest
     */
    public function validateDetails(\App\Http\Requests\Reservation\ValidateDetailsRequest $validateDetailsRequest) {
        foreach ($validateDetailsRequest->all() as $key => $val) {
            session([$key => $val]);
        }

        return redirect()->route('r.packages');
    }

    /**
     * Populate the packages
     * @return type
     */
    public function packages() {
        return view($this->view . 'packages', ['package_types' => PackageType::all()]);
    }

    /**
     * Display list of package
     *
     * @param \App\Http\Requests\Reservation\PackageTypeIdRequest $packageTypeIdRequest
     * @return type
     */
    public function packageList(\App\Http\Requests\Reservation\PackageTypeIdRequest $packageTypeIdRequest) {

        $packages = PackageDetail::find($packageTypeIdRequest);

        
        $main = \DB::table('food_details')
        ->where('status', 0)
        ->where('food_type_id', 10)->get();

        $dessert = \DB::table('food_details')
        ->where('status', 0)
        ->where('food_type_id', 11)->get();

        $appetite = \DB::table('food_details')
        ->where('status', 0)
        ->where('food_type_id', 1)->get();

        $sp = \DB::table('food_details')
        ->where('status', 0)
        ->where('food_type_id', 2)->get();


        return view($this->view . 'packages_list', ['main' => $main, 'dessert' => $dessert, 'appetite' => $appetite, 'packages' => $packages, 'sp' => $sp]);
    }

    public function getPackageValue(Request $request){

        
        $packages = PackageDetail::find($request -> id);


         return view($this->view . 'packages_info', ['sp1' => $request->sp1, 'sp2' => $request->sp2, 'sp3' => $request->sp3, 'sp4' => $request->app1, 'sp4' => $request->app1,'app1' => $request->app1, 'app2' => $request->app2, 'app3' => $request->app3, 'app4' => $request->app5, 'dish1' => $request->dish1, 'dish2' => $request->dish2, 'dish3' => $request->dish3, 'dish4' => $request->dish4, 'dish5' => $request->dish5, 'dish6' => $request->dish7, 'dess1' => $request->dess1, 'dess2' => $request->dess2, 'packages' => $packages]);

    }

    /**
     * Package information
     *
     * @param \App\Http\Requests\Reservation\PackageFoodIdRequest $packageFoodIdRequest
     * @return type
     */
    public function packageInfo(\App\Http\Requests\Reservation\PackageFoodIdRequest $packageFoodIdRequest) {

    }

    /**
     * Redirect to reservation
     *
     * @param \App\Http\Requests\Reservation\PackageFoodIdRequest $packageFoodIdRequest
     * @return type
     */
    public function packageClient(\App\Http\Requests\Reservation\PackageFoodIdRequest $packageFoodIdRequest, $id) {
        $hello = $packageFoodIdRequest -> all();
        
        return view($this->view . 'reservation', ['id' => $id, 'foods' => $hello]);


    }

    /**
     * Store the newly created resource
     * @param \App\Http\Requests\Reservation\StoreRequest $storeRequest
     * @return type
     */
    public function store(\App\Http\Requests\Reservation\StoreRequest $storeRequest) {
        $customer_info = CustomerInfo::create([
                    'cust_fname' => $storeRequest->cust_fname,
                    'cust_lname' => $storeRequest->cust_lname,
                    'gender' => $storeRequest->gender,
                    'contNo' => $storeRequest->contNo,
                    'address' => $storeRequest->address,
                    'email' => $storeRequest->email
        ]);

        $event_details = EventDetail::create([
                    'event_type' => $storeRequest->event_type,
                    'place' => $storeRequest->event_place
        ]);

        $order_details = OrderDetail::create([
                    'reserv_id' => $reservation_detail->reserv_id,
                    'food_id' => $food_details->food_id
        ]);

        $data = [
            'reserv_guestNo' => $storeRequest->reserv_guestNo,
            'reserv_date' => date('Y-m-d', strtotime($storeRequest->reserv_date)),
            'reserv_time' => $storeRequest->reserv_time,
            'package_id' => $storeRequest->package_id,
            'event_id' => $event_details->event_id,
            'cust_id' => $customer_info->cust_id,
            'cust_budget' => $storeRequest->cust_budget
        ];

        if (!ReservationDetail::create($data)) {
            EventDetail::destroy($event_details->event_id);
            CustomerInfo::destroy($customer_info->cust_id);
            OrderDetail::destroy($order_details->order_id);
            alert()->error('Something went wrong in reservation.', 'Error')
                    ->persistent('Close');
            return redirect()->back();
        }

        $storeRequest->session()->flush();
        alert()->success('Successfully booked a reservation. Please wait for the approval.', 'Success')
                ->persistent('Close');
        return redirect('/');

    }

    public function getReservationDetails(Request $request){




    }

}
