<?php 
    $websiteEmail = "thomas@trwebdev.com";
    /* This document contains all content for the pages of the site */

    // === Site Name ===
    $siteTitle = "Natours";

    // === Site Icon ===
    $siteIcon = null;

    $siteLogo = "img/logo-white.png";

    // === General ===
    $pageBorder = false;
    $slantedSections = true;

    // === Nav Menu Items ===
    $navItems = array(
        array(
            location => "/",
            title => "Home"
        ),
        array(
            location => "about",
            title => "About"
        ),
        array(
            location => "sessions",
            title => "Sessions"
        ),
        array(
            location => "testimonials",
            title => "Testimonials"
        ),
        array(
            location => "contact",
            title => "Contact"
        ),
        array(
            location => "faq",
            title => "FAQs"
        )
    );

    // ****HOME PAGE****

    // === Hero Section ===
    /*Note: control the background image in ../css/custom.css */
    $heroHeading = "Natours";
    $heroIntro = "Modern Theme";
    $heroBackgroundImgURL = "https://source.unsplash.com/1600x900/?food";

    // hero CTA
    $heroCTA = array(
        location => "#link",
        title => "Learn More",
        classNames => "btn btn--white btn--animated"
    );

    // === Section One ===
    $sectionOneIcon = null;
    $sectionOneTitle = "About Us";

    $sectionOneSubHeading1 = "TERTIARY HEADING";
    $sectionOneParagraph1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.";

    $sectionOneSubHeading2 = "TERTIARY HEADING";
    $sectionOneParagraph2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.";

    //Section One CTA
    $sectionOneBtnTitle = null;
    $sectionOneBtnLocation = null;

    //3 IMAGE COMPOSITION Component
    $imageComposition = ["https://source.unsplash.com/1920x1080/?nature","https://source.unsplash.com/1920x1080/?mountain","https://source.unsplash.com/1920x1080/?snow"];

    // Feature cards section
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
        ),
        array(
            icon => "fa-clock",
            heading => "Heading 2",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        )
    ); 

    // === Review Section ===
    $reviewSectionTitle = "Client Reviews";
    $reviewSectionText = "Read the wonderful feedback and success stories we have got from our current and previous clients.";
    $readAllLink = "testimonials";
    $backgroundVideo = false;
    $backgroundVideoSrc = "img/video.mp4";

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
            name => " Alvis Androkles "
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
            name => " Alvis Androkles "
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => "Jane Doe"
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => " Alvis Androkles "
        )
    );


    // === Book Section (product / sessions showcase) ===
    $bookingTitle = "Sessions we offer";
    $learnMorePage = "session?productId=";
    $products = array(
        array(
            productId => 1,
            productName => "Product Name 1",
            productPrice => "19.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime?",
            productImageURL => "https://source.unsplash.com/1600x900/?session1"
        ),
        array(
            productId => 2,
            productName => "Product Name 2",
            productPrice => "29.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime?",
            productImageURL => "https://source.unsplash.com/1600x900/?session2"
        ),
        array(
            productId => 3,
            productName => "Product Name 3",
            productPrice => "39.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime?",
            productImageURL => "https://source.unsplash.com/1600x900/?session3"
        ),
        array(
            productId => 4,
            productName => "Product Name 4",
            productPrice => "39.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime?",
            productImageURL => "https://source.unsplash.com/1600x900/?session4"
        )
    ); 
    $sessionsBtnTitle = "View All Sessions &rarr;";
    $sessionsBtnLocation = "sessions";

    // === Product / Session Details
    $bookingDetailsTitle = "What we offer";
    $bookingDetails = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nam expedita tenetur similique, iure cumque numquam, commodi fugit ipsum ab, eum repudiandae deserunt quisquam. Repudiandae delectus, soluta impedit cupiditate perferendis voluptatum tempore. Sunt veritatis debitis aliquam veniam autem, accusantium quas, non obcaecati aliquid cum commodi eligendi dicta tenetur minus libero!";

    // === About Section ===
    $aboutSectionTitle = "Get to know Mr. John Doe";
    $aboutSectionText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ipsum? Totam voluptatibus cumque obcaecati ipsam! Fugit praesentium quis odit libero pariatur. Qui optio necessitatibus modi id, aspernatur officia ratione consectetur illo harum hic, ipsum omnis voluptatum aut non vel rerum deserunt accusamus dolore commodi recusandae ullam ut debitis natus? Maxime dolor officia maiores quod dolorum. ";
    $aboutSectionProfile = "https://source.unsplash.com/900x900/?profile3";

    // === FAQs ===
    $faqs = array(
        array(
            id => 1,
            question => "Random Question One?",
            answer => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            activeOnLoad => "true",
            show => "show"
        ),
        array(
            id => 2,
            question => "Random Question Two?",
            answer => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            activeOnLoad => "false",
            show => null
        ),
        array(
            id => 3,
            question => "Random Question Three?",
            answer => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            activeOnLoad => "false",
            show => null
        ),
        array(
            id => 4,
            question => "Random Question Four?",
            answer => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.",
            activeOnLoad => "false",
            show => null
        )
    );

    // === Contact Section ===
    $contactBackgroundImgURL = "https://source.unsplash.com/1600x900/?nature";

    // === Footer Links ===
    $footerLinks = $navItems;
    $footerCopyRight = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis lectus eget ex scelerisque, ut rhoncus sapien fringilla. Nulla purus purus, tristique at sollicitudin id, mattis vitae lectus. Etiam ultrices elit ac eros cursus commodo. Quisque condimentum, ligula sed finibus.";

?>