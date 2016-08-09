@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">

    <div class="card auth-card">

        <h1>Register</h1>

        <form method="POST" action="/register">

            {!! csrf_field() !!}

            {{-- name --}}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            {{-- email --}}
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div> 

            {{-- password --}}
            <div class="form-group">
                <label>Password</label> 
                <input type="password" name="password" class="form-control">
            </div> 

            {{-- password --}}
            <div class="form-group">
                <label>Confirm Password</label> 
                <input type="password" name="password_confirmation" class="form-control">
            </div> 

            {{-- register button --}}
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">
                    Register
                </button> 
            </div> 
        </form>
    </div>

</div>
</div>
</div>

@endsection