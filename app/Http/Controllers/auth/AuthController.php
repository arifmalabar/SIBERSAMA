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
            return redirect('/login')->with('errmsg', 'username dan password tidak tepat');
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
