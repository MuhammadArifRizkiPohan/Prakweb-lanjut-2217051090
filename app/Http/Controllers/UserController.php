<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){ 
        return view('create_user'); 
    }

    public function profile($nama = "", $kelas = "", $npm ="")
    {
        $data = [ 
            'nama' => $nama, 
            'kelas' => $kelas, 
            'npm' => $npm 
        ]; 
        // Pastikan kamu sudah membuat file 'profile.blade.php' di folder 'resources/views'
        return view('profile', $data);
    }
    public function store(Request $request) 
    { 
        $data =  [
            'nama' => $request->input('nama'), 
            'kelas' => $request->input('kelas'), 
            'npm' => $request->input('npm'), 
        ];
        return view('profile', $data);
    } 
}
