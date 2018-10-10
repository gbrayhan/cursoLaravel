<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
	public function home() {
		// $profesor=null;
		$profesor='Alejandro Guerrero';
	    $links = [
			'https://aceso.mx' => 'Web Aceso',
			'https://dev.aceso.mx' => 'Administracion Aceso',
			'https://mail.aceso.mx' => 'Correo Aceso'	
		];
		return view('welcome',[
			'links' => $links,
			'profesor' => $profesor
		]);
	}
	public function about() {
		return view('about');	
	}

}
