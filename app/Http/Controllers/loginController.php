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

    public function FunctionName(Request $request)
    {
        $verusu = User::where('codUser', $request->input('codUser'))->first();
        if ($verusu == null) {
            return 'noUser';
        }
        $verusu = request()->only('coduser', 'password');
        if (Auth::attempt($verusu)) {
            return 'success';
        } else {
            return 'noPass';
        }
        return 'failServ';
    }
    public function cerrarSession()
    {
        Auth::logout();
        return redirect('/');
    }
}
