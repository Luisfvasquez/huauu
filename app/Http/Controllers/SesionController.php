<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
    public function showLogin () {
        $message = '';
        return view('login',compact('message'));
    }

    public function login (Request $request){
       
        $request->validate([
            'cedula' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('cedula', $request->cedula)->first();       
        if($user){
            if(Auth::attempt(['cedula' => $request->cedula, 'password' => $request->password])){                
                return redirect()->route('principal');
            }
        }else{
            return redirect()->action([SesionController::class, 'showLogin'])->withErrors(['message' => 'Usuario no encontrado']);
        }
    }
    
    public function logout()
    {
            Auth::logout(); // Cerrar sesión
            session()->forget('user'); // Eliminar la sesión
        return redirect('/login')->with('success', 'Has cerrado sesión correctamente.'); // Redirigir a la página de inicio de sesión
    }
}
