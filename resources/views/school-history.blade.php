<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School History | Eductaional Philosophy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
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

        /* .milestone-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
        } */

        .milestone-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
        }
        .year-underline {
            display: inline-block;
            position: relative;
        }
        .year-underline::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #FDB813;
        }

    </style>
</head>
<body>

    <x-nav>
        
    </x-nav>

    <!-- <div class="container-fluid mb-3">
        <img src="images/Carousal-Images/bannerghatta-campus-2.jpg" class="img-fluid" alt="">
    </div>   -->

    <!-- <div class="position-relative vh-50">
        <div class="w-100 h-50 bg-dark">
            <img src="images/Carousal-Images/bannerghatta-campus-2.jpg" 
                 alt="GIIS Campus" 
                 class="w-100 h-60 object-fit-cover opacity-75">
        </div>

        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
            <div class="container">
                <h1 class="display-4 text-white fw-bold mb-4">GIIS HISTORY</h1>
            </div>
        </div>
    </div> -->

    <div class="position-relative vh-40 vh-md-40">
        <!-- Background Image Container -->
        <div class="w-100 h-100 bg-dark">
            <img src="images/Carousal-Images/bannerghatta-campus-2.jpg" 
                 alt="GIIS Campus" 
                 class="w-100 h-100 object-fit-cover opacity-75" style="width: 60%">
        </div>
        
        <!-- Text Overlay -->
        <div class="position-absolute bottom-50 start-0 w-100 p-4 pb-5" style="background: linear-gradient(transparent, rgba(0,0,0,0));">
            <div class="container">
                <div class="text-white text-center text-lg-center">
                    <h1 class="display-4 fw-bold mb-3">GIIS HISTORY</h1>
                    <!-- <p class="lead mb-0 d-none d-md-block">Empowering generations through quality education since 2002, GIIS has grown from a single campus to a global network of excellence.</p>
                    <p class="mb-0 d-md-none">Empowering generations through quality education since 2002.</p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Text Content Column -->
            <div class="col-lg-8">
                <div class="pe-lg-4">
                    <p class="mb-3">We have come a long way since our inception in 2002..</p>
                    
                    <p class="mb-3">
                        In the last 20+ years, we have grown to span eleven countries with 64 campuses combined in Singapore, India, Malaysia, Japan, Thailand, UAE, Vietnam, Saudi Arabia, South Korea, Cambodia and the United Kingdom.
                    </p>
                    
                    <p class="mb-3">
                        Today, we are a leading <a href="#" class="text-decoration-none">international school in Bangalore</a> offering Indian and <a href="#" class="text-decoration-none">international curricula</a> to students from diverse backgrounds.
                    </p>
                    
                    <p class="mb-3">
                        We, at GIIS Bangalore, have steadfastly focused on providing an extraordinary education to students from all over the world. In adopting the cultural ideology of "Schools That Learn", we make each and every member of our community an equal partner in the process of learning.
                    </p>
                    
                    <p class="mb-3">
                        We have established ourselves as one of the best private and international schools by empowering students to take on active roles in their own progress. We uniquely engage them while promoting a culture reinforcing the joy of lifelong learning.
                    </p>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="col-lg-4">
                <div class=" rounded-3 mt-4 mt-lg-0">
                    <img src="images/Carousal-Images/history.jpg" alt="" class="img-fluid border border-success border-2 p-1 rounded-3" width="500" height="150">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <!-- Header -->
        <div class="mb-5 ms-5">
            <div class="gap-2 mb-2">
                <img src="images/Carousal-Images/cloud.webp" alt="Rainbow Cloud" style="height: 40px;">
                <h1 class="fw-bold text-navy mb-0 ms-5">Milestones</h1>
            </div>
            <p class="text-muted ms-5">Greatest Achievements Over the Years</p>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #fffaf1">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2002</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2002.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS opens the first campus in Mount Sophia, Singapore with 48 students to fulfill the needs of Indians working overseas in Asia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f0f9fe">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2006</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2006.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS opens 2 new campuses in Malaysia and Japan and a 2nd campus in Singapore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #fffaf1">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2007</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2007.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GSF continues its Asian expansion with the opening of a new campus in Thailand and its first campus in India. These new campuses mark a milestone in Global School’s history where it expanded via local partners through joint ventures or franchise.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f0f9fe">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2008-09</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2008.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS opens a 3rd Singapore campus and expands into Vietnam and Malaysia. We continue to expand its presence in India to meet the rising demand for private schools.

                            These schools enable returning expatriates to easily transfer their children from an overseas GIIS school to an Indian one.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #fffaf1">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2010</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2009.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS opens its first campus in the Middle East in Dubai, positioning GSF as a global group in education.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f0f9fe">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2011-13</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2011.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS continues to expand in India. The endorsement by IFC affirms GSF’s growing brand and reputation as an international school.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #fffaf1">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2015</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2015.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GSF acquires One World International School and develops a new GIIS school in Abu Dhabi.

                            Our parent foundation, Global School Foundation, acquires One World International School, a premium pre-school and primary education-focused international school and Developed new school in Abu Dhabi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f0f9fe">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2016-17</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2017.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS consolidates and transforms two smaller Singapore campuses into the new state-of-the-art Punggol campus with capacity expansion.

                            We continue further expansion overseas with new campuses in the Middle East and India.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #fffaf1">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2018</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2017.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS ramps up presence in India with plans to set up 4 new SMART campuses in Bangalore and Pune. ‍
    ‍
                            GIIS is recognized as one of the Best Education Brands of 2018 by The Economic Times.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f0f9fe">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2019</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2017.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS Smart Campus wins the prestigious GAIL Sustainability Innovator Award for its green practices and initiatives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #fffaf1">
                        
                        <div class="card-body">
                            <!-- Year with underline -->
                            <h2 class="mb-4">
                                <span class="year-underline fw-bold text-dark">2020</span>
                            </h2>
                        
                            <!-- Circular Image -->
                            <div class="text-center mb-4">
                                <img src="images/Carousal-Images/2017.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                            </div>
                        
                            <!-- Description -->
                            <p class="card-text text-dark">
                            GIIS crosses the 200-award milestone by winning 64 awards in education excellence in a single calendar year.

                            GIIS Tokyo emerges as the world's only overseas international school appearing in the top 10 CBSE rankings among the 600+ affiliated schools operating outside India.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>



    <x-footer>
        
    </x-footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>