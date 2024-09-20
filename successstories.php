<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUGATE GLOBAL</title>

    <!-- Favicons -->
    <link href="img/Logo_global.png" rel="icon">
    <link href="img/Logo_global.png" rel="apple-touch-icon">

    <!-- Include Glightbox CSS -->
<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet" />

<!-- Include Glightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- Include Animate.css for animations (required for WOW.js) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




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
          <a class="nav-link" href="">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#team">Our Team</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contact Us</a>
        </li>
       
      
      </ul>
      
    </div>
  </div>
</nav>
<?php
$uname = "root";
$pass = "";
$host = "localhost";
$db = "eg_xrst";

$conn = mysqli_connect($host, $uname, $pass, $db) or die("DB connection error");

$query = "SELECT * FROM stories";
$query_run = mysqli_query($conn, $query);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-center m-auto">
            <h2>SUCCESS STORIES</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel -->
                <div class="carousel-inner">
                    <?php
                    if(mysqli_num_rows($query_run) > 0) {
                        $firstItem = true; // A flag to check if it's the first item
                        while($row = mysqli_fetch_assoc($query_run)){
                            $activeClass = ($firstItem) ? 'active' : '';
                            $firstItem = false; // After the first item, set this to false
                            ?>
                            <div class="item carousel-item <?php echo $activeClass; ?>">
                                <div class = "storyDetail">
                                    <div class="img-box">
                                        <img src="admin/<?php echo htmlspecialchars($row['avatar']); ?>" alt="">
                                    </div><br>
                                    <p class="overview">
                                        <b><?php echo htmlspecialchars($row['name']); ?></b>, 
                                        <?php echo htmlspecialchars($row['visa']); ?>
                                    </p>
                                    <p class="testimonial"><?php echo htmlspecialchars($row['comment']); ?></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="second-img-box">
                                        <img src="admin/<?php echo htmlspecialchars($row['picture']); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No records found.</p>";
                    }
                    ?>
                </div>
                
                <!-- Carousel Controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<style>



h2 {
    color: #333;
    text-align: center;
    text-transform: uppercase;
    font-family: 'Noto Sans', sans-serif;
    font-weight: bold;
    position: relative;
    margin: 30px 0 60px;
}

h2::after {
    content: "";
    width: 140px;
    position: absolute;
    margin: 0 auto;
    height: 3px;
    background: #db584e;
    left: 0;
    right: 0;
    bottom: -10px;
    opacity: .8;
}

.col-center {
    margin: 0 auto;
    float: none !important;
}

.carousel {
    margin: 50px auto;
    padding: 0 70px;
}

.carousel-item {
    color: #999;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    min-height: 340px;
}

.storyDetail {
        max-width: 500px; /* Restrict the maximum width */
        min-height: 350px;
        max-height: 350px;
        padding: 15px; /* Apply padding inside the container */
        border: 1px solid #ddd; /* Optional: Add a border to better define the container */
        margin: 0 auto; /* Center align it */
        box-sizing: border-box; /* Ensure padding is included in the element's total width */
        overflow: hidden; /* Prevent overflow */
    }

/* Center the primary image */
.img-box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 135px;
    height: 135px;
    margin: 0 auto;
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 50%;
}

.img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 50%;
}

.testimonial {
    padding: 30px 0 10px;
}

/* Additional smaller image styling */
.second-img-box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 600px;
    height: auto;
    margin: 20px auto 0;
    padding: 5px;
    border: 1px solid #ddd;

}

.second-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;

}

.overview {
    font-style: italic;
}

.overview b {
    text-transform: uppercase;
    color: #db584e;
}

.carousel-control {
    width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 10%;
    background: none;
}

.carousel-control i {
    font-size: 68px;
    line-height: 42px;
    position: absolute;
    display: inline-block;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}

.carousel-indicators {
    bottom: -40px;
}

.carousel-indicators li, .carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 1px 3px;
    border-radius: 50%;
}

.carousel-indicators li {
    background: #999;
    border-color: transparent;
    box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
}

.carousel-indicators li.active {
    background: #555;
    box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
}


</style>


<!-- All visa grants -->

<section id="allgrants" class="allgrants section" style="background: linear-gradient(135deg, #f3f3f3 0%, #e8e8e8 100%); padding: 50px 0;">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up" style="text-align: center; margin-bottom: 40px;">
  <h2 style="font-size: 36px; font-weight: 700; color: #333;">ALL GRANT NOTICES</h2>

  <?php
$uname = "root";
$pass = "";
$host = "localhost";
$db = "eg_xrst";

$conn = mysqli_connect($host, $uname, $pass, $db) or die("DB connection error");

$query = "SELECT * FROM successgrants";
$query_run = mysqli_query($conn, $query);
?>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row g-0 justify-content-center">
            
    <?php
  if(mysqli_num_rows($query_run) > 0) {
    while($row = mysqli_fetch_assoc($query_run)){
        ?>
            <div class="col-lg-3 col-md-4">
                <div class="grant-item">
                <a href="admin/<?php echo htmlspecialchars($row['picture']); ?>" class="glightbox" data-gallery="images-gallery">
            <img src="admin/<?php echo htmlspecialchars($row['picture']); ?>" alt="" class="img-fluid">
                </a>
                </div>
            </div> <!--end item-->
            <!-- Custom Close Button -->
<button id="close-btn" class="custom-close-btn">Close</button>


            <?php
    }
} else {
    echo "<p>No records found.</p>";
}
?>
        </div>
    </div>

</div>

</section>


<style>

.custom-close-btn {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: transparent;
    color: #fff;
    border: none;
    cursor: pointer;
    z-index: 1000; /* Ensure it appears above the lightbox */
    display: none; /* Initially hidden */
}

    #allgrants .grant-item {
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    margin: 10px;
    border: 2px solid #fff;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    max-height: 352px;
    min-height: 352px;
    max-width: 272px;
    min-width: 272px;
    }

    #allgrants .grant-item img {
    transition: transform 0.4s ease-in-out, filter 0.4s ease-in-out;
    width: 100%;
    height: auto;
  }


  #allgrants .grant-item img {
    transform: scale(1.2);
    filter: brightness(90%);
  }

  #allgrants .grant-item:hover {
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
  }

  /* Fade-in Effect */
  #allgrants .grant-item {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.5s forwards;
  }

  #allgrants .grant-item:nth-child(1) {
    animation-delay: 0.1s;
  }

  #allgrants .grant-item:nth-child(2) {
    animation-delay: 0.2s;
  }

  #allgrants .grant-item:nth-child(3) {
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

<script>
// Initialize the Glightbox
const lightbox = GLightbox({
    selector: '.glightbox'
});

// Show the close button when the lightbox is opened
lightbox.on('open', () => {
    document.getElementById('close-btn').style.display = 'block';
});

// Close the lightbox when the custom close button is clicked
document.getElementById('close-btn').addEventListener('click', () => {
    lightbox.close();
    document.getElementById('close-btn').style.display = 'none';
});
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   