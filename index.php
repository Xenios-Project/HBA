<?php session_start(); include("header.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="import" href="header.html">
</head>

<body onload="load()"> 

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
                    <h1>Hellenic Blockchain Association</h1>
                    <h2 data-tag="welcome-1"></h2>
                    <a href="#about" class="btn-get-started scrollto" data-tag="welcome-2"></a>
                </div>
                <div class="col-xl-6 logo">

                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <div class="section-title">
                                <h2 data-tag="intro-1"></h2>
                            </div>
                            <p data-tag="intro-2"></p>
                            <p data-tag="intro-3"></p>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4 data-tag="blockchain-box-1"></h4>
                                    <p data-tag="blockchain-box-2"></p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-shield"></i>
                                    <h4 data-tag="blockchain-box-3"></h4>
                                    <p data-tag="blockchain-box-4"></p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4 data-tag="blockchain-box-5"></h4>
                                    <p data-tag="blockchain-box-6"></p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-fingerprint"></i>
                                    <h4 data-tag="blockchain-box-7"></h4>
                                    <p data-tag="blockchain-box-8"></p>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Members Section ======= -->
        <section id="Members" class="Section-Text section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 data-tag="header-1"></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="list">
                            <li data-tag="members-1"></li>
                            <li data-tag="members-2"></li>
                            <li data-tag="members-3"></li>
                            <ol class="list">
                                <li data-tag="members-4"></li>
                                <li data-tag="members-5"></li>
                                <li data-tag="members-6"></li>
                            </ol>
                            <li data-tag="members-7"></li>
                            <li data-tag="members-8"></li>
                            <li data-tag="members-9"></li>
                            <li data-tag="members-10"></li>
                        </ol>
                    </div>
                </div>
        </section>
        <!-- End Members Section -->
        <section id="New-Member" class="Section-Text section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 data-tag="new-members-1"></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <p data-tag="members-1"></p>
                        <p data-tag="new-members-2"></p>
                        <p data-tag="members-10"></p>
                        <p data-tag="new-members-4"></p>
                        <hr>
                        <p>
                        <div class="row">
                            <div class="col text-center"><a href="./aitisi_f.php " class="btn btn-download"  data-tag="new-members-5"></a></div>
                            <div class="col text-center "><a href="./aitisi_n.php" class="btn btn-download"  data-tag="new-members-6"></a></div>
                        </div>
                        </p>
                    </div>
                </div>
        </section>

        <!-- ======= Portfolio Section ======= -->
        <section id="Goals" class="Section-Text section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 data-tag="goals-1"></h2>
                    <p data-tag="goals-2"></p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex">
                        <ol>
                            <li data-tag="goals-3"></li>
                            <li data-tag="goals-4"></li>
                            <li data-tag="goals-5"></li>
                            <li data-tag="goals-6"></li>
                            <li data-tag="goals-7"></li>
                            <li data-tag="goals-8"></li>
                            <li data-tag="goals-9"></li>
                            <li data-tag="goals-10"></li>
                            <li data-tag="goals-11"></li>
                            <li data-tag="goals-12"></li>
                            <li data-tag="goals-13"></li>
                            <li data-tag="goals-14"></li>
                            <li data-tag="goals-15"></li>
                            <li data-tag="goals-16"></li>
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
                    <h2 data-tag="contact-1"></h2>
                    <p data-tag="contact-2"></p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3 data-tag="contact-3"></h3>
                                    <p data-tag="contact-4"></p>
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
                                    <h3 data-tag="contact-5"></h3>
                                    <p>211 116 1832<br></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="emailer.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ονοματεπώνυμο / Full Name" data-rule="minlen:4" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Θέμα / Subject" data-rule="minlen:4" data-msg="Παρακαλώ πληκτρολογήστε τουλαχιστον 4 χαρακτήρες. / At least 4 characters" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Μήνυμα / Message"></textarea>
                                <div class="validate"></div>
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
                                        <input type="captcha_code" id="captcha_code" name="captcha_code" class="form-control" placeholder="CAPTCHA" required />
                                    </div>
                                </div>
                                <small class="text-muted" data-tag="contact-7">
                                </small>
                            </div>
                            <div class="text-center"><button type="submit" data-tag="contact-8"></button></div>
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