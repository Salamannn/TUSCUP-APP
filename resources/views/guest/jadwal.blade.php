@extends('guest.layouts.app')

@section('title', 'Jadwal')

@section('content')
    <div class="container">
        <div class="mt-5" style="width: 100%; color: #AA0000; font-size: 5vw; font-family: Anton SC; font-weight: 400;">
            JADWAL
        </div>
        <div class="row">
            <div class="dropdown col-2 col-sm-3">
                <button class="btn border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Lomba <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Futsal</a></li>
                    <li><a class="dropdown-item" href="#">Basket</a></li>
                    <li><a class="dropdown-item" href="#">Badminton</a></li>
                    <li><a class="dropdown-item" href="#">Volley</a></li>
                    <li><a class="dropdown-item" href="#">Pingpong</a></li>
                    <li><a class="dropdown-item" href="#">Panahan</a></li>
                    <li><a class="dropdown-item" href="#">Estafet</a></li>
                    <li><a class="dropdown-item" href="#">Catur</a></li>
                    <li><a class="dropdown-item" href="#">Open Mic</a></li>
                    <li><a class="dropdown-item" href="#">Content Creator</a></li>
                    <li><a class="dropdown-item" href="#">MLBB</a></li>
                </ul>
            </div>
            <div class="col">
                <button class="btn border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Tanggal <i class="fa-solid fa-caret-down"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
@endsection
