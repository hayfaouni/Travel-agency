<?PHP
include "../../core/voyageC.php";
$voyage1C=new voyageC();
if (isset($_POST['search2'])) 
{
    if ($_POST['search1'] == "")
    {
        $listevoyages=$voyage1C->affichervoyagEs();
    }
    else 
    {
        $listevoyages=$voyage1C->rechercherListevoyages($_POST['search1']);
    }
}

else 
if (isset($_POST['croissant'])) 
{  
        $listevoyages=$voyage1C->affichervoyagescroissant();
    
     
    
}

else 
if (isset($_POST['decroissant'])) 
{  
        $listevoyages=$voyage1C->affichervoyagesdecroissant();
    
     
    
}
else
  $listevoyages=$voyage1C->affichervoyages();  


//var_dump($listevoyages->fetchAll());
?>


<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- TITLE -->
    <title>Povo - Travel Agency & Tourism HTML Template</title>
</head>

<body>

    <!-- Start Loader -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- End Loader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area  header-sticky">
        <div class="povo-mobile-nav">
            <div class="logo">
                <a href="index-2.html">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
            </div>
        </div>

        <div class="povo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-2.html"><img src="assets/img/logo.png" alt="logo"></a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item"><a href="#" class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home One</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-two.html" class="nav-link">Home Two</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link active">Tours <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="tours.html" class="nav-link active">Tours</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="single-tours.html" class="nav-link">Single Tours</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">Gallery</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Tours </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="tours.html" class="nav-link">Tours</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="single-tours.html" class="nav-link">Single Tours</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">News</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="news.html" class="nav-link">News</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="single-news.html" class="nav-link">Single News</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">Faq</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="signup.html" class="nav-link">Signup</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="login.html" class="nav-link">Login</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">404 Error</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">News <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="news.html" class="nav-link">News</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="single-news.html" class="nav-link">Single News</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <div class="others-options">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="signup.html" class="nav-link">Sign Up</a>
                                </li>

                                <li class="nav-item">
                                    <select class="lang">
                                        <option>English</option>
                                        <option>Australia</option>
                                    </select>
                                </li>

                                <li class="nav">
                                    <a class="nav-link" href="#searchmodal" data-toggle="modal" data-target="#searchmodal">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>

                                <li class="nav">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Right Side Modal -->
    <div class="modal right fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>

                    <p>Lorem Ipsum is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    <ul class="modal-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> <b>27 Division St</b>New York, NY 10002, USA
                        </li>

                        <li>
                            <i class="fas fa-phone"></i> <b>+0 (321) 984 754</b>Give us a call
                        </li>

                        <li>
                            <i class="fas fa-envelope"></i><b>upstart@gmail.com</b>24/7 online support
                        </li>
                    </ul>

                    <ul class="social-links">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Right Side Modal -->

    <!-- Search Modal -->
    <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="search-form">
                        <input type="search" class="form-control" id="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->

    <!-- Page banner -->
    <section class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <h2>Voyages</h2>
                <p><a href="index-2.html">Home</a> / Voyages</p>
            </div>
        </div>
    </section>
    <!-- End Page banner -->

    <!-- Start Tours Section --> 
    <section class="tours-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?PHP foreach($listevoyages as $row){?>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            
        
                                
                                    <ul class="tours-list">
                                         
                                        

                                             
                        <div class="popular-area">
                            <div class="popular-image">
                                 

                                <a href="voyagedetails3.php?idVo=<?PHP echo $row['idVo']; ?>">
                                <img src="../../entities/img/<?PHP echo $row['image']; ?>" alt="image">

                                <div class="read-more">
                                    <a href="voyagedetails.php?idVo=<?PHP echo $row['idVo']; ?>" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3><?PHP echo $row['lieu_retour']; ?></h3>
                                <p><?PHP echo substr( $row['description'],0,70);
                                 if (strlen($row['description'])> 90) echo "... " ?> </p>
                                <span>From <?PHP echo $row['prix']; ?>dinars</span>

                                <div class="popular-icon">
                                    <a href="voyagedetails.php?idVo=<?PHP echo $row['idVo']; ?>">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
            
                        
                            

                           



                       
                    


                                        <br>
                                        
                                    


                              
                            
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="tours-sidebar">
                        <div class="sidebar-content">
                            <h2>Plan Your Trip</h2>
                            <p>It’s time to plan just the perfect vacation!</p>
                        </div>

                        <div class="tours-form">
                            <form name="f1" method="post">
                                <input type="text" class="form-control" placeholder="Search Voyage" name="search1">
                                <button type="submit" name="search2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <ul class="tours-where">
                                <li>
                                    <i class="flaticon-safari"></i>
                                    Where To
                                </li>

                                <li class="text-left">
                                    <i class="flaticon-calendar"></i>
                                    Month
                                </li>
                            </ul>

                            <div class="tours-price">
                                <h3 style="text-align:center;">Filter By Price</h3>
                                <p style="text-align:center;">Price: $450-$3600</p>

                                <ul class="price-list">
                                     <form method="post"> 
                                    <div class="form-check">
                                         <button type="submit" name="decroissant" class="form-control"  >
                                   Prix :$$-$
                                </button>  
                                
                                    <button type="submit" name="croissant" class="form-control" >
                                  Prix :$-$$
                                </button>  
                                        
                                    </div>
                                </form>
                                  
                                    
                                </ul>
                                
                                 

                                   
                                
                                

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tours Section -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content">
                        <h2>About Crafted</h2>
                    </div>

                    <div class="footer-item">
                        <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="footer-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="menu-item">
                        <div class="footer-content">
                            <h2>Useful Links</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="quick-menu">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>

                                    <li>
                                        <a href="#">Services</a>
                                    </li>

                                    <li>
                                        <a href="#">Projects</a>
                                    </li>

                                    <li>
                                        <a href="#">Tours</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="quick-menu">
                                    <li>
                                        <a href="#">Team</a>
                                    </li>

                                    <li>
                                        <a href="#">Blog</a>
                                    </li>

                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>

                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content">
                        <h2>Newsletter</h2>
                    </div>

                    <div class="footer-info">
                        <p class="mb-15">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt et.</p>

                        <div class="newsletter-content">
                            <input type="email" class="form-control" placeholder="Enter Email">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-content">
                        <h2>Instagram</h2>
                    </div>
                    <ul class="instagram-feed">
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/1.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/2.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/3.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/4.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/5.png" alt="image">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/instagram/6.png" alt="image">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer section -->

    <!-- End Footer Bottom section -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p> 2019, EnvyTheme. All Rights Reserved by Povo</p>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom section -->

    <!-- Button Section -->
    <div class="go-top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!-- End Button Section -->


    <!-- jQuery Min JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Min JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Mean Menu Min JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Nice Select Min JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Mixitup Min JS -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- Upstart Map JS -->
    <script src="assets/js/upstart-map.js"></script>
    <!-- Active JS -->
    <script src="assets/js/active.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/povo/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:16:06 GMT -->

</html>
