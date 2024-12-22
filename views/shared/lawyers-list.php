<?php
session_start();

// Vérification si l'utilisateur est connecté et est un avocat
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'lawyer') {
    header('Location: ../auth/login-page.php');
    exit;
}

// Configuration de la base de données
$dsn = 'mysql:host=localhost;dbname=avocat_connect;charset=utf8';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// try {
//     $pdo = new PDO($dsn, $username, $password, $options);

//     // Récupération des informations de l'avocat
//     $stmt = $pdo->prepare("SELECT * FROM users WHERE id_user = ? AND role = 'lawyer'");
//     $stmt->execute([$_SESSION['user_id']]);
//     $lawyer = $stmt->fetch();

// } catch (PDOException $e) {
//     die('Erreur de connexion à la base de données : ' . $e->getMessage());
// }
// ------------------------------
// try {
//     $stmt = $pdo->query("SELECT * FROM membres");
//     $membres = $stmt->fetchAll(PDO::FETCH_ASSOC);
// } catch (PDOException $e) {
//     echo "Erreur lors de la récupération des membres : " . $e->getMessage();
//     $membres = [];
// }
// ---------------------------
try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // Récupération de tous les avocats
    $stmt = $pdo->prepare("SELECT * FROM users WHERE role = 'lawyer'");
    $stmt->execute();
    $lawyers = $stmt->fetchAll(); // Récupérer tous les avocats dans un tableau

    // Affichage avec un foreach
   

} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}






?>
<!-- --------------------------------------------------------------------------------------- -->

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
                        <a href="home.php" class="nav-item nav-link">Accueil</a>
                        <a href="home.php#services" class="nav-item nav-link">Services</a>
                        <a href="home.php#about-section" class="nav-item nav-link">A propos</a>
                        <a href="home.php#blog" class="nav-item nav-link">blog</a>
                        <a href="#" class="nav-item nav-link active">Nos avocats</a>
                        <a href="#footer" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="login-page.php" class="btn btn-primary py-2 px-4">SE CONNECTER</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- lawyer list Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Liste de Nos experts</h5>
                    <h1 class="mb-5">AVOCATS</h1>
                </div>
                <div class="row g-4">
                    <?php foreach ($lawyers as $lawyer): ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <?php $photo_url = '/avocatconnect/assets/images/uploads/' . basename($lawyer['photo']); ?>
                                <img src="<?php echo htmlspecialchars($photo_url); ?>" 
                                    alt="Photo de <?php echo htmlspecialchars($lawyer['first_name']); ?>" 
                                    class="img-fluid">
                            </div>
                            <h5 class="mb-0"><?php echo htmlspecialchars($lawyer['first_name'] . ' ' . $lawyer['last_name']); ?></h5>
                            <?php 
                            $specialties = explode(',', $lawyer['user_description']);
                            foreach($specialties as $specialty): ?>
                                <small> <?php echo htmlspecialchars(trim($specialty)); ?></small>
                            <?php endforeach; ?>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="footer">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Avocat Connect</h4>
                        <a class="btn btn-link" href="#about-section">A propos</a>
                        <a class="btn btn-link" href="#footer">Contact</a>
                        <a class="btn btn-link" href="#services">Services</a>
                        <a class="btn btn-link" href="#blog">Blog</a>
                        <a class="btn btn-link" href="../legal/terms.php">Terms</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Centre Ville, Safi, Maroc</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 6 66 66 66 66</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>avocatconnect@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Veuillez saisir votre mail pour être informé de toutes nos nouveautés</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Avocat Connect</a>, Tous droits réservés. 
							Designed By <a class="border-bottom" href="https://dadssi.github.io/Portfolio/">d4dssi</a><br><br>
                            Distributed By <a class="border-bottom" href="https://www.youcode.ma/" target="_blank">Youcode</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#">Home</a>
                                <a href="../legal/cookies.php">Cookies</a>
                                <a href="#">Help</a>
                                <a href="#">FQAs</a>
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
            // Loup pour la liste déroulante des années d'expériences------------------
            // ------------------------------------------------------------------------
            const experienceSelect = document.getElementById("experience-years");

            for (let i = 1; i <= 30; i++) {
                const option = document.createElement("option");
                option.value = i; // Définir la valeur
                option.textContent = i + " an" + (i > 1 ? "s" : "");
                experienceSelect.appendChild(option);
            }
            // ------------------------------------------------------------------------
            // logique de validation du formulaire
            // ------------------------------------------------------------------------
            
            // ------------------------------------------------------------------------

            
     </script>
</body>

</html>