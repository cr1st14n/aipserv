<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('cerrarSession');
    }

    public function login(Request $request)
    {
        $usuario = User::where('usu_codigo', $request->input('usu_codigo'))->value('usu_codigo');
        if ($usuario == null) {
            return 'noUser';
        }
        $credenciales = request()->only('usu_codigo', 'password');
        if (Auth::attempt($credenciales)) {
            return 'accepted';
        }
        return 'noPass';

        
    }
    public function cerrarSession()
    {
        Auth::logout();
        return redirect('/');
    }
}
