<?php

namespace App\Http\Controllers\Proyectos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProyectosController extends Controller
{
    public function index()
    {
        return view('proyectos.frmProyectos');
    }
}
