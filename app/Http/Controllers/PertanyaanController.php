<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index()
    {
    	$posting = DB::table('pertanyaan')->get();
    	return view('pertanyaan.index', compact('posting'));
    }
    public function create()
    {
    	return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'judul_pertanyaan'=> 'required',
    		'isi_pertanyaan' => 'required',
    	]);

    	$query= DB::table('pertanyaan')->insert([
    		"judul" => $request["judul_pertanyaan"],
    		"isi" => $request["isi_pertanyaan"]
    	]);
    	return redirect('/pertanyaan')->with ('berhasil','Pertanyaan Berhasil ditambahkan') ;
    }

    public function show($pertanyaan_id)
    {
    	$detail=DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
    	return view('pertanyaan.show',compact('detail'));
    }

    public function edit($pertanyaan_id)
    {
    	$edit=DB::table('pertanyaan')->where('id',$pertanyaan_id)->first();
    	return view('pertanyaan.edit',compact('edit'));
    }

   public function update($pertanyaan_id, Request $request)
   {
   		$request->validate([
    		'judul_pertanyaan'=> 'required',
    		'isi_pertanyaan' => 'required',
    	]);

   		$query=DB::table('pertanyaan')->where('id',$pertanyaan_id)
   		->update([
   			"judul" => $request["judul_pertanyaan"],
    		"isi" => $request["isi_pertanyaan"]
   		]);
   		return redirect('/pertanyaan')->with ('berhasil','Pertanyaan Berhasil diubah') ;
   }

   public function destroy($pertanyaan_id)
   {
   		$query=DB::table('pertanyaan')->where('id',$pertanyaan_id)->delete();
   		return redirect('/pertanyaan')->with ('berhasil','Pertanyaan Berhasil dihapus') ;
   }
}
