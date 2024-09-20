<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUGATE GLOBAL</title>

    <!-- Favicons -->
    <link href="img/Logo_global.png" rel="icon">
    <link href="img/Logo_global.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- Include Animate.css for animations (required for WOW.js) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>




</head>
<body>

<style>

    * {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    
    .topbar .top-info {
        letter-spacing: 1px;
    }

    .topbar .top-link {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .topbar .top-link a {
        margin-right: 10px;
    }

    #note {
        width: 500px;
        overflow: hidden;
    }

    #note small {
        position: relative;
        display: inline-block;
        animation: mymove 10s infinite;
        animation-timing-function: all;
    }

    @keyframes mymove {
        from {left: -100%;}
        to {left: 100%;}
    }


    .navbar {
        padding: 15px 0;
    }
    
    .navbar a {
        font-family: "Bebas Neue", sans-serif;
        font-size: 20px;
        font-weight: 500;
        
    }

    .navbar .logo {
        width: 100px;
    }

    .navbar-toggler {
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
        background: #fff;
    }


    @media (max-width: 768px) {



        .navbar {
        padding: 2px 0;
    }

    .navbar .logo {
        width: 50px;
    }

    .navbar a {
        font-family: "Bebas Neue", sans-serif;
        font-size: 16px;
        font-weight: 500;
        
    }
    
}

/* Mega Menu Full Width */
.nav-item.dropdown {
    position: static; /* Ensures dropdown is relative to the navbar */
}

.dropdown-menu {
    width: 100vw; /* Make dropdown menu full width */
    left: 0; /* Align to the left edge of the screen */
    right: 0; /* Align to the right edge of the screen */
    top: 100%; /* Position below the navbar */
    padding: 2rem;
    background-color: #f8f9fa; /* Light background */
    border: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 0;
}

.dropdown-menu .container {
    max-width: 100%; /* Full width for the container within the dropdown */
}

.dropdown-header {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #333;
}

.dropdown-item {
    display: block;
    /* padding: 0.5rem 0; */
    font-size: 14px;
    color: #555;
    transition: color 0.3s ease;
}



/* Navbar Button Styling */
.nav-link.btn {
    font-size: 1rem;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
}

/* Responsive Styles for Mega Menu */
@media (max-width: 992px) {
    .dropdown-menu {
        padding: 1rem 1rem;
    }
    
    .dropdown-header {
        font-size: 0.8rem;
    }

    .dropdown-item {
        font-size: 0.6rem;
    }

    .dropdown-menu .row > div {
        padding: 0.5rem 0;
    }
}


    
</style>



<!-- Topbar Start -->
<div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><b>275/2, HIGH LEVEL ROAD, PITIPANA JUNCTION,<br>  HOMAGAMA, SRI LANKA.</b></small>
                        <!-- <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>Email@Example.com</small> -->
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small style="color: beige;">No 1 South Korea Student Visa Consultant</small></div>
                    <div class="top-link">
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        <!-- <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a> -->
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        <!-- <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

   <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/Logo_global.png" class="logo" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mg-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://edugateglobal.com">Home</a>
                </li>
               
                <!-- Programs Dropdown with Mega Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Programs
                    </a>
                    <div class="dropdown-menu p-4" aria-labelledby="programsDropdown">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">DIPLOMA OR ASSOCIATE DEGREE</h6>
                                    <p class="dropdown-item" href="#">KOREAN LANGUAGE PROGRAM</p>
                                    <p class="dropdown-item" href="#">INFORMATION TECHNOLOGY</p>
                                   
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">BACHELOR DEGREE</h6>
                                    <p class="dropdown-item" href="#">GLOBAL BUSINESS</p>
                                    <p class="dropdown-item" href="#">COMPUTER ENGINEERING</p>
                                    <p class="dropdown-item" href="#">MECHATRONICS ENGINEERING</p>
                                    <p class="dropdown-item" href="#">INFORMATION SYSTEM AND SECURITY</p>
                                    <p class="dropdown-item" href="#">BUSINESS ADMINISTRATION</p>
                                    <p class="dropdown-item" href="#">INTERNATIONAL TOURISM MANAGEMENT</p>
                                    <p class="dropdown-item" href="#">SOFTWARE ENGINEERING</p>
                                    <p class="dropdown-item" href="#">ARTIFICIAL INTELLIGENCE</p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">MASTERS AND PHD</h6>
                                    <p class="dropdown-item" href="#">SOFTWARE AI</p>
                                    <p class="dropdown-item" href="#">CHEMICAL ENGINEERING</p>
                                    <p class="dropdown-item" href="#">ARCHITECTURAL ENGINEERING</p>
                                    <p class="dropdown-item" href="#">MECHANICAL AND AUTOMOTIVE ENGINEERING</p>
                                    <p class="dropdown-item" href="#">CIVIL ENGINEERING</p>
                                    <p class="dropdown-item" href="#">ENVIRONMENTAL ENGINEERING</p>
                                    <a class="dropdown-item" href="allgraduateprograms.php">See more</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn text-white bg-dark px-3 rounded-5" href="successstories.php">SUCCESS STORIES</a>
                </li>
            </ul>
        </div>
    </div>
</nav>







<section id = "footer">
        <!-- Footer Start -->
        <div class="container-fluid footer" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">EDUGATE<span class="text-secondary"> GLOBAL</span> </h1>
                        </a>
                        <p class="mt-4 text-light">EduGate Global is an educational consultancy that specifically focuses on facilitating higher education opportunities in South Korea. The organization is dedicated to helping Global students navigate the process of applying to universities and colleges in South Korea. </p>
                        <div class="d-flex ">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <!-- <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a> -->
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="#about" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                            <a href="#contact" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                            <a href="successstories.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Success Stories</a>
                            <!-- <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a> -->
                            <!-- <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a> -->
                            <!-- <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Latest Blog</a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light "><i class="fas fa-map-marker-alt text-secondary me-2"></i> <span class= "text-secondary">HEAD OFFICE:</span><br> 275/2, HIGH LEVEL ROAD, PITIPANA JUNCTION,
                            HOMAGAMA, SRI LANKA.</a>
                            
                            <a href="#" class=" text-light "><i class="fas fa-phone-alt text-secondary me-2"></i> +94 117 241 805</a>
                            <a href="#" class=" text-light "><i class="fa-brands fa-whatsapp text-secondary me-2"></i> +94 741 155 330</a>
                            <a href="#" class=" text-light "><i class="fas fa-envelope text-secondary me-2"></i> info@edugateglobal.com</a>
                            <br>
                            <a href="#" class="pb-3 text-light "><i class="fas fa-map-marker-alt text-secondary me-2"></i> <span class= "text-secondary">SOUTH KOREA OFFICE: </span><br> 대구 수성구 달구벌대로 2666-1 3F</a>
                            
                            <a href="#" class=" text-light "><i class="fas fa-phone-alt text-secondary me-2"></i> +82 10 5966 5946</a>
                            <a href="#" class=" text-light "><i class="fa-brands fa-whatsapp text-secondary me-2"></i> +82 10 5966 5946</a>
                            <a href="#" class=" text-light "><i class="fas fa-envelope text-secondary me-2"></i> info@edugateglobal.com</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class=" text-light border-top border-primary border-bottom border-primary" style = "padding-top: 10px;"><i class="fas fa-map-marker-alt text-secondary me-2"></i> <span class= "text-secondary">ANURADHAPURA BRANCH:</span> ANURADHAPURA, SRI LANKA.</a>
                            <!-- <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +94 117 241 805</a> -->
                            <a href="#" class="text-light" style = "margin-top: 10px;"><i class="fas fa-map-marker-alt text-secondary me-2"></i> <span class= "text-secondary">POLONNARUWA BRANCH:</span> POLONNARUWA, SRI LANKA.</a>
                            <!-- <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +94 117 241 805</a> -->
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><i class="fas fa-copyright text-secondary me-2"></i>EDUGATE GLOBAL, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Designed By <a href="https://sankalpalokuliyanage.github.io" class="text-secondary">SANKALPA LOKULIYANAGE</a> </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        </section>


        <style>
            /*** Footer Start ***/

.footer {
    margin-top: 30px;
    background-color: #000;
}

.footer .short-link a,
.footer .help-link a,
.footer .contact-link a {
    text-decoration: none;

}




        </style>




<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>