<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /**
     * The table to fetch
     * @var type 
     */
    protected $table = 'order_details';
    
     /**
     * Unique ID
     * @var type 
     */
    protected $primaryKey = 'order_id';

    /**
     * Variable mass assignement
     * @var type 
     */
    protected $fillable = ['order_id', 'reserv_id', 'food_id'];

    public function food_detail(){
        return $this->belongsTo('App\Model\FoodDetail', 'food_id', 'food_id');
    }
    
    public function reservation_detail(){
        return $this->belongsTo('App\Model\ReservationDetail', 'reserv_id', 'reserv_id');
    }

    /**
     *
     * @var type Remove automatic generation of timestamp
     */
    public $timestamps = false;
}