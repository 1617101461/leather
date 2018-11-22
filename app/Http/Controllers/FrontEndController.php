<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikels;
use App\barangs;
use App\galeris;
use App\kategoris;
use App\kategoriartikels;
use App\testimonis;
class FrontEndController extends Controller
{ 

    public function index ()
    {
    	return view('frontends.index');
    }

    public function artikels ()
    {
    	$artikels = artikels::orderBy('created_at','DESC')->paginate(3);
    	return view('frontends.blog', compact('artikels'));
    }
    public function filter_artikels($id)
    {
        $kategoripartikel = artikels::where('kategoriartikel_id','=',$id)->get();
        return view('frontends.blog', compact('kategoripartikel'));
    }
    public function galeris ()
    {
    	$galeris = galeris::all();
    	return view('frontends.galeri', compact('galeris'));
    }
    public function testimonis ()
    {
    	$testimonis = testimonis::all();
    	return view('frontends.testimoni', compact('testimonis'));
    }
    public function kategoris ()
    {
    	$kategoris = kategoris::all();
    	return view('frontends.produk', compact('kategoris'));
    }
    public function kategoriartikels ()
    {
    	$kategoriartikels = kategoriartikels::all();
    	return view('frontends.blog', compact('kategoriartikels'));
    }

    public function barangs()
    {
        $kategorip = barangs::orderBy('created_at','DESC')->paginate(6);
        return view('frontends.produk',compact('kategorip'));
    }
    public function filter_barangs($id)
    {
        $kategorip = barangs::where('kategori_id','=',$id)->get();
        return view('frontends.produk', compact('kategorip'));
    }

    public function single(artikels $artikels)
    {
    
    return view('frontends.single',compact('artikels'));
    }
    
    public function singleproduk(barangs $barangs)
    {
    
    return view('frontends.singleproduk',compact('barangs'));
    }
}
