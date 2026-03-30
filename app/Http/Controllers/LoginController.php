<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    protected function redirectPath()
    {
        $usuario = Auth::user();

        switch ($usuario->idrol) {
            case 1:
                return '/categoria';

            default:
                return '/login';
        }
    }

    public function iniciar_sesion(Request $r)
    {
        $credentials = $r->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect()->route('login')->withErrors([
            'error' => 'Credenciales incorrectas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('login');
    }
}
