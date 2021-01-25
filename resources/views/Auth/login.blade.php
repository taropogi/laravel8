@extends('layouts.app')

@section('content')

<div class="container">
<center><h1>Login</h1></center>
     
    <div class="d-flex justify-content-center">
   
    <form action="{{ route('login') }}" method="post">
    @csrf
          @if(session('status'))
            <span style="color:red;">{{session('status')}}</span>
          @endif
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" >
            @error('email')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}" >
            @error('password')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>

       

        <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>
    
</div>
@endsection