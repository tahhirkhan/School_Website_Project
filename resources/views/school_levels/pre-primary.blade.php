<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre Primary</title>
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

        /* .video-card {
            background-image: url("images/Carousal-Images/image-utube.jpg");
        } */

    </style>
</head>
<body>


    <x-nav>
        
    </x-nav>

    <div class="position-relative vh-40 vh-md-40">
        <!-- Background Image Container -->
        <div class="w-100 h-100 bg-dark">
            <img src="images/Carousal-Images/pre-primary.jpg" 
                 alt="GIIS Campus" 
                 class="w-100 h-100 object-fit-cover opacity-75" style="width: 60%">
        </div>
        
        <!-- Text Overlay -->
        <div class="position-absolute bottom-50 start-0 w-100 p-4 pb-5" style="background: linear-gradient(transparent, rgba(0,0,0,0));">
            <div class="container">
                <div class="text-white text-center text-lg-center">
                    <h1 class="display-4 fw-bold mb-3">BEST NURSERY SCHOOLS IN BANGALORE</h1>
                    <p class="lead mb-0 d-none d-md-block">A world class campus with modern teaching methods designed for holistic development of young learners makes us the best Private International Nursery and Kindergarten School in Bangalore</p>
                    <!-- <p class="mb-0 d-md-none">Empowering generations through quality education since 2002.</p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 py-3 text-center" style="background-color: #0f4476">
            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-white fw-bold">SCHEDULE CAMPUS TOUR</a>
        </div>
        <div class="col-md-6 py-3 text-center" style="background-color: #f6921e">
            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-white fw-bold">ADMISSIONS OPEN 2025-26</a>
        </div>
    </div>


    <div class="container py-5">
        
        <div class="row mb-5">
            <div class="col-md-7">
                    <h2 class="fw-bold mb-3">
                        Elevate Your Child's Learning with the Internationally Recognised GMP Montessori Curriculum
                    </h2>
                    <p class="text-muted mb-4">As one of the best Pre-Primary Schools in Bannerghatta, we at GIIS believe in elevating your child's learning experience with the internationally recognised GMP Montessori Curriculum. As one of the leading nursery schools in Bannerghatta, we take pride in offering holistic education that fosters your child's overall development. The curriculum is designed to provide a nurturing and stimulating environment, encouraging curiosity, creativity, and independence in young learners.</p>
                    <p class="text-muted mb-4">Through our GMP Montessori Curriculum, we focus on fostering essential skills such as critical thinking, problem-solving, and social-emotional development. Your child will be empowered to explore, discover, and grow at their own pace, enriching their learning journey.</p>
                    <p class="text-muted mb-4">Enroll your child at Global Indian International School, Bannerghatta, Bangalore, today and witness the transformation as they embark on a journey of excellence and self-discovery. Our commitment to excellence positions us among the finest pre-primary schools in Bangalore, and our experienced and certified teachers will shape your child's brighter future through our internationally acclaimed GMP Montessori Curriculum.</p>
            </div>
            <div class="col-md-5">
                <img src="images/faq-img.webp" class="d-block w-100 img-fluid" alt="">
                <!-- <video src="https://www.youtube.com/watch?v=RShklGmXdZY&ab_channel=GlobalIndianInternationalSchool-SMARTCampus" class="object-fit-contain"></video> -->
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-8">
                <h2 class="fw-bold mb-3">
                    Elevate Your Child's Learning with the Internationally Recognised GMP Montessori Curriculum
                </h2>
                <p class="text-muted mb-4">
                Embark on a seamless nursery admission process at GIIS Bannerghatta, an ideal pre-primary school in Bannerghatta. We follow the Global Montessori Plus Programme (GMP) curricula, ensuring a holistic educational experience for your child. With a strategic focus on nurturing young talents and fostering creativity, our Bannerghatta campus stands as a beacon of quality education. Join our esteemed institution for a nursery admission that sets the foundation for your child's educational journey in the heart of Bannerghatta.
                </p>
            </div>
            <div class="col-md-4 px-4">
                <h2 class="mb-4 fw-bold" style="color: #1a365d;">FAQ's</h2>

                <!-- Filter Pills -->
                <div class="mb-4">
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #FFE4D6; color: #FF6B00; border-radius: 50px;">General</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #E8E9ED; color: #666; border-radius: 50px;">Preschool</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #FFE8E8; color: #666; border-radius: 50px;">Fees</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #E8F8FF; color: #666; border-radius: 50px;">Facilities</button>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-2">
                <img src="images/Carousal-Images/age-criteria-for-admissions.webp" class="d-block w-100 img-fluid" alt="">
            </div>
            <div class="col-md-8">
            <h2 class="fw-bold mb-3">
                Age Requirements for Pre-Primary School
            </h2>
            <p class="text-muted mb-4">
                As a prominent kindergarten school in Bangalore, our Bannerghatta campus is delighted to extend a warm invitation to students aspiring for admission into our Montessori preschool and kindergarten school. For our Nursery programme, children must meet the Nursery age criteria of being 2.5 years and above. For Preschool, the age criteria are aimed at those above 2.5 years, setting the foundation for their educational journey. Our KG age criteria in Bannerghatta require children to be at least 3.5 years and above to join KG1/Junior KG, while those above 4.5 years are eligible for KG2/Senior KG. We understand the importance of aligning learning experiences with age-appropriate development milestones. At GIIS Bannerghatta, we ensure that your child's journey through Nursery, Preschool, and Kindergarten is well-guided and tailored to their growth. Join us in shaping your child's educational path while adhering to these defined age criteria, fostering an environment of holistic learning and growth.
            </p>
            </div>
            <div class="col-md-2 text-danger fw-bold">----PENDING---</div>
        </div>

        <div class="py-4 text-center">
            <h5 class="fw-bold text-center mb-4" style="color: #0f4476">Unable to Visit the Campus? Schedule a Virtual Campus Tour and Online Counselling</h5>
            <a href="#" class="btn rounded-pill px-5 py-2 text-white" style="background-color: #a5cd39"><strong>SCHEDULE NOW</strong></a>
        </div>


        <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
            <div class="card rounded-4" style="width: 800px; background-color: #f5e6d8; border-radius: 20px;">

                <img src="images/whitefield-thumbnail.jpg" class="card-img rounded-4" alt="...">
                <div class="card-img-overlay">
                    <iframe 
                        class="position-absolute top-0 start-0 w-100 h-100"
                        style="border-radius: 20px;"
                        width="1280" 
                        height="720" 
                        src="https://www.youtube.com/embed/D_11dkdqnEA" 
                        title="Let&#39;s hear why GIIS Bannerghatta is special for parents" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                    <div class="text-center pb-4">
                        <h5 class="text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                            Let's hear why GIIS Bannerghatta is special for parents
                        </h5>
                    </div>
                </div>

                <!-- Caption -->
                <!-- <div class="text-center pb-4">
                    <h5 class="text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">
                        Let's hear why GIIS Bannerghatta is special for parents
                    </h5>
                </div> -->
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 text-end">
                    <a href="#" class="btn rounded-pill px-5 py-2 text-white" style="background-color: #0f4476"><strong>BOOK YOUR CAMPUS VISIT</strong>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn rounded-pill px-5 py-2 text-white" style="background-color: #f6921e"><strong>CHAT WITH A COUNSELLOR TODAY</strong>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mt-5 py-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/Carousal-Images/why-is-giis-best.webp" class="d-block w-80 img-fluid rounded-3" alt="">
                </div>
                <div class="col-md-8 ps-4">
                    <h2 class="fw-bold mb-3" style="color: #0f4476">
                        Why is GIIS the best Montessori School for your child?
                    </h2>
                    <p class="text-muted mb-4">
                        Discover excellence in early education at GIIS, the best pre-primary school in Bangalore. Our institution is renowned for providing a top-notch educational experience backed by the globally recognised Global Montessori Plus (GMP) curriculum.As a leading GMP school in Bangalore, we pride ourselves on offering a nurturing environment where young learners thrive. Our dedicated educators are adept at implementing the Montessori approach, fostering curiosity and a love for learning from the very beginning. The campus is equipped with state-of-the-art facilities, ensuring a holistic learning experience for your child.At GIIS Bannerghatta, we understand the importance of a strong foundation. Our Pre-Primary school is designed to nurture essential skills, laying the groundwork for academic success and personal development. Join us in shaping a promising future for your child by enrolling them in the top Bannerghatta pre-primary school, where GMP principles drive educational excellence.
                    </p>
                </div>
            </div>
        </div>

        <div class="py-5 text-center">
            <h6 class="fw-bold text-center mb-2" style="color: #0f4476"><a href="#" class="text-danger">KNOW IF YOUR CHILD IS APPLICABLE FOR A FEE WAIVER</a></h6>
            <p class="small text-muted">
            *In form of scholarships and admission fees to all deserving students across merit and based on family income.
            </p>
        </div>


        <div class="container py-5">
            <div class="row">
                <div class="col-md-10">
                    
                    <h2 class="fw-bold mb-3 text-center" style="color: #0f4476">
                        Subjects Offered - International Pre-primary School in Bangalore
                    </h2>
                    <p class="text-muted mb-4 text-center">
                        Subjects Offered at our International Pre-primary School in Bannerghatta encompass a comprehensive curriculum that fosters holistic development. In the Nursery program, we lay the foundation for learning through play-based activities. As students progress to KG2, they engage with a diverse array of subjects, including English, Hindi, STEM, Mathematics, Environmental Awareness (EVA), Dance and Music. We emphasise the significance of both free play and structured activities, allowing children to explore and learn at their own pace. The Montessori approach further enhances their cognitive and motor skills. At GIIS Bannerghatta, we provide a nurturing environment where learning is a joyful journey of discovery.
                    </p>

                    <h2 class="fw-bold mb-3 text-center" style="color: #0f4476">
                        Fees Structure For Pre-Primary School in Bangalore
                    </h2>
                    <h4 class="fw-bold mb-5 text-center" style="color: #0f4476">
                        Pre-Nursery/KG Fees Structure
                    </h4>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        
                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Registration Fee</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/registration-fee.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        One Time, Non Refundable
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 500</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Admission Fee</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/admission-fee.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        One Time, Non Refundable
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 51,550</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Security Deposit</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/security-deposit.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        One Time, Non Refundable
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 13,810</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Tuition Fees</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/tuition-fees.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        Per Term
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 29,350</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Term Charges</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/registration-fee.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        Per Term
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 5,470</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 mt-4 text-center text-md-start">
                        <p class="card-title mb-3 mb-md-0 fw-bold">Total Annual Recurring Fees: <span class="h3" style="color: #0f4476">Rs. 2,05,140</span></p>
                        <a href="#" class="btn btn-outline-warning px-4 rounded-pill"><strong>Admission Form</strong></a>
                    </div>

                    <h4 class="fw-bold mb-5 text-center py-4" style="color: #0f4476">
                        KG2 Fees Structure
                    </h4>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Registration Fee</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/registration-fee.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        One Time, Non Refundable
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 500</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Admission Fee</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/admission-fee.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        One Time, Non Refundable
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 51,550</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Security Deposit</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/security-deposit.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        One Time, Non Refundable
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 13,810</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Tuition Fees</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/tuition-fees.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        Per Term
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 29,910</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 p-4 border border-0 rounded-4 shadow" style="background-color: #f2fcff">
                                
                                <div class="card-body">
                                    <!-- Year with underline -->
                                    <h6 class="mb-4 text-center" style="color: #0f4476">
                                        <span class="year-underline fw-bold text-muted ">Term Charges</span>
                                    </h6>
                                
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/registration-fee.webp" alt="2002 Milestone" class="milestone-image img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text text-dark small text-muted text-center" style="color: #0f4476">
                                        Payment Frequency
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        Per Term
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        <small>Amount: </small> <strong class="h5" style="color: #f6921e">Rs. 5,570</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 mt-4 text-center text-md-start">
                        <p class="card-title mb-3 mb-md-0 fw-bold">Total Annual Recurring Fees: <span class="h3" style="color: #0f4476">Rs. 2,07,780</span></p>
                        <a href="#" class="btn btn-outline-warning px-4 rounded-pill"><strong>Admission Form</strong></a>
                    </div>

                    <h6 class="text-muted fw-bold">Kindly Note</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">20% off on Tuition Fees for Siblings.
                        </li>
                        <li class="list-group-item">Annual Charge to be paid with the First term tuition fee or with the current term of joining.
                        </li>
                        <li class="list-group-item">The above Fee does not include fees for uniforms and Books.
                        </li>
                        <li class="list-group-item">Each term is for 3 months duration, and there are 4 terms per academic year.
                        </li>
                    </ul>

                    <h2 class="fw-bold mb-4 mt-5 text-center" style="color: #0f4476">
                        Scholarships
                    </h2>

                    <x-scholarships>

                    </x-scholarships>

                    <h2 class="fw-bold mb-4 mt-5 text-center" style="color: #0f4476">
                        Parent Testimonials
                    </h2>

                    <div id="testimonialCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card mx-auto border border-0 shadow" style="max-width: 800px;">
                                    <div class="card-body text-center p-5">
                                        <!-- <div class="fs-1 text-success mb-3">"</div> -->
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="images/Carousal-Images/parent1.png" alt="Testimonial 1" class="rounded-circle" width="120" height="120">
                                        </div>
                                        <p class="card-text mb-4">We are happy to associate with an institution which thinks about the overall development of a child. My son had uninterrupted online classes during the pandemic. There were wonderful interactive daily sessions, thoughtful activities, creative Montessori activities etc, which gave enough opportunities to my child to showcase his talents.</p>
                                        <h5 class="card-title mb-2">Sukanya</h5>
                                        <p class="text-muted small">Mother of Aadhvik Karthi Narayanan KG2A</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="card mx-auto border border-0 shadow" style="max-width: 800px;">
                                    <div class="card-body text-center p-5">
                                        <!-- <div class="fs-1 text-success mb-3">"</div> -->
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="images/Carousal-Images/parent2.png" alt="Testimonial 2" class="rounded-circle" width="120" height="120">
                                        </div>
                                        <p class="card-text mb-4">The teaching methodology and dedication of teachers is exceptional. Our daughter has shown remarkable progress in both academics and extra-curricular activities. The school's focus on holistic development is truly commendable.</p>
                                        <h5 class="card-title mb-2">Priya Kumar</h5>
                                        <p class="text-muted small">Parent of Grade 3 Student</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item">
                                <div class="card mx-auto border border-0 shadow" style="max-width: 800px;">
                                    <div class="card-body text-center p-5">
                                        <!-- <div class="fs-1 text-success mb-3">"</div> -->
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="images/Carousal-Images/parent3.png" alt="Testimonial 3" class="rounded-circle" width="120" height="120">
                                        </div>
                                        <p class="card-text mb-4">The school's approach to digital learning during these challenging times has been outstanding. The balance between academics and creative activities helps maintain our children's interest and enthusiasm.</p>
                                        <h5 class="card-title mb-2">Rahul Sharma</h5>
                                        <p class="text-muted small">Parent of Grade 1 Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-indicators position-relative mt-3">
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="bg-primary active rounded-circle" style="width: 10px; height: 10px;" aria-current="true"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="bg-primary rounded-circle" style="width: 10px; height: 10px;"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="bg-primary rounded-circle" style="width: 10px; height: 10px;"></button>
                        </div>

                    </div>

                    <h2 class="fw-bold mb-4 mt-5 text-center" style="color: #0f4476">
                        Interested in other School Levels?
                    </h2>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 py-4">
                        <div class="col">
                            <div class="card-body">
                                <!-- Circular Image -->
                                <div class="text-center mb-4">
                                    <img src="images/Carousal-Images/Primary-School.webp" alt="2002 Milestone" class="img-fluid">
                                </div>
                            
                                <!-- Description -->
                                <h5 class="card-text fw-bold text-center" style="color: #00adee">
                                    Primary School
                                </h5>
                                <p class="card-text text-dark text-center" style="color: #0f4476">
                                    A quick glance at our primary school programme and facilities
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="card-body">
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/Secondary-School.webp" alt="2002 Milestone" class="img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <h5 class="card-text fw-bold text-center" style="color: #00adee">
                                        Primary School
                                    </h5>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        Focuses on the all round development of 11 to 14 year-olds
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="card-body">
                                    <!-- Circular Image -->
                                    <div class="text-center mb-4">
                                        <img src="images/Carousal-Images/High-School.webp" alt="2002 Milestone" class="img-fluid">
                                    </div>
                                
                                    <!-- Description -->
                                    <p class="card-text fw-bold text-center" style="color: #00adee">
                                        Primary School
                                    </p>
                                    <p class="card-text text-dark text-center" style="color: #0f4476">
                                        We provide children with the skills and knowledge to thrive in a 21st-century society
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <!-- Left Column with Image -->
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="card border-0 bg-light">
                                <img src="images/Carousal-Images/academic-calendar-book-.png" class="card-img-top p-4" alt="Academic Calendar Book">
                            </div>
                        </div>

                        <!-- Right Column with Content -->
                        <div class="col-md-8">
                            <h2 class="mb-3" style="color: #0f4476">Academic Calendar</h2>
                            <p class="mb-4 fw-bold" style="color: #0f4476">Our well-designed Calendar guide book helps to know about the school timings, holiday lists, examination schedules or any information related to the school functioning.</p>

                            <!-- Two Column Layout for Calendars -->
                            <div class="row">
                                <!-- Bannerghatta Calendar -->
                                <div class="col-md-6 mb-4">
                                    <h5 class="mb-3" style="color: #00adee">Bannerghatta Academic Calendar</h5>
                                    <div class="d-flex flex-column gap-3">
                                        <a href="#" class="text-decoration-none">
                                            <div class="d-flex align-items-center gap-2" style="color: #0f4476">
                                                <i class="bi bi-calendar"></i>
                                                Academic Calendar 2023-2024
                                            </div>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <div class="d-flex align-items-center gap-2" style="color: #0f4476">
                                                <i class="bi bi-file-text"></i>
                                                Exam Schedule 2022-2023
                                            </div>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <div class="d-flex align-items-center gap-2" style="color: #0f4476">
                                                <i class="bi bi-calendar-check"></i>
                                                Holiday Schedule 2022- 2023
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Whitefield Calendar -->
                                <div class="col-md-6 mb-4">
                                    <h5 class="mb-3" style="color: #00adee">Whitefield Academic Calendar</h5>
                                    <div class="d-flex flex-column gap-3">
                                        <a href="#" class="text-decoration-none">
                                            <div class="d-flex align-items-center gap-2" style="color: #0f4476">
                                                <i class="bi bi-calendar"></i>
                                                Academic Calendar 2023-2024
                                            </div>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <div class="d-flex align-items-center gap-2" style="color: #0f4476">
                                                <i class="bi bi-file-text"></i>
                                                Exam Schedule 2022-2023
                                            </div>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <div class="d-flex align-items-center gap-2" style="color: #0f4476">
                                                <i class="bi bi-calendar-check"></i>
                                                Holiday Schedule 2022- 2023
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-4" style="color: #0f4476">Trending News</h2>
        
                    <div class="row g-4">
                        <!-- First News Item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow border border-0">
                                <img src="images/Carousal-Images/Womens-Day-Celebration.webp" class="card-img-top" alt="Women's Day Celebration" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #0f4476">Women's Day Celebration at GIIS Bannerghatta brightens the face of every mother</h5>
                                    <p class="card-text">Every woman's success should be an inspiration to another. We are strongest...</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <small><i class="bi bi-clock me-2"></i>10 Mar 2021</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second News Item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow border border-0">
                                <img src="images/Carousal-Images/Students-celebrate-Earth-Day.webp" class="card-img-top" alt="Earth Day Celebration" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #0f4476">Students celebrate Earth Day and pledged to restore Earth</h5>
                                    <p class="card-text">With the emphasis on creating a green eco-friendly learning environment...</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <small><i class="bi bi-clock me-2"></i>23 Apr 2021</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third News Item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow border border-0">
                                <img src="images/Carousal-Images/Tiny-GIIS-Graduates.webp" class="card-img-top" alt="GIIS Graduates" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #0f4476">Tiny GIIS Graduates of Kindergarten all set to conquer the world</h5>
                                    <p class="card-text">It was a momentous tryst with destiny for the K2 students at GIIS Bannerghatta on March 20, 2021, as they graduated...</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <small><i class="bi bi-clock me-2"></i>22 Mar 2021</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-4 mt-4" style="color: #0f4476">Latest Videos</h2>
        
                    <div class="row g-4">
                        <!-- First News Item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow border border-0">
                                <img src="images/Carousal-Images/Womens-Day-Celebration.webp" class="card-img-top" alt="Women's Day Celebration" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #0f4476">Explore GIIS Whitefield Scholarship Program</h5>
                                    <p class="card-text">Every child is unique and has hidden talents that when encouraged, come to the fore. At GIIS, w...</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <small><i class="bi bi-clock me-2"></i>10 Mar 2021</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second News Item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow border border-0">
                                <img src="images/Carousal-Images/Students-celebrate-Earth-Day.webp" class="card-img-top" alt="Earth Day Celebration" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #0f4476">GIIS India GSE - Ethical dilemmas of COVID-19 and present real-time solutions</h5>
                                    <p class="card-text">Who knew that this global pandemic would entirely redefine the meaning of ethics? Aren't we liv...</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <small><i class="bi bi-clock me-2"></i>Who knew that this global pandemic would entirely redefine the meaning of ethics? Aren't we liv...</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third News Item -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 shadow border border-0">
                                <img src="images/Carousal-Images/Tiny-GIIS-Graduates.webp" class="card-img-top" alt="GIIS Graduates" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #0f4476">GIIS India GSE - Global Impact of COVID-19</h5>
                                    <p class="card-text">We are extremely elated to share that even amid such critical times, GIIS held a Global Student...</p>
                                    <div class="d-flex align-items-center text-muted">
                                        <small><i class="bi bi-clock me-2"></i>
                                        Jun 4, 2020</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>


                
                <div class="col-md-2">
                    <div class="d-flex gap-3">
                        <img src="images/Carousal-Images/fee-related.png" alt="">
                        <h5>Fees Related</h5>
                    </div>

                    <div class="d-flex gap-3">
                        <img src="images/Carousal-Images/fee-related.png" alt="">
                        <h5>Admission Related</h5>
                    </div>

                    <div class="d-flex gap-3">
                        <img src="images/Carousal-Images/fee-related.png" alt="">
                        <h5>Fees Related</h5>
                    </div>

                    <div class="d-flex gap-3">
                        <img src="images/Carousal-Images/fee-related.png" alt="">
                        <h5>Available Campuses</h5>
                    </div>

                    <div class="d-flex gap-3">
                        <img src="images/Carousal-Images/fee-related.png" alt="">
                        <h5>Chat with counsellor</h5>
                    </div>
                </div>
            </div>
        </div>
   
    </div>


    <!-- Global Campuses Section -->
    <div class="container py-5">

        <h2 class="text-center pb-2 fw-bold" style="">Our Global Campuses</h2>

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


    <!-- FAQ's Section -->
    <div class="container mt-4 mb-4 py-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4" style="color: #1a365d;">Frequently Asked Questions</h2>

                <!-- Filter Pills -->
                <div class="mb-4">
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #FFE4D6; color: #FF6B00; border-radius: 50px;">Preschool</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #E8E9ED; color: #666; border-radius: 50px;">Admissions</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #FFE8E8; color: #666; border-radius: 50px;">Fees</button>
                    <button class="btn border-0 px-4 py-2 me-2 mb-2" style="background-color: #E8F8FF; color: #666; border-radius: 50px;">Facilities</button>
                </div>

                <!-- Accordion -->
                <div class="accordion" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="color: #1a365d; box-shadow: none;">
                                <strong>What curriculum is offered to pre-primary school students?</strong>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                            GIIS is one of the best preschools in Bangalore, offering the award-winning Global Montessori Plus Programme that combines the original philosophy with the contemporary teaching approaches filled with innovative tools and technology.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="color: #1a365d; box-shadow: none;">
                                <strong>What are the five pillars of GMP?</strong>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                            Global Montessori Plus Programme (GMP) is an award-winning curriculum that provides ample opportunities to young learners so that they learn, grow and develop. The 5 pillars are:
‍
                            ● Excelerate Programme
                            ● Multi-faceted Learning
                            ● iPlay Programme
                            ● iCare Programme
                            ● Future Ready Programme
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="color: #1a365d; box-shadow: none;">
                                <strong>What is 9GEMS holistic approach?</strong>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                            9GEMS is an award-winning, holistic pedagogy created by some of the best education specialists. This framework has received the greatest awards in its field and aids in the overall development of students. The 9 GEMS are:

                            ● Academic Excellence
                            ● Sports Excellence
                            ● Visual and Performing Arts
                            ● Personality Development
                            ● Innovation and Creativity
                            ● Entrepreneurship and Leadership
                            ● Universal Values and Ethics
                            ● Community and Care
                            ● Skill Development
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="color: #1a365d; box-shadow: none;">
                                <strong>What are the subjects offered to KG1 and KG2?</strong>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                            The subjects offered to KG 1 and KG 2 students are:

                            ● English
                            ● Environmental Awareness
                            ● Mathematics
                            ● Hindi
                            ● STEM
                            ● Dance and Music
                            ● Free Play and Structured Play
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="color: #1a365d; box-shadow: none;">
                                <strong>How can parents know more about the curricula?</strong>
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body pb-4">
                            Parents can also book a meeting with our expert academic counsellors, who are well equipped with everything GIIS has to offer.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/Carousal-Images/faq-2.webp" class="d-block w-100 img-fluid" alt="">
            </div>
        </div>
    </div>


    <x-footer>
        
    </x-footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>