<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\CreateMessageRequest;

class MessagesController extends Controller {
	//Usaremos una funcionalidad de Laravel llamada Route Model Binding
	public function show(Message $message){ //debe coincidir el nombre con el Route
		//Ir a Buscar el Messages por id y luego una vista
		
		// $message = Message::find($id);
		return view('messages.show',[
			'message' => $message 
		]);
	}

	public function create(CreateMessageRequest $request){
		// dd($request->all());
		// Metodo Validate de Laravel 
		// 
		// $this->validate($request ,[
		// 	'message' => ['required','max:50']
		// ],
		// [
		// 	'message.required' => 'Escribe tu Mensaje', 
		// 	'message.max' => 'El mensaje no puede superar los 50 caracteres'
		// ]);
		
		$message = Message::create([
			'content' => $request->input('message'),
			'image' => 'http://placeimg.com/600/338/any?'.mt_rand(0,100),
		]);

		// dd($message);
		
		return redirect('/message/'.$message->id);


	}
}
