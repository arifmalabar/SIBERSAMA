<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\auth\AdminAuth;
use Illuminate\Http\Request;

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
        switch ($data->count()) {
            case 1:
                foreach ($data as $key) {
                    $request->session()->put('nama', $key->nama);
                    $request->session()->put('NIP', $key->NIP);
                }
                return redirect('/admin');
                break;
            default:
                $request->session()->flash('pesan', 'gagal login password username anda salah');
                return redirect('/login');
                break;
        }
    }
    public function on_logout()
    {
        Request::session()->flush();
        return redirect("/login");
    }
}
