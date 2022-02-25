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





<section class="services2 mt-5">
    <img class="bg-2" src="image/Background Gradient2.svg" alt="">
    <div class="container">
        <div class="row mt-5">
            <div class="service2 col-lg-6">

                <img class="mask" src="image/Mask.png" alt="">

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






<!-- <div class="cat">
            <img src="image/Cat Paw.svg" style="height: 200px;">
        </div> -->


<!-- <div class="bacground"> -->
<section class="portfolio2 pb-4">
    <div class="container">

        <!-- <div class="bg-3">
            <img src="image/Rectangle 1.svg">
        </div> -->

        <div class="row text-center pt-4 mb-4">
            <div class="col-lg-12 mt-5">
                <h1>Bermacam Fitur Manjakan Kucingmu</h1>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img class="mb-2 me-3" src="image/fa-code.svg" style="height: 25px;">Feature 1</h5>
                        <p class="card-text">{{ $feature1 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img class="mb-2 me-3" src="image/fa-html5.svg" style="height: 25px;">Feature 2</h5>
                        <p class="card-text">{{ $feature2 }}</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img class="mb-2 me-3" src="image/fa-cogs.svg" style="height: 25px;">Feature 3</h5>
                        <p class="card-text">{{ $feature3 }}</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6">
                <div class="" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img class="mb-2 me-3" src="image/fa-code (1).svg" style="height: 25px;">Feature 4</h5>
                        <p class="card-text">{{ $feature4 }}</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6">
                <div class="" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img class="mb-2 me-3" src="image/fa-calendar-check-o.svg" style="height: 25px;">Feature 5</h5>
                        <p class="card-text">{{ $feature5 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><img class="mb-2 me-3" src="image/fa-cogs (1).svg" style="height: 25px;">Feature 6</h5>
                        <p class="card-text">{{ $feature6 }}</p>
                    </div>
                </div>
            </div>

        </div>




    </div>
</section>
</div>



<section class="portfolio2 pb-4">
    <div class="container">

        <div class="row text-center pt-4 mb-4">
            <div class="col-lg-12 mt-5">
                <h1>Berlangganan Sebulan Cuma Seharga Segelas Kopi</h1>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="mx-auto" style="width: 300px;">
                    <div class="card" style="width: 18rem; border-radius: 10px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">STARER</h5>
                            <center>
                                <span class="kiri">
                                    <sup class="rp">Rp</sup>
                                    <sub class="angka">0</sub>
                                </span>
                                <span class="kanan">
                                    <sub class="Hzx">per user</br></sup>
                                        <sub class="Hzy">per mounth</sub>
                                </span>

                                </br><br>
                                <p class="card-text" style="color: #5B5B7F;">{{ $berlangganan1 }}</p>
                            </center>
                        </div>
                    </div>
                    <div class="color style=" width: 18rem;">
                        <div class="card-body">
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">Unlimited Likes
                            </p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">Unlimited Match
                            </p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">See Who Likes
                                Your Cat</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">No Ads</p>
                        </div>
                        <center class="tombol-star text-center">
                            <h5>Start Free Trial</h5>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="mx-auto" style="width: 300px;">
                    <div class="card" style="width: 18rem; border-radius: 10px; background-color: #8080B2; color: #FFFFFF;">
                        <div class="card-body">
                            <h5 class="card-title text-center">STANDARD</h5>
                            <center>
                                <span class="kiri">
                                    <sup class="rp">Rp</sup>
                                    <sub class="angka">45K</sub>
                                </span>
                                <span class="kanan">
                                    <sub class="Hzx">per user</br></sup>
                                        <sub class="Hzy">per mounth</sub>
                                </span>
                                </br><br>
                                <p class="card-text">{{ $berlangganan1 }}</p>
                            </center>
                        </div>
                    </div>
                    <div class="color" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">Unlimited Likes</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">Unlimited Match</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">See Who Likes Your
                                Cat</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">No Ads</p>
                        </div>
                        <center class="tombol-star text-center" style="background-color: #41D8BB; color: white;">
                            <h5>Start Free Trial</h5>
                        </center>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 offset-lg-0 offset-md-3 mb-4">
                <div class="mx-auto" style="width: 300px;">
                    <div class="card" style="width: 18rem; border-radius: 10px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">PREMIUM</h5>
                            <center>
                                <span class="kiri">
                                    <sup class="rp">Rp</sup>
                                    <sub class="angka">50K</sub>
                                </span>
                                <span class="kanan">
                                    <sub class="Hzx">per user</br></sup>
                                        <sub class="Hzy">per mounth</sub>
                                </span>
                                </br><br>
                                <p class="card-text" style="color: #5B5B7F;">{{ $berlangganan1 }}</p>
                            </center>
                        </div>
                    </div>
                    <div class="color" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">Unlimited Likes</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">Unlimited Match</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">See Who Likes Your
                                Cat</p>
                            <p class="card-title"><img class="mb-1 me-3" src="image/Check Icon.svg" style="height: 9px;">No Ads</p>
                        </div>
                    </div>
                    <center class="tombol-star text-center">
                        <h5>Start Free Trial</h5>
                    </center>
                </div>
            </div>
        </div>





        <!-- <div class="col-lg-4 col-md-6">
        
        </div>
        
                <div class="col-lg-4 col-md-6">
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    
                </div>
        
                </div> -->




    </div>
</section>
</div>



@endsection