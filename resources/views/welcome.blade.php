@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
  <h1>Ambiente de Pruebas CPA</h1>
  <nav>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="/" class="nav-link">Acerca de Nosotros</a><li>
    </ul>
  </nav>
</div>
<div class="row">
	<form action="/messages/create" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group " >
			<input  type="text" name="message" class="form-control @if($errors->has('message')) is-invalid @endif" placeholder="¿Qué estas pensado?">
			{{--@if ($errors->any())--}}
			@if ($errors->has('message'))
				@foreach ($errors->get('message') as $error)
					<div class="invalid-feedback">{{ $error }}</div>
				@endforeach
			@endif
			<input type="file" name="image" id="image" class="form-control-file">
		</div>
	</form>
</div>
<div class="row">
	@forelse($messages as $message)
		<div class="col-md-6">
			@include('messages.message')
		</div>  
	@empty
		<h3>No se encontraron imagenes</h3>
	@endforelse

	@if (count($messages))
		<div class="mt-4 mx-auto">
			{{ $messages->links() }}
		</div>
	@endif
</div>
    
@endsection
       