<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\WorkerIdRequest;
use App\Model\Worker;

class WorkerController extends Controller
{
    
    /**
     * Display the specified resource
     * @param WorkerIdRequest $request
     * @return type
     */
    public function show(WorkerIdRequest $request){
        $worker = Worker::find($request->worker_id);
        $worker->worker_role;
        return response()->json($worker);
    }
}
