<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
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
}


