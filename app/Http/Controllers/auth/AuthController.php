<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\auth\AdminAuth;
use Illuminate\Http\Request;
use App\Models\auth\GuruAuth;
use App\Models\admin\Siswa;

class AuthController extends Controller
{
    public function index()
    {
        return view("login");
    }
    /*public function on_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $data = AdminAuth::all()->where('username', $request->email)->where('password', md5($request->password));
        $data_guru = GuruAuth::all()->where('username', $request->email)->where('password', md5($request->password));
        $data_siswa = Siswa::all()->where('username', $request->email)->where('password', md5($request->password));
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
                $request->session()->put('nama_kelas', $key->kelas->nama_kelas);
                $request->session()->put('nama_jurusan', $key->kelas->jurusan->nama_jurusan);
                $request->session()->put('status', 1);
            }
            $request->session()->put('level', 'siswa');
            return redirect('/siswa');
        } else{
            $request->session()->flash('pesan', 'Username dan password yang anda masukan salah harap masukan kembali');
            return redirect('/login');
        }
    }*/
    public function on_login(AuthRequest $request)
    {
        $data = array(
            "username" => $request->email,
            "password" => $request->password
        );
        if(Auth::guard('operator')->attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        } elseif(Auth::guard('guru')->attempt($data)){
            $request->session()->regenerate();
            if(Auth::guard('guru')->user()->role == 1){
                return redirect()->intended('/guru');
            } elseif(Auth::guard('guru')->user()->role == 0){
                return redirect()->intended('/kepala_sekolah');
            }
        } elseif(Auth::guard('siswa')->attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/siswa');
        } else{
            return redirect('/login')->with('pesan', 'username dan password tidak tepat');
        }
    }
    public function on_logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");
    }
}
