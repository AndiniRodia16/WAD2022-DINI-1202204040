@extends('layouts.master', ['title' => 'Register'])

@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center">
            <!-- COLOM 1 -->
            <div class="col">
                <img src="{{ asset('img/pajero.jpg') }}" style="width: 500px" alt="">
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <h4> Register </h4>
                <br>
                @error('error')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label> Nama </label>
                        <input type="text" required name="name"
                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" required name="email"
                            class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label> Nomor Handphone </label>
                        <input type="text" value="{{ old('no_hp') }}" required name="no_hp"
                            class="form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}">
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label> Kata Sandi </label>
                        <input type="password" required name="password"
                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Kata Sandi </label>
                        <input type="password" required name="password_confirmation"
                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="register"> Register </button>
                    </div>
                    <p> Anda sudah punya akun? <a href="{{ route('login') }}"> Login</a> </p>
                </form>
            </div>
        </div>
    </div>
@endsection
