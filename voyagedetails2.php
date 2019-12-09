<?PHP

include "../../core/VoyageC.php";
include "../../entities/Voyage.php";
include "../../entities/comment.php";




if (isset($_GET['idVo'])){ 
    $voyageC =new VoyageC(); 
  
    $result=$voyageC->recupererVoyage($_GET['idVo']);

    foreach($result as $emp){
      
         $idVo= $emp['idVo']; 
           $airline= $emp['airline']; 
           $lieu_aller= $emp['lieu_aller']; 
          $lieu_retour= $emp['lieu_retour'];
            $description= $emp['description']; 
            $nom_hotel=$emp['nom_hotel']; 
            $prix= $emp['prix']; 
            $date_aller= $emp['date_aller'];
            $date_retour=$emp['date_retour']; 
            $image=$emp['image'];
    }

  



}




?>




<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/povo/single-tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:16:06 GMT -->
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
                                            <a href="tours.html" class="nav-link">Tours</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-tours.html" class="nav-link active">Single Tours</a>
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
                                        <a class="nav-link" href="#searchmodal"             data-toggle="modal" data-target="#searchmodal">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a class="nav-link" href="#" data-toggle="modal"        data-target="#myModal">
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
                    <h2>Tours</h2>
                    <p><a href="index-2.html">Home</a> / Tours</p>
                </div>
            </div>
        </section>
        <!-- End Page banner -->

        <!-- Start Single Tours Section -->
        <section class="single-tours-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-tours-item">
                                    <div class="single-tours-image">
                                        <img src="../../entities/img/<?PHP echo $emp['image']; ?>" alt="image">
                                    </div>

                                    <div class="single-tours">
                                        <ul class="tours-list">
                                            <li>
                                                <i class="fa fa-calendar-alt"></i>
                                                1
                                            </li>

                                            <li>
                                                <i class="fa fa-user"></i>
                                                13+
                                            </li>
                                        </ul>
                                    </div>   

                                    <ul class="single-tours-content">
                                        <li>
                                            Destination
                                            <span><?PHP echo $emp['lieu_retour']; ?></span>
                                        </li>

                                        <li>
                                            Date Aller 
                                            <span><?PHP echo $emp['date_aller']; ?></span>
                                        </li>

                                        <li>
                                            Date Retour
                                            <span><?PHP echo $emp['date_retour']; ?></span>
                                        </li>

                                        <li>
                                            Nom d'hotel 
                                            <span><?PHP echo $emp['nom_hotel']; ?></span>
                                        </li>

                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-details">
                                    <h2> <?PHP echo $emp['lieu_retour']; ?></h2>
                                    <ul class="details-list">
                                        <li> <?PHP echo $emp['prix']; ?> TTC</li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li>1 Review</li>
                                    </ul>
                                    <p><?PHP echo $emp['description']; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="tours-sidebar">
                            <div class="sidebar-content">
                                <h2>Plan Your Trip</h2>
                                <p>It’s time to plan just the perfect vacation!</p>
                            </div>

                            <div class="tours-form">
                                <form>
									<input type="text" class="form-control" placeholder="Search Tour">
									<button type="submit">
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
                                <h3>Filter By Price</h3>
                                <p>Price: $450-$3600</p>

                                <ul class="price-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Popular
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Latest
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Europe
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
                                        <label class="form-check-label" for="exampleRadios4">
                                            Wines
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option2">
                                        <label class="form-check-label" for="exampleRadios5">
                                            Trendd
                                        </label>
                                    </div>
                                </ul>
                            </div>

                            <div class="tours-btn">
                                <a href="#" class="tours-btn-one">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Single Tours Section -->

        <!-- Start Form Gallery Section -->
         <!-- 

        <section class="form-gallery-section">
            <div class="container">
                <div class="form-gallery-content">
                    <h3>Form Gallery</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-gallery-image">
                            <img src="assets/img/tours/1.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-gallery-image">
                            <img src="assets/img/tours/2.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="form-gallery-image">
                            <img src="assets/img/tours/3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>



            
                        
        </section>  -->


        <section class="gallery-section">
            <div class="container">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Some beautiful pictures from this trip .</p>
                </div>

                <div id="Container" class="row"> 
                    <div class="col-lg-4 col-sm-6 mix destination tour">
                        <div class="single-work">
                            <div class="work-image">
                               
                                <img src="../../entities/img/<?PHP echo $emp['image']; ?>" alt="gallery">
                                <a href="../../entities/img/<?PHP echo $emp['image']; ?>" class="popup-btn">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mix tourist guides">
                        <div class="single-work">
                            <div class="work-image">
                                <img src="assets/img/gallery/2.jpg" alt="gallery">
                                <a href="assets/img/gallery/2.jpg" class="popup-btn">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mix guides tourist">
                        <div class="single-work">
                            <div class="work-image">
                                <img src="assets/img/gallery/3.jpg" alt="gallery">
                                <a href="assets/img/gallery/3.jpg" class="popup-btn">View</a>
                            </div>
                        </div>
                    </div>

                  
                    

                    <div class="col-lg-4 col-sm-6 mix tour">
                        <div class="single-work">
                            <div class="work-image">
                                <img src="assets/img/gallery/9.jpg" alt="gallery">
                                <a href="assets/img/gallery/9.jpg" class="popup-btn">View</a>
                            </div>
                        </div>
                    </div>
                </div>
  <!-- 

                <div class="gallery-btn">
                    <a href="#" class="gallery-btn-one">View More</a>
                </div> -->
            </div>
        </section>
     
         <div class="container">
        <div class="post-comments">
                            <h3>Comments</h3>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/1.png" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Smith</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment left-m">
                                <div class="comment-img">
                                    <img src="assets/img/client/2.png" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Doe John</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/3.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Steven Doe</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/4.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Cina</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                        </div> 
     
        <div class="leave-a-reply">
             <form method="POST" action="">
                            <h3>Leave a Comment</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" name="sender_name">
                                    </div>
                                </div>
                                

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Comment" name="comment"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time.</label>
                                    </p> 

                                    <div class="send-btn">
                                        
                                        
                                        <input class="send-btn-one" type="submit" name="ajouter" value="ajouter"  >
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                       
                    </div>
         </div>
        <!-- End Form Gallery Section -->

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
                                        </l

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

<!-- Mirrored from templates.envytheme.com/povo/single-tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:16:07 GMT -->
</html>