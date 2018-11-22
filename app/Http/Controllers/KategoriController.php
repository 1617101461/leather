<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoris;
use App\barangs;
use Alert;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = kategoris::all();
        return view('kategori.index',compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);
            
            $this->validate($request,[
            'nama_kategori' => 'required',
            'slug' => '',
           
        ]);

        $kategoris = new kategoris;
        $kategoris->nama_kategori = $request->nama_kategori;
        $kategoris->slug =str_slug($request->nama_kategori,'-');
        $kategoris->save();
        return redirect()->route('kategori.index');
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
        $kategoris = kategoris::findOrFail($id);
        return view('kategori.edit',compact('kategoris'));
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
        Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);

         $this->validate($request,[
             'nama_kategori' => 'required',
             'slug' => '',

        ]);

        $kategoris = kategoris::findOrFail($id);
        $kategoris->nama_kategori = $request->nama_kategori;
        $kategoris->slug =str_slug($request->nama_kategori,'-');
        $kategoris->save();
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data Successfully Deleted','Good Job!')->autoclose(1700);

        $kategoris = kategoris::findOrFail($id);
        $kategoris->delete();
        return redirect()->route('kategori.index');
    }
}
