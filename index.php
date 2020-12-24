<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script type='text/javascript'>
        function refreshCaptcha() {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }
    </script>
    <script type='text/javascript'>
        $('.alert').alert()
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hellenic Blockchain Assossiation</title>
    <link rel="icon" type="image/png" href="favicon.ico">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v2.0.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto">
                <a href="index.php"><img src="assets/img/logo-square.png"> HBA<span>.</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#Members">Μέλη</a></li>
                    <li><a href="#New-Member">Εγγραφή</a></li>
                    <li><a href="#Goals">Στόχοι</a></li>
                    <li><a href="announcements.html">Ανακοινώσεις</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="#contact" class="get-started-btn scrollto">Contact</a>
        </div>
    </header>
    <!-- End Header -->

    <?php
    if ($_GET['msg'] == 'success_communication') {
        $msg = 'Ευχαριστούμε για την επικοινωνία θα σας απαντήσουμε το συντομότερο δυνατό.';
        echo '<div class="alert alert alert-success alert-dismissible fade show" id="alert" role="alert">
                    ' . $msg . '
                        <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
    } elseif ($_GET['msg'] == 'success_subscription') {
        $msg = 'Η Αίτηση σας έγινε αποδεχτή. Αναμένετε επικοινωνία μέσω e-mail με την επιβεβαίωση εγγραφής.';
        echo '<div class="alert alert alert-success alert-dismissible fade show" id="alert" role="alert">
                ' . $msg . '
                    <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    } elseif ($_GET['msg'] == 'fail') {
        $msg = 'Παρουσιάστηκε τεχνικό πρόβλημα, παρακαλώ ενημερώστε μας μέσω mail ή τηλεφώνου.';
        echo '<div class="alert alert alert-danger alert-dismissible fade show" id="alert" role="alert">
        ' . $msg . '
                    <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    } elseif ($_GET['msg'] == 'captcha_incorect') {
        $msg = 'Η δοθείσα λύση του CAPTCHA δεν ήτανε σωστή, παρακαλώ ξαναπροσπαθήστε.';
        echo '<div class="alert alert alert-danger alert-dismissible fade show" id="alert" role="alert">
        ' . $msg . '
                    <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    }
    ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Hellenic Blockchain Assosiation</h1>
                    <h2>Καλώς ορίσατε στην επίσημη ιστοσελίδα μας.</h2>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
                <div class="col-xl-6 logo">

                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <!-- <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="owl-carousel clients-carousel">
                    <img src="assets/img/clients/client-1.png" alt="">
                    <img src="assets/img/clients/client-2.png" alt="">
                    <img src="assets/img/clients/client-3.png" alt="">
                    <img src="assets/img/clients/client-4.png" alt="">
                    <img src="assets/img/clients/client-5.png" alt="">
                    <img src="assets/img/clients/client-6.png" alt="">
                    <img src="assets/img/clients/client-7.png" alt="">
                    <img src="assets/img/clients/client-8.png" alt="">
                </div>
            </div>
        </section> -->
        <!-- End Clients Section -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Λίγα Λόγια</h3>
                            <p>
                                Ο Πανελλήνιος Σύλλογος Blockchain (Hellenic Blockchain Association), είναι ίδρυμα (ΝΠΙΔ) μη κερδοσκοπικού χαρακτήρα.
                            </p>
                            <p>
                                Το Hellenic Blockchain Association (ΗΒΑ) , ιδρύθηκε στις 15 Μαϊου 2019, με απόφαση του Ειρηνοδικείου Νέας Ιωνίας, με Αριθμό Διαταγής Αναγνώρισης 13/2019 και Αριθμό Μητρώου Σωματείου 32515, κατόπιν αποφάσεως των ιδρυτικών μελών που κατατέθηκε την 16η Νοεμβρίου
                                του έτους 2018 στο ειρηνοδικείο της Νέας Ιωνίας.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Independent</h4>
                                    <p>The blockchain technology allows for verification without having to be dependent on third-parties.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-shield"></i>
                                    <h4>Secure</h4>
                                    <p>It uses protected cryptography to secure the data ledgers.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>Transparent</h4>
                                    <p>All the transactions and data are attached to the block after the process of maximum trust verification. There is a consensus of all the ledger participants on what is to be recorded in the block.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-fingerprint"></i>
                                    <h4>Verifiable</h4>
                                    <p>The origin of any ledger can be tracked along the chain to its point of origin.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">232</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">521</span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">1,463</span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">15</span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Counts Section -->

        <!-- ======= Tabs Section ======= -->
        <!-- <section id="tabs" class="tabs">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                            <i class="ri-gps-line"></i>
                            <h4 class="d-none d-lg-block">Modi sit est dela pireda nest</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-2">
                            <i class="ri-body-scan-line"></i>
                            <h4 class="d-none d-lg-block">Unde praesenti mara setra le</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-3">
                            <i class="ri-sun-line"></i>
                            <h4 class="d-none d-lg-block">Pariatur explica nitro dela</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-4">
                            <i class="ri-store-line"></i>
                            <h4 class="d-none d-lg-block">Nostrum qui dile node</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                                <p class="font-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id est laborum
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id est laborum
                                </p>
                                <p class="font-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id est laborum
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="font-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id est laborum
                                </p>
                                <p class="font-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- End Tabs Section -->

        <!-- ======= Members Section ======= -->
        <section id="Members" class="Section-Text section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Μέλη</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="list">
                            <li>Ως μέλη του Σωματείου γίνονται νομικά και φυσικά πρόσωπα ανεξάρτητα από φύλο, θρησκευτικές και πολιτικές πεποιθήσεις, φυλή, χρώμα, εθνικότητα.</li>
                            <li>Μέλος του Σωματείου μπορεί να γίνει μετά από αίτηση του γραπτή ή ηλεκτρονική (σε περίπτωση που αυτή διατίθεται από το Σωματείο κάθε φυσικό ή νομικό πρόσωπο, το οποίο ενστερνίζεται τις επιδιώξεις και τους σκοπούς του Σωματείου
                                και επιθυμεί να συνδράμει στην πραγματοποίησή τους. Η αίτηση συνοδεύεται με την ανεπιφύλακτη αποδοχή των διατάξεων του παρόντος καταστατικού.</li>
                            <li>Τα μέλη του Σωματείου διακρίνονται σε τακτικά, αρωγά και επίτιμα μέλη:</li>
                            <ol class="list">
                                <li>Τακτικά μέλη μπορούν να γίνουν μόνο όσοι διακρίνονται για το ενδιαφέρον τους και την ενεργοποίησή τους στην ευόδωση των σκοπών του Σωματείου. Τα τακτικά μέλη έχουν δικαίωμα να εκλέγουν και να εκλέγονται, να ψηφίζουν και
                                    να παρίστανται στις τακτικές και έκτακτες Γενικές Συνελεύσεις του Σωματείου. Έχουν το δικαίωμα επίσης να προτείνουν οτιδήποτε κρίνουν πως συντελεί στην εκπλήρωση των σκοπών του Σωματείου με έγγραφη ή προφορική πρότασή
                                    τους προς τα όργανα της διοίκησης.</li>
                                <li>Αρωγά μέλη μπορούν να γίνουν όσοι επιζητούν να συμβάλλουν στην πραγμάτωση των παραπάνω σκοπών με υλικοτεχνική, χρηματική ή άλλου είδους προσφορά. Τα αρωγά μέλη δεν έχουν δικαίωμα να εκλέγουν και να εκλέγονται ούτε δικαιούνται
                                    να παρίστανται στις τακτικές και έκτακτες Γενικές Συνελεύσεις του Σωματείου.</li>
                                <li>Επίτιμα μέλη δύνανται να γίνουν, κατόπιν αποφάσεως του Διοικητικού Συμβουλίου, πρόσωπα νομικά ή φυσικά που έχουν προσφέρει πολύτιμες υπηρεσίες στην επίτευξη των σκοπών του Σωματείου. Τα Επίτιμα μέλη δεν έχουν δικαίωμα να
                                    εκλέγουν και να εκλέγονται ούτε να παρίστανται στις τακτικές και έκτακτες Γενικές Συνελεύσεις του Σωματείου.</li>
                            </ol>
                            <li>Διευκρινίζεται ότι δικαίωμα να εκλέγουν και να εκλέγονται έχουν όσα τακτικά μέλη έχουν εκπληρωμένες τις οικονομικές υποχρεώσεις τους προς το Σωματείο και συμβάλλουν ενεργά στην ευόδωση των σκοπών του Σωματείου.</li>
                            <li>Τα νομικά πρόσωπα που είναι μέλη του Σωματείου πρέπει να εκπροσωπούνται στο Σωματείο από τον Πρόεδρο του Διοικητικού τους Συμβουλίου ή τον Διευθύνοντα Σύμβουλο ή άλλο στέλεχος τους.</li>
                            <li>Με απόφασή του το Διοικητικό Συμβούλιο, κατόπιν συμφωνίας του μέλους και εφόσον πληρούνται οι προϋποθέσεις, μπορεί να αποφασίσει το τακτικό, αρωγό ή επίτιμο μέλος να ενταχθεί σε άλλη κατηγορία μέλους (τακτικό, αρωγό ή επίτιμο).</li>
                            <li> H συνδρομή των μελών είναι ετήσια. H τακτική συνδρομή των τακτικών μελών να ανέρχεται στο ποσό των 60 ευρώ, ενώ η τακτική συνδρομή των αρωγών μελών να ανέρχεται στο ποσό των 120 ευρώ.</li>
                        </ol>
                    </div>
                </div>
        </section>
        <!-- End Members Section -->
        <section id="New-Member" class="Section-Text section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Πως να γίνω μέλος;</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Μέλη του Σωματείου γίνονται νομικά και φυσικά πρόσωπα ανεξάρτητα από φύλο, θρησκευτικές και πολιτικές πεποιθήσεις, φυλή, χρώμα, εθνικότητα.
                        </p>
                        <p>
                            Μέλος του Σωματείου μπορεί να γίνει μετά από αίτηση του γραπτή ή ηλεκτρονική (σε περίπτωση που αυτή διατίθεται από το Σωματείο κάθε φυσικό ή νομικό πρόσωπο, το οποίο ενστερνίζεται τις επιδιώξεις και τους σκοπούς του Σωματείου και επιθυμεί να συνδράμει
                            στην πραγματοποίησή τους. Η αίτηση συνοδεύεται με την ανεπιφύλακτη αποδοχή των διατάξεων του καταστατικού.
                        </p>
                        <p>
                            H συνδρομή των μελών είναι ετήσια. H τακτική συνδρομή των τακτικών μελών να ανέρχεται στο ποσό των 60 ευρώ, ενώ η τακτική συνδρομή των αρωγών μελών να ανέρχεται στο ποσό των 120 ευρώ.
                        </p>
                        <p>
                            Η διαδικασία είναι απλή: Κατεβάστε τη φόρμα εγγραφής μέλους ανάλογα με την ιδιότητα : φυσικό πρόσωπο νομικό πρόσωπο Τυπώστε την και στείλτε την συμπληρωμένη στα γραφεία του συλλόγου μας, με ταχυδρομείο ή με e-mail. Αφού εγγριθεί από το Δ.Σ του συλλόγου
                            μας θα επικοινωνήσουμε μαζί σας τηλεφωνικά ή με e-mail για να ολοκληρώσουμε τη διαδικασία.
                        </p>
                        <hr>
                        <p>
                            <div class="row">
                                <div class="col text-center"><a href="./aitisi_f.php " class="btn btn-download ">Αιτήση: Φυσικό Πρόσωπο</a></div>
                                <div class="col text-center "><a href="./aitisi_n.php" class="btn btn-download">Αιτήση: Νομικό Πρόσωπο</a></div>
                            </div>
                        </p>
                    </div>
                </div>
        </section>

        <!-- ======= Portfolio Section ======= -->
        <section id="Goals" class="Section-Text section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Σκοποι και Στόχοι</h2>
                    <p>Ο Πανελλήνιος Σύλλογος Blockchain είναι ένα ίδρυμα μη κερδοσκοπικού χαρακτήρα. Οι βασικοί σκοποί της δημιουργίας του συλλόγου όπως περιγράφονται στο επίσημο καταστατικό είναι οι παρακάτω.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex">
                        <ol>
                            <li>Η μελέτη, διάδοση, προβολή και προαγωγή της τεχνολογίας blockchcain στον δημόσιο και ιδιωτικό τομέα προς όφελος της εθνικής οικονομίας και της κοινωνίας.</li>

                            <li>Η προβολή του ρόλου και της χρησιμότητας της τεχνολογίας blockchain στην εθνική οικονομία και κοινωνία εν γένει.</li>

                            <li>Η δημιουργία ενός ελληνικού φορέα, ο οποίος θα φέρει σε επαφή δημιουργικούς ανθρώπους, μέλη της ερευνητικής και ακαδημαϊκής κοινότητας, φορείς καθώς και τις ιδέες τους αναφορικά με την εφαρμογή της τεχνολογίας blockchain.</li>

                            <li>Η υποστήριξη καινοτόμων προσπαθειών στην προαγωγή της τεχνολογίας blockchain στον δημόσιο και ιδιωτικό τομέα προς όφελος της εθνικής οικονομίας και κοινωνίας.</li>

                            <li>Η προώθηση των τεχνολογιών blockchain σε τομείς της οικονομίας και κοινωνίας.</li>

                            <li>Η ανάπτυξη πρωτοβουλιών στον τομέα της έρευνας και ανάπτυξης της τεχνολογίας blockchain.</li>

                            <li>Η διενέργεια κοινωνικών δράσεων με την χρήση της εν λόγω τεχνολογίας.</li>

                            <li>Η υλική και επιστημονική ενίσχυση πανεπιστημίων στην Ελλάδα και το εξωτερικό για την ανάπτυξη της τεχνολογίας blockchain και των εφαρμογών αυτής.</li>

                            <li>H παροχή συμβουλών σε φυσικά ή νομικά πρόσωπα του δημοσίου ή ιδιωτικού τομέα, σε εθνικό, ευρωπαϊκό και διεθνές επίπεδο αναφορικά με την χρήση της τεχνολογίας blockchain.</li>

                            <li>Η κατοχύρωση ελεύθερης ανταλλαγής επιστημονικών πληροφοριών και ελεύθερης διακίνησης ιδεών.</li>

                            <li>Η εκπαίδευση και κατάρτιση των μελών του Σωματείου σχετικά με την τεχνολογία blockchain και την εξέλιξη αυτής.</li>

                            <li>Η δημιουργία ενός επίσημου φορέα νομιμότητας και διαφάνειας σε Ελλάδα και Ευρώπη αλλά και σε διεθνές επίπεδο για τον έλεγχο, την πιστοποίηση και τη διαφάνεια προϊόντων βασισμένων σε τεχνολογία blockchain, όπως initial coin
                                offering (ICO), cryptocurrencies, tokens & exchanges με σκοπό την προστασία των πολιτών και καταναλωτών από προϊόντα blockchain που ο σκοπός δημιουργίας τους δεν ανταποκρίνεται στην πραγματικότητα αλλά έχουν ως σκοπό την
                                παραπλάνηση επενδυτών, καταναλωτών και δημοσίων φορέων.</li>

                            <li>Η αξιοποίηση της παραγόμενης έρευνας για την εξέλιξη της εν λόγω τεχνολογίας και τον έλεγχο της νομιμότητας και της τήρησης των προδιαγραφών προϊόντων blockchain προς αποφυγή μη νόμιμων δραστηριοτήτων.</li>

                            <li>Η προώθηση και εκτέλεση οιασδήποτε άλλης δράσης, που είναι συναφής με τους σκοπούς του Σωματείου.</li>
                        </ol>
                        </ol>
                    </div>
                </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Επικοινωνία</h2>
                    <p>Επικοινωνήστε μαζί μας χρησιμοποιώντας την παρακάτω φόρμα.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>H Διευθηνση μας</h3>
                                    <p>Πάρνηθος 1 & Γκινοσάτη 14452 Μεταμόρφωση Αθήνα</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p>info@hba.org.gr</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Καλέστε μας</h3>
                                    <p>211 116 1832<br></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="emailer.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ονοματεπώνημο" data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε το Ονοματεπώνημο σας." />
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Παρακαλώ εισάγετε το email σας." />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Θέμα" data-rule="minlen:4" data-msg="Παρακαλώ πληκτρολογήστε τουλαχιστον 4 χαρακτήρες." />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Παρακαλώ πληκτρολογήστε το μήνυμα σας." placeholder="Μήνυμα"></textarea>
                                <div class="validate"></div>
                            </div>
                            <!-- CAPTCHA -->
                            <br>
                            <div class="form-outline captcha-box p-2">
                                <img class="img-responsive" src="assets/vendor/phpcaptcha/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg'>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputsurnmae" class="col col-form-label">Εισάγετε τον κωδικό της παραπάνω εικόνας:</label>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="form-outline col-5">
                                        <input type="captcha_code" id="captcha_code" name="captcha_code" class="form-control" placeholder="Κωδικός CAPTCHA." required />
                                    </div>
                                </div>
                                <small class="text-muted">
                                    Εικόνα δυσανάγνωστη? Πατήστε <a href='javascript: refreshCaptcha();'>εδώ</a> για ανανέωση.
                                </small>
                            </div>
                            <div class="text-center"><button type="submit">Αποστολή Μηνύματος</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>