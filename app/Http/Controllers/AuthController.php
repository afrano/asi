<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengunjung;

class AuthController extends Controller {

    public function login() { 
        return view('auth.login');
    }

    public function postlogin(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
      
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function pengunjungWebsite($jenis_akses) {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = Date('d/m/Y H:i');
        $pengunjung = new Pengunjung();
        $ip = request()->ip();
        $ip_time = $ip . "." . $tanggal;
        $cekPengunjung = Pengunjung::where('ip_time', $ip_time)->first();
        if ($cekPengunjung == NULL) {
            $pengunjung->ip = $ip;
            $pengunjung->ip_time = $ip_time;
            $pengunjung->jenis_akses = $jenis_akses;
            $pengunjung->os = $_SERVER['HTTP_USER_AGENT'];
            $pengunjung->browser = php_uname();
            $pengunjung->save();
        } else {
            return 1;
        }
    }

}
