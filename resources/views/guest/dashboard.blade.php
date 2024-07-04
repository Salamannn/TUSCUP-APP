@extends('guest.layouts.app')
@section('content')
<div>
    <div class="position-relative">
        <img src="{{ asset('images/BG_Beranda.png') }}" class="img-fluid" alt="BG_Beranda">
        <div class="position-absolute top-50 start-50 translate-middle  text-center text-dark" style="font-size: 800% ; font-family:Anton SC ; ">
           <suradib  style="color: #AA0000"> TUS  </suradib> <irvan style="color: #000000"> CUP </irvan>
            <div class="p-4" style="font-size: 10% ; font-family:Poppins ; ">
                <b>TUS CUP</b> adalah kompetisi olahraga dan hiburan yang diselenggarakan untuk staf Telkom University Surabaya, yang bertujuan untuk mempererat hubungan antar karyawan melalui berbagai kegiatan seru dan menantang.
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="row p-5 d-flex ">
            <div class="col border text-end text-light">Cabang Perlombaan</div>
            <div class="col border ">Perlombaan Cabang</div>
        </div>
    </div>
</div>
@endsection