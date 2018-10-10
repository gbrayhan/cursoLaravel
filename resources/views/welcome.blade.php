@extends('layouts.app')
    @section('content')
        <div class="title m-b-md">
            Administradora Aceso
        </div>
        @if ($profesor)
        <h3>
           Developer {{ $profesor }}
        </h3>
        @endif

        <div class="links">
            @foreach ($links as $link => $text)
                <a href="{{ $link }}" title="{{ $text }}">{{ $text }}</a>
            @endforeach

            {{-- <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a> --}}
        </div>
    @endsection
           