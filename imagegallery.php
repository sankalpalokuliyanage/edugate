<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUGATE GLOBAL - Gallery</title>

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


    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="https://edugateglobal.com">
            <img src="img/Logo_global.png" class = "logo" alt="logo" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mg-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://edugateglobal.com">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://edugateglobal.com/#about">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="https://edugateglobal.com/#team">Our Team</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="https://edugateglobal.com/#footer">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn text-white bg-dark px-3 rounded-5" href="successstories.php">SUCCESS STORIES</a>
        </li>
      
      </ul>
      
    </div>
  </div>
</nav>

<!-- Gallery Section -->
<section id="gallery" class="gallery section" style="background: linear-gradient(135deg, #f3f3f3 0%, #e8e8e8 100%); padding: 50px 0;">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up" style="text-align: center; margin-bottom: 40px;">
    <h2 style="font-size: 36px; font-weight: 700; color: #333;">Gallery</h2>
    
  </div><!-- End Section Title -->


  <?php
$uname = "root";
$pass = "";
$host = "localhost";
$db = "eg_xrst";

$conn = mysqli_connect($host, $uname, $pass, $db) or die("DB connection error");

$query = "SELECT * FROM gallery";
$query_run = mysqli_query($conn, $query);
?>
  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0 justify-content-center">

    <?php
  if(mysqli_num_rows($query_run) > 0) {
    while($row = mysqli_fetch_assoc($query_run)){
        ?>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="admin/<?php echo htmlspecialchars($row['picture']); ?>" class="glightbox" data-gallery="images-gallery">
            <img src="admin/<?php echo htmlspecialchars($row['picture']); ?>" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <?php
    }
} else {
    echo "<p>No records found.</p>";
}
?>

    </div>

  </div>

</section><!-- /Gallery Section -->

<style>
  /* Gallery Styling */
  .gallery .gallery-item {
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    margin: 10px;
    border: 2px solid #fff;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    max-height: 200px;
    min-height: 200px;
  }

  .gallery .gallery-item img {
    transition: transform 0.4s ease-in-out, filter 0.4s ease-in-out;
    width: 100%;
    height: auto;
  }

  .gallery .gallery-item:hover img {
    transform: scale(1.2);
    filter: brightness(90%);
  }

  .gallery .gallery-item:hover {
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
  }

  /* Fade-in Effect */
  .gallery .gallery-item {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.5s forwards;
  }

  .gallery .gallery-item:nth-child(1) {
    animation-delay: 0.1s;
  }

  .gallery .gallery-item:nth-child(2) {
    animation-delay: 0.2s;
  }

  .gallery .gallery-item:nth-child(3) {
    animation-delay: 0.3s;
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive Grid */
  @media (max-width: 768px) {
    .gallery .col-lg-3 {
      width: 50%;
    }
  }

  @media (max-width: 576px) {
    .gallery .col-md-4 {
      width: 100%;
    }
  }
</style>


</head>
<body>

<section id = "footer">
        <!-- Footer Start -->
        <div class="container-fluid footer" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="https://edugateglobal.com">
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
                            <a href="https://edugateglobal.com/#about" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                            <a href="https://edugateglobal.com/#contact" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
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


