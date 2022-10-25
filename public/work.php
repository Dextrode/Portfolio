<?php
// Require the initialization file once to run page
require_once('../init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ** Head ** -->
    <?php require(h('partials/global-partials/head.php')); ?>
</head>

<body class="bg-primary" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <header>
        <!-- ** Header ** -->
        <?php require(h('partials/global-partials/header.php')); ?>
    </header>
    <main>
        <!-- ** Title ** -->
        <?php require(h('partials/artifact-partials/work-title.php')); ?>

        <!-- ** Artifact cards ** -->
        <div class="container p-4 my-4 aos-init" data-aos="fade-up">
            <h3>Recent Work</h3>
            <div class="row g-3 d-flex justify-content-center">
                <?php foreach($portfolio_artifacts as $portfolio_artifact): ?>
                    <!-- The file that the property values are looped through -->
                    <?php require(h('partials/artifact-partials/cards/card1.php')); ?>
                    <!-- Ends the loop -->
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer>
        <?php require(h('partials/global-partials/footer.php')); ?>
    </footer>
</body>
</html>