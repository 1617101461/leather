<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;
use App\barangs;
use App\carts;
use App\User;
use File;
use Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts =carts::all();
        return view('cart.index',compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carts = carts::all();
        $barangs = barangs::all();
        $users = User::all();
        return view('cart.create',compact( 'carts','barangs','users'));
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
            'subtotal' => '',
            'id_barangs' => 'required',
            'id_users' => 'required',
            'jumlah' => 'required',

           
        ]);

        $carts = new carts;
            $carts->subtotal = $request->subtotal;     
            $carts->id_users = $request->id_users;   
            $carts->id_barangs = $request->id_barangs;

            $barangs = barangs::findOrFail($carts->id_barangs);
            $carts->subtotal = $request->jumlah * $barangs->harga;
            $carts->save();
        return redirect()->route('cart.index');
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
        $carts = carts::findOrFail($id);
        $users = User::all();
        $barangs = barangs::all();
        $selecteduser = carts::findOrFail($carts->id)->id_users;
        $selectedbarang = carts::findOrFail($carts->id)->id_barangs;
        return view('cart.edit',compact('carts','barangs','selectedbarang','selecteduser'));
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
             'subtotal' => '',
             'id_users' => 'required',
             'id_barangs' => 'required',

        ]);

        $carts = carts::findOrFail($id);
            $carts->subtotal = $request->subtotal;
            $carts->subtotal = $request->subtotal;
            $carts->id_users = $request->id_users;

            $barangs = barangs::findOrFail($carts->id_barangs);
            $carts->subtotal = $request->jumlah * $barangs->harga;

            $barangs->save();
        return redirect()->route('cart.index');
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
        
        $carts = carts::findOrFail($id);
        $carts->delete();
        return redirect()->route('cart.index');
    }
}
