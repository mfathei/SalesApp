<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// for DataTables grid
require_once ( __DIR__ . '/../ssp.class.php' );
use SSP;

class CustomerController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $customers = DB::table('customers')->get();

        return view('customers.index', array('customers' => []));
    }

	public function grid()
    {
    	global $app;
        // grid api to populate server-side processing
        $table = 'vwCustomers';
        $primaryKey = 'id';

		$columns = array(
			array( 'db' => 'id', 			'dt' => 0 ),
		    array( 'db' => 'name', 			'dt' => 1 ),
		    array( 'db' => 'address',  		'dt' => 2 ),
		    array( 'db' => 'email',   		'dt' => 3 ),
		    array( 'db' => 'phone',     	'dt' => 4 ),
		    array( 'db' => 'fax',     		'dt' => 5 ),
		    array( 'db' => 'first_balance', 'dt' => 6 ),
		    array( 'db' => 'balance',     	'dt' => 7 ),
		    array( 'db' => 'limit',     	'dt' => 8 ),
		    array( 'db' => 'notes',     	'dt' => 9 ),
		    array( 'db' => 'active',     	'dt' => 10 ),
		    array(
		        'db'        => 'created_at',
		        'dt'        => 11,
		        'formatter' => function( $d, $row ) {
		            // return date( 'jS M y', strtotime($d));
		            return date( 'd-m-Y', strtotime($d));
		        }
		    ),
		    array( 'db' => 'updated_at',     'dt' => 12 ),
		    array( 'db' => 'active',     'dt' => 13 ),
		    // array(
		    //     'db'        => 'updated_at',
		    //     'dt'        => 5,
		    //     'formatter' => function( $d, $row ) {
		    //         return '$'.number_format($d);
		    //     }
		    // )
		);

        $sql_details = array(
		    'user' => env('DB_USERNAME'),
		    'pass' => env('DB_PASSWORD'),
		    'db'   => env('DB_DATABASE'),
		    'host' => env('DB_HOST')
		);
 
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */

		// done up in this file
		// require ( __DIR__ . '/../ssp.class.php' );
		
		echo json_encode(
		    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd(Customer::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('customers.edit', array('customer' => $customer));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        dd(request('active'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('customers')->where('id', $id)->delete();

        return redirect('/customers');
    }
}
