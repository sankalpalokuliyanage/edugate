<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUGATE SRI LANKA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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
        animation: mymove 5s infinite;
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

    .navbar-toggler {
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
        background: #fff;
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
                    <div id="note" class="text-secondary d-none d-xl-flex"><small style="color: beige;">Sri Lanka's No 1 South Korea Student Visa Consultant</small></div>
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

    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.png" alt="logo" style="width: 100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mg-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn text-white bg-dark px-3 rounded-5" href="#">Reviews</a>
        </li>
      
      </ul>
      
    </div>
  </div>
</nav>


<style>
   .carousel-item {
    position: relative;
}

.carousel-item::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, .6);
}

.carousel-caption {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}

.carousel-item p {
    max-width: 700px;
    margin: 0 auto 35px auto;
}

.carousel-control-prev {
    width: 90px;
    height: 60px;
    position: absolute;
    top: 50%;
    left: 0;
    background: #14389b;
    border-radius: 0 50px 50px 0;
    opacity: 1;
}

.carousel-control-prev:hover {
    background: #1842b6;
    transition: .8s;
}

.carousel-control-next {
    width: 90px;
    height: 60px;
    position: absolute;
    top: 50%;
    right: 0;
    background: #14389b;
    border-radius: 50px 0 0 50px;
    opacity: 1;
}

.carousel-control-next:hover {
    background: #1842b6;
    transition: .8s;
}

.carousel-caption .carousel-content a button.carousel-content-btn1 {
    background: #1842b6;
    color: #000103;
    opacity: 1;
    border: 0;
    border-radius: 20px;
}

.carousel-caption .carousel-content a button.carousel-content-btn1:hover {
    background:  #1842b6;
    color: #ffffff;
    border: 0;
    opacity: 1;
    transition: 1s;
    border-radius: 20px;
}

.carousel-caption .carousel-content a button.carousel-content-btn2 {
    background:  #1842b6;
    color: #ffffff;
    opacity: 1;
    border: 0;
    border-radius: 20px;
}

.carousel-caption .carousel-content a button.carousel-content-btn2:hover {
    background: #000103;
    color: #000103;
    border: 0;
    opacity: 1;
    transition: 1s;
    border-radius: 20px;
}

#carouselId .carousel-indicators li {
    width: 30px;
    height: 10px;
    background: #000103;
    margin: 10px;
    border-radius: 30px;
    opacity: 1;
}

#carouselId .carousel-indicators li:hover {
    background :#000103;
    opacity: 1;
}

@media (max-width: 992px) {
    .carousel-item {
        min-height: 500px;
    }
    
    .carousel-item img {
        min-height: 500px;
        object-fit: cover;
    }

    .carousel-item h1 {
        font-size: 40px !important;
    }

    .carousel-item p {
        font-size: 16px !important;
    }
}

@media (max-width: 768px) {
    .carousel-item {
        min-height: 400px;
    }
    
    .carousel-item img {
        min-height: 400px;
        object-fit: cover;
    }

    .carousel-item h1 {
        font-size: 28px !important;
    }

    .carousel-item p {
        font-size: 14px !important;
    }
}

.page-header {
    background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(../img/carousel-1.jpg) center center no-repeat;
    background-size: cover;
}

.page-header .breadcrumb-item+.breadcrumb-item::before {
    color: #fff;
}

.page-header .breadcrumb-item,
.page-header .breadcrumb-item a {
    font-size: 18px;
    color: #fff;
}

/*** Carousel End ***/
</style>


<!-- Carousel Start -->
<div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">STUDY IN SOUTH KOREA</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Achieve Your Dreams with EduGate Sri Lanka</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Edu Gate Sri Lanka is a premier educational consultancy service dedicated to helping students achieve their dreams of studying South Korea.</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Best Service</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">Your Trusted Partner in Education and Visa Services</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Our consultancy services, we host informative workshops and seminars that cover various aspects of studying South Korea, from visa procedures to cultural adaptation. </p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>