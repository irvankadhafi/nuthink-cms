<!-- File: ./resources/views/layouts/navbarlp.blade.php -->
<!DOCTYPE html>
<html lang="en">
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
                    <li><a href="/">HOME</a></li>
                    <li><a href="/board">BOARD</a></li>
                    <!-- Dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            DEPARTEMENT
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="elements.html">ADMINISTRASI DAN KESEKERTARIATAN</a>
                            <a class="dropdown-item" href="elements.html">ADVOKASI DAN HAK MAHASISWA</a>
                            <a class="dropdown-item" href="elements.html">DALAM KAMPUS</a>
                            <a class="dropdown-item" href="elements.html">HUBUNGAN LUAR KAMPUS</a>
                            <a class="dropdown-item" href="elements.html">KEUANGAN DAN KEWIRAUSAHAAN</a>
                            <a class="dropdown-item" href="elements.html">KOMUNIKASI DAN INFORMASI</a>
                            <a class="dropdown-item" href="elements.html">PENGEMBANGAN SUMBER DAYA MAHASISWA</a>
                            <a class="dropdown-item" href="elements.html">SOSIAL MASYARAKAT</a>
                            <a class="dropdown-item" href="elements.html">SOSIAL POLITIK</a>

                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            ORMAWA
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="elements.html">ASSALAM</a>
                            <a class="dropdown-item" href="elements.html">BADMINTON</a>
                            <a class="dropdown-item" href="elements.html">BASKET</a>
                            <a class="dropdown-item" href="elements.html">BELA DIRI</a>
                            <a class="dropdown-item" href="elements.html">CATUR</a>
                            <a class="dropdown-item" href="elements.html">ELTRAST</a>
                            <a class="dropdown-item" href="elements.html">FELLAS</a>
                            <a class="dropdown-item" href="elements.html">FLAG FOOTBALL</a>
                            <a class="dropdown-item" href="elements.html">BASKET</a>
                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            NEWS POLBAN
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="course-details.html">BEASISWA</a>
                            <a class="dropdown-item" href="elements.html">EVENTS</a>
                        </div>
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
<!-- ================ start footer Area ================= -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                    <li><a href="#">Managed Website</a></li>
                    <li><a href="#">Manage Reputation</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
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
<!-- ================ End footer Area ================= -->
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
