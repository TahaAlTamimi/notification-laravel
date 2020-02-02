<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activecustomers=Customer::active()->get();
        $inactivecustomers=Customer::inactive()->get();
        $companies=Company::all();

       return view('customer',compact('activecustomers','inactivecustomers','companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();

        return view('create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        Customer::create($this->validatedData());

        return redirect('/addcustomer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
     
       return view('show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {  $customer=Customer::findOrFail($customer);
        $companies=Company::all();
       return view('edit',compact('companies','customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {  
       
    $customer->update( $this->validatedData() );
    return redirect('/customer/'.$customer->id);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
   
    protected function validatedData () 
    {
      
       return request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'status'=>'required|boolean',
        'company_id'=>'required|exists:App\Company,id',
    ]);
}
}
