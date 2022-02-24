@extends('layouts.main')

@section('container')

<section class="services">
    <img class="bg-1" src="image/Background Gradient.svg" alt="">
    <div class="container">
        <div class="row">
            <div class="service col-sm-6">
                <h1 class="mb-4"> {{ $judul }} </h1>
                <p>{{ $text }}</p>
                <div class="">
                    <br><button type="button" class="tombol">Unduh di Play Store</button>
                </div>
            </div>
            <div class="service col-sm-6">
                <img class="il-hero" src="image/image.svg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="services mt-5">
    <img class="bg-2" src="image/Background Gradient2.svg" alt="">
    <div class="container">
        <div class="row mt-5">
            <div class="service col-lg-6">
                <center>
                    <img class="mask" src="image/Mask.png" alt="">
                </center>
            </div>
            <div class="service col-lg-6">
                <h1 class="fs-4 mt-4">{{ $judul2 }}</h1>
                <p>{{ $text2 }}</p>
                <div class="">
                    <br><button type="button" class="tombol-explore mb-4">Explore</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection