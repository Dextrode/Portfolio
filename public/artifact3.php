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
        <div class="container p-4 mt-sm-4 my-4">
            <div class="row g-6">
                <div class="col-12">
                    <h1 class="display-3">Wordpress Website Recreation</h1>
                    <h3 class="date">June 2, 2022</h3>
                </div>
            </div>
        </div>

        <div class="container p-4 my-4">
            <div class="row g-6">
                <div class="col d-lg-flex justify-content-lg-between">
                    <div class="col-lg-6 flex-lg-column d-lg-flex pb-4">
                        <h3>Goal</h3>
                        <p>
                            The goal was to Recreate a WordPress website with HTML, CSS &
                            JavaScript.
                        </p>
                    </div>

                    <div class="col-lg-5 artifact-intro">
                        <h3>Skills Used</h3>
                        <div>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
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
                    <h3>Resources and Template</h3>
                    <p>
                        When starting his project, I first examined the page and created a html
                        template on Word. I then downloaded the images and fonts, then copied
                        the colors through inspecting the page. This gave me all the resources
                        to start coding the website.
                    </p>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Recreating</h3>
                    <div class="col-12">
                        <p>
                            Using the template I created on Word, I coded the HTML. To make the
                            site responsive, I resized the original WordPress website to a 280px
                            mobile width and started to recreate it with CSS. I started with
                            coding the header and went down the page section by section. I
                            examined it again to accurately recreate it finding the spacing and
                            sizes for elements.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8">
                    <img class="img-fluid rounded justify-self-center" src="images/wordpress-screenshot.png" alt="wordpress website screenshot" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Fixing Issues</h3>
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
                    <img class="img-fluid rounded justify-self-center" src="images/wordpress-issue.png" alt="wordpress website issue screenshot" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Responsive</h3>
                    <div class="col-12">
                        <p>
                            After fixing the issues on mobile size, I resized the WordPress
                            website to 767px as that is where it adjusted. I noted all changes
                            and started to recreate it again using CSS media queries. I repeated
                            this process at 992px and 1200px.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <div class="d-flex justify-content-around">
                        <a href="https://charity.gregoryosborne.ca/" class="btn btn-secondary w-25" target="_blank">Old Website</a>

                        <a href="https://charity.gregoryosborne.ca/" class="btn btn-secondary w-25" target="_blank">New Website</a>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
        </div>
    </main>
    <footer>
        <?php require('partials/global-partials/footer.php'); ?>
    </footer>
</body>

</html>