@extends('layouts.app')

@section('content')
	<h1>Converdacion con {{ $conversation->users->except($user->id)->implode('name', ', ') }}</h1>
	<div class="card">
		@foreach ($conversation->privateMessages as $message)
			<div class="card-header">
				{{ $message->user->name }} dijo... 
			</div>
			<div class="card-block">
				{{ $message->message }}
				<p class="text-muted">{{ $message->created_at }}</p>
			</div>
		@endforeach
	</div>
@endsection