<!-- resources/views/bracket.blade.php -->

@extends('guest.layouts.app')

@section('title', 'Bracket')

@section('content')
<div class="container">
    <div class="mt-5" style="width: 100%; color: #AA0000; font-size: 5vw; font-family: Anton SC; font-weight: 400;">
        BAGAN FUTSAL
    </div>
    <div class="dropdown">
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
    <div class="table-responsive mt-5">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row" style="width: 200px">GRUP A 1</th>
                    <td style="width: 50px">-</td>
                    <td style="width: 50px">0</td>
                    <td style="width: 50px">0</td>
                    <td style="width: 50px">0</td>
                    <td>0</td>
                    <td>0</td>
                    
                </tr>
                <tr>
                    <th scope="row">GRUP B 2</th>
                    <td>-</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">FRI</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">FRI</th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">GRUP B 1</th>
                    <td>-</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">GRUP A 2</th>
                    <td>-</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection
