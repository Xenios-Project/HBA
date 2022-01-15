<?php session_start();
include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<body onload="load()">
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
                <form name="aitisi_f" method="post" action="emailer.php">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <label for="inputsurnmae" class="col col-form-label"> Στοιχεία</label>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="name" class="form-control" placeholder="Όνομα" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="lastname" class="form-control" placeholder="Επώνυμο" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="fathersname" class="form-control" placeholder="Πατρώνυμο" required />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="mothersname" class="form-control" placeholder="Μητρώνυμο" required />
                    </div>
                    <label for="inputaddressstreet" class="col col-form-label">Διεύθηνση Κατοικίας</label>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="street" class="form-control" placeholder="Οδός" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-outline">
                                <input type="number" name="streetno" class="form-control" placeholder="Αριθμός" required />
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
                    <label for="inputsurnmae" class="col col-form-label"> Στοιχεία Επικοινωνίας</label>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Διεύθυνση e-mail" required />
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
                        Παρακαλώ να με γράψετε στα μητρώα σας, ως μέλος του σωματείου.</p>
                    <p>Δηλώνω, επίσης, ότι αποδέχομαι ανεπιφύλακτα τις διατάξεις του Καταστατικού του Σωματείου.</p>
                    </p>
                    <br>
                    <p>
                        Ημερομηνία:
                        <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required />
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
                        <input type="text" id="inputsignature" name="inputsignature" class="form-control" placeholder="Υπογραφή (Πλήρες Ονοματεπώνημο)" required />
                    </div>
                    <!-- CAPTCHA -->
                    <br>
                    <div class="form-outline captcha-box p-2">
                        <img class="img-responsive" src="assets/vendor/phpcaptcha/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg'>
                        <div class="row">
                            <div class="col">
                                <label for="inputsurnmae" class="col col-form-label" data-tag="contact-6"></label>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-outline col-5">
                                <input type="captcha_code" id="captcha_code" name="captcha_code" class="form-control" placeholder="CAPTCHA." required />
                            </div>
                        </div>
                        <small class="text-muted" data-tag="contact-7"></small>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn-submit-form" data-tag="contact-8"></button>
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
                <!-- <a href="#" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>  -->
                <a href="https://www.facebook.com/HBA.ORG.GR/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <!-- <a href="#" class="instagram"><i class="bx bxl-instagram" target="_blank"></i></a> -->
                <!-- <a href="#" class="google-plus"><i class="bx bxl-skype" target="_blank"></i></a> -->
                <a href="https://www.linkedin.com/company/26202501" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
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