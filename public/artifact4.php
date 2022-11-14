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
                    <h1 class="display-3">Solitaire Game</h1>
                    <h3 class="date">Oct 31, 2022</h3>
                </div>
            </div>
        </div>

        <div class="container p-4 my-4">
            <div class="row g-6">
                <div class="col d-lg-flex justify-content-lg-between">
                    <div class="col-lg-6 flex-lg-column d-lg-flex pb-4">
                        <h3>Goal</h3>
                        <p>
                            Create the card game Solitaire with JS
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
                    <h3>Initiation</h3>
                    <p>
                        After playing a few games of solitaire on my phone, I was motivated to attempt to create the game myself with JavaScript. After looking through examples, I started off creating a simple html page, made some basic styles, then began JavaScript.
                    </p>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Creating the Base</h3>
                    <div class="col-12">
                        <p>
                            My first goal was to create a class for single cards and a class for the deck. For the card class, I set the suit and value for that individual card. I created an array for both the values and suits, then created a freshDeck function to combine into a flatMap, ran it through the card class, giving us 52 unique cards. Later, I created a method in the Deck class that puts all the cards in a deck array and another to shuffle the deck.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8 d-flex justify-content-center">
                    <img class="img-fluid rounded justify-self-center" src="images/solitaire-array.PNG" alt="solitaire array screenshot" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Displaying Cards</h3>
                    <div class="col-12">
                        <p>
                            Now that I had all 52 unique cards, the next step was displaying them based on their value. I created a method in the card class that made a div element and set its text/class based on the card’s suit/value. Then I created the design for the backside of the card and set it as a class.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8 d-flex justify-content-center">
                    <img class="img-fluid rounded justify-self-center" src="images/solitaire-card.PNG" alt="card front and back image" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <h3>Solitaire Display</h3>
                    <div class="col-12">
                        <p>
                            Next, I had to display each in the right position. Initially, I used a grid layout to get the positions for each card slot but switched to flex to make it simpler, testing each slot by adding temporary cards.
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
                    <h3>Solitaire Set-Up</h3>
                    <div class="col-12">
                        <p>
                            After getting the cards to display, I began setting up the solitaire game itself. The first step was to split the cards into two decks, a tableau deck, and a stock deck. The tableau deck cards had to be distributed to each column, adding 1 more for each following with the last card facing up. To properly do this, I needed a Tableau class. In this class, I created all 7 tableau slots with a unique id, a method to push the cards to a column based on the id with a nested loop that ran through all 28 cards.
                        </p>
                    </div>
                </div>
                <div class="col-0 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-0 col-lg-2"></div>
                <div class="col-12 col-lg-8 d-flex justify-content-center">
                    <img width="80%" class="img-fluid rounded justify-self-center" src="images/solitaire-start.PNG" alt="solitaire set-up screenshot" />
                </div>
                <div class="col-0 col-lg-2"></div>
            </div>
        </div>
        <div class="container p-4 my-4">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10">
                    <div class="d-flex justify-content-around">
                        <a href="https://cardgames.gregoryosborne.ca/" class="btn btn-secondary w-25" target="_blank" title="Card Game Site Link">Live</a>

                        <a href="https://github.com/Dextrode/Card-Games" class="btn btn-secondary w-25" target="_blank" title="Solitaire code link">Code</a>
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