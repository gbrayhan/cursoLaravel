@extends('layouts.app')

@section('content')
<h3>Message id: {{ $message->id }}</h3>
<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">{{ $message->content }}</p>
<small class="text-muted">{{ $message->created_at }}</small>

@endsection