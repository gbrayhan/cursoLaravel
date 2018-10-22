@extends('layouts.app')

@section('content')
	<h1>{{ $user->name }}</h1>
	 {{-- $user->follows es una funcion en el Modelo App\User --}}
	<ul class="list-unstyled">
		@if (isset($follows))
			@foreach ($follows as $follow) 
				<li>{{ $follow->username }}</li>
			@endforeach
		@else
			@foreach ($followers as $follower)
				<li>{{ $follower->username }}</li>
			@endforeach
		@endif	
		
	</ul>
@endsection	