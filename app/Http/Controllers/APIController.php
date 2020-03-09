<?php

namespace App\Http\Controllers;

use DB;
use App\Customer;
use App\Opportunity;
use App\Owner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APIController extends Controller
{

	/*
	** Get customer list
	*/

	public function customer_list (Request $request) {

		$customers = Customer::all(); 

    	return response()->json(array(
    		'success' => true,
    		'payload' => $customers
    	));

    }

    /*
	** Add new customer
	*/

    public function customer_create (Request $request) {

    	$customer = new Customer;
    	$customer->name = $request->input('name');
    	$customer->email = $request->input('email');
    	$customer->phone_number = $request->input('phone_number');
    	$customer->is_disabled = $request->input('is_disabled');
    	$customer->created_at = Carbon::now();
    	$customer->updated_at = Carbon::now();
    	$customer->save();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $customer
    	));

    }

    /*
	** Update customer based on ID
	*/

    public function customer_update (Request $request, $customer_id) {

    	$customer = Customer::find(intval($customer_id));

    	if (is_null($customer)) {
    		return response()->json(array(
	    		'success' => false,
	    		'error' => 'Customer not found'
	    	), 500);
    	}

    	$customer->name = $request->input('name');
    	$customer->email = $request->input('email');
    	$customer->phone_number = $request->input('phone_number');
    	$customer->is_disabled = $request->input('is_disabled');
    	$customer->updated_at = Carbon::now();
    	$customer->save();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $customer
    	));

    }

    /*
	** Get opportunity list
	*/

	public function opportunity_list (Request $request) {

		$opportunities = Opportunity::all();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $opportunities
    	));
    }

    /*
	** Add a new opportunity
	*/

    public function opportunity_create (Request $request) {

    	$opportunity = new Opportunity;
    	$opportunity->name = $request->input('name');
    	$opportunity->created_at = Carbon::now();
    	$opportunity->updated_at = Carbon::now();
    	$opportunity->save();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $opportunity
    	));
    }

    /*
	** Update opportunity based on ID
	*/

    public function opportunity_update (Request $request, $opportunity_id) {

    	$opportunity = Opportunity::find(intval($opportunity_id));

    	if (is_null($opportunity)) {
    		return response()->json(array(
	    		'success' => false,
	    		'error' => 'Opportunity not found'
	    	), 500);
    	}

    	$opportunity->name = $request->input('name');
    	$opportunity->updated_at = Carbon::now();
    	$opportunity->save();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $opportunity
    	));
		}
		
		   /*
	** Get opportunity list
	*/

	public function owner_list (Request $request) {

		$opportunities = Owner::all();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $opportunities
    	));
    }

    /*
	** Add a new owner
	*/

    public function owner_create (Request $request) {

    	$owner = new Owner;
    	$owner->name = $request->input('name');
    	$owner->created_at = Carbon::now();
    	$owner->updated_at = Carbon::now();
    	$owner->save();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $owner
    	));
    }

    /*
	** Update owner based on ID
	*/

    public function owner_update (Request $request, $owner_id) {

    	$owner = Owner::find(intval($owner_id));

    	if (is_null($owner)) {
    		return response()->json(array(
	    		'success' => false,
	    		'error' => 'Owner not found'
	    	), 500);
    	}

    	$owner->name = $request->input('name');
    	$owner->updated_at = Carbon::now();
    	$owner->save();

    	return response()->json(array(
    		'success' => true,
    		'payload' => $owner
    	));
    }


}
