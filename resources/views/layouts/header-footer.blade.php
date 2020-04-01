<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>BEM KEMA POLBAN</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
    <!--
        CSS
        =============================================
      -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/hexagons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
<!-- ================ Start Header Area ================= -->
<header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-menu"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a href="index.html">HOME</a></li>
                    <!-- Dropdown -->
                    <li>
                        <a href="#" >
                            DEPARTEMENT
                        </a>
                    </li>
                    <!-- Dropdown -->
                    <li>
                        <a href="#">
                            ORMAWA
                        </a>
                    </li>
                    <!-- Dropdown -->
                    <li>
                        <a href="#">
                            POLBAN NEWS
                        </a>
                    </li>
                    <li>
                        <a href="contacts.html">ADVO CARE</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a></li>

                    <li>
                        <button class="search">
                            <span class="lnr lnr-magnifier" id="search"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="search-input" id="search-input-box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- ================ End Header Area ================= -->
<div id="app">
    @yield('content')
</div>
{{--<!-- ================ start footer Area ================= -->--}}
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Tentang Website</h4>
                <ul>
                    <li><a>Website ini dikelola oleh <br> Departemen Komunikasi dan Informasi<br> BEM KEMA POLBAN 2019/2020</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Contact Person</h4>
                <ul>
                    <li><a href="#"><b>Rizky Aulia Rahmania</b></a></li>
                    <li><a href="#">089629768318</a></li>
                    <li><a href="#">ID LINE</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Ikuti Sosial Media Kami</h4>
                <div class="footer-bottom row align-items-center">
                    <div class="footer-social">
                        <table>
                            <td>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </td>
                            <td>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </td>
                            <td>
                                <a href="https://www.instagram.com/bemkemapolban/?hl=id"><i class="fa fa-instagram"></i></a>
                            </td>
                            <td>
                                <a href="#"><i class="fa fa-line-chart "></i></a>
                            </td>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row pt-12 mt-12 text-center">
                <div class="col-md-12">
                    <div align="center" class="border-top pt-1">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>
{{--<!-- ================ End footer Area ================= -->--}}


{{--<!-- ##### Footer Add Area Start ##### -->--}}
{{--<div class="footer-add-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="footer-add">--}}
{{--                    <a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- ##### Footer Add Area End ##### -->--}}

{{--<!-- ##### Footer Area Start ##### -->--}}
{{--<footer class="footer-area">--}}

{{--    <!-- Main Footer Area -->--}}
{{--    <div class="main-footer-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <!-- Footer Widget Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                    <div class="footer-widget-area mt-80">--}}
{{--                        <!-- Footer Logo -->--}}
{{--                        <div class="footer-logo">--}}
{{--                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <!-- List -->--}}
{{--                        <ul class="list">--}}
{{--                            <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>--}}
{{--                            <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>--}}
{{--                            <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Footer Widget Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-2">--}}
{{--                    <div class="footer-widget-area mt-80">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="widget-title">Politics</h4>--}}
{{--                        <!-- List -->--}}
{{--                        <ul class="list">--}}
{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Markets</a></li>--}}
{{--                            <li><a href="#">Tech</a></li>--}}
{{--                            <li><a href="#">Luxury</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Footer Widget Area -->--}}
{{--                <div class="col-12 col-sm-4 col-lg-2">--}}
{{--                    <div class="footer-widget-area mt-80">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="widget-title">Featured</h4>--}}
{{--                        <!-- List -->--}}
{{--                        <ul class="list">--}}
{{--                            <li><a href="#">Football</a></li>--}}
{{--                            <li><a href="#">Golf</a></li>--}}
{{--                            <li><a href="#">Tennis</a></li>--}}
{{--                            <li><a href="#">Motorsport</a></li>--}}
{{--                            <li><a href="#">Horseracing</a></li>--}}
{{--                            <li><a href="#">Equestrian</a></li>--}}
{{--                            <li><a href="#">Sailing</a></li>--}}
{{--                            <li><a href="#">Skiing</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Footer Widget Area -->--}}
{{--                <div class="col-12 col-sm-4 col-lg-2">--}}
{{--                    <div class="footer-widget-area mt-80">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="widget-title">FAQ</h4>--}}
{{--                        <!-- List -->--}}
{{--                        <ul class="list">--}}
{{--                            <li><a href="#">Aviation</a></li>--}}
{{--                            <li><a href="#">Business</a></li>--}}
{{--                            <li><a href="#">Traveller</a></li>--}}
{{--                            <li><a href="#">Destinations</a></li>--}}
{{--                            <li><a href="#">Features</a></li>--}}
{{--                            <li><a href="#">Food/Drink</a></li>--}}
{{--                            <li><a href="#">Hotels</a></li>--}}
{{--                            <li><a href="#">Partner Hotels</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Footer Widget Area -->--}}
{{--                <div class="col-12 col-sm-4 col-lg-2">--}}
{{--                    <div class="footer-widget-area mt-80">--}}
{{--                        <!-- Title -->--}}
{{--                        <h4 class="widget-title">+More</h4>--}}
{{--                        <!-- List -->--}}
{{--                        <ul class="list">--}}
{{--                            <li><a href="#">Fashion</a></li>--}}
{{--                            <li><a href="#">Design</a></li>--}}
{{--                            <li><a href="#">Architecture</a></li>--}}
{{--                            <li><a href="#">Arts</a></li>--}}
{{--                            <li><a href="#">Autos</a></li>--}}
{{--                            <li><a href="#">Luxury</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Bottom Footer Area -->--}}
{{--    <div class="bottom-footer-area">--}}
{{--        <div class="container h-100">--}}
{{--            <div class="row h-100 align-items-center">--}}
{{--                <div class="col-12">--}}
{{--                    <!-- Copywrite -->--}}
{{--                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
{{--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
{{--<!-- ##### Footer Area Start ##### -->--}}



<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/hexagons.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
