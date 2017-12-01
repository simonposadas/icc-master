<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */


Route::get('/', function () {
    return view('home');
});

/**
 * /reservation
 */

Route::post('/test/submit','ReservationController@packageClient');



$this->group(['prefix' => 'reservation'], function () {
    $this->Resource('New_reservations','recipe_Controller');
    $this->Resource('Adding_reservations','recipeAddingController');

    $this->get('/Add_recipe/{id}', ['uses' => 'Food_Creator_Controller@adding_Recipe', 'as' => 'Addto_Food']);
    
    $this->get('/Creation_New_Foods', ['uses' => 'Food_Creator_Controller@createFood', 'as' => 'Create_Food']);

    $this->Resource('New_food','foodRecipe_Controller');


    $this->Resource('New_recipe','recipe_Controller');
    $this->get('/', 'ReservationController@index')->name('r.index');
    $this->get('details', 'ReservationController@details')->name('r.details');
    $this->post('details', 'ReservationController@validateDetails');
    /**
     * /reservation/packages
     */
    $this->group(['prefix' => 'packages'], function () {
        $this->get('', 'ReservationController@packages')->name('r.packages');
        /**
         * /reservation/packages/id
         */
        $this->group(['prefix' => '{id}'], function () {
            $this->get('/', 'ReservationController@packageList')->name('r.packages.list');
            /**
             * /reservation/packages/{id}/info/{package_id}
             */
            $this->group(['prefix' => 'info/{package_id}'], function () {
                $this->get('/', 'ReservationController@packageInfo')->name('r.packages.info');
                $this->get('/client', 'ReservationController@packageClient')->name('r.packages.client');
                $this->post('/store', 'ReservationController@store')->name('r.packages.store');
            });
        });
    });
});

/**
 * /credential
 */
$this->group(['prefix' => 'credential'], function () {
    $this->get('/', 'CheckCredentialController@index')->name('credential');
    /**
     * /credential/{reserv_id}
     */
    $this->group(['prefix' => '{reserv_id}'], function () {
        $this->get('check-code', 'CheckCredentialController@checkCode')->name('credential.check-code');
        $this->put('confirm', 'CheckCredentialController@confirm')->name('credential.confirm');
        $this->put('cancel', 'CheckCredentialController@cancel')->name('credential.cancel');
    });
});

/**
 * admin
 */
$this->group(['prefix' => 'admin'], function () {
    $this->get('/', function () {
        return view('admin.login');
    });

    $this->post('/doLogin', 'LoginController@doLogin')->name('admin.login');
    $this->get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    $this->get('getReservation', 'AdminController@getReserve')->name('admin.get-reserve');

    /**
     * /admin/{reserv_id}
     */
    $this->group(['prefix' => '{reserv_id}'], function () {
        $this->put('approve', 'AdminController@approve')->name('admin.reserv.approve');
        $this->put('disapprove', 'AdminController@disapprove')->name('admin.reserv.disapprove');
    });

    /**
     * /admin/reservation
     */
    $this->group(['prefix' => 'reservation'], function () {
        $this->get('/', 'Admin\ReservationController@index')->name('admin.reserv');
        $this->post('/save', 'Admin\ReservationController@save')->name('admin.reserv.save');
        $this->get('/new/select', 'Admin\ReservationController@selectProduct')->name('admin.reserv.select_product');
        $this->get('/view/product/details', 'Admin\ReservationController@viewProductDetails')->name('admin.reserv.view.product.details');
        $this->get('/save_to_session', 'Admin\ReservationController@saveToSession')->name('admin.reserv.save_to_session');
        /**
         * /admin/reservation/{reserv_id}
         */
        $this->group(['prefix' => '{reserv_id}'], function () {
            $this->post('mark-half', 'Admin\ReservationController@markHalf')->name('admin.reserv.half');
            $this->put('mark-second-half', 'Admin\ReservationController@markSecondHalf')->name('admin.reserv.second.half');
            $this->put('cancel-with-refund', 'Admin\ReservationController@cancelWithRefund')->name('admin.reserv.cancel.with.refund');
            $this->put('cancel-no-refund', 'Admin\ReservationController@cancelNoRefund')->name('admin.reserv.cancel.no.refund');
            $this->put('mark-done', 'Admin\ReservationController@markDone')->name('admin.reserv.mark.done');
            /**
             * /admin/reservation/{reserv_id}/equipment
             */
            $this->resource('equipment', 'Admin\ReservationEquipmentController', [
                'parameters' => ['equipment' => 'id'],
                'names' => [
                    'index' => 'admin.reserv.equip',
                    'store' => 'admin.reserv.equip.store',
                    'destroy' => 'admin.reserv.equip.destroy',
                    'update' => 'admin.reserv.equip.update',
                    'show' => 'admin.reserv.equip.show'
                ],
                'except' => ['create', 'edit']
            ]);
            
            /**
             * admin/reservation/{reserv_id}/worker
             */
            $this->resource('worker', 'Admin\ReservationWorkerController', [
                'parameters' => ['worker' => 'worker_id'],
                'names' => [
                    'index' => 'admin.reserv.worker',
                    'store' => 'admin.reserv.worker.store',
                    'destroy' => 'admin.reserv.worker.destroy',
                    'show' => 'admin.reserv.worker.show'
                ],
                'except' => ['create', 'edit', 'update']
            ]);
            
        });
    });

    /**
     * /admin/equipment
     */
    $this->group(['prefix' => 'inventory'], function () {
        $this->get('{equipment_id}', 'Admin\InventoryController@show');
    });
    
    /**
     * /admin/worker
     */
    $this->group(['prefix' => 'worker'], function (){
       $this->get('{worker_id}', 'Admin\WorkerController@show'); 
    });

    /**
     * /admin/inventory
     */
    $this->resource('inventory', 'Admin\InventoryController', [
        'parameters' => [
            'inventory' => 'equipment_id'
        ],
        'names' => [
            'index' => 'admin.inventory',
            'store' => 'admin.inventory.store',
            'destroy' => 'admin.inventory.destroy',
            'update' => 'admin.inventory.update',
            'show' => 'admin.inventory.show'
        ],
        'except' => ['create', 'edit']
    ]);
});

Route::get('/Pack1', function() {
    return view('pack1');
});

Route::get('/Pack2', function() {
    return view('pack2');
});

Route::get('/Pack3', function() {
    return view('pack3');
});

Route::get('/Pack4', function() {
    return view('pack4');
});

Route::get('/Pack5', function() {
    return view('pack5');
});

Route::get('/Pack6', function() {
    return view('pack6');
});

Route::get('/Pack7', function() {
    return view('pack7');
});

Route::get('/About', function() {
    return view('about');
});

Route::get('/Contact', function() {
    return view('contact');
});

Route::get('/About', function() {
    return view('about');
});

Route::get('/Contact', function() {
    return view('contact');
});

Route::get('/Menu', function() {
    return view('menu');
});

Route::get('/Merienda', function() {
    return view('merienda');
});

Route::get('/Lunch&Dinner', function() {
    return view('lunch&dinner');
});

Route::get('/Main', function() {
    return view('main');
});

Route::get('/Details', function() {
    return view('details');
}); 
Route::get('/Credentials', function() {
    return view('credentials');
});


Route::get('/scopeSearch2', 'Admin\InventoryController@scopeSearch2');
Route::get('/scopeSearch3', 'AdminController@scopeSearch3');

Route::get('/admin/customer', 'AdminController@customer');
Route::get('/getcustomer', 'AdminController@getcustomer');

Route::get('/getType', 'WebController@gettype');

Route::get('/Calendar', 'ReservationController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

route::post('/checkCode', 'WebController@checkCode');

route::post('/confirm', 'WebController@ConfirmCode');



Route::get('/admin/food', 'AdminController@food');

Route::get('/getfood', 'AdminController@getfood');


Route::post('/addfood', 'AdminController@addfood');
Route::post('/editfood', 'AdminController@editfood');
Route::post('/deletefood', 'AdminController@deletefood');

Route::get('/admin/foodtype', 'AdminController@foodtype');

Route::get('/getfoodtype', 'AdminController@getfoodtype');


Route::post('/addfoodtype', 'AdminController@addfoodtype');
Route::post('/editfoodtype', 'AdminController@editfoodtype');
Route::post('/deletefoodtype', 'AdminController@deletefoodtype');

Route::get('/admin/workerrole', 'AdminController@workerrole');

Route::get('/getworkerrole', 'AdminController@getworkerrole');


Route::post('/addworkerrole', 'AdminController@addworkerrole');
Route::post('/editworkerrole', 'AdminController@editworkerrole');
Route::post('/deleteworkerrole', 'AdminController@deleteworkerrole');

Route::get('/admin/worker', 'AdminController@worker');

Route::get('/getworker', 'AdminController@getworker');


Route::post('/addworker', 'AdminController@addworker');
Route::post('/editworker', 'AdminController@editworker');
Route::post('/deleteworker', 'AdminController@deleteworker');

Route::get('/admin/equipment', 'AdminController@equipment');

Route::get('/getequipment', 'AdminController@getequipment');

Route::get('/searchName', 'AdminController@scopeSearch');


Route::post('/addequipment', 'AdminController@addequipment');
Route::post('/editequipment', 'AdminController@editequipment');
Route::post('/deleteequipment', 'AdminController@deleteequipment');

Route::post('/getPackageFoods', ['uses' => 'ReservationController@getPackageValue', 'as' => 'packagevalue']);

Route::post('/getReservationDetails', ['uses' => 'ReservationController@getReservationDetails', 'as' => 'getReserve']);