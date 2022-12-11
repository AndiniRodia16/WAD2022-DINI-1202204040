@extends('layouts.master', ['title' => 'New Car'])

@section('content')
    <div class="container mt-3">
        <!-- title -->
        <h2 class="fw-bold"> Tambah mobil </h2>
        <p> Tambah Mobil Baru Anda Ke List Show Room </p>
        <!-- end title -->
        <hr />
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session->get('success') }}
            </div>
        @endif
        <!-- form -->
        <div class="container mt-10" style="width:100%">
            <form action="{{ route('new-car.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"> Nama Mobil </label>
                    <input type="text" name="name"
                        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required placeholder="BMW I4"
                        value="{{ old('name') }}" id="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label"> Nama Pemilik </label>
                    <input type="text" name="owner"
                        class="form-control {{ $errors->has('owner') ? ' is-invalid' : '' }}" required
                        placeholder="DINI_1202204040" id="owner" value="{{ old('owner') }}">
                    @error('owner')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label"> Merk </label>
                    <input type="text" name="brand"
                        class="form-control {{ $errors->has('brand') ? ' is-invalid' : '' }}" required placeholder="BMW"
                        value="{{ old('brand') }}" id="brand">
                    @error('brand')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="purchase_date" class="form-label"> Tanggal Beli </label>
                    <input type="date" name="purchase_date"
                        class="form-control {{ $errors->has('purchase_date') ? ' is-invalid' : '' }}" required
                        id="purchase_date" value="{{ old('purchase_date') }}">
                    @error('purchase_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"> Deskription </label>
                    <textarea name="description" minlength="30" rows="5"
                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                        placeholder="Deskripsi singkat mengenai kendaraan anda" required id="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"> Foto </label>
                    <input type="file" name="image"
                        class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"
                        accept="image/png, image/jpeg" value="{{ old('image') }}" required id="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Status Pembayaran </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input value="Lunas" id="ipt-lunas"
                            class="form-check-input {{ $errors->has('status') ? ' is-invalid' : '' }}" required
                            type="radio" name="status" {{ old('status') == 'Lunas' ? 'checked' : '' }}>
                        <label class="form-check-label" for="ipt-lunas">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value="Belum-Lunas" id="ipt-blm"
                            class="form-check-input {{ $errors->has('status') ? ' is-invalid' : '' }}" type="radio"
                            name="status" {{ old('status') == 'Belum-Lunas' ? 'checked' : '' }}>
                        <label class="form-check-label" for="ipt-blm">
                            Belum lunas
                        </label>
                    </div>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary fw-light px-4 py-2" name="btn_simpan" value="submit"> Selesai
                </button>
            </form>
        </div>
        <!-- end form -->
    </div>
@endsection
