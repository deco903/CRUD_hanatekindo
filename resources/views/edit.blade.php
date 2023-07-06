@extends('app')
@section('title','edit Page')
@section('isi')

<p>Halaman Edit data</p>
@foreach($crud as $d)
 <form action="/update" method="post">
 <input type="hidden" name="id" value="{{ $d->id }}"> <br/>
 
 @csrf
 
  <label for="fname">Nama :</label><br>
  <input type="text" id="fname" name="nama" value="{{$d->nama}}" required><br>
  <label for="lname">Alamat :</label><br>
  <textarea name="alamat" placeholder="masukan alamat">{{$d->alamat}}</textarea><br>
  <label for="fname">No Telephone :</label><br>
  <input type="numeric" id="fname" name="no_hp" value="{{$d->no_hp}}" required><br>
  <label for="fname">Jabatan :</label><br>
  <input type="text" id="fname" name="jabatan" value="{{$d->jabatan}}" required><br><br>
  <input type="submit" value="Submit">
</form> 
@endforeach
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
@endsection


