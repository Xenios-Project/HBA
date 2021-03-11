<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        document.getElementById('datePicker').valueAsDate = new Date();
    </script>
    <script type='text/javascript'>
        function refreshCaptcha() {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }
    </script>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hellenic</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <!-- <link href="assets/vendor/phpcaptcha/css/style.css" rel="stylesheet"> -->


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
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php#header">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#Members">Μέλη</a></li>
                    <li class="active"><a href="index.php#New-Member">Εγγραφή</a></li>
                    <li><a href="index.php#Goals">Στόχοι</a></li>
                    <li><a href="announcements.html">Ανακοινώσεις</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="index.php#contact" class="get-started-btn scrollto">Contact</a>
        </div>
    </header>
    <!-- End Header -->
    <?php
    if ($_GET['msg'] == 'captcha_incorect') {
        $msg = 'Η δοθείσα λύση του CAPTCHA δεν ήτανε σωστή, παρακαλώ ξανα προσπαθήστε.';
        echo '<div class="alert alert alert-danger alert-dismissible fade show" id="alert" role="alert">
        ' . $msg . '
        <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>
    <!-- ======= Hero Section ======= -->
    <main id="main">
        <!-- ======= Members Section ======= -->
        <section id="Members" class="Section-Text section-bg ">
            <div class="col-md-6 container" data-aos="fade-up">
                <div class="text-center">
                    <h2>ΠΑΝΕΛΛΗΝΙΟΣ ΣΥΛΛΟΓΟΣ BLOCKCHAIN</h2><br>
                    <h6> ANAΓΝΩΡΙΣΜΕΝΟ ΣΩΜΑΤΕΙΟ (ΑΠΟΦΑΣΗ ΕΙΡΗΝΟΔΙΚΕΙΟΥ ΝΕΑΣ ΙΩΝΙΑΣ: 13/2019)<br>
                        <small class="text-muted">Πάρνηθος 1 & Γκινοσάτη – Δήμος Μεταμορφώσεως Αττικής – Τ.Κ. 14452, 211 1161832, info@hba.org.gr</small>
                    </h6><br><br>
                    <h4>
                        ΑΙΤΗΣΗ ΕΓΓΡΑΦΗΣ ΜΕΛΟΥΣ
                    </h4><br>
                </div>
                <p>Κύριες και Κύριοι,</p>
                <p> Σας παρακαλώ να με εγγράψετε ως μέλος του σωματείου με την επωνυμία «ΠΑΝΕΛΛΗΝΙΟΣ ΣΥΛΛΟΓΟΣ BLOCKCHAIN»</p>
                <form name="aitisi_f" action="emailer.php" method="post" role="form" class="php-email-form">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <label for="inputsurnmae" class="col col-form-label"> Στοιχεία</label>
                    <div class="form-outline mb-4">
                        <input type="text" name="company" class="form-control" placeholder="Επωνυμία" required />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="legalrep" class="form-control" placeholder="Νομικός Εκπρόσωπος" required />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="afm" class="form-control" placeholder="Α.Φ.Μ / Δ.Ο.Υ" required />
                    </div>
                    <label for="inputaddressstreet" class="col col-form-label">Έδρα</label>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="street" class="form-control" placeholder="Οδός" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-outline">
                                <input type="text" name="streetno" class="form-control" placeholder="Αριθμός" required />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="city" class="form-control" placeholder="Πόλη" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-outline">
                                <input type="text" name="postalcode" class="form-control" placeholder="Τ.Κ." required />
                            </div>
                        </div>
                    </div>
                    <label for="visitor_email" class="col col-form-label"> Στοιχεία Επικοινωνίας</label>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="visitor_email" class="form-control" placeholder="Διεύθυνση e-mail" required />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="telephone" class="form-control" placeholder="Τηλέφωνο Επικοινωνίας" required />
                    </div>
                    <p>
                        <small class="text-muted">
                            Βάσει του νέου Ευρωπαϊκού κανονισμού περί προστασίας προσωπικών δεδομένων (General Data Protection Regulation) που ισχύει από τις 25/05/2018, οφείλουμε να διατηρούμε τη γραπτή συγκατάθεση σας ως προς τη συλλογή και επεξεργασία των στοιχείων σας, με σκοπό
                            την πραγματοποίηση των σκοπών του σωματείου, την άμεση ενημέρωση σας για την λειτουργία του σωματείου, καθώς και να απολαμβάνετε υπηρεσίες πρόσβασης στο σωματείο μας. Διατηρείτε πάντοτε το δικαίωμα να ανακαλέσετε την συγκατάθεση
                            σας ανά πάσα στιγμή.
                        </small>
                    </p>
                    <p>
                        Με την παρούσα αίτηση συνυποβάλλεται η νομιμοποίηση του νομίμου εκπροσώπου αναφορικά με την εκπροσώπηση του νομικού προσώπου.
                    </p>
                    <p>
                        Παρακαλώ να με γράψετε στα μητρώα σας, ως μέλος του σωματείου.</p>
                    <p>Δηλώνω, επίσης, ότι αποδέχομαι ανεπιφύλακτα τις διατάξεις του Καταστατικού του Σωματείου.</p>
                    </p>
                    <br>
                    <p>
                        Ημερομηνία:
                        <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
                    </p>
                    <p>
                        <div class="container">
                            <div class="d-flex flex-row">
                                <div class="p-2">Ο/Η ΑΙΤ</div>
                                <div class="p-2"> <select class="form-control">
                                        <option>ΩΝ</option>
                                        <option>ΟΥΣΑ</option>
                                    </select></div>
                            </div>
                        </div>
                    </p>
                    <br>
                    <div class="form-outline mb-4">
                        <input type="text" name="inputsignature" class="form-control" placeholder="Υπογραφή (Πλήρες Ονοματεπώνημο)" required />
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
                    <!-- Submit button -->
                    <button type="submit" class="btn-submit-form">Αποστολή Αίτησεως</button>
                </form>
            </div>
        </section>
        <!-- End Members Section -->

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
    <script src="assets/vendor/php-email-form/validate.js"></script>
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