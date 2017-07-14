<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function validationRules() {
        return [
            'name' => 'required|max:100',
            'street' => 'required|max:100',
            'city' => 'required|max:100',
            'state' => 'required|max:50',
            'zipcode' => 'required|digits:5',
            'home_phone' => 'required|max:15',
            'work_phone' => 'nullable|max:15',
            'email' => 'required|email|max:50'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info("Called CustomerController->index");

        $customers = Customer::all();

        return view("customer.index", ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info("Called CustomerController->create");

        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info("Called CustomerController->store");

        $this->validate($request, $this->validationRules());

        Customer::create($request->all());

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Log::info("Called CustomerController->edit for id = " . $id);

        $customer = Customer::find($id);

        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Log::info("Called CustomerController->update for id = " . $id);

        $this->validate($request, $this->validationRules());

        Customer::find($id)->update($request->all());

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::info("Called CustomerController->destroy for id = " . $id);

        Customer::destroy($id);

        return redirect()->route('customers.index');
    }
}
