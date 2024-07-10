@extends('guest.layouts.app')

@section('title', 'Grup')

@section('content')
    <div class="container">
        <div class="mt-5" style="width: 100%; color: #AA0000; font-size: 5vw; font-family: Anton SC; font-weight: 400;">
            KLASEMEN BADMINTON
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
        <div id="carouselCategories" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                @foreach ($teams as $category => $groups)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row mt-5 gap">
                            <div class="col-12">
                                <h2>{{ $category }}</h2>
                                <div class="row">
                                    @foreach ($groups as $group => $groupTeams)
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <h3><strong>{{ $group }}</strong></h3>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="table-secondary">Tim</th>
                                                            <th scope="col" class="table-secondary">P</th>
                                                            <th scope="col" class="table-secondary">M</th>
                                                            <th scope="col" class="table-secondary">S</th>
                                                            <th scope="col" class="table-secondary">K</th>
                                                            <th scope="col" class="table-secondary">Poin</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($groupTeams as $teamName => $teamData)
                                                            <tr>
                                                                <th scope="row">{{ $teamName }}</th>
                                                                <td>{{ $teamData['matches'] }}</td>
                                                                <td>{{ $teamData['wins'] }}</td>
                                                                <td>{{ $teamData['draws'] }}</td>
                                                                <td>{{ $teamData['loses'] }}</td>
                                                                <td>{{ $teamData['points'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategories" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCategories" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
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
    <script>
        $(document).ready(function() {
            $('#carouselCategories').carousel({
                interval: 3000
            });
        });
    </script>

@endsection
