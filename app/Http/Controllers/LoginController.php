<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function index()
    {
         // Lang default session Español
        if (session('locale') == null) {
            session()->put('locale', 'es');
        }

        return view('frmLogin');
    }

    public function login(Request $request)
    {
        $nombre = $request->input('login');

        if(!empty($nombre)) {
            // Divide el nombre de usuario para verificar si es un intento de suplantación
            $usuPartes = explode('*', $nombre);
            $login = $usuPartes[0];

            //si solo hay un nombre
            if (count($usuPartes) == 1) {
                //autenticacion de usuario estandar
                $credentials = [
                    'login' => strtolower($request->login),
                    'password' => $request->password
                ];

                //obtener el usuario correspondiente a las credenciales
                $user = Usuario::where('login', strtolower($request->login))->first();

                if ($user) {
                    //si el usuario tiene la cuenta activa
                    if ($user->activo) {
                        if (Auth::attempt($credentials)) {
                            Log::info('Usuario autenticado: ' . $user->login . ' - ID de usuario: ' . $user->id);
                            $request->session()->regenerate();
//                            event(new UserLoggedIn());
                            // $this->asignarValores($user);
//                            dd(session()->all());
                            return redirect()->action([MainController::class, 'index']);
                        }
                    } else {
                        // Si la cuenta del usuario está inactiva
                        Log::warning('Intento de acceso a cuenta inactiva: ' . $user->login . ' - ID de usuario: ' . $user->id);
                        return view('frmLogin')->with('error', 'Tu cuenta está inactiva. Contacta al administrador para obtener asistencia.');
                    }
                } else {
                    // Credenciales incorrectas
                    Log::warning('Intento de acceso con credenciales incorrectas');
                    return view('frmLogin')->with('error', 'Credenciales incorrectas.');
                }
            } else {
                // Si el usuario suplanta a otro usuario
                $otroLogin = $usuPartes[1];

                $credentials = [
                    'login' => $login,
                    'password' => $request->password
                ];

                if (Auth::attempt($credentials)) {

                    $usu_sup = Usuario::where('login', $login)->first();

                    if (Gate::allows('suplantacion', $usu_sup)) {


                        session()->put('suplantado_por', $usu_sup->id);

                        $suplantado = Usuario::where('login', $otroLogin)->first();

                        Log::info('El usuario ' . $usu_sup->login . ' - Codigo de usuario: ' . $usu_sup->id . ' está suplantando a ' . $suplantado->login . ' - Codigo de usuario: ' . $suplantado->id);
                        $request->session()->regenerate();
                        // $this->asignarValores($suplantado);

                        //acabar esta parte con las politicas
                        Auth::login($suplantado);

                        return redirect()->action([MainController::class, 'index']);
                    } else {
//                        Log::info('El usuario ' . $usu_sup->login . ' - Codigo de usuario: ' . $usu_sup->id . ' ha intentado suplantar a  ' . $otroLogin->login . ' - Codigo de usuario: ' . $otroLogin->id);
                        Log::info('Intento de suplantación fallido por parte de ' . $usu_sup->login . ' - Codigo de usuario: ' . $usu_sup->id . ' para suplantar a  ' . $otroLogin);

                    }
                }
            }
        }
        return view('frmLogin')->with('error', 'Usuario o contraseña incorrectos');



    }


    /* El método `logout` en la clase `LoginController` es responsable de cerrar la
    sesión del usuario actualmente autenticado. Aquí hay un desglose de lo que hace: */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->action([LoginController::class, 'index']);
    }



}
