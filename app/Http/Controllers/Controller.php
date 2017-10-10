<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Create dropdown object
     * 
     * @param type $obj
     * @param type $key
     * @param type $name
     * @return type
     */
    public function create_dropdown($obj, $key, $name){
        $ret = [];
        foreach($obj as $data){
            $ret[$data->$key] = $data->$name;
        }
        return $ret;
    }
}
