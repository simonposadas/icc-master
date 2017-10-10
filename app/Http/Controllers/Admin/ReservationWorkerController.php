<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ReservationDetail;
use App\Model\Worker;
use App\Model\ReservationWorker;

class ReservationWorkerController extends Controller {

    /**
     * View directory
     * @var type 
     */
    protected $view = 'admin.reservation.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\App\Http\Requests\Reservation\ReservationIdRequest $request) {
        $reservation_detail = ReservationDetail::find($request->reserv_id);
        $reservation_detail->worker;

        return view($this->view . 'worker', [
            'reservation_detail' => $reservation_detail,
            'workers' => $this->create_dropdown(Worker::all(), "worker_id", "")
        ]);
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
            $ret[$data->$key] = $data->worker_fname . ' ' . $data->worker_mname . ' ' . $data->worker_lname;
        }
        return $ret;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Reservation\Worker\ReservationWorkerStoreRequest $request) {
        $reservation_worker = ReservationWorker::where('worker_id', $request->worker_id);
        $conflict_sched = null;

        /**
         * check if the worker has a schedule
         */
        if ($reservation_worker->exists()) {
            $reservation_detail = ReservationDetail::find($request->reserv_id);

            /**
             * get all the schedule
             */
            foreach ($reservation_worker->get() as $data) {
                $data_reserv_detail = $data->reservation_detail;
                
                /**
                 * check if the date is the same
                 */
                if ($data_reserv_detail->reserv_date === $reservation_detail->reserv_date) {
                    $time_start = date('H:i', strtotime($data_reserv_detail->reserv_time));
                    $time_end = date('H:i', strtotime($time_start . '+4 hour'));
                    $reserv_time_start = date('H:i', strtotime($reservation_detail->reserv_time));
                    $reserv_time_end = date('H:i', strtotime($reserv_time_start . '+4 hour'));
                    
                    $ts = strtotime($time_start);
                    $te = strtotime($time_end);
                    $rts = strtotime($reserv_time_start);
                    $rte = strtotime($reserv_time_end);
                    
//                    echo '<br>';
//                    echo 'timestart: ' . $time_start . '<br>';
//                    echo 'time_end: ' . $time_end . '<br>';
//                    echo 'reserv_time_start: ' . $reserv_time_start . '<br>';
//                    echo 'reserv_time_end: ' . $reserv_time_end . '<br>';
                    
                    if ( ($rts >= $ts && $rts < $te) || $rte >= $ts && $rte < $te) {
                        $conflict_sched = ["reserv_id" => $data_reserv_detail->reserv_id,
                            "time_start" => $time_start, "time_end" => $time_end,
                            "reserv_time_start" => $reserv_time_start, 
                            "reserv_time_end" => $reserv_time_end, 
                            "reserv_date" => $reservation_detail->reserv_date];
                        break;
                    }
                }
            }
            if ($conflict_sched) {
                $text = "<b>Conflict of schedule with reservation #" . $conflict_sched["reserv_id"] . '</b><br>';
                $text.= "<u>Reserve Date:</u> " . $conflict_sched["reserv_date"] . '<br>';
                $text.= "<u>Time start:</u> " . $conflict_sched["time_start"] . '<br>';
                $text.= "<u>Time end:</u> " . $conflict_sched["time_end"] . '<br>';
                $text.= "<br>";
                $text.= "<b>The reservation details of #" . $request->reserv_id . '</b><br>';
                $text.= "<u>Reserve Date:</u> " . $conflict_sched["reserv_date"] . '<br>';
                $text.= "<u>Time start:</u> " . $conflict_sched["reserv_time_start"] . '<br>';
                $text.= "<u>Time end:</u> " . $conflict_sched["reserv_time_end"] . '<br>';
                alert()->warning($text, 'Conflict!')->html()->persistent('Close');
                return redirect()->back();
            }
        }
        
        /**
         * add the worker
         */
        if(ReservationWorker::create($request->only(['reserv_id', 'worker_id']))){
            alert()->success('Successfully tag the worker.', 'Success')->persistent('Close');
        } else {
            alert()->error('Something went wrong... Please try agian.', 'Error')->persistent('Close');
        }
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
