@extends('layouts.master', ['title' => 'Login'])

@section('content')
    <div class="container">

        <div class="row vh-100 align-items-center">
            <!-- COLOM 1 -->
            <div class="col">
                <img src="{{ asset('img/pajero.jpg') }}" style="width: 500px" alt="">
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <h4> Login </h4>
                <br>

                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email"
                            class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"
                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="rmember" id="remember" class="form-check-input" value="remember">
                        <label for="remember"> Remember Me </label>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <p> Anda belum punya akun? <a href="{{ route('register') }}"> Daftar</a> </p>
                </form>
            </div>
        </div>
    </div>
@endsection
