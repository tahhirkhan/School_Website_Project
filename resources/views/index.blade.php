<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* body {
            font-family: Poppins, sans-serif;
        } */

        .demo {
            background-image: url("images/Carousal-Images/footer-image.jpg");
        }

        .gsg {
            color: #a5cd39;
        }
        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ccc;
            border: none;
        }
        .carousel-indicators .active {
            background-color: #0099ff;
        }
        .carousel-image {
            object-fit: cover;
            width: 100%;
            height: 40vh;  /* Default height for mobile */
        }
        .carousel2-image {
            object-fit: cover;
            width: 100%;
            height: 40vh;  /* Default height for mobile */
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .carousel-image {
                height: 50vh;
            }
            .carousel2-image {
                height: 50vh;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .carousel-image {
                height: 60vh;
            }
            .carousel2-image {
                height: 30vh;
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .carousel-image {
                height: 70vh;
            }
            .carousel2-image {
                height: 40vh;
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .carousel-image {
                height: 80vh;
            }
            .carousel2-image {
                height: 40vh;
            }
        }

        /* XXL devices (larger desktops, 1400px and up) */
        @media (min-width: 1400px) {
            .carousel-image {
                height: 85vh;
            }
            .carousel2-image {
                height: 45vh;
            }
        }

        /* For very small mobile devices (below 400px) */
        @media (max-width: 400px) {
            .carousel-image {
                height: 35vh;
            }
            .carousel2-image {
                height: 35vh;
            }
        }

        @media (max-width: 400px) {
            p.binduRajesh {
                color: #07294d !important;
            }
        }

        /* Landscape orientation for mobile devices */
        @media (max-height: 500px) and (orientation: landscape) {
            .carousel-image {
                height: 90vh;
            }
            .carousel2-image {
                height: 90vh;
            }
        }


        /* Base styles */
        .navbar {
            padding: 1rem 0;
        }

        /* Mega menu styles */
        .nav-item:hover .mega-menu {
            display: block !important;
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: white;
                padding: 1rem;
                margin-top: 1rem;
            }
            
            .mega-menu {
                position: static !important;
                box-shadow: none !important;
                border-top: none !important;
            }
            
            .nav-item.position-static {
                position: relative !important;
            }
            
            .navbar-nav {
                gap: 0.5rem;
            }
            
            form[role="search"] {
                width: 100%;
                margin: 0.5rem 0;
            }
            
            .btn.rounded-pill {
                width: 100%;
                text-align: center;
                margin-top: 0.5rem;
            }
        }
        /* Sticky navbar styles */
        .sticky-wrapper {
            position: sticky;
            top: 0;
            z-index: 1020;
            background: white;
        }

        /* Media query for mobile devices */
        @media (max-width: 991.98px) {
            .sticky-wrapper {
                position: fixed;
                width: 100%;
            }

            .navbar-collapse {
                max-height: calc(100vh - 70px); 
                overflow-y: auto;
                position: fixed;
                top: 70px; 
                left: 0;
                right: 0;
                background: white;
                padding: 1rem;
                transition: all 0.3s ease;
            }

            /* padding to body to prevent content from hiding behind fixed navbar */
            body {
                padding-top: 70px;
            }

            /* When navbar is collapsed */
            .navbar-collapse:not(.show) {
                display: none;
            }

            /* Mega menu specific styles */
            .mega-menu {
                position: static !important;
                box-shadow: none !important;
                border-top: none !important;
            }
        }


        .navbar-collapse.collapsing {
            height: auto;
        }


        .sticky-wrapper {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }


    </style>
</head>
<body>


    <x-nav>
        
    </x-nav>
    
    <!-- =============================================== Carousal Start =============================================== -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Carousal-Images/carousal-img2.jpg" 
                    class="d-block w-100 img-fluid carousel-image" 
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/Carousal-Images/carousal-img1.jpg" 
                    class="d-block w-100 img-fluid carousel-image" 
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/Carousal-Images/carousal-img3.jpg" 
                    class="d-block w-100 img-fluid carousel-image" 
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/Carousal-Images/carousal-img4.png" 
                    class="d-block w-100 img-fluid carousel-image" 
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/Carousal-Images/carousal-img5.jpg" 
                    class="d-block w-100 img-fluid carousel-image" 
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- =============================================== Carousal End =============================================== -->

    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-6">
                
                <h4>Welcome to Global Indian International Schools in Bangalore</h4>
                
                <p>GIIS is one of the best International schools in Bangalore. GIIS is a multi-award-winning school offering a curriculum that nurtures 21st-century skills. GIIS chain of International schools in Bangalore emphasises equally on personality and skill development along with academic excellence. GIIS' schools in Bangalore have a core mission to shape the students to well-rounded individuals as Global citizens</p>
                <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner rounded border border-0 shadow">
                        <div class="carousel-item active">
                        <img src="images/Carousal-Images/carousal-img6.jpg" class="d-block w-100 img-fluid carousel2-image" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/Carousal-Images/carousal-img7.jpg" class="d-block w-100 img-fluid carousel2-image" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/Carousal-Images/carousal-img16.jpg" class="d-block w-100 img-fluid carousel2-image" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            
            </div>
            
            <div class="col-md-6">

                <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
                    <div class="col">
                        <div class="card h-100 border border-0 shadow" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/svg10.svg" class="card-img-top" alt="..." width="" height="70">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">University Placements</h5>
                            <p class="card-text text-muted"><small>Our accomplished students have been accepted in over 50 universities around the world.</small></p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border border-0 shadow" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/results-icon.svg" class="card-img-top" alt="..." width="" height="70">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Results</h5>
                            <p class="card-text text-muted"><small>Quality academics is our forte . Over 33% of our students have been scoring above 90% in board exams across GIIS campuses</small>.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border border-0 shadow" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/awards-icon.svg" class="card-img-top" alt="..." width="" height="70">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Awards</h5>
                            <p class="card-text text-muted"><small>We have over 500+ awards in education excellence to our credit.</small></p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border border-0 shadow" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/9gems.svg" class="card-img-top" alt="..." width="" height="70">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">9 GEMS</h5>
                            <p class="card-text text-muted"><small>Providing a well-rounded education to students that will make them academically strong, skilfully placed and morally upright.</small></p>
                        </div>
                        </div>
                    </div>
                </div>

                <h4 class="fw-bold">200+ Awarded Top School in Bangalore</h4>
                
                <p class="text-muted small">Since the establishment of GIIS in 2002, our focus has been imparting education assisted by proficient operational practices, learning pedagogies, innovation and academic achievements and the very same mission has led GIIS CBSE school in Bannerghatta and CBSE school in Whitefield to be most acclaimed schools in Bangalore. Accoladed by over 100+ leading International and National organizations. India Campuses has won over 40 awards in education excellence, innovation and curriculum delivery.</p>

            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center px-5 mt-5">
        <div class="row g-3">
            <div class="col-md-4">
                <h4 class="fw-bold">NEXTGEN Learning Campuses</h4>
                
                <p class="text-muted">Right from its inception in 2013, GIIS is the most sought after Schools in India for being the first  school in Bangalore and in India to have a SMART Campuses. GIIS’ CBSE schools in Bannerghatta road and CBSE Schools in Whitefield promotes NEXTGEN learning by bringing innovative pedagogical systems and state-of-the-art technological advancement together. The learning process is very meticulously conducted involving classes conducted via virtual classrooms during stressful times from Nursery to Grade 12.</p>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark border border-0 shadow">
                    <img src="images/Carousal-Images/carousal-img8.jpg" class="card-img object-contain" height="330" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark border border-0 shadow">
                    <img src="images/Carousal-Images/carousal-img9.jpg" class="card-img object-contain" height="330" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 px-3">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 text-center text-md-start">
                <h2 class="card-title h3 mb-3 mb-md-0 fw-bold">Globally Recognised Curricula</h2>
                <a href="#" class="btn btn-outline-danger px-4 rounded-pill"><strong>VIEW ALL <i class="bi bi-arrow-right"></i></strong></a>
        </div>
        <p class="py-2 text-body-secondary " style="">GIIS offers the best curriculums that are of international standards. Coupled with the 9 GEMS holistic framework and SMART infrastructure, the curricula delivers the best benefits to the students in their academic journey. GIIS' CBSE-affiliated schools in Bannerghatta and Whitefield also offers the worlds most awarded Global Montessori Program (GMP) for pre schoolers and pre primary years.</p>
        <div class="row">
            <div class="col-md" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                <a href="#" class="text-dark link-underline link-underline-opacity-0 link-opacity-50-hover">
                    <img src="images/Carousal-Images/Global-Montesori-Plus.png" class="my-2" alt="..." width="" height="50">
                    <h5 class="fw-bold">Global Montessori (GMP)</h5>
                    <p class="text-muted"><small>We offer the best practices of modern pre-school education.</small></p>
                </a>
            </div>
            <div class="col-md" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                <a href="#" class="text-dark link-underline link-underline-opacity-0 link-opacity-50-hover">
                <!-- Global-Montesori-Plus -->
                    <!-- <img src="images/Carousal-Images/Global-Montesori-Plus.png" class="card-img object-contain" height="330" alt="..."> -->
                    <img src="images/Carousal-Images/cbse.png" class="my-2" alt="..." width="" height="50">
                    <h5 class="fw-bold">CBSE</h5>
                    <p class="text-muted"><small>Our CBSE programme from Kindergarten to Grade 12 is a comprehensive curriculum that marks our students world citizens of promise.</small></p>
                </a>
            </div>
        </div>
    </div>


    <div class="container-fluid px-5 py-5">
        <h3 class="text-center pb-2" style="font-weight: bold;">Excellent Academic Achievements Year over Year</h3>
        <p class="text-muted">Through an excellent result-driven education system, GIIS has been recognized as one of the <a href="">best international schools in Bangalore.</a> Our expert teachers push themselves with passion to transform students as life long learners alongside their academic achievements. Our students academic performance in board and competitive examinations cuts the long story short.</p>

        <!-- ==========cards start=========== -->
        <div class="row py-5 g-3">
            <div class="col-md">
                <div class="card shadow border border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="card-title h4 mb-0" style="font-weight: bold;">CBSE 10</h2>
                            <span class="text-muted">2023</span>
                        </div>

                        <!-- School Highest Score -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">School Highest Score</small>
                                <span class="fw-bold">97.6%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 97.6%"></div>
                            </div>
                        </div>

                        <!-- Pass Results -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">Pass Results</small>
                                <span class="fw-bold">100%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                            </div>
                        </div>

                        <!-- Students Scoring Above 90% -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">Students Scoring Above 90%</small>
                                <span class="fw-bold">35.59%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 35.59%"></div>
                            </div>
                        </div>

                        <!-- Class Average Score -->
                        <div class="mb-2">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">Class Average Score</small>
                                <span class="fw-bold">82.86%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 82.86%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card shadow border border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="card-title h4 mb-0 fw-bold">CBSE 12</h2>
                            <span class="text-muted">2023</span>
                        </div>

                        <!-- School Highest Score -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">School Highest Score</small>
                                <span class="fw-bold">97.6%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 97.6%"></div>
                            </div>
                        </div>

                        <!-- Pass Results -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">Pass Results</small>
                                <span class="fw-bold">100%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                            </div>
                        </div>

                        <!-- Students Scoring Above 90% -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">Students Scoring Above 90%</small>
                                <span class="fw-bold">40.50%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40.50%"></div>
                            </div>
                        </div>

                        <!-- Class Average Score -->
                        <div class="mb-2">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-dark fw-bold">Class Average Score</small>
                                <span class="fw-bold">84.88%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 84.88%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==========cards end=========== -->
    </div>

    <div class="container mb-5">
        <div class="container mb-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 text-center text-md-start">
                <h2 class="card-title h3 mb-3 mb-md-0 fw-bold">School Levels</h2>
                <a href="#" class="btn btn-outline-warning px-4 rounded-pill"><strong>VIEW ALL <i class="bi bi-arrow-right"></i></strong></a>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/Carousal-Images/card-img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center text-md-start">
                            <h5 class="card-title fw-bold">Pre Primary</h5>
                            <p class="card-text text-muted small">We offer the best practices of modern pre-school education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/Carousal-Images/card-img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center text-md-start">
                            <h5 class="card-title fw-bold">Primary School</h5>
                            <p class="card-text text-muted small">A quick glance at our primary school programme and facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/Carousal-Images/card-img3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center text-md-start">
                            <h5 class="card-title fw-bold">Secondary School</h5>
                            <p class="card-text text-muted small">Focuses on the all round development of 11 to 14 year-olds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                        <img src="images/Carousal-Images/card-img4.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center text-md-start">
                            <h5 class="card-title fw-bold">High School</h5>
                            <p class="card-text text-muted small">We provide childeren with the skill and the knowledge to thrive in the 21st-century society.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-items-center">
            <!-- Left Content Section -->
            <div class="col-lg-6">
                <div class="mb-4">
                    <h4 class="mb-4 card-title h4 fw-bold">Skill-based holistic framework - 9GEMS</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img src="images/Carousal-Images/9gems2.png" alt="Nine Gems Logo" class="me-3" style="width: 100px;">
                                <p class="text-secondary mb-0">
                                    The 9 GEMS pedagogical framework is an innovative and well-balanced approach, taking the learning process beyond the syllabus-oriented academics. Besides academic excellence, equal emphasis is given
                                </p>
                            </div>
                            <p class="text-secondary">
                                towards stimulating ethics, discipline, universal values, creativity and personality upliftment of the young geniuses. The 9 GEMS model broadens up the students' learning horizons and predominantly strengthens academic excellence alongside sports excellence, visual and performing arts, personality development, innovation and creativity, leadership and entrepreneurship skills, universal values and ethics, community and care and skill development.
                            </p>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-outline-warning px-4 rounded-pill"><strong>LEARN MORE <i class="bi bi-arrow-right"></i></strong></a>
                </div>
            </div>
            
            <!-- Right Images Section -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <!-- Decorative Elements -->
                    <!-- <div class="position-absolute start-0 top-0 translate-middle">
                        <div class="rounded-circle bg-info" style="width: 10px; height: 10px;"></div>
                    </div> -->
                    
                    <!-- Image Grid -->
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                                <img src="images/Carousal-Images/9gems-img1.jpg" alt="Students receiving awards" class="img-fluid">
                                <button class="btn btn-warning position-absolute bottom-0 start-0 m-3">
                                    <i class="bi bi-play-circle"></i> WATCH VIDEO
                                </button>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                                <img src="images/Carousal-Images/card-img2.jpg" alt="Students doing sports activities" class="img-fluid">
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                                <img src="images/Carousal-Images/card-img4.jpg" alt="Cultural dance performance" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="position-absolute end-0 bottom-0 translate-middle">
                        <div class="rounded-circle bg-warning" style="width: 10px; height: 10px;"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card my-5 py-4 border-0 shadow">
            <div class="container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4 justify-content-center">
                    <div class="col text-center">
                        <img src="images/svg1.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Sports Excellence</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg2.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Academic Excellence</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg3.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Visual & performing arts</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg4.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Personality development</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg5.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Innovation & Creativity</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg6.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Entrepreneurship & Leadership</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg7.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Universal values & ethics</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg8.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Community & care</small></h6>
                    </div>
                    <div class="col text-center">
                        <img src="images/svg9.svg" alt="" class="img-fluid" style="width: 70px; height: 60px;">
                        <h6 class="fw-bold text-muted"><small>Skill Development</small></h6>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid demo py-5">
        <div class="container text-center">
            <img src="images/Carousal-Images/gsg-logo-white.webp" class="py-3" alt="" width="" height="100">
            <h4 class="text-white fw-bold py-3">We are a Proud Member of the Global Schools Group</h4>
            <h1 class="text-white fw-bold">The Most Awarded Educational Institution</h1>
            <div class="row text-white py-5 justify-content-center text-center">
                <div class="col">
                    <h2 class="fw-bold mb-2 gsg">64</h2>
                    <p class="h5">Campuses</p>
                </div>
                <div class="col">
                    <h2 class="fw-bold mb-2 gsg">11</h2>
                    <p class="h5">Countries</p>
                </div>
                <div class="col">
                    <h2 class="fw-bold mb-2 gsg">45000</h2>
                    <p class="h5">Students</p>
                </div>
                <div class="col">
                    <h2 class="fw-bold mb-2 gsg">70</h2>
                    <p class="h5">Nationalities</p>
                </div>
                <div class="col">
                    <h2 class="fw-bold mb-2 gsg">5000+</h2>
                    <p class="h5">Faculty</p>
                </div>
                <div class="col">
                    <h2 class="fw-bold mb-2 gsg">600+</h2>
                    <p class="h5">Awards & Counting</p>
                </div>
            </div>

            <p class="text-white text-center fw-bold text">
            We are a proud member of the Global Schools Group (GSG), a global chain of K-12 schools, which is committed to ensuring the availability of world-class education for  every child. Headquartered in Singapore, GSG  was created with the goal of providing affordable, high-quality education to international communities worldwide. The group’s schools have received more than 500 national and international awards for academic excellence.
            </p>

            <a href="#" class="btn btn-outline-success px-4 rounded-pill gsg my-5"><strong>VISIT GLOBAL SCHOOLS.COM  <i class="bi bi-arrow-right"></i></strong></a>

        </div>
    </div>


    <div class="container-fluid position-relative">

        <div class="position-absolute start-0 bottom-0 w-100" style="height: 400px; background-color: #07294d; overflow: hidden;">
        <div class="position-absolute top-70 start-0 translate-middle-y" 
             style="width: 200%; height: 60px; background-color: white; border-radius: 40% 0 0% 10%;"></div>
        </div>
        <div class="container py-md-5 position-relative">
            <!-- Content Section -->
            <div class="row mt-5 gap-lg-5 position-relative" style="z-index: 1">
                <div class="col-md">
                    <div class="card bg-dark text-white mb-5 border-0 shadow position-relative bg-transparent">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.6)); z-index: 1;">
                        </div>
                        <img src="images/Carousal-Images/Ms.-Bindu-Rajesh.png" class="card-img d-block w-100 img-fluid rounded-4" alt="Principal Image" style="object-fit: cover; z-index: 0;">
                        <div class="card-img-overlay d-flex flex-column justify-content-end" style="z-index: 2;">
                            <h5 class="card-title fw-bold mb-1">Ms. Bindu Rajesh</h5>
                            <p class="card-text">Principal, GIIS Bannerghatta</p>
                        </div>
                    </div>
                    <p class="binduRajesh text-white">Ms. Bindu Rajesh is a highly experienced and accomplished educationist with 25 years of experience in India and  abroad. Her remarkable contributions to education have earned her numerous prestigious awards, including the Swami Vivekananda National Principal Award, Best Teacher Award, Amazing Teachers Award, and Top Ten Outstanding Teachers Award to name a few. Ms. Bindu’s passion for education is evident through her emphasis on academic excellence and ability to execute change and motivate employees. She is committed to ensuring our school delivers exceptional education to our students, building communication-collaboration skills, and managing team performance effectively.</p>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-white mb-5 border-0 shadow position-relative bg-transparent">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.6)); z-index: 1;">
                        </div>
                        <img src="images/Carousal-Images/Manoj-Kumar-Tiwari.jpg" class="card-img d-block w-100 img-fluid rounded-4" alt="Principal Image" style="object-fit: cover; z-index: 0;">
                        <div class="card-img-overlay d-flex flex-column justify-content-end" style="z-index: 2;">
                            <h5 class="card-title fw-bold mb-1">Mr Manoj Kumar Tiwari</h5>
                            <p class="card-text">Principal, GIIS Whitefield</p>
                        </div>
                    </div>
                    <p class="text-white">Mr. Manoj Kumar Tiwari, Principal GIIS Whitefield is a passionate educator and an efficient school administrator with a rich experience of 24 years. His qualifications include Master’s Degree in Education, Master’s Degree in Economics.</p>
                </div>
            </div>
        </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row py-md-5">
            <div class="col-md"></div>
            <div class="col-md">
                <h3 class="mb-4 card-title fw-bold">Remarkable Global Community</h3>
                <p class="text-secondary mb-4">
                    The exceptional global community of GIIS makes it a remarkable ambience for the students of all age groups to nurture and hone their competence and aptitude. The ultimate mission of our institution is to ensure the adaptability of students to our basic values of honesty, integrity and ethical practices.
                </p>
                <a href="#" class="btn btn-outline-warning px-4 rounded-pill"><strong>LEARN MORE <i class="bi bi-arrow-right"></i></strong></a>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 text-center text-md-start">
            <h2 class="card-title h3 mb-3 mb-md-0 fw-bold">Student Life</h2>
            <a href="#" class="btn btn-outline-warning px-4 rounded-pill"><strong>VIEW ALL <i class="bi bi-arrow-right"></i></strong></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Carousal-Images/card-img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center text-md-start">
                        <h5 class="card-title fw-bold">Co Curricular Activities</h5>
                        <p class="card-text text-muted small">We offer the best practices of modern pre-school education.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Carousal-Images/card-img2.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center text-md-start">
                        <h5 class="card-title fw-bold">Extra Curricular Activities</h5>
                        <p class="card-text text-muted small">A quick glance at our primary school programme and facilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Carousal-Images/card-img3.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center text-md-start">
                        <h5 class="card-title fw-bold">Happiness Index</h5>
                        <p class="card-text text-muted small">Focuses on the all round development of 11 to 14 year-olds.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                <div class="card border border-0" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Carousal-Images/card-img4.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center text-md-start">
                        <h5 class="card-title fw-bold">Parent Engagement</h5>
                        <p class="card-text text-muted small">We provide childeren with the skill and the knowledge to thrive in the 21st-century society.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">

        <div id="scholarshipCarousel" class="carousel slide py-4" data-bs-ride="carousel" style="background-color: #f0f9ff; border-radius: 30px; padding: 30px; max-width: 1400px; margin: auto;">
        <div class="carousel-indicators" style="bottom: -40px;">
            <button type="button" data-bs-target="#scholarshipCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#scholarshipCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#scholarshipCarousel" data-bs-slide-to="2"></button>
        </div>
        
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="images/Carousal-Images/carousal3-1.jpg" class="img-fluid" style="border-radius: 15px;" alt="Students">
                        </div>
                        <div class="col-md-8">
                            <h2 style="color: #1a365d; font-size: 24px; margin-bottom: 20px;">Dr APJ Abdul Kalam Global Skills Scholarship in Bangalore</h2>
                            <p style="color: #4a5568; margin-bottom: 30px;">The Global Schools Foundation (GSF) has been contributing to the educational needs of students through various programmes and initiatives. Through the Merit-Cum-Means scholarship, GSF plans to extend support through financial assistance, and make education affordable for parents across a broad financial range. The scholarship is aimed for students who are residents of Malaysia, including existing parents and student fraternity of GIIS, across all grades</p>
                            
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Scholarship Tenure:</p>
                                    <p style="color: #2d3748; font-weight: 500;">1 Year</p>
                                </div>
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Scholarship Value:</p>
                                    <p style="color: #2d3748; font-weight: 500;">Upto 19% off on Tuition Fees</p>
                                </div>
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Applicable Grades:</p>
                                    <p style="color: #2d3748; font-weight: 500;">Grade Whitefield Campus - Grade 6 - 12<br>Bannerghatta Campus - Grade 6 - 9</p>
                                </div>
                            </div>

                            <a href="#" class="d-block mt-4 mb-4 fw-bold" style="color: #0099ff; text-decoration: none;">
                                <small>REQUEST FOR SCHOLARSHIP BROCHURE</small>
                                <span style="margin-left: 5px;">→</span>
                            </a>
                            
                            <div class="d-flex gap-3">
                                <a href="#" class="btn px-4 py-2" style="background-color: #00A3FF; color: white; border-radius: 25px; box-shadow: 0 4px 15px rgba(0, 163, 255, 0.3); font-weight: 500; border: none; text-transform: uppercase; font-size: 14px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">APPLY NOW</a>
                                <a href="#" class="btn px-4 py-2" style="color: #00A3FF; border: 2px solid #00A3FF; background-color: transparent; border-radius: 25px; box-shadow: 0 4px 15px rgba(0, 163, 255, 0.3); font-weight: 500; text-transform: uppercase; font-size: 14px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">KNOW MORE</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="images/Carousal-Images/carousal3-2.jpg" class="img-fluid" style="border-radius: 15px;" alt="Students">
                        </div>
                        <div class="col-md-8">
                            <h2 style="color: #1a365d; font-size: 24px; margin-bottom: 20px;">Mahatma Gandhi Universal Values Merit-cum-Means Scholarship in Bangalore</h2>
                            <p style="color: #4a5568; margin-bottom: 30px;">In this digital world, students are known to be technology-savvy very early in their life. Their natural inclination towards the understanding of gadgets, applications and other digital tools makes them proficient in the subject at a very young age. This scholarship recognizes such young talents in the field of digital space and encourages them to succeed.</p>
                            
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Scholarship Tenure:</p>
                                    <p style="color: #2d3748; font-weight: 500;">1 Year</p>
                                </div>
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Scholarship Value:</p>
                                    <p style="color: #2d3748; font-weight: 500;">Upto 25% off on Tuition Fees</p>
                                </div>
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Applicable Grades:</p>
                                    <p style="color: #2d3748; font-weight: 500;">Grade Whitefield Campus - Grade 1 - 12<br>Bannerghatta Campus - Grade 1 - 9</p>
                                </div>
                            </div>

                            <a href="#" class="d-block mt-4 mb-4 fw-bold" style="color: #0099ff; text-decoration: none;">
                                <small>REQUEST FOR SCHOLARSHIP BROCHURE</small>
                                <span style="margin-left: 5px;">→</span>
                            </a>
                            
                            <div class="d-flex gap-3">
                                <a href="#" class="btn px-4 py-2" style="background-color: #00A3FF; color: white; border-radius: 25px; box-shadow: 0 4px 15px rgba(0, 163, 255, 0.3); font-weight: 500; border: none; text-transform: uppercase; font-size: 14px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">APPLY NOW</a>
                                <a href="#" class="btn px-4 py-2" style="color: #00A3FF; border: 2px solid #00A3FF; background-color: transparent; border-radius: 25px; box-shadow: 0 4px 15px rgba(0, 163, 255, 0.3); font-weight: 500; text-transform: uppercase; font-size: 14px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">KNOW MORE</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="images/Carousal-Images/carousal3-3.jpg" class="img-fluid" style="border-radius: 15px;" alt="Students">
                        </div>
                        <div class="col-md-8">
                            <h2 style="color: #1a365d; font-size: 24px; margin-bottom: 20px;">Global Future-ready Merit Scholarship At GIIS Bangalore</h2>
                            <p style="color: #4a5568; margin-bottom: 30px;">Global Indian International School offers the Global​ FUTURE-READY Merit (GFRM) Scholarship to deserving and distinguished students to study at one of their choice campuses within their own countries of residence. The prominent GFRM scholarship offers an impressive opportunity for an important learning experience that will prepare the student to become a global citizen</p>
                            
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Scholarship Tenure:</p>
                                    <p style="color: #2d3748; font-weight: 500;">1 Year</p>
                                </div>
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Scholarship Value:</p>
                                    <p style="color: #2d3748; font-weight: 500;">90% & Above</p>
                                </div>
                                <div class="col-md-4">
                                    <p style="color: #718096; margin-bottom: 5px;">Applicable Grades:</p>
                                    <p style="color: #2d3748; font-weight: 500;">Grade Whitefield Campus - Grade 6 - 12<br>Bannerghatta Campus - Grade 6 - 9</p>
                                </div>
                            </div>

                            <a href="#" class="d-block mt-4 mb-4 fw-bold" style="color: #0099ff; text-decoration: none;">
                                <small>REQUEST FOR SCHOLARSHIP BROCHURE</small>
                                <span style="margin-left: 5px;">→</span>
                            </a>
                            
                            <div class="d-flex gap-3">
                                <a href="#" class="btn px-4 py-2" style="background-color: #00A3FF; color: white; border-radius: 25px; box-shadow: 0 4px 15px rgba(0, 163, 255, 0.3); font-weight: 500; border: none; text-transform: uppercase; font-size: 14px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">APPLY NOW</a>
                                <a href="#" class="btn px-4 py-2" style="color: #00A3FF; border: 2px solid #00A3FF; background-color: transparent; border-radius: 25px; box-shadow: 0 4px 15px rgba(0, 163, 255, 0.3); font-weight: 500; text-transform: uppercase; font-size: 14px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">KNOW MORE</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5 py-5">
        <h2 class="text-center mb-5 fw-bold mb-4">Hear what parents have to say about us</h2>
        
        <div class="row justify-content-center g-4">
            <!-- First Testimonial -->
            <div class="col-md-6">
                <div class="card border-0 shadow h-100 position-relative">
                    <div class="card-body p-4">
                        
                        <div class="text-center mb-4">
                            <img src="images/Carousal-Images/parent1.png" class="rounded-circle mb-3" alt="Parent" width="130" height="130">
                        </div>
                        
                        <p class="text-center fw-bold text-muted mb-0">
                            We are glad to see how GIIS has made the learnings continue smoothly during these difficult times. My daughter is always excited to attend classes. She looks forward to her classes and talks about the new learnings after every class. We are content with her progress. Teachers' efforts are commendable.
                        </p>

                        <div class="text-center my-4">
                            <h5 class="fw-bold mb-2">Richa Kaushik</h5>
                            <p class="text-muted small">Mother of Vedika Gautam, KG 1B</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Second Testimonial -->
            <div class="col-md-6">
                <div class="card border-0 shadow h-100 position-relative">
                    <div class="card-body p-4">
                        
                        <div class="text-center mb-4">
                            <img src="images/Carousal-Images/parent2.png" class="rounded-circle mb-3" alt="Parent" width="130" height="130">
                        </div>
                        
                        <p class="text-center fw-bold text-muted mb-0">
                            We are happy to associate with an institution which thinks about the overall development of a child. My son had uninterrupted online classes during the pandemic. There were wonderful interactive daily sessions, thoughtful activities, creative Montessori activities etc, which gave enough opportunities to my child to showcase his talents.
                        </p>

                        <div class="text-center my-4">
                            <h5 class="fw-bold mb-2">Sukanya</h5>
                            <p class="text-muted small">Mother of Aadhvik Karthi Narayanan KG2A</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container py-5">


        <h2 class="text-center pb-2 fw-bold" style="">Our International School Campuses</h2>
        <h5 class="text-center pb-2 fw-bold"><small>Among India’s Top GIIS Schools in Bangalore</small></h5>
        <p class="text-center text-muted fw-bold pb-3">GIIS in Bangalore is synonymous with all-around excellence and growth. With a commitment to providing a transformative learning experience, GIIS Schools in Bangalore have established themselves as institutions of academic brilliance and holistic development. The schools offer a comprehensive curriculum that blends the best of international educational practices with a deep-rooted understanding of Indian values. State-of-the-art infrastructure, dedicated faculty members, and a wide range of <a href="#">co-curricular activities</a> ensure that students receive a well-rounded education that reflects life.</p>


        <!-- Country Filter Tabs -->
        <div class="d-flex flex-wrap gap-4 mb-3" style="border-bottom: 2px solid #eee;">
            <a href="#" class="text-decoration-none mb-3" style="border-bottom: 2px solid #00A3FF; margin-bottom: -2px;">
                <div class="d-flex align-items-center gap-2">
                    <img src="images/india.jpg" width="24" height="24" class="rounded-circle" alt="India flag">
                    <span style="color: #00A3FF;" class="fw-bold">India</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none mb-3">
                <div class="d-flex align-items-center gap-2">
                    <img src="images/singapore.svg" width="24" height="24" class="rounded-circle" alt="Singapore flag">
                    <span style="color: #666;" class="fw-bold">Singapore</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none mb-3">
                <div class="d-flex align-items-center gap-2">
                    <img src="images/UAE.svg" width="24" height="24" class="rounded-circle" alt="Singapore flag">
                    <span style="color: #666;" class="fw-bold">UAE</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none mb-3">
                <div class="d-flex align-items-center gap-2">
                    <img src="images/Japan.svg" width="24" height="24" class="rounded-circle" alt="Singapore flag">
                    <span style="color: #666;" class="fw-bold">Japan</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none mb-3">
                <div class="d-flex align-items-center gap-2">
                    <img src="images/Malaysia.svg" width="24" height="24" class="rounded-circle" alt="Singapore flag">
                    <span style="color: #666;" class="fw-bold">Malaysia</span>
                </div>
            </a>
            <a href="#" class="text-decoration-none mb-3">
                <div class="d-flex align-items-center gap-2">
                    <img src="images/Thailand.svg" width="24" height="24" class="rounded-circle" alt="Singapore flag">
                    <span style="color: #666;" class="fw-bold">Thailand</span>
                </div>
            </a>
        </div>

        <!-- Campus Grid -->
        <div class="row g-4">
            <!-- Nagpur -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/nagpur.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Nagpur</h5>
                </div>
            </div>

            <!-- Pune Hadapsar -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Hadapsa.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Pune - Hadapsar</h5>
                </div>
            </div>

            <!-- Pune Balewadi -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Balewad.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Pune - Balewadi</h5>
                </div>
            </div>

            <!-- Noida -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Noida.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Noida</h5>
                </div>
            </div>

            <!-- Bangalore Whitefield -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/whitefield.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Bangalore - Whitefield</h5>
                </div>
            </div>

            <!-- Bangalore Bannerghatta -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/bannerg.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Bangalore - Bannerghatta</h5>
                </div>
            </div>

            <!-- Ahmedabad -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow rounded-4" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="images/Amd.jpg" class="card-img-top rounded-4" alt="Nagpur Campus" style="height: 200px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <h5 class="fw-bold" style="color: #1a365d;">Ahmedabad</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4 py-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4" style="color: #1a365d;">Frequently Asked Questions</h2>

                <!-- Filter Pills -->
                <div class="mb-4">
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #FFE4D6; color: #FF6B00; border-radius: 50px;">About GIIS</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #E8E9ED; color: #666; border-radius: 50px;">Curriculum</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #FFE8E8; color: #666; border-radius: 50px;">Admission</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #E8F8FF; color: #666; border-radius: 50px;">Facilities</button>
                </div>

                <!-- Accordion -->
                <div class="accordion" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="color: #1a365d; box-shadow: none;">
                                <strong>When was Global Indian International School Bangalore established?</strong>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                                The Global Indian International School Bangalore campus was established in 2013 and is still evolving with the passage of every year.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="color: #1a365d; box-shadow: none;">
                                <strong>How can I track my ward's progress?</strong>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                                One of the best facilities of Global Indian International School is parental involvement. Parent-teacher meetings are held on a regular basis to keep them updated regarding their child’s development. The meetings are arranged both in online and offline mode.
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="color: #1a365d; box-shadow: none;">
                                <strong>How many campuses of Global Indian International School are there in Bangalore?</strong>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                                There are two campuses of Global Indian International School in Bangalore
                                1. Global Indian International School Whitefield Campus
                                2. Global Indian International School Bannerghatta Campus
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="color: #1a365d; box-shadow: none;">
                                <strong>What extracurricular and co-curricular activities are organised at Global Indian International School?</strong>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                                Students are encouraged to take part in the various extra-curricular and co-curricular activities organised every year. It is mandatory for the students to participate in at least one event of their choice. Extra-curricular activities include sports events such as cricket, tennis, soccer, basketball, archery etc and co-curricular activities include cultural events such as dance, music, instrumental music, drama etc.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/faq-img.webp" class="d-block w-100 img-fluid" alt="">
            </div>
        </div>
    </div>



    <div style="background-color: #004B93; padding: 60px 0;">
        <div class="container">
            <div class="row g-4">
                <!-- Whitefield Campus -->
                <div class="col-lg-4">
                    <h5 class="text-white mb-4">GIIS Whitefield Campus</h5>
                    <div class="card bg-transparent border-0">
                        <img src="images/whitefield-thumbnail.jpg" class="card-img" alt="Whitefield Campus" style="height: 200px; object-fit: cover; border-radius: 15px;">
                        <div class="card-img-overlay d-flex flex-column justify-content-end" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <p class="text-white mb-2 small">
                                <i class="bi bi-geo-alt-fill"></i>
                                No-5,6,8 Heggondahalli Village, Whitefield Sarjapur Main Road, Gunjur Post, Bengaluru, Karnataka 560087, India
                            </p>
                            <p class="text-white mb-0">
                                <i class="bi bi-telephone-fill"></i>
                                1800 5722 810
                            </p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/yt.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/fb.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/twitter.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/linkedIn.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/insta.webp" alt="">
                        </a>
                    </div>
                </div>

                <!-- Bannerghatta Campus -->
                <div class="col-lg-4">
                    <h5 class="text-white mb-4">GIIS Bannerghatta Campus</h5>
                    <div class="card bg-transparent border-0">
                        <img src="images/bgt-thumbnail.jpg" class="card-img" alt="Bannerghatta Campus" style="height: 200px; object-fit: cover; border-radius: 15px;">
                        <div class="card-img-overlay d-flex flex-column justify-content-end" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <p class="text-white mb-2 small">
                                <i class="bi bi-geo-alt-fill"></i>
                                Bannerghatta Main Rd, Gottigere, Bannerghatta, Bengaluru, Karnataka 560083, India
                            </p>
                            <p class="text-white mb-0">
                                <i class="bi bi-telephone-fill"></i>
                                1800 5722 810
                            </p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/yt.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/fb.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/twitter.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/linkedIn.webp" alt="">
                        </a>
                        <a href="#" class="rounded-circle me-2" style="width: 40px; height: 40px; padding: 8px;">
                             <img src="images/insta.webp" alt="">
                        </a>
                    </div>
                </div>

                <!-- Certifications -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center gap-3">
                        <img src="images/EFQM.webp" class="rounded-3" alt="EFQM Member" style="width: 100px;">
                        <div class="d-flex gap-3">
                            <div class="text-center">
                                <img src="images/1so9001.webp" alt="ISO 9001:2015" style="width: 100px;">
                                <p class="text-white fw-bold mt-3 mb-0">ISO 45001: 2018</p>
                                <p class="text-white small mb-0">Certificate Number:<br>17526-QIS-001</p>
                            </div>
                            <div class="text-center">
                                <img src="images/1so9001.webp" alt="ISO 45001:2018" style="width: 100px;">
                                <p class="text-white fw-bold mt-3 mb-0">ISO 9001: 2015</p>
                                <p class="text-white small mb-0">Certificate Number:<br>17526-OHS-001</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-dark text-white py-4" style="background-color: #07294d !important;">
        <div class="container-fluid">
            <div class="row">
                <!-- Logo and School Info Section -->
                <div class="col-md-4 mb-4 px-5">
                    <img src="images/gsg-logo-white.webp" class="" alt="Global Schools Group" style="width: 180px; margin-bottom: 20px;">
                    <p class="small mb-2">Member of Global Schools Group</p>
                    <div class="small">
                        <p class="mb-1">CBSE Affiliation #</p>
                        <p class="mb-1">Whitefield Campus : 830763</p>
                        <p class="mb-3">Bannerghatta Campus : 831255</p>
                    </div>
                    <div class="newsletter">
                        <h6 class="mb-3 px-4 px-md-4">Subscribe to our Newsletter</h6>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email" style="height: 40px;">
                            <button class="btn px-4 px-md-1" style="background-color: #8DC63F; color: white;">Subscribe Now</button>
                        </div>
                    </div>
                </div>

                <!-- About Section -->
                <div class="col-md-2 mb-4">
                    <h6 class="text-uppercase mb-2" style="color: #8DC63F;">About</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Vision Mission & Core Values</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>History & Milestones</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>GSG Management</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>GSG Board of Advisors</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Global Schools Group</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Careers</small></a></li>
                    </ul>
                    
                    <h6 class="text-uppercase mb-2 mt-4" style="color: #8DC63F;">School Level</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Pre Primary</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Primary School</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Secondary School</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>High School</small></a></li>
                    </ul>
                </div>

                <!-- Curricula & Admissions Section -->
                <div class="col-md-2 mb-4">
                    <h6 class="text-uppercase mb-2" style="color: #8DC63F;">Curricula</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Global Montessori (GMP)</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>CBSE</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>IGCSE</small></a></li>
                    </ul>

                    <h6 class="text-uppercase mb-2 mt-4" style="color: #8DC63F;">Admissions</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Admission Process</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Fees</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Admission Form</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Scholarships</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Book a Meeting</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Enquiry Form</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Upcoming Events</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Transfer Certificate</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Public vs. Private</small></a></li>
                    </ul>
                </div>

                <!-- Student Life & Resources Section -->
                <div class="col-md-2 mb-4">
                    <h6 class="text-uppercase mb-2" style="color: #8DC63F;">Student Life</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Holistic Education Framework</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Facilities</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Extra Curricular Activities</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Co Curricular Activities</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Events & Activities</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Parent Engagement</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Safety & Security</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Happiness Index</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>University Placements</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Faculty</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Value Added Programmes</small></a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h6 class="text-uppercase mb-2" style="color: #8DC63F;">Resources</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Resources</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Blog</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Podcast</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>MyGIIS</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Campus News</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Publications</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Photo Gallery</small></a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none"><small>Videos</small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    

    <div class="d-flex flex-column flex-md-row justify-content-center gap-4 py-3 text-center" style="background-color: #004B93;">
        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-white"><span>Privacy Policy</span></a>
        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-white"><span>Copyright</span></a>
        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-white"><span>Cookie Policy</span></a>
        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-white"><span>Terms of Service</span></a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>