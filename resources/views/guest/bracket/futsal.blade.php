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
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="row" style="width: 200px;border: #000000;border-width: 2px;border-style: solid">GRUP A 1</th>
                    <td style="width: 50px;border: #000000;border-width: 2px;border-style: solid">-</td>
                    <td style="width: 50px;border-bottom: #000000;border-bottom-width: 2px;border-bottom-style: solid"></td>
                    <td style="width: 50px"></td>
                    <td style="width: 200px"></td>
                    <td style="width: 50px"></td>
                </tr>
                <tr>
                    <th style="border: #000000;border-width: 2px;border-style: solid" scope="row">GRUP B 2</th>
                    <td style="border: #000000;border-width: 2px;border-style: solid">-</td>
                    <td style="border-right: #000000;border-right-width: 2px;border-right-style: solid"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td style="border-right: #000000;border-right-width: 2px;border-right-style: solid"></td>
                    <td style="border-bottom: #000000;border-bottom-width: 2px;border-bottom-style: solid"></td>
                    <td style="border: #000000;border-width: 2px;border-style: solid">Menang Atas</td>
                    <td style="border: #000000;border-width: 2px;border-style: solid">-</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td style="border-left: #000000;border-left-width: 2px;border-left-style: solid"></td>
                    <td style="border: #000000;border-width: 2px;border-style: solid">Menang Bawah</td>
                    <td style="border: #000000;border-width: 2px;border-style: solid">-</td>
                </tr>
                <tr>
                    <th style="border: #000000;border-width: 2px;border-style: solid" scope="row">GRUP B 1</th>
                    <td style="border: #000000;border-width: 2px;border-style: solid">-</td>
                    <td style="border-bottom: #000000;border-bottom-width: 2px;border-bottom-style: solid"</td>
                    <td style="border-left: #000000;border-left-width: 2px;border-left-style: solid"></td>
                    <td></td>
                </tr>
                <tr>
                    <th style="border: #000000;border-width: 2px;border-style: solid" scope="row">GRUP A 2</th>
                    <td style="border: #000000;border-width: 2px;border-style: solid">-</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection
