<?php

namespace App\Http\Controllers;

use App\User;
use App\Conversation;
use App\PrivateMessage;

use Illuminate\Http\Request;

class UsersController extends Controller {
	private function findByUsername($username){
		return User::where('username',$username)->first();	
    }

    public function show($username){
    	$user = $this->findByUsername($username);

    	return view('users.show',[
    		'user' => $user
    	]);

    }
    public function follows($username){
    	$user = $this->findByUsername($username);
    	return view('users.follows',[
    		'user' => $user,
            'follows' => $user->follows
    	]);

    }
    public function followers($username){
        $user = $this->findByUsername($username);
        return view('users.follows',[
            'user' => $user,
            'followers' => $user->followers,
        ]);

    }

    public function follow($username, Request $request){
    	$user = $this->findByUsername($username);

    	$me = $request->user();
    	$me->follows()->attach($user);

    	return redirect("/$username")->withSuccess('Usuario seguido');

    }

    public function unfollow($username, Request $request) {
        $user = $this->findByUsername($username);

        $me = $request->user();
        $me->follows()->detach($user);

        return redirect("/$username")->withSuccess('Usuario no seguido');

    }
    public function sendPrivateMessage($username, Request $request) {
        $user = $this->findByUsername($username);

        $me = $request->user(); // Lo obtenemos del Request 
        $message = $request->input('message');


        $conversation = Conversation::create();

        $conversation->users()->attach($me);
        $conversation->users()->attach($user);


        $privateMessage = PrivateMessage::create([
            'conversation_id' => $conversation->id,
            'user_id' => $me->id,
            'message' => $message

        ]);
       

        return redirect('/conversations/'.$conversation->id);
    }

    public function showConversation(Conversation $conversation) { //laravel recibiendo el ID lo convierte a objeto
        $conversation->load('users','privateMessages');
        // dd($conversation);
        return view('users.conversation',[
            'conversation' => $conversation,
            'user' => auth()->user(),
        ]);


    }


}
