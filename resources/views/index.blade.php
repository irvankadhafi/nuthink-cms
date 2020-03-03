@extends('layouts.navbar-footer')


@section('content')
    <!-- ================ start banner Area ================= -->
    <section class="home-banner-area">
        <div class="container">
            <div class="row justify-content-center fullscreen align-items-center">
                <div class="col-lg-5 col-md-8 home-banner-left">
                    <h1 class="text-white">
                        BEM KEMA POLBAN <br />
                        2019/2020
                    </h1>
                    <p class="mx-auto text-white  mt-20 mb-40">
                        {{--==================================Slogan BEM--}}
                    </p>
                </div>
                <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                    <img class="img-fluid" src="img/header-img.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End banner Area ================= -->

    <!-- ================ Start Feature Area ================= -->
    <section class="feature-area">
        <div class="container-fluid">
            <h2>
                VISI<br><br>
            </h2>
            <p>
                <b>BEM KEMA POLBAN</b> sebagai poros pergerakan yang profesional untuk Almamater, bangsa, dan negara.
            </p>
            <h2>
                <br> MISI<br><br>
            </h2>
            <p>
                <b>1. Poros Stabilitas Kabinet</b><br>
                Membentuk internal kabinet yang profesional dengan asas kekeluargaan.<br><br>
                <b>2. Poros Pelayanan dan Pengabdian</b><br>
                Mengoptimalkan pelayanan advokasi mahasiswa POLBAN serta pengabdian masyarakat yang<br>
                partisipatif dan kolaboratif dengan orientasi kemanfaatan.<br><br>
                <b>3. Poros Eskalasi</b><br>
                Mengawal serta menyikapi isu luar dalam kampus serta mengupayakan pembentukan opini mahasiswa<br>
                POLBAN dan masyarakat.<br><br>
                <b>4. Poros Kolaborasi</b><br>
                Menjalin komunikasi serta kerjasama yang berkelanjutan dengan pihak luar dan dalam kampus<br><br>
                <b>5. Poros Pengembangan</b><br>
                Memberikan fasilitas dalam kegiatan keilmuan serta minat dan bakat mahasiswa POLBAN.
            </p>
        </div>
    </section>
    <!-- ================ End Feature Area ================= -->

    <!-- ================ Start Testimonials Area ================= -->
    <section class="testimonials-area section-gap">
        <div class="container">
            <div class="testi-slider owl-carousel" data-slider-id="1">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="item">
                            <div class="testi-item">
                                {{--================================== nama jabatan ========================--}}
                                <img src="img/quote.png" alt="" />
                                <div class="mt-40 text">
                                    <p>
                                        As conscious traveling Paup ers we must always be oncerned
                                        about our dear Mother Earth. If you think about it, you
                                        travel across her face and She is the host to your
                                        journey.
                                    </p>
                                </div>
                                <h4>Fanny Spencer</h4>
                                <p>Chief Executive, Amazon</p>
                            </div>
                        </div>
                    </div>
                    {{--===========================Foto Pejabat=============================--}}
                    <div class="offset-lg-1 col-lg-6">
                        <img src="img/testimonial/t2.jpg" alt="" />
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="item">
                            <div class="testi-item">
                                <img src="img/quote.png" alt="" />
                                <div class="mt-40 text">
                                    <p>
                                        As conscious traveling Paup ers we must always be oncerned
                                        about our dear Mother Earth. If you think about it, you
                                        travel across her face <br />
                                        and She is the host to your journey.
                                    </p>
                                </div>
                                <h4>Fanny Spencer</h4>
                                <p>Chief Executive, Amazon</p>
                            </div>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-6">
                        <img src="img/testimonial/t1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Testimonials Area ================= -->


    <!-- ================ Start Popular Course Area ================= -->
    <section class="popular-course-area section-gap">
        <div class="container-fluid">
            <div class="row justify-content-center section-title">
                <div class="col-lg-12">
                    <h2>
                        Nearest Events
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="owl-carousel popuar-course-carusel">
                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p1.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p2.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p3.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>

                <div class="single-popular-course">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="img/popular-course/p4.jpg" alt="" />
                    </div>
                    <div class="details">
                        <div class="d-flex justify-content-between mb-20">
                            <p class="name">programming language</p>
                            <p class="value">$150</p>
                        </div>
                        <a href="#">
                            <h4>Learn Angular JS Course for Legendary Persons</h4>
                        </a>
                        <div class="bottom d-flex mt-15">
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p class="ml-20">25 Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Popular Course Area ================= -->

    <!-- ================ Start Video Area ================= -->
    <section class="video-area section-gap-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h2 class="text-white">
                            Watch Our Profile
                        </h2>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward than the building and
                            launch of the space telescope known as the Hubble.
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-md-6 video-left">
                    <div class="owl-carousel video-carousel">
                        <div class="single-video">
                            <div class="video-part">
                                <img class="img-fluid" src="img/video-img1.jpg" alt="">
                                <div class="overlay"></div>
                                <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=M4ehPNyyda4">
                                    <img class="play-icon" src="img/play-btn.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-white mb-20 mt-30">Learn Angular js Course for Legendary Persons</h4>
                            <p class="text-white mb-20">
                                In the history of modern astronomy, there is probably no one greater leap forward than the building and
                                launch of the space telescope known as the Hubble.
                            </p>
                        </div>

                        <div class="single-video">
                            <div class="video-part">
                                <img class="img-fluid" src="img/video-img2.jpg" alt="">
                                <div class="overlay"></div>
                                <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
                                    <img class="play-icon" src="img/play-btn.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-white mb-20 mt-30">Learn Angular js Course for Legendary Persons</h4>
                            <p class="text-white mb-20">
                                In the history of modern astronomy, there is probably no one greater leap forward than the building and
                                launch of the space telescope known as the Hubble.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Video Area ================= -->

@endsection
