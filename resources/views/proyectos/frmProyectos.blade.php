@extends('layouts.main_layout')

    @section('content')

            <!-- Page Title -->
            <div class="page-title light-background">
                <div class="container">
                <h1>Proyectos</h1>
                <nav class="breadcrumbs">
                    <ol>
                    <li><a href="{{ route ('main.index') }}">Inicio</a></li>
                    <li class="current">Proyectos</li>
                    </ol>
                </nav>
                </div>
            </div><!-- End Page Title -->

    @endsection
