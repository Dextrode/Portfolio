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
    ],
    "body" => [
        "para1" => "I created my logo using symmetrical circles with splits, giving movement and a professional look. ",

        "para2" => "Once the logo was complete, I started to think about how I would animate it. Since the logo was based on the infinity sign, I thought it would a good idea to emphasize that aspect through the animation, with a color going through in an infinity shape. Also, the movement indicates it is a loading animation. With this in mind, I sketched the animation in Illustrator.

        Then I researched potential animation techniques. I needed fluid movement within the logo's shape. My first idea was GSAP, but after looking through GSAP documentation, and found it was premium feature, making me look else ware.",
        "para3" => "I continued to research animation techniques. On CodePen I found an animation that could be used to simulate my desired effect. This technique made the logo into a clip path, then used a shape to animate through the clip path.
        
        To make this technique work, I split my logo into 2 clipping masks. With media queries, I animated a rectangle shapes, moving them right to left through the clipping mask and vice versa, simulating fluid movement. Then I finalized it by adjusting the timings and size of the shapes making the animation smoother.",
    ],
    "images" => [
        "img1" => "logo_brainstorm.jpg",
        "img2" => "animation_sketch.jpg",
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

// --------- THIRD ARTIFACT ---------
$usability_report = new Artifact([
    "id" => 4,
    "title" => "UI/UX Usability Report",
    "header" => [

        "head1" => "Goal",
        "head2" => "Skills Used",
        "head3" => "Original Wireframe",
        "head4" => "Final Wireframe",
        "head5" => "Testing",
        "head6" => "Solutions",
        "head7" => "The Wireframe",
    ],
    "date" => "July 6, 2022",
    "goal" => "The goal was to create a mobile, high-fidelity wireframe for our GameLine app. We then performed high-level purpose testing to evaluate the app’s usability and improve users’ experience. It was important to ensure that those who downloaded the app could easily navigate it to do basic and essential processes and that I located areas where usability could be increased. ",
    "skills" => [
        "first" => "Figma",
        "second" => "Maze",
        "third" => "Illustrator",
        // "fourth" => "1",
    ],
    "body" => [
        "para1" => "The first aspect of this project was creating the initial wireframe. To do this I looked at examples of other mobile app’s, integrating certain aspects into my initial design. Based on this, I created a style guide with colours, fonts and buttons. Then I made a sitemap that includes all the pages I was going to create. After that I began creating the lofi wireframes, starting with the components used globally like the bottom navigation. Finally, I began filling the pages with content, using the same margins, and spacing for consistency.",

        "para2" => "With the lofi wireframe done, I began stylizing it with the style guide created earlier. Once I had completed styling it, I started making it a functional prototype. I added navigation and commonly used features that I planned on testing.",

        "para3" => "There were two methods used to test the usability of the GameLine app. The first method used was asking participants to complete a series of tasks on the Maze testing application. This gave us valuable insights on usability of the prototype, showing us what users had issues with and what I could improve on. We also asked the participants in person how satisfied they were with each step.",
        "para4" => "I made changes to the prototype based on the data received and user feedback. Through this data I located specific issues and made revisions to solve them. ",
    ],
    "images" => [
        "img1" => "wordpress-screenshot.png",
        "img2" => "wordpress-issue.png",
        // "img2b" => "email-hifi.png",
        // "img3" => "#",
        // "img4" => "#",
    ],
    "thumbnail" => "logo_dark.svg",
    "link" => "artifact4.html",
]);

$portfolio_artifacts = [
        $loading_animation,
        $responsive_email,
        $wordpress_recreation
    ];