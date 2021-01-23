<?php 
    /* This document contains all content for the pages of the site */
    
    // === Does page use hero sectuon? ===
    $landingPage = true;

    // === Site Name ===
    $siteTitle = "Theme 1";

    // === Site Icon ===
    $siteIcon = "fa-futbol";

    // === Nav Menu Items ===
    $navItems = array(
        array(
            location => "products.php",
            title => "Products"
        ),
        array(
            location => "about.php",
            title => "About"
        ),
        array(
            location => "testimonials.php",
            title => "Testimonials"
        ),
        array(
            location => "contact.php",
            title => "Contact"
        )
    );

    // === Testimonials ===
    $testimonials = array(
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "John Doe"
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "James Smith"
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "Jane Doe"
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "John Doe"
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "John Doe"
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "John Doe"
        )
    );

    // ****HOME PAGE****

    // === Hero Section ===
    /*Note: control the background image in ../css/custom.css */
    $heroHeading = "This is Theme 1";
    $heroIntro = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus harum enim, hic saepe ab maiores!";

    // hero CTA
    $heroCTA = array(
        array(
            location => "#link",
            title => "View Elements",
            classNames => "btn btn-primary btn-lg scroll-link shadow-lg ml-auto mr-3"
        ),
        array(
            location => "#link",
            title => "Get Started",
            classNames => "btn btn-lg scroll-link ml-auto mr-3"
        )
    );

    // === Section One ===
    $sectionOneIcon = $siteIcon;
    $sectionOneTitle = "Section One";
    $sectionOneText = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi beatae voluptates atque quos. In, optio? Quo autem, natus debitis sint veniam ullam atque deleniti temporibus voluptas delectus suscipit iste recusandae eius nihil sunt molestias harum dolore! Quibusdam amet omnis tenetur facilis deserunt, porro quis distinctio!";

    $infoColumns = array(
        array(
            icon => "fa-heart",
            heading => "Heading 1",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        ),
        array(
            icon => "fa-clock",
            heading => "Heading 2",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        ),
        array(
            icon => "fa-user",
            heading => "Heading 3",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        )
    ); 

    // === Review Section ===
    /*Note: for the actual reviews see the testimonials section */
    $reviewSectionTitle = "Client Reviews";
    $reviewSectionText = "Read the wonderful feedback and success stories we have got from our current and previous clients.";
    $readAllLink = "testimonials.php";

    // === Book Section (product / sessions showcase) ===
    $bookingTitle = "Sessions we offer";
    $learnMorePage = "";
    $products = array(
        array(
            productId => 1,
            productName => "Product Name",
            productPrice => "19.99",
            productDescription => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        ),
        array(
            productId => 2,
            productName => "Product Name",
            productPrice => "19.99",
            productDescription => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        ),
        array(
            productId => 3,
            productName => "Product Name",
            productPrice => "19.99",
            productDescription => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        )
    ); 

?>