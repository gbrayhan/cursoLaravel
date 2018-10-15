<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller {
	//Usaremos una funcionalidad de Laravel llamada Route Model Binding
	public function show(Message $message){ //debe coincidir el nombre con el Route
		//Ir a Buscar el Messages por id y luego una vista
		
		// $message = Message::find($id);
		return view('messages.show',[
			'message' => $message 
		]);
	}

	public function create(Request $request){
		// dd($request->all());
		// Metodo Validate de Laravel 
		$this->validate($request ,[
			'message' => ['required','max:50']
		],
		[
			'message.required' => 'Escribe tu Mensaje', 
			'message.max' => 'El mensaje no puede superar los 50 caracteres'
		]);
		return "Llego";


	}
}
