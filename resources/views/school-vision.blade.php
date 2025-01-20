<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Vision, Mission and Core Values</title>
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
    </style>
</head>
<body>

    <x-nav>
        
    </x-nav>

    <div class="container-fluid">
        <img src="images/Carousal-Images/primary-menu.jpg" class="img-fluid" alt="">
    </div>

    <div class="container-fluid py-5" style="background-color: #fffaf3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-items-center my-auto">
                    <h2 class="mb-2">Committed to Overall Excellence</h2>
                    <p>The cornerstone of GIIS is our deep commitment to excellence. We embrace ethical engagements and futuristic techniques to provide exceptional education to our global learners.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/Carousal-Images/Committed-to-Overall-Excellence.jpg" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #f0f9fe">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-4 mb-2">
                    <img src="images/Carousal-Images/Our-Vision.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-md-8 align-items-center my-auto">
                    <h2 class="mb-2">Our Vision</h2>
                    <p>Since our founding, our goal has been to become a global role model for teaching and learning. We aspire to prepare students for moral, healthy, productive, and successful lives.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #fffaf1">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8 align-items-center my-auto">
                    <h2 class="mb-1">Our Mission</h2>
                    <p>We strive to embody our vision by holistically fostering our students in mind, body, and character; empower them to confidently explore their interests and put their skills to meaningful use.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/Carousal-Images/Our-mission.jpg" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #f0f9fe">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-4">
                    <img src="images/Carousal-Images/Our-Core-Philosophy.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-md-8 align-items-center my-auto">
                    <h2 class="mb-1">Our Core Philosophy</h2>
                    <p>At GIIS, we bring our mission and vision to life by following the teachings of Mahatma Gandhi. It’s how we nurture students’ growth to prepare them for college and beyond.

                    Everything we do is driven by these intrinsic beliefs:

                    Manage with Information and Metrics
                    Agility and Adaptability
                    Honesty, Integrity and Ethical Practices
                    Attitude before Knowledge
                    Teamwork
                    Mentor, Coach and Make a Difference
                    Ambience for Learning</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #fffaf1">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8 align-items-center my-auto">
                    <!-- <h2 class="mb-1">Our Mission</h2> -->
                    <p>A dedicated Mahatma Gandhi Centre for Universal Values in all our global campuses serves as an institutional lodestar for the values and beliefs of the Mahatma, and its relevance to today's world.

                    Through the centre, we ensure that our students get valuable insights into the teachings of Mahatma Gandhi, as well, we make an active effort to imbibe these values into our students.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/Carousal-Images/dedicated.jpg" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #f0f9fe">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-4">
                    <img src="images/Carousal-Images/Quality-Policy.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-md-8 align-items-center my-auto">
                    <h2 class="mb-1">Quality Policy</h2>
                    <p>At GIIS, we take our values, vision, and mission seriously. To this end, we created the following framework that helps us stay aligned with our vision and mission.

                    Adherence to a Quality Management System
                    Sharing of Best Practices
                    Actionable Feedback based on Stakeholder Satisfaction
                    Surveys</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #fffaf1">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-8 align-items-center my-auto">
                    <h2 class="mb-1">Quality Objectives</h2>
                    <p>As one of the leading private schools, the values we instill in our students are the same values that propel each member of our faculty. We live in alignment with our vision, mission, core values, quality policy, and quality objectives to get closer to our vision of becoming an international standard for learning.</p>
                </div>
                <div class="col-md-4">
                    <img src="images/Carousal-Images/Quality-Objectives.jpg" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>

    <x-footer>

    </x-footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>