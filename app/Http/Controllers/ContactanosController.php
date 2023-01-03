<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


class ContactanosController extends Controller
{

   /* public function __construct() {
        $this->middleware('can:contactanos.contact')->only('index');
        $this->middleware('can:contactanos.store')->only('store');
        
    }
    */

    public function index(){
        return view('contactanos.contact');

    }

    public function store(Request $request){


        
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'celphone' => 'required',
            'cedula' => 'required',
            'sugerencia' => 'required',
            'checkbox' => 'required'
        ];
        $messages = [
            'name.required' => 'El nombre es requerido.',
            'email.required' =>'El email es requerido',
            'celphone.digits' => 'No esta permitido colocar letras',
            'cedula.digits' => 'No esta permitido colocar letras',
            'sugerencia.required' => 'La sugerencia es requerida',
            'checkbox.required' => 'Acepta los términos para continuar'
        ];
        $this->validate($request, $rules, $messages);





        $correo = new ContactanosMailable($request->all());
        Mail::to('josealzate666777@gmail.com')->send($correo);
        return redirect()->route('contactanos.contact')->with('info', 'mensaje enviado');
    }


    
}
