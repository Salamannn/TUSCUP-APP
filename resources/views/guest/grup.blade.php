@extends('guest.layouts.app')

@section('title', 'Grup')

@section('content')
    <div class="container">
        <div class="mt-5" style="width: 100%; color: #AA0000; font-size: 5vw; font-family: Anton SC; font-weight: 400;">
            KLASEMEN FUTSAL
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
        <div class="row mt-5 gap">
            <div class="col">
                <div class="table-responsive">
                    <h3><strong>GRUP A</strong></h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="table-secondary">Tim</th>
                                <th scope="col" class="table-secondary">P</th>
                                <th scope="col" class="table-secondary">M</th>
                                <th scope="col" class="table-secondary">S</th>
                                <th scope="col" class="table-secondary">Poin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">TPA-U</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th scope="row">FTE-FEB</th>
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
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">
                    <h3><strong>GRUP B</strong></h3>
                    <table class="table">
                        <thead >
                            <tr>
                                <th scope="col" class="table-secondary">Tim</th>
                                <th scope="col" class="table-secondary">P</th>
                                <th scope="col" class="table-secondary">M</th>
                                <th scope="col" class="table-secondary">S</th>
                                <th scope="col" class="table-secondary">Poin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">TPA-T</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th scope="row">TPA-S</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th scope="row">FIF</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col border-top border-dark border-2">
                    <div class="mt-5">
                        <p>P = Pertandingan (jumlah pertandingan)</p>
                        <p>M = Menang (jumlah menang)</p>
                        <p>S = Seri (jumlah seri)</p>
                        <p>K = Kalah (jumlah kalah)</p>
                    </div>
                </div>
                <div class="col border-top border-dark border-2">
                    <div class="mt-5">
                        <p>Menang +3 Poin</p>
                        <p>Seri +1 Poin</p>
                        <p>Kalah +0 Poin</p>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
