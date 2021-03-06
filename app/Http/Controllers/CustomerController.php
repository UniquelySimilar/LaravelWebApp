<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Localclasses\Util;

class CustomerController extends Controller
{
    protected $util;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(Util $util)
    {
        $this->middleware('auth');
        $this->util = $util;
    }

    public function validationRules() {
        return [
            'name' => 'required|max:100',
            'street' => 'required|max:100',
            'city' => 'required|max:100',
            'state' => 'required|max:50',
            'zipcode' => 'required|digits:5',
            'home_phone' => 'required|min:10|max:15',
            'work_phone' => 'nullable|min:10|max:15',
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
        //\Log::info("Called CustomerController->index");

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
        if ($request->has('home_phone')) {
            $request['home_phone'] = $this->util->removeNonNumericChars($request['home_phone']);
        }

        if ($request->has('work_phone')) {
            $request['work_phone'] = $this->util->removeNonNumericChars($request['work_phone']);
        }

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
    public function edit(Customer $customer)
    {
        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        if ($request->has('home_phone')) {
            $request['home_phone'] = $this->util->removeNonNumericChars($request['home_phone']);
        }

        if ($request->has('work_phone')) {
            $request['work_phone'] = $this->util->removeNonNumericChars($request['work_phone']);
        }

        $this->validate($request, $this->validationRules());

        $customer->update($request->all());

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index');
    }
}
