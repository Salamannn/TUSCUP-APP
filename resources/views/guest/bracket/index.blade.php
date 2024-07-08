@extends('guest.layouts.app')

@section('title', 'Bracket')

@section('content')
    <div class="container mb-5">
        <div class="mt-5" style="width: 100%; color: #AA0000; font-size: 5vw; font-family: Anton SC; font-weight: 400;">
            BAGAN
        </div>
        <div class="row justify-content-start g-2">

            <div class="col-auto">
                <a href="/bagan-futsal" style="text-decoration: none">
                    <div class="card "
                        style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('images/football.png') }}"
                                    class="img-fluid w-50  p-3"></h5>
                            <h6 class="fs-4" style="color: #AA0000">bagan</h6>
                            <h6 class="fs-1 text-light">futsal</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto">
                <a href="/bagan-futsal" style="text-decoration: none">
                    <div class="card "
                        style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('images/volleyball.png') }}" class="img-fluid w-50  p-3">
                            </h5>
                            <h6 class="fs-4" style="color: #AA0000">bagan</h6>
                            <h6 class="fs-1 text-light">volley</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto">
                <a href="/bagan-futsal" style="text-decoration: none">
                    <div class="card "
                        style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('images/basket.png') }}" class="img-fluid w-50  p-3">
                            </h5>
                            <h6 class="fs-4" style="color: #AA0000">bagan</h6>
                            <h6 class="fs-1 text-light">basket</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto">
                <a href="/bagan-futsal" style="text-decoration: none">
                    <div class="card "
                        style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('images/badminton.png') }}"
                                    class="img-fluid w-50  p-3"></h5>
                            <h6 class="fs-4" style="color: #AA0000">bagan</h6>
                            <h6 class="fs-1 text-light">badminton</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto">
                <a href="/bagan-futsal" style="text-decoration: none">
                    <div class="card "
                        style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('images/ml.png') }}" class="img-fluid w-50  p-3"></h5>
                            <h6 class="fs-4" style="color: #AA0000">bagan</h6>
                            <h6 class="fs-1 text-light">MLBB</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-auto">
                <a href="/bagan-futsal" style="text-decoration: none">
                    <div class="card "
                        style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                        <div class="card-body">
                            <h5 class="card-title"><img src="{{ asset('images/chess.png') }}" class="img-fluid w-50  p-3">
                            </h5>
                            <h6 class="fs-4" style="color: #AA0000">bagan</h6>
                            <h6 class="fs-1 text-light">Catur</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
