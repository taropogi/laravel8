@extends('layouts.app')

@section('content')

<div class="container">
<center><h1>Register</h1></center>
     
    <div class="d-flex justify-content-center">
   
    <form action="{{ route('register') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}">
            @error('name')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" 
            value="{{ old('username') }}" >
            @error('username')
                <span style="color:red;">{{ $message }}</span>
            @enderror
        </div>
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

        <div class="form-group">
            <label for="password_confirmation">Password again</label>
            <input value="{{ old('password_confirmation') }}" type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password again">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    
</div>
@endsection