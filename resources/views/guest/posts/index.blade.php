@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-center">Benvenuto {{Auth::check() ? ucfirst(Auth::user()->name) : 'Guest'}}</h2>
            <h1>Tutti i post</h1>
            <ul>
                @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                        {{ $post->title }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection