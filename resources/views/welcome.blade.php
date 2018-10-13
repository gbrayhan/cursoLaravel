@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
  <h1>Distribuidora Aceso</h1>
  <nav>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="/" class="nav-link">Acerca de Nosotros</a><li>
    </ul>
  </nav>
</div>
<div class="row">
	@forelse($messages as $message)
		<div class="col-md-6">
			<img src="{{ $message->image }}" alt="" class="img-thumbnail">
			<p class="card-text">{{ $message->content }} <a href="/message/{{ $message->id }}"> Ver más </a></p>
		</div>  
	@empty
		<h3>No se encontraron imagenes</h3>
	@endforelse
</div>
    
@endsection
       