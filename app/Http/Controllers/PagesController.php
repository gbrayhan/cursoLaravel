<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller {
	public function home() {
		// $profesor=null;
		$profesor='Alejandro Guerrero';
		// $messages= [
		// 	[
		// 		'id' => 1,
		// 		'content' => 'Este es mi primer Mensaje',
		// 		'image' => 'http://placeimg.com/600/338/any?1'
		// 	],...
		// ];
		$messages = Message::all();
		// dd($messages); // Se observa que son objetos aunque tambien se pueden usar como array

	  $links = [
			'https://aceso.mx' => 'Web Aceso',
			'https://dev.aceso.mx' => 'Administracion Aceso',
			'https://mail.aceso.mx' => 'Correo Aceso'	
		];
		
		return view('welcome',[
			'links' => $links,
			'profesor' => $profesor,
			'messages' => $messages,
		]);
	}
	public function about() {
		return view('about');	
	}

}
