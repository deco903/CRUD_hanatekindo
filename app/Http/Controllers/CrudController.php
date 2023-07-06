<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
   public function index()
   {
    $test = DB::table('crud')->get();
    return view('index', ['crud' => $test]);
   }

   public function tambah()
   {
    return view('tambah');
   }

   public function store(Request $request)
   {
    $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|numeric',
        'jabatan' => 'required'
    ]);

    DB::table('crud')->insert([
         'nama' => $request->nama,
         'alamat' => $request->alamat,
         'no_hp' => $request->no_hp,
         'jabatan' => $request->jabatan,
    ]);
    return redirect('/');
   }

   public function edit($id)
   {
       $test = DB::table('crud')->where('id',$id)->get();
       return view('edit',['crud' => $test]);
   }

   public function update(Request $request)
    {
        DB::table('crud')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('crud')->where('id',$id)->delete();
        return redirect('/');;
    }



}
