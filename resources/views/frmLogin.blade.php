@extends('layouts.main_layout')

    @section('content')

    <div class="container loginwrapper mb-5">
        <div class="card cajalogin text-center p-4">
            <div class="card-body">
                <img src="{{asset('assets\img\inclusiviapp\logo.jpg')}}" width="260" class="mb-5">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <div class="form-group mb-3 pb-2">
                        <input type="text" class="form-control" placeholder="Usuario" name="login" >
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Contraseña" id="txtPassword" name="password">
                            <div class="input-group-append">
                                <button id="show_password" class="mostrarpass" type="button"> <span class="la la-eye-slash iconopass"></span> </button>
                            </div>
                        </div>
                    </div>
                    <div class="olvida mb-5"><a href="#">Contraseña olvidada</a></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">Acceso</button>
                    </div>
                    <div id="error-message" class="text-danger text-center"></div>
                    @if (isset($error))
                        <br><p class="text-danger text-center"><strong> {{ $error }}</strong></p>
                    @endif
                </form>
            </div>
        </div>
    </div>


    @endsection
