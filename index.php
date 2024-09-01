<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUGATE GLOBAL</title>

    <!-- Favicons -->
    <link href="img/Logo.png" rel="icon">
    <link href="img/Logo.png" rel="apple-touch-icon">

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

    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/Logo_global.png" class = "logo" alt="logo" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mg-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#team">Our Team</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#review">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn text-white bg-dark px-3 rounded-5" href="#contact">Contact Us</a>
        </li>
      
      </ul>
      
    </div>
  </div>
</nav>


<style>
   .carousel-item {
    position: relative;
    margin-top: -90px;
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

.carousel-item h6 {
    margin-top: 400px;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
}

.carousel-item h1 {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    font-style: normal;
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
    margin-bottom: 25%;
}

.carousel-caption .carousel-content a button.carousel-content-btn1:hover {
    background:  #1842b6;
    color: #ffffff;
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

    .carousel-item h6 {
    margin-top: 200px;
    font-family: "Roboto", sans-serif;
    font-size: 12px;
    font-weight: 700;
}
    .carousel-item h1 {
        font-size: 18px !important;
    }

    .carousel-item p {
        font-size: 10px !important;
    }

    .carousel-control-prev {
    width: 60px;
    height: 40px;

}



.carousel-control-next {
    width: 60px;
    height: 40px;

}

.carousel-control-next-icon, .carousel-control-prev-icon {
    width: 18px;
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

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUp {
  animation-name: fadeInUp;
}

.animated{animation-duration:1s;animation-fill-mode:both}.animated.infinite{animation-iteration-count:infinite}.animated.hinge{animation-duration:2s}.animated.bounceIn,.animated.bounceOut,.animated.flipOutX,.animated.flipOutY{animation-duration:.75s}@keyframes bounce{0%,20%,53%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1);transform:translateZ(0)}40%,43%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-30px,0)}70%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-15px,0)}90%{transform:translate3d(0,-4px,0)}}.bounce{animation-name:bounce;transform-origin:center bottom}@keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}.flash{animation-name:flash}@keyframes pulse{0%{transform:scaleX(1)}50%{transform:scale3d(1.05,1.05,1.05)}to{transform:scaleX(1)}}.pulse{animation-name:pulse}@keyframes rubberBand{0%{transform:scaleX(1)}30%{transform:scale3d(1.25,.75,1)}40%{transform:scale3d(.75,1.25,1)}50%{transform:scale3d(1.15,.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scaleX(1)}}.rubberBand{animation-name:rubberBand}@keyframes shake{0%,to{transform:translateZ(0)}10%,30%,50%,70%,90%{transform:translate3d(-10px,0,0)}20%,40%,60%,80%{transform:translate3d(10px,0,0)}}.shake{animation-name:shake}@keyframes headShake{0%{transform:translateX(0)}6.5%{transform:translateX(-6px) rotateY(-9deg)}18.5%{transform:translateX(5px) rotateY(7deg)}31.5%{transform:translateX(-3px) rotateY(-5deg)}43.5%{transform:translateX(2px) rotateY(3deg)}50%{transform:translateX(0)}}.headShake{animation-timing-function:ease-in-out;animation-name:headShake}@keyframes swing{20%{transform:rotate(15deg)}40%{transform:rotate(-10deg)}60%{transform:rotate(5deg)}80%{transform:rotate(-5deg)}to{transform:rotate(0deg)}}.swing{transform-origin:top center;animation-name:swing}@keyframes tada{0%{transform:scaleX(1)}10%,20%{transform:scale3d(.9,.9,.9) rotate(-3deg)}30%,50%,70%,90%{transform:scale3d(1.1,1.1,1.1) rotate(3deg)}40%,60%,80%{transform:scale3d(1.1,1.1,1.1) rotate(-3deg)}to{transform:scaleX(1)}}.tada{animation-name:tada}@keyframes wobble{0%{transform:none}15%{transform:translate3d(-25%,0,0) rotate(-5deg)}30%{transform:translate3d(20%,0,0) rotate(3deg)}45%{transform:translate3d(-15%,0,0) rotate(-3deg)}60%{transform:translate3d(10%,0,0) rotate(2deg)}75%{transform:translate3d(-5%,0,0) rotate(-1deg)}to{transform:none}}.wobble{animation-name:wobble}@keyframes jello{0%,11.1%,to{transform:none}22.2%{transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{transform:skewX(6.25deg) skewY(6.25deg)}44.4%{transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{transform:skewX(.390625deg) skewY(.390625deg)}88.8%{transform:skewX(-.1953125deg) skewY(-.1953125deg)}}.jello{animation-name:jello;transform-origin:center}@keyframes bounceIn{0%,20%,40%,60%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:scale3d(.3,.3,.3)}20%{transform:scale3d(1.1,1.1,1.1)}40%{transform:scale3d(.9,.9,.9)}60%{opacity:1;transform:scale3d(1.03,1.03,1.03)}80%{transform:scale3d(.97,.97,.97)}to{opacity:1;transform:scaleX(1)}}.bounceIn{animation-name:bounceIn}@keyframes bounceInDown{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(0,-3000px,0)}60%{opacity:1;transform:translate3d(0,25px,0)}75%{transform:translate3d(0,-10px,0)}90%{transform:translate3d(0,5px,0)}to{transform:none}}.bounceInDown{animation-name:bounceInDown}@keyframes bounceInLeft{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(-3000px,0,0)}60%{opacity:1;transform:translate3d(25px,0,0)}75%{transform:translate3d(-10px,0,0)}90%{transform:translate3d(5px,0,0)}to{transform:none}}.bounceInLeft{animation-name:bounceInLeft}@keyframes bounceInRight{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(3000px,0,0)}60%{opacity:1;transform:translate3d(-25px,0,0)}75%{transform:translate3d(10px,0,0)}90%{transform:translate3d(-5px,0,0)}to{transform:none}}.bounceInRight{animation-name:bounceInRight}@keyframes bounceInUp{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(0,3000px,0)}60%{opacity:1;transform:translate3d(0,-20px,0)}75%{transform:translate3d(0,10px,0)}90%{transform:translate3d(0,-5px,0)}to{transform:translateZ(0)}}.bounceInUp{animation-name:bounceInUp}@keyframes bounceOut{20%{transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;transform:scale3d(1.1,1.1,1.1)}to{opacity:0;transform:scale3d(.3,.3,.3)}}.bounceOut{animation-name:bounceOut}@keyframes bounceOutDown{20%{transform:translate3d(0,10px,0)}40%,45%{opacity:1;transform:translate3d(0,-20px,0)}to{opacity:0;transform:translate3d(0,2000px,0)}}.bounceOutDown{animation-name:bounceOutDown}@keyframes bounceOutLeft{20%{opacity:1;transform:translate3d(20px,0,0)}to{opacity:0;transform:translate3d(-2000px,0,0)}}.bounceOutLeft{animation-name:bounceOutLeft}@keyframes bounceOutRight{20%{opacity:1;transform:translate3d(-20px,0,0)}to{opacity:0;transform:translate3d(2000px,0,0)}}.bounceOutRight{animation-name:bounceOutRight}@keyframes bounceOutUp{20%{transform:translate3d(0,-10px,0)}40%,45%{opacity:1;transform:translate3d(0,20px,0)}to{opacity:0;transform:translate3d(0,-2000px,0)}}.bounceOutUp{animation-name:bounceOutUp}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}@keyframes fadeInDown{0%{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.fadeInDown{animation-name:fadeInDown}@keyframes fadeInDownBig{0%{opacity:0;transform:translate3d(0,-2000px,0)}to{opacity:1;transform:none}}.fadeInDownBig{animation-name:fadeInDownBig}@keyframes fadeInLeft{0%{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInLeftBig{0%{opacity:0;transform:translate3d(-2000px,0,0)}to{opacity:1;transform:none}}.fadeInLeftBig{animation-name:fadeInLeftBig}@keyframes fadeInRight{0%{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.fadeInRight{animation-name:fadeInRight}@keyframes fadeInRightBig{0%{opacity:0;transform:translate3d(2000px,0,0)}to{opacity:1;transform:none}}.fadeInRightBig{animation-name:fadeInRightBig}@keyframes fadeInUp{0%{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.fadeInUp{animation-name:fadeInUp}@keyframes fadeInUpBig{0%{opacity:0;transform:translate3d(0,2000px,0)}to{opacity:1;transform:none}}.fadeInUpBig{animation-name:fadeInUpBig}@keyframes fadeOut{0%{opacity:1}to{opacity:0}}.fadeOut{animation-name:fadeOut}@keyframes fadeOutDown{0%{opacity:1}to{opacity:0;transform:translate3d(0,100%,0)}}.fadeOutDown{animation-name:fadeOutDown}@keyframes fadeOutDownBig{0%{opacity:1}to{opacity:0;transform:translate3d(0,2000px,0)}}.fadeOutDownBig{animation-name:fadeOutDownBig}@keyframes fadeOutLeft{0%{opacity:1}to{opacity:0;transform:translate3d(-100%,0,0)}}.fadeOutLeft{animation-name:fadeOutLeft}@keyframes fadeOutLeftBig{0%{opacity:1}to{opacity:0;transform:translate3d(-2000px,0,0)}}.fadeOutLeftBig{animation-name:fadeOutLeftBig}@keyframes fadeOutRight{0%{opacity:1}to{opacity:0;transform:translate3d(100%,0,0)}}.fadeOutRight{animation-name:fadeOutRight}@keyframes fadeOutRightBig{0%{opacity:1}to{opacity:0;transform:translate3d(2000px,0,0)}}.fadeOutRightBig{animation-name:fadeOutRightBig}@keyframes fadeOutUp{0%{opacity:1}to{opacity:0;transform:translate3d(0,-100%,0)}}.fadeOutUp{animation-name:fadeOutUp}@keyframes fadeOutUpBig{0%{opacity:1}to{opacity:0;transform:translate3d(0,-2000px,0)}}.fadeOutUpBig{animation-name:fadeOutUpBig}@keyframes flip{0%{transform:perspective(400px) rotateY(-1turn);animation-timing-function:ease-out}40%{transform:perspective(400px) translateZ(150px) rotateY(-190deg);animation-timing-function:ease-out}50%{transform:perspective(400px) translateZ(150px) rotateY(-170deg);animation-timing-function:ease-in}80%{transform:perspective(400px) scale3d(.95,.95,.95);animation-timing-function:ease-in}to{transform:perspective(400px);animation-timing-function:ease-in}}.animated.flip{-webkit-backface-visibility:visible;backface-visibility:visible;animation-name:flip}@keyframes flipInX{0%{transform:perspective(400px) rotateX(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateX(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateX(10deg);opacity:1}80%{transform:perspective(400px) rotateX(-5deg)}to{transform:perspective(400px)}}.flipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInX}@keyframes flipInY{0%{transform:perspective(400px) rotateY(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateY(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateY(10deg);opacity:1}80%{transform:perspective(400px) rotateY(-5deg)}to{transform:perspective(400px)}}.flipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInY}@keyframes flipOutX{0%{transform:perspective(400px)}30%{transform:perspective(400px) rotateX(-20deg);opacity:1}to{transform:perspective(400px) rotateX(90deg);opacity:0}}.flipOutX{animation-name:flipOutX;-webkit-backface-visibility:visible!important;backface-visibility:visible!important}@keyframes flipOutY{0%{transform:perspective(400px)}30%{transform:perspective(400px) rotateY(-15deg);opacity:1}to{transform:perspective(400px) rotateY(90deg);opacity:0}}.flipOutY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipOutY}@keyframes lightSpeedIn{0%{transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{transform:skewX(20deg);opacity:1}80%{transform:skewX(-5deg);opacity:1}to{transform:none;opacity:1}}.lightSpeedIn{animation-name:lightSpeedIn;animation-timing-function:ease-out}@keyframes lightSpeedOut{0%{opacity:1}to{transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}.lightSpeedOut{animation-name:lightSpeedOut;animation-timing-function:ease-in}@keyframes rotateIn{0%{transform-origin:center;transform:rotate(-200deg);opacity:0}to{transform-origin:center;transform:none;opacity:1}}.rotateIn{animation-name:rotateIn}@keyframes rotateInDownLeft{0%{transform-origin:left bottom;transform:rotate(-45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.rotateInDownLeft{animation-name:rotateInDownLeft}@keyframes rotateInDownRight{0%{transform-origin:right bottom;transform:rotate(45deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.rotateInDownRight{animation-name:rotateInDownRight}@keyframes rotateInUpLeft{0%{transform-origin:left bottom;transform:rotate(45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.rotateInUpLeft{animation-name:rotateInUpLeft}@keyframes rotateInUpRight{0%{transform-origin:right bottom;transform:rotate(-90deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.rotateInUpRight{animation-name:rotateInUpRight}@keyframes rotateOut{0%{transform-origin:center;opacity:1}to{transform-origin:center;transform:rotate(200deg);opacity:0}}.rotateOut{animation-name:rotateOut}@keyframes rotateOutDownLeft{0%{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate(45deg);opacity:0}}.rotateOutDownLeft{animation-name:rotateOutDownLeft}@keyframes rotateOutDownRight{0%{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate(-45deg);opacity:0}}.rotateOutDownRight{animation-name:rotateOutDownRight}@keyframes rotateOutUpLeft{0%{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate(-45deg);opacity:0}}.rotateOutUpLeft{animation-name:rotateOutUpLeft}@keyframes rotateOutUpRight{0%{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate(90deg);opacity:0}}.rotateOutUpRight{animation-name:rotateOutUpRight}@keyframes hinge{0%{transform-origin:top left;animation-timing-function:ease-in-out}20%,60%{transform:rotate(80deg);transform-origin:top left;animation-timing-function:ease-in-out}40%,80%{transform:rotate(60deg);transform-origin:top left;animation-timing-function:ease-in-out;opacity:1}to{transform:translate3d(0,700px,0);opacity:0}}.hinge{animation-name:hinge}@keyframes jackInTheBox{0%{opacity:0;transform:scale(.1) rotate(30deg);transform-origin:center bottom}50%{transform:rotate(-10deg)}70%{transform:rotate(3deg)}to{opacity:1;transform:scale(1)}}.jackInTheBox{animation-name:jackInTheBox}@keyframes rollIn{0%{opacity:0;transform:translate3d(-100%,0,0) rotate(-120deg)}to{opacity:1;transform:none}}.rollIn{animation-name:rollIn}@keyframes rollOut{0%{opacity:1}to{opacity:0;transform:translate3d(100%,0,0) rotate(120deg)}}.rollOut{animation-name:rollOut}@keyframes zoomIn{0%{opacity:0;transform:scale3d(.3,.3,.3)}50%{opacity:1}}.zoomIn{animation-name:zoomIn}@keyframes zoomInDown{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInDown{animation-name:zoomInDown}@keyframes zoomInLeft{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(10px,0,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInLeft{animation-name:zoomInLeft}@keyframes zoomInRight{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInRight{animation-name:zoomInRight}@keyframes zoomInUp{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInUp{animation-name:zoomInUp}@keyframes zoomOut{0%{opacity:1}50%{opacity:0;transform:scale3d(.3,.3,.3)}to{opacity:0}}.zoomOut{animation-name:zoomOut}@keyframes zoomOutDown{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutDown{animation-name:zoomOutDown}@keyframes zoomOutLeft{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(-2000px,0,0);transform-origin:left center}}.zoomOutLeft{animation-name:zoomOutLeft}@keyframes zoomOutRight{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(2000px,0,0);transform-origin:right center}}.zoomOutRight{animation-name:zoomOutRight}@keyframes zoomOutUp{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutUp{animation-name:zoomOutUp}@keyframes slideInDown{0%{transform:translate3d(0,-100%,0);visibility:visible}to{transform:translateZ(0)}}.slideInDown{animation-name:slideInDown}@keyframes slideInLeft{0%{transform:translate3d(-100%,0,0);visibility:visible}to{transform:translateZ(0)}}.slideInLeft{animation-name:slideInLeft}@keyframes slideInRight{0%{transform:translate3d(100%,0,0);visibility:visible}to{transform:translateZ(0)}}.slideInRight{animation-name:slideInRight}@keyframes slideInUp{0%{transform:translate3d(0,100%,0);visibility:visible}to{transform:translateZ(0)}}.slideInUp{animation-name:slideInUp}@keyframes slideOutDown{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(0,100%,0)}}.slideOutDown{animation-name:slideOutDown}@keyframes slideOutLeft{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(-100%,0,0)}}.slideOutLeft{animation-name:slideOutLeft}@keyframes slideOutRight{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(100%,0,0)}}.slideOutRight{animation-name:slideOutRight}@keyframes slideOutUp{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(0,-100%,0)}}.slideOutUp{animation-name:slideOutUp}


/*** Carousel End ***/
</style>


<!-- Carousel Start -->
<section id = "home">

        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide " data-bs-ride="carousel">
               
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" class="img-fluid wow pulse" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text h4 animated fadeInUp">STUDY IN SOUTH KOREA</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Achieve Your Dreams with EduGate Sri Lanka</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Edu Gate Sri Lanka is a premier educational consultancy service dedicated to helping students achieve their dreams of studying South Korea.</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <!-- <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid " alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text h4 animated fadeInUp">BEST SERVICE</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">Your Trusted Partner in Education and Visa Services</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Our consultancy services, we host informative workshops and seminars that cover various aspects of studying South Korea, from visa procedures to cultural adaptation. </p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <!-- <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a> -->
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
        </section>
        <!-- Carousel End -->



        <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow slideInUp" >
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Success in getting happy customer</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow slideInUp" >
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">09</h1>
                            <h5 class="text-white mt-1">Universities In South Korea</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow slideInUp">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">100</h1>
                            <h5 class="text-white mt-1">% Visa Success Rate</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow slideInUp">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->
      
         <!-- About Start -->
          <section id = "about">
         <div class="container-fluid py-5 my-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow pulse" data-wow-delay=".3s"">
                        <div class="h-100 position-relative">
                            <img src="img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s"">
                        <h5 class="text-primary">About Us</h5>
                        <h1 class="mb-4">About EDUGATE GLOBAL</h1>
                        <p>EduGate Global is an educational consultancy that specifically focuses on facilitating 
                          higher education opportunities in South Korea. 
                          The organization is dedicated to helping Global 
                          students navigate the process of applying to universities 
                          and colleges in South Korea. This includes services such as 
                          academic counseling, university selection, application assistance, 
                          visa processing, and guidance on adapting to life in South Korea.
                            <br>
                            Given South Korea's reputation for high-quality education, particularly in fields like technology, 
                            engineering, and business, EduGate Global aims to connect students with leading Korean institutions 
                            that match their academic and career goals. The consultancy may also offer additional support, 
                            such as Korean language training, to help students integrate more smoothly into their new environment.
                        </p>
                            <p class="mb-4">By specializing in South Korea, EduGate Global provides tailored advice and insights, 
                              leveraging its expertise in the South Korean education system to ensure that students make informed 
                              decisions and are well-prepared for their studies abroad.</p>
                        
                        <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- About End -->

<section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
<h5 class="text-primary">Our Team</h5><br>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Dilon Marasinghe</h4>
          <span>Director</span>
          <p>Legal Consultant officer in South Korea.</p>
          <!-- <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div> -->
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Dushmini</h4>
          <span>Consultant</span>
          <!-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p> -->
          
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Dilini</h4>
          <span>Consultant</span>
          <!-- <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p> -->
          
        </div>
      </div>
    </div><!-- End Team Member -->

    <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Amanda Jepson</h4>
          <span></span>
          <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
          
        </div>
      </div>
    </div> -->
    
    <!-- End Team Member -->

  </div>

</div>

</section>


<style>
    .team .team-member {
  background-color: var(--surface-color);
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  position: relative;
  border-radius: 5px;
  transition: 0.5s;
  padding: 30px;
  height: 100%;
}

@media (max-width: 468px) {
  .team .team-member {
    flex-direction: column;
    justify-content: center !important;
    align-items: center !important;
  }
}

.team .team-member .pic {
  overflow: hidden;
  width: 150px;
  border-radius: 50%;
  flex-shrink: 0;
}

.team .team-member .pic img {
  transition: ease-in-out 0.3s;
}

.team .team-member:hover {
  transform: translateY(-10px);
}

.team .team-member .member-info {
  padding-left: 30px;
}

@media (max-width: 468px) {
  .team .team-member .member-info {
    padding: 30px 0 0 0;
    text-align: center;
  }
}

.team .team-member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
}

.team .team-member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .team-member span::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: color-mix(in srgb, var(--default-color), transparent 85%);
  bottom: 0;
  left: 0;
}

@media (max-width: 468px) {
  .team .team-member span::after {
    left: calc(50% - 25px);
  }
}

.team .team-member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .team-member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: start;
  width: 100%;
}

@media (max-width: 468px) {
  .team .team-member .social {
    justify-content: center;
  }
}

.team .team-member .social a {
  background: color-mix(in srgb, var(--default-color), transparent 94%);
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 36px;
  height: 36px;
}

.team .team-member .social a i {
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  font-size: 16px;
  margin: 0 2px;
}

.team .team-member .social a:hover {
  background: var(--accent-color);
}

.team .team-member .social a:hover i {
  color: var(--contrast-color);
}

.team .team-member .social a+a {
  margin-left: 8px;
}

</style>





        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>