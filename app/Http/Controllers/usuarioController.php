<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('registerClie');
    }
    public function index(Request $request)
    {
        return view('user.home');
    }
    public function viewuser()
    {
        return view('user.homeUser');
    }
    public function makeUser(Request $request)
    {
        $new = new User();
        $new->usu_codigo = $request->input('usu_codigo');
        $new->password = bcrypt($request->input('password'));
        $new->usu_nombre = $request->input('usu_nombre');
        $new->usu_empresa = $request->input('usu_empresa');
        $new->usu_fechaInicio = Carbon::now();
        $new->usu_fechaFinal = $request->input('usu_fechaFinal');
        $new->usu_tipoCuenta = 'cliente';
        $res = $new->save();
        if ($res) {
            return ['est' => 'success', 'data' => $new];
        }
        return ['est' => 'fail'];
    }

    public function registerClie(Request $request)
    {
        $new = new User();
        $new->password = bcrypt($request->input('password'));
        $new->usu_nombre = $request->input('usu_nombre');
        $new->usu_empresa = $request->input('usu_empresa');
        $new->email = $request->input('usu_empresa');
        $new->usu_telf = $request->input('usu_empresa');
        $new->usu_fechaInicio = Carbon::now();
        $new->usu_tipoCuenta = 'cliente';
        $res = $new->save();
        if ($res) {
            return ['est' => 'success', 'data' => $new];
        }
        return ['est' => 'fail'];
    }
}
