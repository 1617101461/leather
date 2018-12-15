<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangs;
use App\kategoris;
use App\checkouts;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Alert;

class FrontEndController extends Controller
{ 

    public function barangs ()
    {
        $barangs = barangs::all();
        $kategoris = kategoris::all();
        return view('frontend.index', compact('barangs','kategoris'));
    }

    public function contact ()
    {
        return view('frontend.contact');
    }

    public function cart ()
    {
        return view('frontend.cart');
    }

    public function check ()
    {
        return view('frontend.checkout');
    }

    public function categ ()
    {
        $barangs = barangs::all();
        $kategoris = kategoris::all();
        return view('frontend.category',compact('barangs','kategoris'));
    }

    public function log ()
    {
        return view('frontend.login');
    }

    public function reg ()
    {
        return view('frontend.registration');
    }

    public function confir ()
    {
        return view('frontend.confirmation');
    }

    public function all ()
    {
        $barangs = barangs::orderBy('created_at','DESC')->paginate(6);
        return view('frontend.shop', compact('barangs'));
    }
    
     public function show(barangs $barangs)
    {
    
    return view('frontend.show',compact('barangs'));
    }

    
    public function filter_barangs($id)
    {
        $barangs = barangs::where('id_kategoris','=',$id)->get();
        $kategoris = $kategoris = kategoris::all();
        // dd($kategoris);
        return view('frontend.category', compact('barangs','kategoris'));
    }

    public function storeCheck(Request $request)
    {
        Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);

        $this->validate($request,[
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'alamat_satu' => 'required|min:2',
            'alamat_dua' => 'required',
            'negara' => 'required',
            'kota' => 'required',
            'daerah' => 'required',
            'kode_pos' => 'required',

           
        ]);

        $checkouts = new checkouts;   
            $checkouts->nama_depan = $request->nama_depan;
            $checkouts->nama_belakang = $request->nama_belakang;   
            $checkouts->telephone = $request->telephone;
            $checkouts->email = $request->email;
            $checkouts->alamat_satu = $request->alamat_satu;
            $checkouts->alamat_dua = $request->alamat_dua;   
            $checkouts->negara = $request->negara;
            $checkouts->kota = $request->kota;
            $checkouts->daerah = $request->daerah;
            $checkouts->kode_pos = $request->kode_pos;
            $checkouts->save();
        return redirect()->route('confirmation.index');
    }

}
