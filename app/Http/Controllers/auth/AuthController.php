<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\auth\AdminAuth;
use Illuminate\Http\Request;
use App\Models\auth\GuruAuth;
use App\Models\Auth\SiswaAuth;

class AuthController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function on_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $data = AdminAuth::all()->where('username', $request->email)->where('password', md5($request->password));
        $data_guru = GuruAuth::all()->where('username', $request->email)->where('password', md5($request->password));
        $data_siswa = SiswaAuth::all()->where('username', $request->email)->where('password', md5($request->password));
        if($data->count())
        {
            foreach ($data as $key) {
                $request->session()->put('nama', $key->nama);
                $request->session()->put('NIP', $key->NIP);
                $request->session()->put('level', "operator");
            }
            return redirect('/admin');
        } elseif ($data_guru->count()) {
            foreach ($data_guru as $key) {
                $request->session()->put('nama', $key->nama);
                $request->session()->put('NIP', $key->NIP);
                if($key->role == 0){
                    $request->session()->put('level', 'kepsek');
                    return redirect('/kepala_sekolah');
                } elseif($key->role == 1) {
                    $request->session()->put('level', 'guru');
                    return redirect('/guru');
                }
            }
        } elseif($data_siswa->count()) {
            foreach ($data_siswa as $key) {
                $request->session()->put('nama', $key->nama_siswa);
                $request->session()->put('NIP', $key->NISN);
                $request->session()->put('status', 1);
            }
            $request->session()->put('level', 'siswa');
            return redirect('/siswa');
        } else{
            return redirect('/login');
        }
    }
    public function on_logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/login");
    }
}
