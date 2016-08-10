@extends('layouts.app')

@section('content')
<section class="container">
    <div class="card card-padded">
        
        {{-- subscription info --}}
        <div class="section-header">
            <h2>Your Subscription</h2>
        </div>

        {{-- credit card section --}}
        <div class="section-header">
            <h2>Update Card</h2>
        </div>

        {{-- billing history --}}
        <div class="section-header">
            <h2>Billing History</h2>
        </div>

        {{-- delete subscription --}}
        <div class="section-header">
            <h2>Delete Subscription</h2>
        </div>

    </div>
</section>
@endsection