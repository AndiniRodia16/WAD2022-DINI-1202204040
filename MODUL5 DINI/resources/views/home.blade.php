@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row vh-100 align-items-center">
            <!-- COLOM 1 -->
            <div class="col">
                <h1><strong>Selamat Datang Di Show Room DINI </strong></h1>
                <br>
                <p> At lacus vittae nulla sagittis scelerisque nisl. Pallentesque duis cursus vestibulum, facilisi ac, sed
                    faucibus </p>
                <!-- btn -->
                <strong><a href="{{ route('my-car') }}" class="btn btn-primary fw-light px-4 py-2"> My Car </a></strong>
                <!-- end btn -->
                <div class="d-flex justify-content-start">
                    <div class="row mt-5">
                        <div class="col">
                            <img src="{{ asset('img/logo-ead.png') }}" style="width: 70px;" alt="">
                        </div>
                        <div class="col">
                            <p> DINI_1202204040 </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLOM 2 -->
            <div class="col">
                <img src="{{ asset('img/bmw.png') }}" style="width: 500px" alt="">
            </div>
        </div>
    </div>
@endsection
