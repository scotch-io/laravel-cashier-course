@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">

    <div class="card auth-card">

        <h1>Login</h1>

        <form method="POST" action="/login">

            {!! csrf_field() !!}

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

            {{-- login button --}}
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">
                    Login
                </button> 
            </div> 
        </form>
    </div>

</div>
</div>
</div>

@endsection