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

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // Récupération des informations de l'avocat
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id_user = ? AND role = 'lawyer'");
    $stmt->execute([$_SESSION['user_id']]);
    $lawyer = $stmt->fetch();

    // Récupération des rendez-vous en attente
    // $stmt = $pdo->prepare("
    //     SELECT r.*, u.first_name, u.last_name 
    //     FROM reservations r 
    //     JOIN users u ON r.client_id = u.id_user 
    //     WHERE r.lawyer_id = ? 
    //     ORDER BY r.date DESC, r.time DESC
    // ");
    // $stmt->execute([$_SESSION['user_id']]);
    // $appointments = $stmt->fetchAll();

    // Récupération de l'historique des consultations
    // $stmt = $pdo->prepare("
    //     SELECT c.*, u.first_name, u.last_name 
    //     FROM consultations c 
    //     JOIN users u ON c.client_id = u.id_user 
    //     WHERE c.lawyer_id = ? 
    //     ORDER BY c.date DESC, c.time DESC
    // ");
    // $stmt->execute([$_SESSION['user_id']]);
    // $consultations = $stmt->fetchAll();

} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Fonction pour gérer le statut des rendez-vous
// function getStatusBadge($status) {
//     switch($status) {
//         case 'confirmed':
//             return '<span class="badge bg-success">Confirmée</span>';
//         case 'pending':
//             return '<span class="badge bg-dark">En Attente</span>';
//         case 'cancelled':
//             return '<span class="badge bg-danger">Annulée</span>';
//         default:
//             return '<span class="badge bg-secondary">Statut inconnu</span>';
//     }
// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
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
    <link href="../../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- Vos balises head restent identiques -->
    <title>Dashboard Avocat - <?php echo htmlspecialchars($lawyer['first_name'] . ' ' . $lawyer['last_name']); ?></title>
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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contenu principal -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <?php if ($lawyer && !empty($lawyer['photo'])): ?>
                            <?php
                            // Puisque l'image est accessible via /avocatconnect/assets/...
                            $photo_url = '/avocatconnect/assets/images/uploads/' . basename($lawyer['photo']);
                            ?>
                            <img src="<?php echo htmlspecialchars($photo_url); ?>" 
                                alt="Photo de <?php echo htmlspecialchars($lawyer['first_name']); ?>" 
                                class="rounded-circle mb-3" 
                                width="100">
                        <?php else: ?>
                            <img src="../../assets/images/avatar-neutre.png" 
                                alt="avatar-neutre" 
                                class="rounded-circle mb-3" 
                                width="100">
                        <?php endif; ?>
                        <h5 class="card-title">
                            <?php echo htmlspecialchars($lawyer['first_name'] . ' ' . $lawyer['last_name']); ?>
                        </h5>
                        <p class="text-muted"><?php echo htmlspecialchars($lawyer['email']); ?></p>
                        <a href="edit-profile.php" class="btn btn-primary btn-sm">Modifier le Profil</a>
                    </div>


                    </div>
                    <div class="card shadow-sm mt-3">
                        <div class="card-body">
                            <h6 class="card-title">Biographie :</h6>
                            <p class="text-muted">
                                <?php echo nl2br(htmlspecialchars($lawyer['user_description'] ?? 'Aucune biographie disponible')); ?>
                            </p>
                            <h6 class="card-title">Spécialités :</h6>
                            <?php 
                            $specialties = explode(',', $lawyer['user_description']);
                            foreach($specialties as $specialty): ?>
                                <span>- <?php echo htmlspecialchars(trim($specialty)); ?></span><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Section des rendez-vous -->
                <div class="col-lg-9">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white">
                            <h6>Demandes de réservation</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom du client</th>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>

                    <!-- Historique des consultations -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h6>Historique des Consultations</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom du Client</th>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>Feedback</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

    <!-- JavaScript Libraries restent identiques -->
    
    <!-- Ajout du script pour gérer les actions -->
    <script>
    function updateStatus(appointmentId, status) {
        if (confirm('Êtes-vous sûr de vouloir ' + (status === 'confirmed' ? 'accepter' : 'rejeter') + ' ce rendez-vous ?')) {
            fetch('update-appointment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    appointment_id: appointmentId,
                    status: status
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer.');
                }
            });
        }
    }

    function addFeedback(consultationId) {
        const feedback = prompt('Veuillez entrer votre avis sur cette consultation :');
        if (feedback) {
            fetch('add-feedback.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    consultation_id: consultationId,
                    feedback: feedback
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer.');
                }
            });
        }
    }
    </script>
</body>
</html>