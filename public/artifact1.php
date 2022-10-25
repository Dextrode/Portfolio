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
                    <h1 class="display-3">CSS Loading Animation</h1>
                    <h3 class="date">May 24, 2022</h3>
                </div>
            </div>
        </div>

        <div class="container p-4 my-4">
            <div class="row g-6">
                <div class="col d-lg-flex justify-content-lg-between">
                    <div class="col-lg-6 flex-lg-column d-lg-flex pb-4">
                        <h3>Goal</h3>
                        <p>
                            Create a loading animation with my logo, using CSS or Java. Make the
                            animation look like movement through infinity.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5 artifact-intro">
                        <h3>Skills Used</h3>
                        <div class="">
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
                    <h3>Logo</h3>
                    <p>
                        I created my logo using symmetrical circles with splits, giving movement
                        and a professional look.
                    </p>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8">
                    <img class="img-fluid rounded" src="images/logo_brainstorm.jpg" alt="Logo Brainstorming Sketch" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Brainstorming</h3>
                    <p>
                        Once the logo was complete, I started to think about how I would animate
                        it. Since the logo was based on the infinity sign, I thought it would a
                        good idea to emphasize that aspect through the animation, with a color
                        going through in an infinity shape. Also, the movement indicates it is a
                        loading animation. With this in mind, I sketched the animation in
                        Illustrator.
                    </p>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <p>
                        Then I researched potential animation techniques. I needed fluid
                        movement within the logo's shape. My first idea was GSAP, but after
                        looking through GSAP documentation, and found it was premium feature,
                        making me look else ware.
                    </p>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8">
                    <img class="img-fluid rounded" src="images/animation_sketch.jpg" alt="Logo Animation Sketch" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Animation</h3>
                    <div class="col-12">
                        <p>
                            I continued to research animation techniques. On CodePen I found an
                            animation that could be used to simulate my desired effect. This
                            technique made the logo into a clip path, then used a shape to
                            animate through the clip path.
                        </p>
                    </div>
                    <div class="col-12">
                        <p>
                            To make this technique work, I split my logo into 2 clipping masks.
                            With media queries, I animated a rectangle shapes, moving them right
                            to left through the clipping mask and vice versa, simulating fluid
                            movement. Then I finalized it by adjusting the timings and size of
                            the shapes making the animation smoother.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h3>Finished Animation</h3>
                    <div class="d-flex shadow col-sm justify-content-center align-content-center rounded"></div>
                    <div class="animated_logo d-flex shadow col justify-content-center align-content-center rounded">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" id="logoSVG" data-name="logoSVG" viewBox="0 0 738 414.6">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="rect" x="-700" y="250" height="700" width="700" />
                                </clipPath>
                                <clipPath id="clip-path2">
                                    <rect id="rect2" x="1300" y="250" height="700" width="700" />
                                </clipPath>
                            </defs>

                            <path fill="#000" class="b_left" id="path" d="M498.1 568.9v63h52.2a121.3 121.3 0 0 1-206.6-63H257a207.3 207.3 0 0 0 206.2 185.8 206.6 206.6 0 0 0 143.7-58v44h63V568.9Z" transform="translate(-257 -340.1)" />

                            <path clip-path="url(#clip-path)" fill="#ff4c29" class="t_left" id="path" d="M498.1 568.9v63h52.2a121.3 121.3 0 0 1-206.6-63H257a207.3 207.3 0 0 0 206.2 185.8 206.6 206.6 0 0 0 143.7-58v44h63V568.9Z" transform="translate(-257 -340.1)" />

                            <path fill="#000" class="b_left" id="path" d="M788.8 340.1a206.4 206.4 0 0 0-89.5 20.4l39.8 76.2A121.4 121.4 0 0 1 908.3 526H995a207.3 207.3 0 0 0-206.2-185.9Z" transform="translate(-257 -340.1)" />

                            <path clip-path="url(#clip-path)" fill="#ff4c29" class="t_left" id="path" d="M788.8 340.1a206.4 206.4 0 0 0-89.5 20.4l39.8 76.2A121.4 121.4 0 0 1 908.3 526H995a207.3 207.3 0 0 0-206.2-185.9Z" transform="translate(-257 -340.1)" />

                            <path fill="#000" class="b_right" id="path" d="M908.3 568.9A121.3 121.3 0 0 1 712.9 642v98.2a206.6 206.6 0 0 0 76 14.5A207.3 207.3 0 0 0 995 568.9Z" transform="translate(-257 -340.1)" />

                            <path clip-path="url(#clip-path2)" fill="#ff4c29" class="b_right" id="path" d="M908.3 568.9A121.3 121.3 0 0 1 712.9 642v98.2a206.6 206.6 0 0 0 76 14.5A207.3 207.3 0 0 0 995 568.9Z" transform="translate(-257 -340.1)" />

                            <path fill="#000" class="t_left" id="path" d="M703.5 461.2 662.6 383a208.5 208.5 0 0 0-36.6 36.2 206.9 206.9 0 0 0-162.8-79A207.3 207.3 0 0 0 257 526h86.7a121.4 121.4 0 0 1 239 0h86.7a121.2 121.2 0 0 1 34-64.8Z" transform="translate(-257 -340.1)" />

                            <path clip-path="url(#clip-path2)" fill="#ff4c29" class="t_left" id="path" d="M703.5 461.2 662.6 383a208.5 208.5 0 0 0-36.6 36.2 206.9 206.9 0 0 0-162.8-79A207.3 207.3 0 0 0 257 526h86.7a121.4 121.4 0 0 1 239 0h86.7a121.2 121.2 0 0 1 34-64.8Z" transform="translate(-257 -340.1)" />
                        </svg>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container my-4 p-4">
            <div class="row pt-4">
                <div class="col">
                    <a href="https://www.facebook.com/gregory.osborne.98/" title="Link to Gregory Osborne Facebook Page" target="_blank"><img src="images/fb.svg" class="socials" alt="facebook logo icon" /></a>
                    <a href="https://github.com/Dextrode" title="Link to Gregory Osborne Github Page" target="_blank"><img src="images/git.svg" class="socials" alt="Github  logo icon" /></a>
                    <a href="https://www.linkedin.com/in/gregory-osborne-266b8b215/" title="Link to Gregory Osborne Linkedin Page" target="_blank"><img src="images/link.svg" class="socials" alt="Linkedin logo icon" /></a>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col">
                    <p>&copy; 2021 Gregory Osborne.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>