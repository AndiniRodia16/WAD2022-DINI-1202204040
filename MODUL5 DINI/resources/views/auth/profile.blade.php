@extends('layouts.master', ['title' => 'My Profile'])

@section('content')
    <div class="container mt-3">
        <!-- title -->
        <h2 class="fw-bold text-center"> Profile </h2>
        <!-- end title -->
        <hr />
        <!-- form -->
        <div class="container mt-10" width="100%">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" required name="name"
                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $user->name }}"
                            id="name" placeholder="Nama">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly
                            class="form-control-plaintext {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                            value="{{ $user->email }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="no_hp" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" required name="no_hp"
                            class="form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}"
                            value="{{ $user->no_hp }}" id="no_hp" placeholder="No Handphone">
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr>

                <div class="form-group row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" id="password" placeholder="Password">
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group row mb-3">
                    <label for="password_confirmation"
                        class="col-sm-2 col-form-label {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">Konfirmasi
                        Password</label>
                    <div class="col-sm-10 ">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                            placeholder="Konfirmasi Password">
                    </div>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group row mb-3">
                    <label for="navbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                    <div class="col-sm-10 ">
                        <select name="navbar" id="navbar" class="form-control">
                            <option value="primary" {{ session()->get('navbar') == 'primary' ? 'selected' : '' }}>Blue
                            </option>
                            <option value="danger" {{ session()->get('navbar') == 'danger' ? 'selected' : '' }}>Merah
                            </option>
                            <option value="warning" {{ session()->get('navbar') == 'warning' ? 'selected' : '' }}>Kuning
                            </option>
                            <option value="secondary" {{ session()->get('navbar') == 'secondary' ? 'selected' : '' }}>White
                            </option>
                            <option value="success" {{ session()->get('navbar') == 'success' ? 'selected' : '' }}>Green
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify">
                    <div class="col-md-6"></div>
                    <div class="col-md-4 ">
                        <button type="submit" class="btn btn-primary center-block" name="btn_simpan" value="submit"> Update
                        </button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>
        </div>
        <!-- end form -->
    </div>
@endsection
