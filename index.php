
<?php
include 'conn.php'; // Include database connection

// Fetch the 10 latest events from the database
$sql = "SELECT title, description, event_date FROM events ORDER BY event_date DESC LIMIT 10";
$result = $conn->query($sql);

$events = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/images/logo2.png" type="image/png">
        <title>Pasmanda Vikas Foundation </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

          <!-- Topbar Start -->
          <?php include('includes/topbar.php');?>
    <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <?php include('includes/navbar.php');?>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/images/images1/01.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Empowerment Through Inclusion</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Equal Access, Equal Opportunity</h1>
                                        <p class="mb-5 fs-5"> Transforming Lives of Muslim OBCs, SCs, and STs for a Brighter Tomorrow
                                        </p>
                                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/watch?v=5gy2QcfViBM"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="contact.php">Contact Now</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/people/Pasmanda-Vikas-Foundation/61560470844229/?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://x.com/i/flow/login?redirect_after_login=%2FPasmandaVikasF"><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/pasmanda_vikas_foundation/?igsh=MXVnNGQ2cHNwZDBncA%3D%3D"><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://www.youtube.com/watch?v=5gy2QcfViBM"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/images/images1/02.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Building Bridges to Equality</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Empowering Pasmanda Communities for a Brighter Future</h1>
                                        <p class="mb-5 fs-5">Together, we uplift Muslim OBCs, SCs, and STs towards equality and prosperity.
                                        </p>
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/watch?v=5gy2QcfViBM"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="contact.php">Contact Now</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href="https://www.facebook.com/people/Pasmanda-Vikas-Foundation/61560470844229/?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://x.com/i/flow/login?redirect_after_login=%2FPasmandaVikasF"><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/pasmanda_vikas_foundation/?igsh=MXVnNGQ2cHNwZDBncA%3D%3D"><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://www.youtube.com/watch?v=5gy2QcfViBM"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Us</h4>
                            <h1 class="display-5 mb-4">Empowering Unity:</h1>
                         <p>   Pasmanda Vikas Foundation has been established to raise the voice of the rights of the Pasmanda/Backward classes in the country by bringing together like-minded people and organizations and to solve/resolve the problems/issues faced anywhere in the country.
                     So that a completely just and inclusive society can be created.</p>
                   <h4> All Pasmanda/Backward people are equal</h4>
                    <p>Pasmanda Vikas Foundation:- Emphasizes the importance of equality and unity among all Indians, irrespective of their culture, social status, religion, sect/community/faction, caste or ethnicity.
                    PVF is committed and assured that in the coming years, it will ensure its participation in making the country powerful at the global level and in maintaining the unity and integrity of the nation by making all the Pasmanda/Backward classes strong educationally, socially, economically and politically.</p>
                            <p class="mb-4">
                            Our mission is to forge a path of equality and prosperity for Muslim OBCs, SCs, and STs.
                            By addressing systemic barriers and fostering inclusive opportunities,
                            we are dedicated to uplifting these communities and ensuring that every individual has the chance to thrive.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Education Initiatives</h4>
                                            <p>Providing scholarships, educational resources, and mentoring programs to empower the youth in the Pasmanda community.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Self Empowerment</h4>
                                            <p> Offering skill development, vocational training, and financial assistance to help individuals achieve economic independence.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Call Us</h4>
                                            <p class="mb-0 fs-5" style="letter-spacing: 1px;">+91-9810851819</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">


                    <div class="bg-primary rounded position-relative overflow-hidden">
<div class="container my-5">
    <h2 class="text-center mb-4">Latest Events</h2>
    <div class="overflow-hidden">
        <div id="marquee" class="d-flex flex-nowrap">
            <?php if (!empty($events)): ?>
                <?php foreach ($events as $event): ?>
                    <div class="card m-2" style="min-width: 250px; flex-shrink: 0;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($event['description']); ?></p>
                            <p class="card-text">
                                <small class="text-muted"><?php echo htmlspecialchars($event['event_date']); ?></small>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">No events found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

</div>


                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="img/images/images1/22.jpg" class="img-fluid rounded w-100" alt="">
</div>


                           <!-- <div class="" style="position: absolute; top: -15px; right: -15px;">
                                <img src="img/images/images1/05.jpg" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                            </div>
                            <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                                <img src="" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                            </div>-->
                           <div class="rounded-bottom">
                                <img src="img/images/images1/05.jpg" class="img-fluid rounded-bottom w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid service pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Visions</h4>
                    <h1 class="display-5 mb-4">Together we will make a Difference</h1>
                    <p class="mb-0">We envision a society where every individual, regardless of their caste or socio-economic background, has the opportunity to lead a dignified and prosperous life. Through our various programs and initiatives, we aim to break the cycle of poverty and discrimination, creating pathways for sustainable development and self-reliance.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/images/images1/06.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Education and Awareness:</a>
                                <p class="mb-4">PVF acts as a bridge to connect Madrasas to modern education and educates the Pasmanda community about their rights and benefits entitled to them at the social level.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/images/images1/07.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Economic Empowerment:</a>
                                <p class="mb-4">PVF provides training and resources to members of the Pasmanda community to help them improve their economic well-being and become self-reliant.

                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/images/images1/08.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Legal Aid:</a>
                                <p class="mb-4">PVF provides legal aid to members of the Pasmanda community and helps them resolve their disputes/litigation including other legal issues.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/images/images1/09.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Advocacy:</a>
                                <p class="mb-4">PVF advocates and promotes for the rights of the Pasmanda community at the local, state and national levels.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/images/images1/10.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Health and Sanitation:</a>
                                <p class="mb-4">PVF works to improve access to healthcare and sanitation facilities in the areas of the Pasmanda community.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/images/images1/11.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Women Empowerment:</a>
                                <p class="mb-4">PVF's initiatives aim to empower women in every respect, including education and job training programs.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Features Start -->
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Community Development:</h4>
                    <h1 class="display-5 mb-4">PVF works to develop infrastructure and facilities in the areas served by the Pasmanda community</h1>
                    <p class="mb-0">PVF works to develop infrastructure and facilities in the areas served by the Pasmanda community, such as skill development, scholarships, coaching centers, schools, colleges, IT institutes, media channels, hospitals and community centers.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-chart-line fa-4x text-primary"></i>
                            </div>
                            <h4>skill development & scholarships</h4>
                            <p class="mb-4">We offer comprehensive skill development programs coupled with scholarships to empower...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-university fa-4x text-primary"></i>
                            </div>
                            <h4>Schools, Colleges & Hospitals</h4>
                            <p class="mb-4">We are committed to establishing and supporting educational institutions and healthcare...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-file-alt fa-4x text-primary"></i>
                            </div>
                            <h4>IT institutes & media channels</h4>
                            <p class="mb-4">We support the development of IT institutes and media channels to empower the Pasmanda...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                            </div>
                            <h4>Economic Empo. & Financing</h4>
                            <p class="mb-4">We are dedicated to fostering economic empowerment within the Pasmanda community...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Offer Start -->
        <div class="container-fluid offer-section pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Offer to The Community</h4>
                    <h1 class="display-5 mb-4">Benefits We offer for Pasmanda Communities</h1>
                    <p class="mb-0">پسماندہ وکاس فاؤنڈیشن۔                                                       اپنے دستور میں بیان کردہ اپنے مقاصد کے لیے پرعزم ہے۔  #PVF بنیادی طور پر پسماندہ برادری کی ترقی اور بہبود کے لیے کام کرتا ہے جس میں مسلم #OBC (دیگر پسماندہ طبقہ)، #SC (شیڈولڈ کاسٹ) اور #ST (شیڈول ٹرائب) شامل ہیں۔ 
                    </p>
                </div>
                <div class="row g-5 align-items-center">
    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="nav nav-pills bg-light rounded p-5">
            <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                <h5 class="mb-0">Skill Development and Training Programs</h5>
            </a>
            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                <h5 class="mb-0">Financial Assistance for Startups and Small Businesses</h5>
            </a>
            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                <h5 class="mb-0">Educational Scholarships and Resources</h5>
            </a>
            <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                <h5 class="mb-0">Legal Aid and Social Justice Support</h5>
            </a>
        </div>
    </div>

                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="tab-content">
                            <div id="collapseOne" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/images/images1/20.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">فاؤنڈیشن کے بنیادی مقاصد میں شامل ہیں:-</h1>
                                        <p class="mb-4"> @ تعلیم اور بیداری:-                                                                                       #PVF مدارس کو جدید تعلیم سےجوڑنے کے لیے ایک پل کا کام کرتا ہےاور پسمانڈا کمیونٹی کو ان کے حقوق اور سماجی سطح پر انکے فوائد کے بارے میں آگاہ کرنے کے لیے کام کرتا ہے جن کے وہ حقدار ہی
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/images/images1/23.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">مالی معاونت اور اسٹارٹ اپس</h1>
                                        <p class="mb-4">ہم نئے کاروباری افراد کو پاسمانڈا کمیونٹی سے مالی معاونت فراہم کرتے ہیں تاکہ وہ اپنے کاروبار کا آغاز کر سکیں۔ ہمارا مقصد اختراعات کو فروغ دینا، ملازمت کے مواقع پیدا کرنا، اور یہ یقینی بنانا ہے کہ کمیونٹی کے اراکین کے پاس اپنے منصوبوں میں کامیابی کے لیے درکار وسائل موجود ہوں۔
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/images/images1/57.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">تعلیمی اسکالرشپس اور وسائل۔</h1>
                                        <p class="mb-4">ہم پاسمانڈا کمیونٹی کے طلباء کو اسکالرشپس اور تعلیمی وسائل فراہم کرتے ہیں تاکہ انہیں بااختیار بنایا جا سکے۔ ہمارا مقصد تعلیم میں مالی رکاوٹوں کو ختم کرنا ہے، تعلیمی ممتازیت کے مواقع فراہم کرنا ہے، اور اگلی نسل کے رہنماؤں اور ماہرین کو فروغ دینا ہے۔
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/images/images1/54.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">قانونی مدد اور سماجی انصاف کی معاونت۔</h1>
                                        <p class="mb-4">ہم پاسمانڈا کمیونٹی کے ارکان کو قانونی مدد اور وکالت کی خدمات فراہم کرتے ہیں، تاکہ ان کے حقوق کی حفاظت ہو اور ان کی آواز سنی جائے۔ ہمارا مقصد سماجی انصاف کو فروغ دینا، امتیاز کا خاتمہ کرنا، اور افراد کو انصاف اور برابری کے حصول کے لیے بااختیار بنانا ہے۔





                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#contact.php">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->


       <!-- Footer Start -->

      <?php include ('includes/footer.php');?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>


<!-- JavaScript for Marquee Effect -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const marquee = document.getElementById("marquee");

        let scrollAmount = 0;
        function marqueeScroll() {
            scrollAmount -= 1;
            if (Math.abs(scrollAmount) >= marquee.scrollWidth / 2) {
                scrollAmount = 0;
            }
            marquee.style.transform = `translateX(${scrollAmount}px)`;
        }

        // Start the marquee scroll effect
        setInterval(marqueeScroll, 20); // Adjust speed by changing the interval
    });
</script>




    </body>

</html>