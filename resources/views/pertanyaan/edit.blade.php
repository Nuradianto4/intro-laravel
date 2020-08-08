@extends('adminlte.master')

@section('content')
<div class="ml-2 mr-2">
	<div class="card card-primary">
        <div class="card-header">
           <h3 class="card-title">Edit Pertanyaan {{$edit->id}}</h3>
        </div>
        <form role="form" action="/pertanyaan/{{$edit->id}}" method="POST">
        	@csrf
          @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul_pertanyaan" value="{{ old('judul_pertanyaan',$edit->judul)}}"  name="judul_pertanyaan" placeholder="Masukkan Judul">
                    @error('judul_pertanyaan')
                    <div class="alert alert-danger">{{$message}} </div>
                    @enderror
                </div>
            	<div class="form-group">
                     <label>Isi Pertanyaan</label>
                     <textarea class="form-control" rows="3" id="isi_pertanyaan"  name="isi_pertanyaan" placeholder="Masukkan Pertanyaan">{{ old('isi_pertanyaan',$edit->isi)}}</textarea>
                     @error('isi_pertanyaan')
                    <div class="alert alert-danger">{{$message}} </div>
                    @enderror
                </div>
            </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>
    </div>
</div>

           
@endsection