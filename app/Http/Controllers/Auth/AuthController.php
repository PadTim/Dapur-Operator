<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class AuthController extends Controller
{

    public function gerbang()
    {
        return view('auth.login', [
                    'title' => 'GERBANG MASUK',
                    'active' => 'Dapur Operator'
                ]);
    }



    public function login(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');
    
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    
        $credentials = [
            $field => $login,
            'password' => $password
        ];
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->is_online = true;
            $user->save();
    
            return redirect()->intended('/wilujeng-sumping');
        }
    
        return redirect()->back()->withInput($request->only('login'))->with('loginError', 'Login gagal, silakan cek email/username dan password Anda atau Lakukan Reset Password, Jika Belum Punya Akun Silahkan Registrasi Dulu');
    }
    
    public function logout()
    {
        $user = Auth::user();
        $user->is_online = false;
        $user->save();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
