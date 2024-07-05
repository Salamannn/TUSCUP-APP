@extends('guest.layouts.app')
@section('content')
    <div>
        <div class="position-relative">
            <img src="{{ asset('images/BG_Beranda.png') }}" class="img-fluid" alt="BG_Beranda">
            <div class="position-absolute top-50 start-50 translate-middle  text-center text-dark"
                style="font-size: 8vw ; font-family:Anton SC ; ">
                <suradib style="color: #AA0000"> TUS </suradib>
                <irvan style="color: #000000"> CUP </irvan>
                <div class="p-5" style="font-size: 15% ; font-family:Poppins ; ">
                    <b>TUS CUP</b> adalah kompetisi olahraga dan hiburan yang diselenggarakan untuk staf Telkom University
                    Surabaya, yang bertujuan untuk mempererat hubungan antar karyawan melalui berbagai kegiatan seru dan
                    menantang.
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="row justify-content-evenly p-5 d-flex ">
                <div class="col-5    text-end text-secondary" style="font-size: 300% ; font-family:Anton SC ; ">Cabang <p
                        class="text-light">Perlombaan</p>
                </div>
                <div class="col-5 ">
                    <div class="row  g-2">
                        <div class="col-2  "><img src="{{ asset('images/basket.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/volleyball.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/football.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/badminton.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/chess.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/estafet.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/pingpong.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/bow.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/openmic.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/contentcreator.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                        <div class="col-2  "><img src="{{ asset('images/ml.png') }}" class="img-fluid p-3"
                                alt="BG_Beranda"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 10vw;">
            <div class="row align-items-center justify-content-evenly mt-5">
                <div class="col-5"><img src="{{ asset('images/gambar-1.png') }}" class="img-fluid p-3" alt="BG_Beranda">
                </div>
                <div class="col-5 text-start">
                    <div style="font-size: 300% ; font-family:Anton SC ; color: #AA0000;">tim yang <p class="text-dark">
                            bertanding</p>
                    </div>
                    <div>
                        <div class="row g-2">
                            <div class="col-6 p-2 ">
                                <div style="font-family: Poppins" class="p-3 fw-bold border">
                                    TPA-S
                                </div>
                            </div>
                            <div class="col-6 p-2 ">
                                <div style="font-family: Poppins" class="p-3 fw-bold border">
                                    FRI
                                </div>
                            </div>
                            <div class="col-6  p-2 ">
                                <div style="font-family: Poppins" class="p-3 fw-bold border">
                                    TPA-U
                                </div>
                            </div>
                            <div class="col-6 p-2 ">
                                <div style="font-family: Poppins" class="p-3 fw-bold border">
                                    FIF
                                </div>
                            </div>
                            <div class="col-6 p-2 ">
                                <div style="font-family: Poppins" class="p-3 fw-bold border">
                                    TPA-T
                                </div>
                            </div>
                            <div class="col-6 p-2 ">
                                <div style="font-family: Poppins" class="p-3 fw-bold border">
                                    FTE-FTB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center ">
                <div class="col-10  d-grid text-center">
                    <div style="font-family: Anton SC; font-size: 5vw; color: #AA0000">Panduan</div>
                    <div class="justify-content-center p-4 " style="font-family: Poppins">Informasi mengenai jadwal acara, peraturan kompetisi, cara
                        pendaftaran, dan rincian kegiatan <p>
                            untuk memastikan seluruh peserta dapat berpartisipasi dengan
                            lancar.</p>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row justify-content-center ">
                        <div class="col-auto">
                            <a href="#" style="text-decoration: none">
                                <div class="card " style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                                    <div class="card-body">
                                        <h5 class="card-title"><img src="{{ asset('images/sign.png') }}" class="img-fluid w-50  p-3"
                                            ></h5>
                                        <h6 class="fs-1 ms-4 text-light">panduan tus cup</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#"style="text-decoration: none" >
                                <div class="card " style="width: 18rem; border-radius: 1%; background-color: #252525; font-family: Anton SC;">
                                    <div class="card-body">
                                        <h5 class="card-title"><img src="{{ asset('images/file.png') }}" class="img-fluid w-50  p-3"
                                            ></h5>
                                        <h6 class="fs-1 ms-4 text-light">term & condition</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
@endsection
