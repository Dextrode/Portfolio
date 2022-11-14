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
    <main>
        <!-- ** Banner ** -->
        <?php require('partials/home-partials/banner.php'); ?>


        <!-- ** Artifact cards ** -->
        <div class="container p-4 my-4 aos-init" data-aos="fade-up">
            <h3>Recent Work</h3>
            <div class="row g-3 d-flex justify-content-center">
                <?php foreach($portfolio_artifacts as $portfolio_artifact): ?>
                    <!-- The file that the property values are looped through -->
                    <?php require('partials/artifact-partials/cards/card1.php'); ?>
                    <!-- Ends the loop -->
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ** Skills ** -->
        <?php require('partials/home-partials/skills.php'); ?>

        <!-- ** About ** -->
        <?php require('partials/home-partials/about-section.php'); ?>

        <!-- ** Descriptors ** -->
        <?php require('partials/home-partials/descriptors.php'); ?>

        <!-- ** Contact ** -->
        <?php require('partials/home-partials/contact.php'); ?>
    </main>

    <footer>
        <?php require('partials/global-partials/footer.php'); ?>
    </footer>
</body>
</html>