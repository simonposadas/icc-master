<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Equipment;

class EquipmentController extends Controller
{
    /**
     * Show the specified resource
     * @param Request $request
     */
    public function show(Request $request){
        return response()->json(Equipment::find($request->equipment_id));
    }
}
