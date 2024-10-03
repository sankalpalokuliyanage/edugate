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
    <style>
        

        h1 {
    margin: 40px 0; /* Combined margin properties */
    text-align: center;
    font-size: 24px;
}

.programs-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start; /* Align to the left */
}

.programs-section h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 30px;
    text-align: center;
    font-weight: bold;
}

.program-card {
    flex: 0 0 calc(33.333% - 20px); /* Three cards per row with spacing */
    margin: 10px; /* Margin around each card */
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
}
.program-card:hover {
    transform: translateY(-10px);
}

.program-card-body {
    padding: 10px;
}

.program-card-body h5 {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #007bff;
}

.program-card-body p {
    font-size: 0.8rem;
    color: #555;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .program-card-body h5 {
        font-size: 0.8rem;
    }
    .program-card-body p {
        font-size: 0.6rem;
    }
}

    </style>
</head>
<body>

    <h1>Explore Our Master's and PhD Programs</h1>

<!-- Search Bar -->
<div class="search-bar" style="text-align: center; margin-bottom: 20px;">
    <input type="text" id="programSearch" placeholder="Search programs by name..." onkeyup="filterPrograms()" style="padding: 10px; width: 300px; border-radius: 5px; border: 1px solid #ccc;">
</div>

    <!-- Master's Programs Section -->
    <div class="programs-section" id="masters-programs">
    <div class="row g-4" id="programsList">
        <!-- Program 1 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Mathematics</h5>
                    <p>Explore advanced mathematical concepts, including algebra, calculus, and applied mathematics for real-world problem-solving.</p>
                </div>
            </div>
        </div>
        <!-- Program 2 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Chemistry</h5>
                    <p>Investigate the properties, composition, and transformations of matter through chemical reactions and applications.</p>
                </div>
            </div>
        </div>
        <!-- Program 3 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Life Science</h5>
                    <p>Delve into biological systems, including molecular biology, genetics, and ecological systems.</p>
                </div>
            </div>
        </div>
        <!-- Program 4 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Geology</h5>
                    <p>Study the Earth’s physical structure and processes, including rocks, minerals, and the forces shaping the planet.</p>
                </div>
            </div>
        </div>
        <!-- Program 5 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Statistics</h5>
                    <p>Master the science of data analysis, probability theory, and statistical methodologies to make informed decisions.</p>
                </div>
            </div>
        </div>
        <!-- Program 6 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Astronomy</h5>
                    <p>Explore the universe, stars, planets, and cosmic phenomena through observation and theoretical physics.</p>
                </div>
            </div>
        </div>
        <!-- Program 7 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Atmospheric Science</h5>
                    <p>Study the dynamics of Earth's atmosphere, weather patterns, and climate change.</p>
                </div>
            </div>
        </div>
        <!-- Program 8 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Oceanography</h5>
                    <p>Learn about the chemical, physical, and biological processes of the world’s oceans and marine ecosystems.</p>
                </div>
            </div>
        </div>
        <!-- Program 9 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Applied Biology</h5>
                    <p>Apply biological sciences to industry, agriculture, and environmental sustainability.</p>
                </div>
            </div>
        </div>
        <!-- Program 10 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Food Science & Biotechnology</h5>
                    <p>Explore food production, processing, and biotechnology innovations to improve food quality and safety.</p>
                </div>
            </div>
        </div>
        <!-- Program 11 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Horticulture</h5>
                    <p>Master plant cultivation techniques and sustainable horticultural practices for food and ornamental production.</p>
                </div>
            </div>
        </div>
        <!-- Program 12 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Agricultural Civil Engineering</h5>
                    <p>Combine civil engineering principles with agricultural needs to create infrastructure that supports farming systems.</p>
                </div>
            </div>
        </div>
        <!-- Program 13 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Bio-industrial Machinery Engineering</h5>
                    <p>Design and develop machinery for agricultural and biotechnological processes to improve efficiency and sustainability.</p>
                </div>
            </div>
        </div>
        <!-- Program 14 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Biofibers and Biomaterials Science</h5>
                    <p>Explore bio-based materials for applications in textiles, composites, and sustainable industrial products.</p>
                </div>
            </div>
        </div>
        <!-- Program 15 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Forestry</h5>
                    <p>Study forest ecosystems, conservation strategies, and sustainable forest management practices.</p>
                </div>
            </div>
        </div>
        <!-- Program 16 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Wood & Paper Science</h5>
                    <p>Understand the properties and production of wood-based materials and their applications in industry and technology.</p>
                </div>
            </div>
        </div>
        <!-- Program 17 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Landscape Architecture</h5>
                    <p>Design outdoor spaces, incorporating sustainability and aesthetics into urban and rural landscapes.</p>
                </div>
            </div>
        </div>
        <!-- Program 18 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Mathematics Education</h5>
                    <p>Develop teaching strategies and educational tools to effectively teach mathematics at various levels.</p>
                </div>
            </div>
        </div>
        <!-- Program 19 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>General Science Education</h5>
                    <p>Train to become a science educator with a focus on general science topics and educational methodologies.</p>
                </div>
            </div>
        </div>
        <!-- Program 20 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Home Economics Education</h5>
                    <p>Prepare for a career in home economics education, focusing on family management, nutrition, and consumer education.</p>
                </div>
            </div>
        </div>
        <!-- Program 21 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Food Science & Nutrition</h5>
                    <p>Understand the science of food and its impact on nutrition, health, and wellness.</p>
                </div>
            </div>
        </div>
        <!-- Program 22 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Dental Science</h5>
                    <p>Study the science and practice of dentistry, including oral health, disease prevention, and treatment.</p>
                </div>
            </div>
        </div>
        <!-- Program 23 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Pharmacy</h5>
                    <p>Gain in-depth knowledge of drug development, pharmacology, and clinical pharmacy practices.</p>
                </div>
            </div>
        </div>
        <!-- Program 24 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Integrative Biotechnology</h5>
                    <p>Apply biotechnology across various sectors, from healthcare to environmental sustainability.</p>
                </div>
            </div>
        </div>
        <!-- Program 25 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Applied Biosciences</h5>
                    <p>Study biological systems with a focus on their applications in medicine, agriculture, and industry.</p>
                </div>
            </div>
        </div>
        <!-- Program 26 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Integrative Natural Sciences for the East Sea Rim</h5>
                    <p>Explore interdisciplinary natural sciences, focusing on the ecology and environment of the East Sea region.</p>
                </div>
            </div>
        </div>
        <!-- Program 27 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Nanoscience & Nanotechnology</h5>
                    <p>Investigate the science and applications of nanomaterials and nanotechnology in various industries.</p>
                </div>
            </div>
        </div>
        <!-- Program 28 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Energy Sciences</h5>
                    <p>Study energy generation, conservation, and sustainable energy solutions for a growing global population.</p>
                </div>
            </div>
        </div>
        <!-- Program 29 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Materials Science and Engineering</h5>
                    <p>Develop new materials with advanced properties for use in technology, construction, and other fields.</p>
                </div>
            </div>
        </div>
        <!-- Program 30 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Mechanical Engineering</h5>
                    <p>Master the principles of mechanics, thermodynamics, and robotics to innovate in mechanical systems design.</p>
                </div>
            </div>
        </div>
        <!-- Program 31 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Architecture</h5>
                    <p>Learn to design buildings and spaces that are functional, sustainable, and aesthetically pleasing.</p>
                </div>
            </div>
        </div>
        <!-- Program 32 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Architectural Engineering</h5>
                    <p>Combine engineering principles with architectural design to create resilient and efficient structures.</p>
                </div>
            </div>
        </div>
        <!-- Program 33 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Civil Engineering</h5>
                    <p>Build the infrastructure of the future by learning civil engineering principles and sustainable design.</p>
                </div>
            </div>
        </div>
        <!-- Program 34 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Environmental Engineering</h5>
                    <p>Study technologies and methods for protecting the environment and solving ecological challenges.</p>
                </div>
            </div>
        </div>
        <!-- Program 35 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Energy Engineering</h5>
                    <p>Design and optimize energy systems to improve efficiency and reduce environmental impact.</p>
                </div>
            </div>
        </div>
        <!-- Program 36 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Applied Chemical Engineering</h5>
                    <p>Apply chemical engineering principles to develop sustainable chemical processes and materials.</p>
                </div>
            </div>
        </div>
        <!-- Program 37 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Polymer Science and Engineering</h5>
                    <p>Discover new polymer materials and their applications in industries such as healthcare, electronics, and energy.</p>
                </div>
            </div>
        </div>
        <!-- Program 38 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Textile System Engineering</h5>
                    <p>Learn the science of textile production, including fibers, fabrics, and innovations in textile technology.</p>
                </div>
            </div>
        </div>
        <!-- Program 39 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Artificial Intelligence</h5>
                    <p>Master AI technologies, including machine learning, natural language processing, and robotics.</p>
                </div>
            </div>
        </div>
        <!-- Program 40 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Robot and Smart System Engineering</h5>
                    <p>Design and develop robots and smart systems for applications in automation and intelligent solutions.</p>
                </div>
            </div>
        </div>
        <!-- Program 41 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Smart Mobility Engineering</h5>
                    <p>Study the future of transportation, including autonomous vehicles, connected systems, and mobility innovations.</p>
                </div>
            </div>
        </div>
        <!-- Program 42 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Electronic and Electrical Engineering</h5>
                    <p>Learn about electrical systems, electronics, and their applications in modern technology and industry.</p>
                </div>
            </div>
        </div>
        <!-- Program 43 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Data Convergence Computing</h5>
                    <p>Study the integration of data science, computer science, and artificial intelligence for innovative solutions.</p>
                </div>
            </div>
        </div>
        <!-- Program 44 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Science & Technology Policy Administration</h5>
                    <p>Learn the principles of science and technology policy, and how to manage technological innovation and research.</p>
                </div>
            </div>
        </div>
        <!-- Program 45 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Science & Technology Practical Studies</h5>
                    <p>Study the practical applications of science and technology in solving real-world challenges.</p>
                </div>
            </div>
        </div>
        <!-- Program 46 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Science & Technology Start-up</h5>
                    <p>Develop the skills and knowledge needed to launch and grow successful technology startups.</p>
                </div>
            </div>
        </div>
        <!-- Program 47 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Tourism</h5>
                    <p>Study tourism management, including sustainable tourism, hospitality, and destination planning.</p>
                </div>
            </div>
        </div>
        <!-- Program 48 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Ecology Science</h5>
                    <p>Explore the science of ecosystems, biodiversity, and environmental conservation.</p>
                </div>
            </div>
        </div>
        <!-- Program 49 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Animal BT Science</h5>
                    <p>Study biotechnology in the context of animal science, including genetics, reproduction, and disease control.</p>
                </div>
            </div>
        </div>
        <!-- Program 50 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Ecology and Environmental System</h5>
                    <p>Learn about ecosystem dynamics and the engineering of systems for environmental sustainability.</p>
                </div>
            </div>
        </div>
        <!-- Program 51 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Food and Food Service Industry</h5>
                    <p>Study the science of food production, preparation, and management within the food service industry.</p>
                </div>
            </div>
        </div>
        <!-- Program 52 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Food Biotechnology</h5>
                    <p>Apply biotechnology to food systems to improve nutrition, safety, and food production efficiency.</p>
                </div>
            </div>
        </div>
        <!-- Program 53 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Food Marketing</h5>
                    <p>Learn strategies for marketing food products, including consumer behavior, branding, and food distribution.</p>
                </div>
            </div>
        </div>
        <!-- Program 54 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Textile Engineering</h5>
                    <p>Study the design, production, and innovation of textiles and fabrics for diverse applications.</p>
                </div>
            </div>
        </div>
        <!-- Program 55 -->
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-card-body">
                    <h5>Communication Systems Engineering</h5>
                    <p>Learn about the design and development of communication systems, including wireless networks and data transmission.</p>
                </div>
            </div>
        </div>
    </div>
</div>






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

<script>
// Store original program cards
const originalPrograms = Array.from(document.querySelectorAll('.program-card'));

function filterPrograms() {
    const input = document.getElementById('programSearch').value.toLowerCase();
    const programsList = document.getElementById('masters-programs');

    // Clear the current list
    programsList.innerHTML = '';

    // Determine which programs to display
    const programsToDisplay = input ? originalPrograms.filter(program => {
        const programName = program.getElementsByTagName('h5')[0].innerText.toLowerCase();
        return programName.includes(input);
    }) : originalPrograms; // Show all if input is empty

    // Append matching or all cards back to the list
    programsToDisplay.forEach(program => {
        programsList.appendChild(program);
    });

    // If no cards are visible, show a message
    if (programsList.children.length === 0) {
        programsList.innerHTML = '<p>No programs found.</p>';
    }
}

// Attach event listener for live filtering
document.getElementById('programSearch').addEventListener('input', filterPrograms);



</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
        
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>