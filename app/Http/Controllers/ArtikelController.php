<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel.index',[
            'artikel'=> ArtikelModel::all()
        ]);
    }

    public function create()
    {
        return view('artikel.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tag' => 'required'
        ]);
        $slug = str_replace(' ','-',strtolower($request->judul));
        //user id untuk test sementara
        $userId = 1;    
        ArtikelModel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug'=> $slug,
            'tag' => $request->tag,
            'users_id' => $userId
        ]);
        return redirect('/artikel')->with('status','artikel berhasil diposting');
    }

    public function show($id)
    {
        return view('artikel.show',[
            'artikel' => ArtikelModel::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('artikel.edit',[
            'artikel'=> ArtikelModel::find($id)
            ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tag' => 'required'
        ]);
        $slug = str_replace(' ','-',strtolower($request->judul));
        ArtikelModel::where('id',$id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug'=> $slug,
            'tag' => $request->tag,
        ]);
        return redirect('/artikel')->with('status','berhasil terupdate');
    }

    public function destroy($id)
    {
        ArtikelModel::destroy($id);
        return redirect('/artikel')->with('status','berhasil dihapus');
    }
}
