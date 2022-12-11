@extends('layouts.master', ['title' => 'Show My Car'])

@section('content')
    <div class="container my-3">

        <!-- title -->
        <h2 class="fw-bold"> {{ $car->name }} </h2>
        <p> Detail Mobil {{ $car->description }}</p>
        <!-- end title -->

        <!-- form -->
        <div class="row">
            <div class="col">
                <img src="{{ asset($car->image) }}" style="width: 500px;" alt="">
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label"> Nama Mobil</label>
                    <input disabled type="text" name="name" required
                        class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $car->name }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="owner" class="form-label"> Owner </label>
                    <input disabled type="text" name="owner" required
                        class="form-control {{ $errors->has('owner') ? ' is-invalid' : '' }}" value="{{ $car->owner }}">
                    @error('owner')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label"> Brand </label>
                    <input disabled type="text" name="brand" required
                        class="form-control {{ $errors->has('brand') ? ' is-invalid' : '' }}" value="{{ $car->brand }}">
                    @error('brand')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="purchase_date" class="form-label"> Tanggal Beli </label>
                    <input disabled type="date" name="purchase_date" required
                        class="form-control {{ $errors->has('purchase_date') ? ' is-invalid' : '' }}"
                        value="{{ $car->purchase_date }}">
                    @error('purchase_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="description" class="form-label"> Description </label>
                    <textarea disabled name="description" minlength="30" rows="5"
                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                        placeholder="description singkat mengenai kendaraan anda" required id="description">{{ $car->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"> Foto </label>
                    <input disabled type="file" name="image"
                        class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{ $car->image }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label"> Status Pembayaran </label>
                    <div class="form-check">
                        <input disabled class="form-check-input {{ $errors->has('status') ? ' is-invalid' : '' }}"
                            value="Lunas" {{ $car->status == 'Lunas' ? 'checked' : '' }} type="radio" name="status"
                            id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input disabled class="form-check-input {{ $errors->has('status') ? ' is-invalid' : '' }}"
                            value="Belum-Lunas" {{ $car->status == 'Belum-Lunas' ? 'checked' : '' }} type="radio"
                            name="status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum lunas
                        </label>
                    </div>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <a href="{{ route('my-car.edit', $car->id) }}" class="btn btn-warning fw-light px-4 py-2" name="btn_update"
                    value="edit"> Edit
                </a>
            </div>
        </div>
        <!-- end form -->
    </div>
@endsection
