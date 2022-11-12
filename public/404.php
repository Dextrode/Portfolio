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

<body>
    <header>
        <!-- ** Header ** -->
        <?php require('partials/global-partials/header.php'); ?>
    </header>
    <main>
        <div class="container p-4 mt-sm-4 my-4">
            <div class="row g-6">
                <div class="col-12">
                    <h1 class="display-3">404</h1>
                    <h3 class="date">Page not found</h3>
                    <a href="https://www.gregoryosborne.ca" title="Link to home page" class="btn btn-secondary d-none d-lg-block w-25">Return Home</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require('partials/global-partials/footer.php'); ?>
    </footer>
 <!-- test -->
</body>