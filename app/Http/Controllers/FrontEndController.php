<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barangs;
use App\kategoris;
use App\checkouts;
use App\User;
use App\carts;
use App\artikels;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Alert;

class FrontEndController extends Controller
{ 

    public function barangs ()
    {
        $barangs = barangs::orderBy('created_at','DESC')->paginate(10);
        $kategoris = kategoris::all();
        return view('frontend.index', compact('barangs','kategoris'));
    }

    public function contact ()
    {
        return view('frontend.contact');
    }

    public function cart ()
    {
        $carts = carts::all();
        return view('frontend.cart', compact('carts'));
    }

    public function artikels ()
    {
        $artikels = artikels::orderBy('created_at','DESC')->paginate(3);
        $users = User::all();
        return view('frontend.blog', compact('artikels','users'));
    }


    public function check ()
    {
        return view('frontend.checkout');
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

    public function shop ()
    {
        $barangs = barangs::orderBy('created_at','DESC')->paginate(9);
        $kategoris = kategoris::all();
        return view('frontend.shop',compact('barangs','kategoris'));
    }

    public function about ()
    {
        return view('frontend.about');
    }

    
     public function show(barangs $barangs)
    {
    
    return view('frontend.show',compact('barangs'));
    }

    public function showblog(artikels $artikels)
    {
    
    return view('frontend.showblog',compact('artikels'));
    }
    
    public function filter_barangs($id)
    {
        $barangs = barangs::where('id_kategoris','=',$id)->paginate(6);
        $kategoris = $kategoris = kategoris::all();
        return view('frontend.shop', compact('barangs','kategoris'));
    }

    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);

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
        return redirect()->route('/confirmation');
    }

}
