<!DOCTYPE html>
<html lang="sr">

<head>
<?php include "admin/connection.php" ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQ91GD1ZDE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MQ91GD1ZDE');
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Biznis Inkubator Kruševac</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/particle.css" rel="stylesheet">

</head>

<body id="particles-js">

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i><a href="mailto:martinam@biznisinkubator.rs">martinam@biznisinkubator.rs</a>
                <i class="icofont-phone"></i> <a>037/315-03-33 064/835-52-03</a>
            </div>
            <div class="social-links">
                <a href="https://twitter.com/BiznisK" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/bic.krusevac" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/biznis_inkubator_krusevac/?hl=sr" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="https://www.linkedin.com/in/biznis-inkubator-kru%C5%A1evac-49603083/" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <!--<h1 class="text-light"><a href="index.html">Flattern</a></h1>-->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html"><img src="assets/img/Biznis%20Inkubator%20Logo%20rgb.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="about.html">O NAMA</a></li>
                    <li><a href="services.html">USLUGE</a></li>
                    <li><a href="virtuelnakancelarija.html">USLUŽNO SEDIŠTE FIRME</a></li>
                    <li><a href="usluge/startap.html">STARTUP CENTAR (RISC)</a></li>
                    <li><a href="gallery.html">GALERIJA</a></li>
                    <li><a href="vesti.html">VESTI</a></li>
                    <li><a href="javnipoziv.html">JAVNI POZIVI</a></li>
                    <li><a href="javnenabavke.html">JAVNE NABAVKE</a></li>
                    <li><a href="contact.html">KONTAKT</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-center align-items-center">
                    <h2>VAŠA IDEJA - NAŠA PODRŠKA</h2>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 entries">
                        
                        <?php
                        $query = "SELECT * FROM `blog`";
                        $stmt = $db->prepare($query);
                        $stmt->execute();

                        $result = $stmt->fetchAll();
                        $data = array();
                        foreach ($result as $row) {
                            $img = "admin/php_assets/blog_functions/image/" . $row["image_name"];
                            echo '<article class="entry" data-aos="fade-up">
                            <div class="entry-img">
                                <img src="' . $img . '" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="single-blog.php?var=' . $row["id"] . '">"' .$row["title"].'"</a>
                            </h2>
                            <div class="entry-content">
                                <div class="read-more">
                                    <a href="single-blog.php?var=' . $row["id"] . '">Više</a>
                                </div>
                            </div>
                        </article>';
                        }

                        ?>
                        
                        <article class="entry" data-aos="fade-up">

                            <div class="entry-img">
                                <img src="assets/img/blog/Picture1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="vesti/v-vow.html">„Rešivoje“ razvija novi proizvod</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">Milica Milenković</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">Sep 9, 2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <div class="read-more">
                                    <a href="vesti/v-vow.html">Više</a>
                                </div>
                            </div>

                        </article>
                        <!-- End blog entry -->


                        <article class="entry" data-aos="fade-up">

                            <div class="entry-img">
                                <img src="assets/img/blog/kako-unaprediti.png" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="vesti/onlinepredavanje.html">Online predavanje</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">Milica Milenković</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">Aug 19, 2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <div class="read-more">
                                    <a href="vesti/onlinepredavanje.html">Više</a>
                                </div>
                            </div>

                        </article>
                        <!-- End blog entry -->

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- End blog entries list -->

                </div>

            </div>
        </section>
        <!-- End Blog Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Biznis Inkubator Kruševac</span></strong>. <br> All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://resivoje.com/">RešivoJe</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/BiznisK" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/bic.krusevac" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/biznis_inkubator_krusevac/?hl=sr" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/biznis-inkubator-kru%C5%A1evac-49603083/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Particle Js -->
    <script type="text/javascript" src="assets/js/particles.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script>
        particlesJS.load('particles-js', 'particlesjs-config.json', function() {
            console.log('particles.json loaded...');
        });
    </script>

</body>

</html>