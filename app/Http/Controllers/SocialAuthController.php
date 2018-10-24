<?php

namespace App\Http\Controllers;

use App\User;
use App\SocialProfile;

use Illuminate\Http\Request;
use Socialite;

class SocialAuthController extends Controller {

	public function facebook(){

		return Socialite::driver('facebook')->redirect();

	}
	public function callback(){
		$user = Socialite::driver('facebook')->user();
		// var_dump($user);
		// Guardar datos para borra esos mismos datos en el proximo pedido
		session()->flash('facebookUser', $user);

		return view('users.facebook', [
			'user' => $user,
		]);
		
	}
	public function register(Request $request){
		
		$data = session('facebookUser');
		$username = $request->input('username');

		$user = User::create([
			'name' => $data->name,
			'email' => $data->email,
			'avatar' => $data->avatar,
			'username' => $username,
			'password' => str_random(16)
		]);

		$profile = SocialProfile::create([
			'social_id' => $data->id,
			'user_id' => $user->id,
		]);

		auth()->login($user);
		return redirect('/');

	}
    //
}
