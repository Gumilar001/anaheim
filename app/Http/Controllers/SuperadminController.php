<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperadminController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function create(Request $req)
    {
        $users = User::create([
            'name' => $req->name,
            'username' => $req->username,
            'password' => bcrypt($req->password),
            'role' => $req->role_id
            
        ]);

        return redirect()->route('tambahAkun')->with('status', 'Tambah Data Berhasil');
    }
}

