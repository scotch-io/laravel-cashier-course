@extends('layouts.app')

@section('content')

<div class="container">
    <article class="card post-single">
        
        {{-- image --}}
        <div class="img-container"
            style="background-image:url('{{ $post->image }}')">
        </div>

        {{-- card content --}}
        <div class="card-content">
            
            <header class="post-header">
                {{-- title --}}
                <h1>{{ $post->title }}</h1> 

                {{-- byline --}}
                <div class="byline">
                    {{ $post->author->name }}
                </div>
            </header>

            {{-- TODO: show or hide if premium post --}}

            {{-- content --}}
            {!! $post->content !!}

        </div>

    </article>
</div>

@endsection