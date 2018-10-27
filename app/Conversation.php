<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model {
	// protected $guarded = [];

    public function users() {
    	return $this->belongsToMany(User::class);
    }

    public function privateMessages() {
    	return $this->hasMany(PrivateMessage::class);
    }
}
