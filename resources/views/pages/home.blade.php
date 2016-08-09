@extends('layouts.app')

@section('content')

<div class="hero">
    <div class="hero-content">
        <h1>Daily Dose of Cute Animals!</h1>
        <h2>Only $10/mo</h2>
        <div class="cta">
            <p>We promise you won't regret it.</p>
            <a href="/subscribe" class="btn btn-danger btn-lg">Subscribe</a>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="section-header">
            <h2>Latest Animals</h2>
        </div>

        {{-- POSTS WILL GO HERE --}}
        <div class="row">

            @foreach ($posts as $post)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    @include('partials.post-card', ['post' => $post])
                </div>
            @endforeach

        </div>
    </div>
</section>

@endsection