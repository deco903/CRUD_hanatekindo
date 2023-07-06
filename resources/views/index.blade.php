@extends('app')
@section('title','index Page')
@section('isi')

<button type="button"><a href="/tambah">Tambah data CRUD baru</a></button>
<div class="container-fluid bg-3 text-center" style="margin-left:100px;margin-right:100px;">
  <div class="row">
   <table class="table" style="margin-top:10px;">
   <thead style="background-color:black;">
    <tr align="center">
      <th style="color:white;">no</th>
      <th style="color:white;">nama</th>
      <th style="color:white;">alamat</th>
      <th style="color:white;">no HP</th>
      <th style="color:white;">Jabatan</th>
      <th style="color:white;">Keterangan</th>
    </tr>
    <thead>
    @foreach($crud as $d)
    <tbody>
    <tr align="left">
      <td>{{ $loop->iteration }}</td>
      <td>{{ $d->nama }}</td>
      <td>{{ $d->alamat }}</td>
      <td >{{ $d->no_hp }}</td>
      <td >{{ $d->jabatan }}</td>
      <td>  
         <a href="/edit/{{$d->id}}">edit</a>
        ||
        <a href="/delete/{{$d->id}}">hapus</a>
      </td>
    </tr>
</tbody>
    @endforeach
   </table>
  </div>
</div>
  


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


