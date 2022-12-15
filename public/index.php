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
        <?php require('partials/global-partials/header-homepage.php'); ?>
    </header>
    <main>

        <!-- ** Banner ** -->

        <section class="banner">
            <?php require('partials/home-partials/banner.php'); ?>
        </section>

        <!-- ** Work Section ** -->
        <section id="work">
            <?php require('partials/home-partials/featured-work.php'); ?>
            <?php require('partials/home-partials/work-section.php'); ?>
        </section>

        <section id="about" class="container my-4 p-4" data-aos="fade-up">
            <!-- ** About ** -->
            <?php require('partials/home-partials/about-section.php'); ?>

            <!-- ** Skills ** -->
            <?php require('partials/home-partials/skills.php'); ?>
        </section>


        <!-- ** Descriptors ** -->
        <section>
            <?php // require('partials/home-partials/descriptors.php'); 
            ?>
        </section>

        <!-- ** Contact **
        <?php
        // echo "<p>";

        // print_r($_POST);

        // echo "</p>";

        ?>
        <section>
            <div class="container p-4 my-4" data-aos="fade-up">
                <div class="row">
                    <div class="col-0 col-lg-1"></div>
                    <div class="col-12 col-lg-10">
                        <h3>Any Questions?</h3>
                        <form action="index.php" method="POST" class="form">
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                            </div>
                            <div class="mb-3">]
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-secondary">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-0 col-lg-1"></div>
                </div>
            </div>
        </section> -->
    </main>

    <footer>
        <?php require('partials/global-partials/footer.php'); ?>
    </footer>
    <?php require('partials/global-partials/scripts.php'); ?>

</body>

</html>