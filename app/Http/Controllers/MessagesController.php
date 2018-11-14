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
		
		$user = $request->user();
		$image = $request->file('image');
		
		$message = Message::create([
			'user_id' => $user->id,
			'content' => $request->input('message'),
			'image' => $image->store('messages', 'public'), // regresa un link a la imagen que guardo
		]);

		// dd($message);
		
		return redirect('/message/'.$message->id);


	}

	public function search(Request $request) {
		$query = $request->input('query');

		$messages = Message::where('content', 'LIKE',"%$query%")->get();

		return view('messages.index', [
			'messages' => $messages,
		]);

	}
}
