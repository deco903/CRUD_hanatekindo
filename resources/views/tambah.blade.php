@extends('app')
@section('title','Materi1 Page')
@section('isi')
<div class="jumbotron" style="margin-top:5px;">
 <p>Halaman Tambah data</p>
 <form action="/store" method="post">
  @csrf
  <label for="fname">Nama :</label><br>
  <input type="text" id="fname" name="nama" placeholder="masukan nama" required><br>
  <label for="lname">Alamat :</label><br>
  <textarea name="alamat" placeholder="masukan alamat"></textarea><br>
  <label for="fname">No Telephone :</label><br>
  <input type="numeric" id="fname" name="no_hp" placeholder="masukan nomor telephone" required><br>
  <label for="fname">Jabatan :</label><br>
  <input type="text" id="fname" name="jabatan" placeholder="masukan jabatan" required><br><br>
  <input type="submit" value="Submit">
</form> 
</div>


@endsection


