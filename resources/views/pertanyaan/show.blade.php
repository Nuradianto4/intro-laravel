@extends('adminlte.master')

@section('content')

<div class="ml-3 mr-3 mt-3">
	<div class="card card-primary">
        <div class="card-header">
           <h3 class="card-title">Detail Pertanyaan</h3>
        </div>
        <div class="card-body">
           	<label>Judul Pertanyaan</label>
           	<p>{{$detail->judul}}</p>
           	<label>Isi Pertanyaan</label>
           	<p>{{$detail->isi}}</p>
           	<label>Tanggal Dibuat</label>
           	<p>{{$detail->tanggal_dibuat}}</p>
           	<label>Tanggal Diperbarui</label>
           	<p>{{$detail->tanggal_diperbarui}}</p>
               <div class="card-footer">
               	<a href="/pertanyaan" class="btn btn-primary">Selesai</a>
               </div>
   		</div>
</div>
	
@endsection