<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;
use App\kategoris;
use App\checkouts;
use File;
use Alert;
class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts =checkouts::all();
        return view('checkout.index',compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checkouts = checkouts::all();
        return view('checkout.create',compact('checkouts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved','Good Job!')->autoclose(3000);

        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|min:2',
            'country' => 'required',
            'address' => 'required',
            'town' => 'required',
            'district' => 'required',
            'post_code' => 'required',
            'notes' => 'required',

           
        ]);

        $checkouts = new checkouts;   
            $checkouts->first_name = $request->first_name;
            $checkouts->last_name = $request->last_name;   
            $checkouts->company_name = $request->company_name;
            $checkouts->phone_number = $request->phone_number;
            $checkouts->email_address = $request->email_address;
            $checkouts->country = $request->country;   
            $checkouts->address = $request->address;
            $checkouts->town = $request->town;
            $checkouts->district = $request->district;
            $checkouts->post_code = $request->post_code;
            $checkouts->notes = $request->notes;
            $checkouts->save();
        return redirect()->route('checkout.index');
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
        $checkouts = checkouts::findOrFail($id);
        return view('checkout.edit',compact('checkouts'));
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
        Alert::success('Data Successfully Changed','Good Job!')->autoclose(3000);

        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|min:2',
            'country' => 'required',
            'address' => 'required',
            'town' => 'required',
            'district' => 'required',
            'post_code' => 'required',
            'notes' => 'required',

        ]);

        $checkouts = checkouts::findOrFail($id);
            $checkouts->first_name = $request->first_name;
            $checkouts->last_name = $request->last_name;   
            $checkouts->company_name = $request->company_name;
            $checkouts->phone_number = $request->phone_number;
            $checkouts->email_address = $request->email_address;
            $checkouts->country = $request->alamat_dua;   
            $checkouts->address = $request->address;
            $checkouts->town = $request->town;
            $checkouts->district = $request->district;
            $checkouts->post_code = $request->post_code;
            $checkouts->notes = $request->notes;
            $checkouts->save();
        return redirect()->route('checkout.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data Successfully Deleted','Good Job!')->autoclose(3000);
        
        $checkouts = checkouts::findOrFail($id);
        $checkouts->delete();
        return redirect()->route('checkout.index');
    }
}
