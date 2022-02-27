<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'alamat' => 'required',
           'sekolah' => 'required',
           'rapot' => 'required|numeric|min:2.50|max:99.99',
           'gambar' => 'required|image|mimes:png,jpeg,jpg|max:2000'
        ]);

        $filename=time().".".$request->gambar->extension();
        $request->gambar->move(public_path('images'), $filename);
        $request->gambar = $filename;
        
        session()->flash('success','Alhamdulillah Input Data Berhasil!');
        return view('proses',['data' => $request]);
        
    }
    
}