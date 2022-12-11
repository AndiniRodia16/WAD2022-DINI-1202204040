@extends('layouts.master', ['title' => 'My Car'])

@section('content')
    <div class="container p-5">
        <h2 class="fw-bold"> My Show Room </h2>
        <small class="fw-light"> List showroom DINI-1202204040 </small>
        <hr>
        <!-- read -->
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($cars as $car)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" height="225" width="100%" src="{{ asset($car->image) }}"
                                alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">{{ $car->name }}</h5>
                                <p class="card-text">{{ $car->description }}</p>

                                <div class="text-center">
                                    <a href="{{ route('my-car.show', $car->id) }}"
                                        class="btn btn-primary mt-auto rounded-4">Detail</a>

                                    <a href="{{ route('my-car.destroy', $car->id) }}" class="btn btn-danger mt-auto rounded-4" href="#"
                                        onclick="return confirm('Yakin Hapus?')">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
