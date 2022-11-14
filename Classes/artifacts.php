<?php

require_once(get_path('/Classes/Artifact.php'));


// --------- FIRST ARTIFACT ---------

$loading_animation = new Artifact([
    "id" => 1,
    "title" => "CSS Loading Animation",
    "header" => [

        "head1" => "Goal",
        "head2" => "Skills Used",
        "head3" => "Logo",
        "head4" => "Brainstorming",
        "head5" => "Animation",
        "head6" => "Finished Animation",
    ],
    "date" => "May 24, 2022",
    "goal" => "Create a loading animation with my logo, using CSS or Java. Make the animation look like movement through infinity.",
    "skills" => [
        "first" => "HTML",
        "second" => "CSS",
        "third" => "Illustrator",
        // "fourth" => "1",
    ],
    "body" => [
        "para1" => "I created my logo using symmetrical circles with splits, giving movement and a professional look. ",

        "para2" => "Once the logo was complete, I started to think about how I would animate it. Since the logo was based on the infinity sign, I thought it would a good idea to emphasize that aspect through the animation, with a color going through in an infinity shape. Also, the movement indicates it is a loading animation. With this in mind, I sketched the animation in Illustrator.

        Then I researched potential animation techniques. I needed fluid movement within the logo's shape. My first idea was GSAP, but after looking through GSAP documentation, and found it was premium feature, making me look else ware.",
        "para3" => "I continued to research animation techniques. On CodePen I found an animation that could be used to simulate my desired effect. This technique made the logo into a clip path, then used a shape to animate through the clip path.
        
        To make this technique work, I split my logo into 2 clipping masks. With media queries, I animated a rectangle shapes, moving them right to left through the clipping mask and vice versa, simulating fluid movement. Then I finalized it by adjusting the timings and size of the shapes making the animation smoother.",
        // "fourth" => "1",
    ],
    "images" => [
        "img1" => "logo_brainstorm.jpg",
        "img2" => "animation_sketch.jpg",
        // "img3" => "",
        // "img4" => "#",
    ],
    "thumbnail" => "logo_dark.svg",
    "link" => "artifact1.php",

]);

// --------- SECOND ARTIFACT ---------

$responsive_email = new Artifact([
    "id" => 2,
    "title" => "Responsive Email",
    "header" => [

        "head1" => "Goal",
        "head2" => "Skills Used",
        "head3" => "Brainstorming",
        "head4" => "Design",
        "head5" => "Testing / Trouble Shooting",
    ],
    "date" => "May 22, 2022",
    "goal" => " Design and code a responsive email with HTML and CSS. Test it in multiple browsers and.",
    "skills" => [
        "first" => "HTML",
        "second" => "CSS",
        "third" => "Illustrator",

    ],
    "body" => [
        "para1" => "Our assignment was to develop an email as part of a larger project that included designing an app for “smart-pots.” We also created a website to promote “smart-pots” and the email’s purpose was to advertise our new product. ",

        "para2" => "I started creating the lofi-wireframe based on what I learned when reviewing other advertisement emails. This included a call to action, an explanation of the product, the benefits and photos showing the product itself.
        
        Once the new wireframe was finalized, I developed the email and hosted it on my domain.",

        "para3" => "I started creating the lofi-wireframe based on what I learned when reviewing other advertisement emails. This included a call to action, an explanation of the product, the benefits and photos showing the product itself.
        
        Once the new wireframe was finalized, I developed the email and hosted it on my domain.",
    ],
    "images" => [
        "img1" => "email-logo.jpg",
        "img2a" => "email-lofi.png",
        "img2b" => "email-hifi.png",
    ],
    "thumbnail" => "email-logo.jpg",
    "link" => "artifact2.php",
]);

// --------- THIRD ARTIFACT ---------
$wordpress_recreation = new Artifact([
    "id" => 3,
    "title" => "Wordpress Website Recreation",
    "header" => [

        "head1" => "Goal",
        "head2" => "Skills Used",
        "head3" => "Resources and Template",
        "head4" => "Recreating",
        "head5" => "Fixing Issues",
        "head5" => "Responsive",
    ],
    "date" => "June 2, 2022",
    "goal" => "The goal was to Recreate a WordPress website with HTML, CSS & JavaScript.",
    "skills" => [
        "first" => "HTML",
        "second" => "CSS",
        "third" => "Illustrator",
    ],
    "body" => [
        "para1" => "Our assignment was to develop an email as part of a larger project that included designing an app for “smart-pots.” We also created a website to promote “smart-pots” and the email’s purpose was to advertise our new product. ",

        "para2" => "I started creating the lofi-wireframe based on what I learned when reviewing other advertisement emails. This included a call to action, an explanation of the product, the benefits and photos showing the product itself.
        
        Once the new wireframe was finalized, I developed the email and hosted it on my domain.",

        "para3" => "I started creating the lofi-wireframe based on what I learned when reviewing other advertisement emails. This included a call to action, an explanation of the product, the benefits and photos showing the product itself.
        
        Once the new wireframe was finalized, I developed the email and hosted it on my domain.",
    ],
    "images" => [
        "img1" => "wordpress-screenshot.png",
        "img2" => "wordpress-issue.png",

    ],
    "thumbnail" => "wordpress-thumbnail.png",
    "link" => "artifact3.php",
]);

// --------- FOURTH ARTIFACT ---------
$solitaire = new Artifact([
    "id" => 4,
    "title" => "Solitaire Game",
    "header" => [

        "head1" => "Goal",
        "head2" => "Skills Used",
        "head3" => "Initiation",
        "head4" => "Creating the Base",
        "head5" => "Displaying Cards",
        "head6" => "Solitaire Display",
        "head7" => "Solitaire Set-Up",
    ],
    "date" => "Oct 31, 2022",
    "goal" => "Create the card game Solitaire with JS",
    "skills" => [
        "first" => "HTML",
        "second" => "CSS",
        "third" => "JavaScript",
    ],
    "body" => [
        "para1" => "After playing a few games of solitaire on my phone, I was motivated to attempt to create the game myself with JavaScript. After looking through examples, I started off creating a simple html page, made some basic styles, then began JavaScript.",

        "para2" => "My first goal was to create a class for single cards and a class for the deck. For the card class, I set the suit and value for that individual card. I created an array for both the values and suits, then created a freshDeck function to combine into a flatMap, ran it through the card class,  giving us 52 unique cards. Later, I created a method in the Deck class that puts all the cards in a deck array and another to shuffle the deck.",

        "para3" => "Now that I had all 52 unique cards, the next step was displaying them based on their value. I created a method in the card class that made a div element and set its text/class based on the card’s suit/value. Then I created the design for the backside of the card and set it as a class.",

        "para4" => "Next, I had to display each in the right position. Initially, I used a grid layout to get the positions for each card slot but switched to flex to make it simpler, testing each slot by adding temporary cards.",

        "para5" => "After getting the cards to display, I began setting up the solitaire game itself. The first step was to split the cards into two decks, a tableau deck, and a stock deck. The tableau deck cards had to be distributed to each column, adding 1 more for each following with the last card facing up. To properly do this, I needed a Tableau class. In this class, I created all 7 tableau slots with a unique id, a method to push the cards to a column based on the id with a nested loop that ran through all 28 cards.",
    ],
    "images" => [
        "img1" => "solitaire-start.PNG",
        "img2" => "solitaire-card.PNG",
        "img3" => "solitaire-position.PNG",
        "img3" => "solitaire-array.PNG",
    ],
    "thumbnail" => "solitaire-thumb.PNG",
    "link" => "artifact4.html",
]);

$portfolio_artifacts = [
        $loading_animation,
        $responsive_email,
        $wordpress_recreation,
        $solitaire,
    ];
