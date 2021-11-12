<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function inicio (){
        return view('welcome');
    }

    public function planti () {
        return view('plantilla');
    }


    
    public function form (){
        return view('formulario');
    }

    public function calculaArea (Request $request){
        $base = $request->input('inbase');
        $altura = $request->input('inaltura');

        $area = floatval($base) * floatval($altura);
        return view('showarea',['area' => $area]);
    }


    public function log (){
        return view('login');
    }

    public function inicioSesion (Request $request){
        $correo = $request->input('correo');
        $contra = $request->input('contra');

        if ($correo==0) {
            return view('nocorreo');
        } else if ($contra==0) {
            return view('nocontra');
        } else {
            return view('insesion');
        }
    }
}