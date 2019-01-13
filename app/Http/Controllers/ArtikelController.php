<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikels;
use File;
use Alert;
use App\User;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $artikels =artikels::all();
        return view('artikel.index',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikels = artikels::all();
        $users = User::all();
        return view('artikel.create',compact('artikels','users'));
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

        $this->validate($request, [
            'judul' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpg,png,svg,ico,jpng,jpeg',
            'deskripsi' => 'required|min:2',
            'id_users' => 'required',
            'slug' => '',
        ]);

        $artikels = new artikels;
        $artikels->judul = $request->judul;
        $artikels->slug =str_slug($request->judul,'-');
        $artikels->deskripsi = $request->deskripsi;
        $artikels->id_users = $request->id_users;   

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikels->gambar = $filename;
        } 
        $artikels->save();
        return redirect()->route('artikel.index');
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
        $artikels = artikels::findOrFail($id);
        $users = User::all();
        $selecteduser = carts::findOrFail($carts->id)->id_users;
        return view('artikel.edit',compact('artikels','users','selecteduser'));
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
             'judul' => 'required',
             'gambar' => 'required|image|mimes:jpg,png,svg,ico,jpng,jpeg',
             'deskripsi' => 'required',
             'id_users' => 'required',
             'slug' => '',
            
        ]);

        $artikels = artikels::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->slug =str_slug($request->judul,'-');
        $carts->id_users = $request->id_users;
        
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

        if ($artikels->gambar) {
        $old_gambar = $artikels->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/artikel'
        . DIRECTORY_SEPARATOR . $artikels->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikels->gambar = $filename;
        }
            $artikels->deskripsi = $request->deskripsi;
            $artikels->save();
        return redirect()->route('artikel.index');
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
        
        $artikels = artikels::findOrFail($id);
        $artikels->delete();
        return redirect()->route('artikel.index');
    }
}
