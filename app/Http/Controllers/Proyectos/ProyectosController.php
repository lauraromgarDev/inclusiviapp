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



    public function ver($proyecto)
    {
        //hacemos un case para redirigir la vista dependiendo del proyecto
        switch ($proyecto) {
            case 'musicoterapia':
                $proyecto = 'proyectos.frmMusicoterapia';
                break;
            case 'escuelateatro':
                $proyecto = 'proyectos.frmEscuelateatro';
                break;
            case 'escuelalenguajedesignos':
                $proyecto = 'proyectos.escuelalenguajedesignos';
                break;
            case 'escuelaaccesibiliad':
                $proyecto = 'proyectos.escuelaaccesibilidad';
                break;
            case 'ocioinclusivo':
                $proyecto = 'proyectos.ocioinclusivo';
                break;
            default:
                $proyecto = 'proyectos.frmProyectos';
        }

        return view($proyecto);
    }
}
