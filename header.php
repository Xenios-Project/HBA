<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/assets/js/translate.js"></script>
    <script type='text/javascript'>
        function refreshCaptcha() {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }
    </script>
    <!-- <script type='text/javascript'>
        $('.alert').alert()
    </script> -->
    <script>
        function load() {
            var lang = get_lang();
            console.log("language " + lang);
            if (lang == null) {
                document.cookie = "lang=en";
                lang = "en"
            }
            let currentLng = lang; //'fr'
            var translate = new Translate();
            var attributeName = 'data-tag';
            translate.init(attributeName, currentLng);
            translate.process();
        }
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hellenic Blockchain Assossiation</title>
    <link rel="icon" type="/image/png" href="favicon.ico">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel//assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v2.0.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onload="load()">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto">
                <a href="/index.php"><img src="/assets/img/logo-square.png"> HBA<span>.</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/index.php#header">Home</a></li>
                    <li><a href="/index.php#about">About</a></li>
                    <li>
                        <a href="/index.php#Members" data-tag="header-1"></a>
                    </li>
                    <li>
                        <a href="/index.php#New-Member" data-tag="header-2"></a>
                    </li>
                    <li>
                        <a href="/index.php#Goals" data-tag="header-3"></a>
                    </li>
                    <li>
                        <a href="/announcements.php" data-tag="header-4"></a>
                    </li>
                    <li>
                        <a href="https://edu.hba.org.gr" target="_blank" data-tag="header-5"></a>
                    </li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="index.php#contact" class="get-started-btn scrollto" data-tag="header-6"></a>
            <div class="divider">
                <button class="btn btn-secondary langbutt" data-tag="lang" onclick="swap_lang()"></button>
            </div>
    </header>
</body>

</html>