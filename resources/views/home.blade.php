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
<section class="portfolio2 pb-4 mt-4" style="background-color: #F3FFFC;">
    <div class="container">
        <div class="cat2">
            <img src="image/Cat Paw2.svg" style="height: 200px;">
        </div>

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
        <div class="Group">
            <img src="image/Group.svg" style="height: 200px;">
        </div>
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












    </div>
</section>
</div>











<section class="portfolio2 pb-4">
    <div class="container">
        <div class="Group">
            <img src="image/Group.svg" style="height: 200px;">
        </div>
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
                                <p class="card-text" style="color: #5B5B7F;">All the features you need to keep your
                                    personal files safe, accessible, and easy to share.</p>
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
                                <p class="card-text">All the features you need to keep your personal files safe,
                                    accessible, and easy to share.</p>
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
                                <p class="card-text" style="color: #5B5B7F;">All the features you need to keep your
                                    personal files safe, accessible, and easy to share.</p>
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





    </div>
</section>
</div>








<section class="portfolio pb-4">
    <div class="container">


        <div class="row text-center pt-4 mb-4">
            <div class="col-lg-12 mt-5 ms-4">
                <h1>Nih, Coba Lihat Apa yang Mereka Bilang</h1>
            </div>
        </div>



        <div class="row" style="font-size: 18px;">
            <div class="col-lg-4 m-lg-5 col-md-12 ">
                <div class="" style="width: 28rem;">
                    <div style="margin-top: 20px;">
                        <img class="" src="image/capture.svg" style="height: 70px;">
                    </div>
                    <div class="" style="width: 23rem; margin-left: 76px; margin-top: -90px;">
                        <div class="card-body" style="">
                            <p class="card-text">Extremely easy to use, helped us develop our Vote for George Washington
                                micro-site
                                extre- mely quickly! We will
                                definitely use it again for other projects
                            </p>
                            <h5 class="card-title">
                                Jasmine Andrews
                            </h5>
                            <p style="font-weight: 100;">Microsoft</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 m-lg-5 col-md-12">
                <div class="" style="width: 28rem;">
                    <div style="margin-top: 20px;">
                        <img class="" src="image/capture2.svg" style="height: 70px;">
                    </div>
                    <div class="" style="width: 23rem; margin-left: 76px; margin-top: -90px;">
                        <div class="card-body" style="">
                            <p class="card-text">Worth every penny, if you have basic HTML knowledge. It helped us get
                                an exceptional landing page up and running in no
                                time
                            </p>
                            <h5 class="card-title">
                                Austin Campbell
                            </h5>
                            <p style="font-weight: 100;">Dropbox</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 m-lg-5 col-md-12">
                <div class="" style="width: 28rem;">
                    <div style="margin-top: 20px;">
                        <img class="" src="image/capture4.svg" style="height: 70px;">
                    </div>
                    <div class="" style="width: 23rem; margin-left: 76px; margin-top: -90px;">
                        <div class="card-body" style="">
                            <p class="card-text">I’ve built my website with Startup just in one day, and it was
                                ready-to-go. Code is clean and simple, easy to use by
                                people with almost any level of programming skills.
                            </p>
                            <h5 class="card-title">
                                Jasmine Andrews
                            </h5>
                            <p style="font-weight: 100;">Microsoft</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 m-lg-5 col-md-12">
                <div class="" style="width: 28rem;">
                    <div style="margin-top: 20px;">
                        <img class="" src="image/capture3.svg" style="height: 70px;">
                    </div>
                    <div class="" style="width: 23rem; margin-left: 76px; margin-top: -90px;">
                        <div class="card-body" style="">
                            <p class="card-text">As a business targeting high net worth individuals, we were looking for
                                a slick, cool and mini-malistic design for our
                                website
                            </p>
                            <h5 class="card-title">
                                Audrey Turner
                            </h5>
                            <p style="font-weight: 100;">Designmodo</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div style="text-align: center;">
            <img src="image/titik.svg" alt="">
        </div>



    </div>
</section>
<div style="margin-top: -180px;margin-bottom: 100px;">
    <img src="image/Cat Paw4.svg" alt="">
</div>
</div>










<section class="">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="mx-auto me-lg-5" style="width: 440px;">
                    <div class="" style="width: 30rem;">
                        <div class="card-body">

                            <h1 class="font-judul-kontak">Butuh Sesuatu?</h1><br>
                            <p>Dengan langkah mudah, terhubung dengan kami</p>

                            <div class="kotak_login">
                                <form>
                                    <label>EMAIL</label>
                                    <input type="text" name="username" class="form_login" placeholder="Email-mu">

                                    <label>PESAN</label>
                                    <input type="text" name="Pesanmu" class="form_pesan" placeholder="Pesanmu">

                                    <label>NAMA</label></br>
                                    <input type="text" name="nama" class="form_nama" placeholder="Namamu">

                                    <input type="submit" class="tombol_send" value="Send">

                                    <br />
                                    <br />
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="mx-auto ms-lg-5" style="width: 440px;">
                    <div class="" style="width: 30rem;">
                        <div class="card-body">
                            <h1 class="font-judul-kontak">Hubungi Kami</h1><br>
                            <p>Membuka komunikasi yang lebih dekat dengan mudah dan efektif</p>

                            <table class="font-judul-kontak">
                                <tr>
                                    <td style="font-weight: bold;"><img class="mb-1 me-3" src="image/fa-phone.svg" style="height: 18px;">+62 821-1244-2087</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;"><img class="mb-1 me-3" src="image/fa-envelope.svg" style="height: 18px;">contact@tupaitech.net</td>
                                </tr>
                            </table>
                            <br>
                            <hr />
                            <br>

                            <h4>Jadi Lebih Dekat</h4>
                            <br>

                            <table style="position: relative; z-index: 4;">

                                <tr>
                                    <td><img class="mb-1 me-3" src="image/fa-envelope (1).svg" style="height: 18px;">
                                    </td>
                                    <td width="180px">Facebook</td>
                                    <td><img class="mb-1 me-3" src="image/fa-envelope (4).svg" style="height: 18px;">
                                    </td>
                                    <td>Dribbble</td>

                                </tr>
                                <tr>
                                    <td><img class="mb-1 me-3" src="image/fa-envelope (2).svg" style="height: 18px;">
                                    </td>
                                    <td>Twitter</td>
                                    <td><img class="mb-1 me-3" src="image/fa-envelope (5).svg" style="height: 18px;">
                                    </td>
                                    <td>Behance</td>
                                </tr>
                                <tr>
                                    <td><img class="mb-1 me-3" src="image/fa-envelope (3).svg" style="height: 18px;">
                                    </td>
                                    <td>Pinterest</td>
                                    <td><img class="mb-1 me-3" src="image/fa-envelope (6).svg" style="height: 18px;">
                                    </td>
                                    <td>LinkedIn</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
</section>




<div style="margin-top: -270px; z-index: -1;">
    <img class="Group-kaki-cat" src="image/Group-kaki-cat.svg">
</div>
</div>






@endsection