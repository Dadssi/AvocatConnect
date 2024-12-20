<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Avocat Connect | HOME</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="../../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link href="../../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Navbar and Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="../../assets/images/logo.png" alt=""></i>  Avocat Connect</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="home.php" class="nav-item nav-link active">Accueil</a>
                        <a href="#about-section" class="nav-item nav-link">A propos</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class=" text-center text-lg-start">
                            <div id="registration-forms" class="min-vh-100 d-flex justify-content-center align-items-center">
                                <div class="login-container position-relative" id="container">
                                    <div class="form-container sign-up-container">
                                        <form action="../auth/register.php" method="POST" enctype="multipart/form-data" id="registration-form" class="bg-white p-4 text-center d-flex flex-column align-items-center">
                                            <h1 class="fw-bold mt-4" id="create-account">Créer un Compte</h1>
                                            <div class="form-group w-100 mb-1">
                                                <label for="first-name" class="form-label"></label>
                                                <input type="text" class="form-control bg-light border-0" placeholder="Prénom" name="first_name" id="first-name" required aria-required="true"/>
                                                <span class="error-msg" id="first-name-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-1">
                                                <label for="last-name" class="form-label"></label>
                                                <input type="text" class="form-control bg-light border-0" placeholder="Nom" name="last_name" id="last-name" required aria-required="true"/>
                                                <span class="error-msg" id="last-name-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-1">
                                                <label for="age" class="form-label"></label>
                                                <input type="number" class="form-control bg-light border-0" placeholder="Âge" name="age" id="age" min="18" required aria-required="true"/>
                                                <span class="error-msg" id="age-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-3">
                                                <label for="email" class="form-label"></label>
                                                <input type="email" class="form-control bg-light border-0" placeholder="Email" name="email" id="email" required aria-required="true"/>
                                                <span class="error-msg" id="email-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-3">
                                                <label for="confirmation-email" class="form-label"></label>
                                                <input type="email" class="form-control bg-light border-0" placeholder="Confirmation d'email" name="confirmation_email" id="confirmation-email" required aria-required="true"/>
                                                <span class="error-msg" id="confirmation-email-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-3">
                                                <label for="password" class="form-label"></label>
                                                <input type="password" class="form-control bg-light border-0" placeholder="Mot de passe" name="password" id="password" required aria-required="true" minlength="8"/>
                                                <span class="error-msg" id="password-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-3">
                                                <label for="confirmation-password" class="form-label"></label>
                                                <input type="password" class="form-control bg-light border-0" placeholder="Confirmation du mot de passe" name="confirmation_password" id="confirmation-password" required aria-required="true"/>
                                                <span class="error-msg" id="confirmation-password-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-3">
                                                <label for="user-photo" class="form-label"></label>
                                                <input type="file" class="form-control bg-light border-0" name="user_photo" id="user-photo" accept="image/*" required aria-required="true"/>
                                                <span class="error-msg" id="user-photo-error"></span>
                                            </div>

                                            <div class="form-group w-100 mb-3">
                                                <label for="client-lawyer" class="form-label"></label>
                                                <select id="client-lawyer" name="role" class="form-select bg-light border-0" required aria-required="true">
                                                    <option value="" selected>Êtes-vous Client ou Avocat ?</option>
                                                    <option value="client">Client</option>
                                                    <option value="lawyer">Avocat</option>
                                                </select>
                                                <span class="error-msg" id="role-error"></span>
                                            </div>

                                            <div id="lawyer-informations" class="d-none w-100">
                                                <p class="text-start">Veuillez choisir vos spécialités :</p>
                                                <div class="checkbox-container">
                                                    <div class="form-check text-start">
                                                        <input class="form-check-input" type="checkbox" name="specialties[]" value="Droit pénal" id="penal">
                                                        <label class="form-check-label" for="penal">Droit pénal</label>
                                                    </div>
                                                    <div class="form-check text-start">
                                                        <input class="form-check-input" type="checkbox" name="specialties[]" value="Droit des assurances" id="assurance">
                                                        <label class="form-check-label" for="assurance">Droit des assurances</label>
                                                    </div>
                                                    <div class="form-check text-start">
                                                        <input class="form-check-input" type="checkbox" name="specialties[]" value="Droit du travail" id="travail">
                                                        <label class="form-check-label" for="travail">Droit du travail</label>
                                                    </div>
                                                    <div class="form-check text-start">
                                                        <input class="form-check-input" type="checkbox" name="specialties[]" value="Droit fiscal" id="fiscal">
                                                        <label class="form-check-label" for="fiscal">Droit fiscal et douanier</label>
                                                    </div>
                                                    <div class="form-check text-start">
                                                        <input class="form-check-input" type="checkbox" name="specialties[]" value="Droit immobilier" id="immobilier">
                                                        <label class="form-check-label" for="immobilier">Droit immobilier</label>
                                                    </div>
                                                    <div class="form-check text-start">
                                                        <input class="form-check-input" type="checkbox" name="specialties[]" value="Droit commercial" id="commercial">
                                                        <label class="form-check-label" for="commercial">Droit commercial</label>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="experience-years" class="form-label">Années d'expérience :</label>
                                                    <select id="experience-years" name="experience_years" class="form-select bg-light border-0">
                                                        <option value="" selected>Choisir</option>
                                                        <option value="1">1 an</option>
                                                        <option value="2">2 ans</option>
                                                        <option value="3">3 ans</option>
                                                        <option value="4">4 ans</option>
                                                        <option value="5">5 ans</option>
                                                        <option value="6">6 ans</option>
                                                        <option value="7">7 ans</option>
                                                        <option value="8">8 ans</option>
                                                        <option value="9">9 ans</option>
                                                        <option value="10">10 ans</option>
                                                        <option value="11">11 ans</option>
                                                        <option value="12">12 ans</option>
                                                        <option value="13">13 ans</option>
                                                        <option value="14">14 ans</option>
                                                        <option value="15">15 ans</option>
                                                        <option value="16">16 ans</option>
                                                        <option value="17">17 ans</option>
                                                        <option value="18">18 ans</option>
                                                        <option value="19">19 ans</option>
                                                        <option value="20">20 ans</option>
                                                        <option value="21">21 ans</option>
                                                        <option value="22">22 ans</option>
                                                        <option value="23">23 ans</option>
                                                        <option value="24">24 ans</option>
                                                        <option value="25">25 ans</option>
                                                        <option value="26">26 ans</option>
                                                        <option value="27">27 ans</option>
                                                        <option value="28">28 ans</option>
                                                        <option value="29">29 ans</option>
                                                        <option value="30">30 ans</option>
                                                    </select>
                                                    <span class="error-msg" id="experience-years-error"></span>
                                                </div>
                                            </div>
                                            <button id="subscribe-btn" type="submit" class="btn custom-btn mt-4 mb-3">S'inscrire</button>
                                        </form>
                                    </div>
                                    <div class="form-container sign-in-container">
                                        <form action="#" class="bg-white p-4 text-center d-flex flex-column align-items-center">
                                            <h1 class="fw-bold mt-4">Se connecter</h1>
                                            <div class="social-container my-3">
                                                <a href="#" class="social me-2"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" class="social me-2"><i class="fab fa-google-plus-g"></i></a>
                                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                            <span class="small mb-3">ou Utilisez votre compte</span>
                                            <input type="email" class="form-control bg-light border-0 mb-3" placeholder="Email" name="sign-in-mail"/>
                                            <input type="password" class="form-control bg-light border-0 mb-3" placeholder="Mot de passe" name="sign-in-password"/>
                                            <a href="#" class="text-dark text-decoration-none mb-3">Vous avez oublié votre mot de passe ?</a>
                                            <button class="btn custom-btn mb-3">Se connecter</button>
                                        </form>
                                    </div>
                                    <div class="overlay-container">
                                        <div class="overlay">
                                            <div class="overlay-panel overlay-left">
                                                <h1 class="fw-bold">ReBonjour</h1>
                                                <p class="my-4">Veuillez se connecter en utilisant votre email et mot de passe</p>
                                                <button class="registration-btn ghost" id="signIn">Se connecter</button>
                                            </div>
                                            <div class="overlay-panel overlay-right">
                                                <h1 class="fw-bold">Bienvenue</h1>
                                                <p class="my-4">Veuillez saisir vos détails personnelles pour s'inscrire</p>
                                                <button class="registration-btn ghost" id="signUp">S'INSCRIRE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-lg-4 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="../../assets/images/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Consultations Juridiques Personnalisées</h5>
                                <p>Obtenez des conseils juridiques adaptés à votre situation. Nos avocats vous guident à chaque étape pour résoudre vos problèmes en toute confiance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-file-contract text-primary mb-4"></i>
                                <h5>Rédaction et Analyse de Documents</h5>
                                <p>Confiez-nous la rédaction ou la vérification de vos contrats, accords et autres documents juridiques pour garantir leur conformité et leur fiabilité</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-gavel text-primary mb-4"></i>
                                <h5>Représentation Légale Professionnelle</h5>
                                <p>Bénéficiez d'une défense solide et experte lors de procédures judiciaires. Nos avocats sont à vos côtés pour vous guider à chaque étape du processus avec clarté</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-handshake text-primary mb-4"></i>
                                <h5>Médiation et Résolution de Conflits</h5>
                                <p>Favorisez des solutions amiables grâce à nos services de médiation. Nous vous aidons à résoudre vos différends rapidement et efficacement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <!-- About Start -->
        <div class="container-xxl py-5" id="about-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="../../assets/images/about-1.png">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="../../assets/images/about-2.png" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="../../assets/images/about-3.png">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="../../assets/images/about-4.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">A propos de Nous</h5>
                        <h1 class="mb-4">Bienvenue à <span class="span-clic">Avocat </span>Connect</h1>
                        <p class="mb-4">Avocat Connect offre un pont entre clients et avocats qualifiés. Nous simplifions vos démarches juridiques avec des solutions modernes et accessibles à tous.</p>
                        <p class="mb-4">Grâce à notre plateforme, trouvez rapidement un expert pour vous conseiller, vous accompagner ou vous représenter. Nous mettons l'excellence au service de vos besoins.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">ANS</p>
                                        <h6 class="text-uppercase mb-0">D'EXPERIENCE</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">35</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">AVOCATS</p>
                                        <h6 class="text-uppercase mb-0">EXPERTS</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">découvrir nos éxperts</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../assets/images/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../assets/images/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../assets/images/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="../../assets/images/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
         
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/lib/wow/wow.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/counterup/counterup.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- <script src="js/main.js"></script> -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/validation.js"></script>
     <script>
        const signUpButton = document.getElementById('signUp');
			const signInButton = document.getElementById('signIn');
			const container = document.getElementById('container');

			signUpButton.addEventListener('click', () => {
				container.classList.add('right-panel-active');
			});

			signInButton.addEventListener('click', () => {
				container.classList.remove('right-panel-active');
			});
            // ------------------------------------------------------------------------
            document.getElementById("client-lawyer").addEventListener("change", function () {
                console.log("changed");
                const selectedValue = this.value;
                const hiddenDiv = document.getElementById("lawyer-informations");

                if (selectedValue === "lawyer") {
                    hiddenDiv.classList.remove("d-none");
                } else {
                    hiddenDiv.classList.add("d-none");
                }
            });
            // ------------------------------------------------------------------------
            // logique de validation du formulaire
            // ------------------------------------------------------------------------
            
            // ------------------------------------------------------------------------

            
     </script>
</body>

</html>