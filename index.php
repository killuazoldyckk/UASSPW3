<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VF Store | No.1 E-commerce</title>

     <!-- connect custom css -->
     <link rel="stylesheet" href="style.css">

     <!-- connect boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

     <!-- import navbar icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

     <!-- import google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
</head>
<body>
<script src="https://kit.fontawesome.com/eb44337108.js" crossorigin="anonymous"></script>
    <div class="header" style="background: radial-gradient(#fff,#a6f1e9) ;">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg" style="background-color:inherit ;">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" width="125px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php" target="blank">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="#">Create an Account</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
                        
            <!-- Landing Page -->
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Berikan yang Terbaik <br> untuk Penampilan Menarik !</h1>
                        <p>Sukses tidak muncul begitu saja, ia lahir melalui konsistensi dan kerja keras.
                            Mari maksimalkan usahamu dengan pakaian yang elegan dari VF Store. 
                        </p>
                        <a href="login.php" class="btn">Jelajahi Sekarang <i class="bi bi-arrow-right-circle"></i> </a>
                    </div>
                    <div class="col-6">
                        <img src="images/image1.png" >
                    </div>
                </div>
            </div>
        </div>
    </div>   

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-4">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-4">
                    <img src="images/category-3.jpg">
                </div>
            </div>
        </div> 
    </div>

    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="d-lg-flex justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img src="images/product-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kaos Sablon Merah</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp. 300.000</p>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="images/product-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sepatu Sport Hitam</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp. 150.000</p>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="images/product-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jogger Sporty Abu-Abu</h5>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rp. 450.000</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <h2 class="title pt-5">Latest Products</h2>
            <div class="d-sm-flex justify-content-center">
                <div class="card m-4" style="width: 18rem;">
                    <img src="images/product-5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Air Jordan 3 (High)</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>Rp. 3.500.000</p>
                    </div>
                </div>
                <div class="card m-4" style="width: 18rem;">
                    <img src="images/product-6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kaos Puma Hitam</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>Rp. 550.000</p>
                    </div>
                </div>
                <div class="card m-4" style="width: 18rem;">
                    <img src="images/product-7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kaos Kaki HRX</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>Rp. 75.000</p>
                    </div>
                </div>
        
            </div>
            <div class="d-sm-flex justify-content-center">
                <div class="card m-4" style="width: 18rem;">
                    <img src="images/product-8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jam Tangan Fossil</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>Rp. 850.000</p>
                    </div>
                </div>
                <div class="card m-4" style="width: 18rem;">
                    <img src="images/product-9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jam Tangan Roadster</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>Rp. 990.000</p>
                    </div>
                </div>
                <div class="card m-4" style="width: 18rem;">
                    <img src="images/product-10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sepatu Futsal Trendy</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>Rp. 350.000</p>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
     <!-- offer -->
     <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-6">
                    <img src="images/exclusive.png">
                </div>
                <div class="col-6">
                    <p>Hadir Eksklusif di VFSTORE</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small>
                    <br><a href="" class="btn">Buy Now &#8594;</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Adminnya ramah banget dan pengirimannya cepat sampai, gak nyesel deh!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Angela Siadari</h3>
                </div>
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Pelayanan memuaskan dan barangnya juga sesuai dengan foto display. Pasti Beli lagi dehhh!!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Harry Sion</h3>
                </div>
                <div class="col-4">
                    <i class="fa fa-quote-left"></i>
                    <p>Sangat Memuaskan !! Barangnya cepat sampai dan pelayanannya sangat ramah.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-3.png">
                    <h3>Ester Rosahana</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-2">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-2">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-2">
                    <img src="images/logo-philips.png">
                </div>
                <div class="col-2">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-2">
                    <img src="images/logo-white.png">
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Sekarang</h3>
                    <p>Download Aplikasi VFSTORE untuk Android dan IOS Disini ! </p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="img/logo-rev.png">
                    <p>Memberikan Pelayanan Terbaik dengan Mengedepankan Kenyamanan Berbelanja</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Kupon</li>
                        <li>Laman Blog</li>
                        <li>Syarat Pengembalian</li>
                        <li>Gabung Afiliasi</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Vio Aprivia</p>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>