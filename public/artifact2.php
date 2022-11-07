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
        <div class="container p-4 mt-sm-4 my-4">
            <div class="row g-6">
                <div class="col-12">
                    <h1 class="display-3">Responsive Email</h1>
                    <h3 class="date">May 22, 2022</h3>
                </div>
            </div>
        </div>

        <div class="container p-4 my-4">
            <div class="row g-6">
                <div class="col d-lg-flex justify-content-lg-between">
                    <div class="col-lg-6 flex-lg-column d-lg-flex pb-4">
                        <h3>Goal</h3>
                        <p>
                            Design and code a responsive email with HTML and CSS. Test it in
                            multiple browsers and
                        </p>
                    </div>

                    <div class="col-lg-5 artifact-intro">
                        <h3>Skills Used</h3>
                        <div>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Illustrator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Brainstorming</h3>
                    <p>
                        Our assignment was to develop an email as part of a larger project that
                        included designing an app for “smart-pots.” We also created a website to
                        promote “smart-pots” and the email’s purpose was to advertise our new
                        product.
                    </p>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8">
                    <img class="img-fluid rounded justify-self-center" src="images/email-logo.jpg" alt="SmartPot Logo" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Design</h3>
                    <div class="col-12">
                        <p>
                            I started creating the lofi-wireframe based on what I learned when
                            reviewing other advertisement emails. This included a call to
                            action, an explanation of the product, the benefits and photos
                            showing the product itself.
                        </p>
                        <p>
                            Once the new wireframe was finalized, I developed the email and
                            hosted it on my domain.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8 d-flex justify-content-around">
                    <img class="img-fluid rounded email-lofi" src="images/email-lofi.png" alt="email lofi wireframe" />
                    <img class="img-fluid rounded email-lofi" src="images/email-hifi.png" alt="email lofi wireframe" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Testing / Trouble Shooting</h3>
                    <div class="col-12">
                        <p>
                            I completed my testing with Litmus PutsMail. Initially no images
                            where displayed. I resolved the issue by creating a subdomain to
                            hosting our images. I tested it again and found only the SVG’s
                            didn’t appear. I tried to find a way that I could link them, but
                            eventually converted them into PNG’s due to the time constraints.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8">
                    <img class="img-fluid rounded justify-self-center" src="images/email-testing.png" alt="email open in browsers" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
    </main>
    <footer>
        <?php require(h('partials/global-partials/footer.php')); ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>