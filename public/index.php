<?php
// Require the initialization file once to run page
require_once('../init.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ** Head ** -->
    <?php require('partials/global-partials/head.php'); ?>
</head>

<body class="bg-primary" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <header>
        <!-- ** Header ** -->
        <?php require('partials/global-partials/header.php'); ?>
    </header>
    <main id>

        <!-- ** Banner ** -->

        <section class="banner">
            <?php require('partials/home-partials/banner.php'); ?>
        </section>

            <!-- ** Work Section ** -->
            <section id="work">
                <?php require('partials/home-partials/work-section.php'); ?>
            </section>
        <!-- ** Skills ** -->
        <section id="about">
            <?php require('partials/home-partials/skills.php'); ?>


            <!-- ** About ** -->
            <?php require('partials/home-partials/about-section.php'); ?>
        </section>


        <!-- ** Descriptors ** -->
        <section class="container my-4 p-4" data-aos="fade-up">
            <?php require('partials/home-partials/descriptors.php'); ?>
        </section>

        <!-- ** Contact ** -->
        <section class="container my-4 p-4" data-aos="fade-up">
            <?php require('partials/home-partials/contact.php'); ?>
        </section>
    </main>

    <footer class="container my-4 p-4">
        <?php require('partials/global-partials/footer.php'); ?>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>

</html>