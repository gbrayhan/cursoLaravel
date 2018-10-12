<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
	public function home() {
		// $profesor=null;
		$profesor='Alejandro Guerrero';
		$messages= [
			[
				'id' => 1,
				'content' => 'Este es mi primer Mensaje',
				'image' => 'http://placeimg.com/600/338/any?1'
			],
			[
				'id' => 2,
				'content' => 'Este es mi segundo Mensaje',
				'image' => 'http://placeimg.com/600/338/any?2'
			],
			[
				'id' => 3,
				'content' => 'Este es mi tercer Mensaje',
				'image' => 'http://placeimg.com/600/338/any?3'
			],
			[
				'id' => 4,
				'content' => 'Este es mi cuarto Mensaje',
				'image' => 'http://placeimg.com/600/338/any?4'
			],
		];

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
