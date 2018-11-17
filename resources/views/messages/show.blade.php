@extends('layouts.app')

@section('content')
<h3>Message id: {{ $message->id }}</h3>

@include('messages.message')

<responses :message="{{ $message->id }}"></responses>

@endsection