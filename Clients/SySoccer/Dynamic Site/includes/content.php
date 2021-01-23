<?php 
    $websiteEmail = "thomas@trwebdev.com";
    /* This document contains all content for the pages of the site */

    // === Does page use hero section? ===
    $landingPage = true;

    // === Site Name ===
    $siteTitle = "SySoccer";

    // === Site Icon ===
    $siteIcon = "fa-futbol";

    // === Nav Menu Items ===
    $navItems = array(
        array(
            location => "products",
            title => "Sessions"
        ),
        array(
            location => "about",
            title => "About"
        ),
        array(
            location => "testimonials",
            title => "Testimonials"
        ),
        array(
            location => "gallery",
            title => "Gallery"
        ),
        array(
            location => "contact",
            title => "Contact"
        )
    );

    // ****HOME PAGE****

    // === Hero Section ===
    /*Note: control the background image in ../css/custom.css */
    $heroHeading = "SySoccer";
    $heroIntro = "Give us 200 quid and I'll show ya kid how to kick a ball, give us 350 quid and I'll also send my pal Kez over to shag ya wife.";
    $heroBackgroundImgURL = "https://images.unsplash.com/photo-1556476874-c98062c7027a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1490&q=80";
    $heroRaised = false;

    // hero CTA
    $heroCTA = array(
        array(
            location => "#about",
            title => "Learn More",
            classNames => "btn btn-primary btn-lg scroll-link shadow-lg ml-auto mr-3"
        ),
        array(
            location => "#book",
            title => "Get Started",
            classNames => "btn btn-lg scroll-link ml-auto mr-3"
        )
    );

    // === Section One ===
    $sectionOneIcon = null;
    $sectionOneTitle = null;
    $sectionOneText = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi beatae voluptates atque quos. In, optio? Quo autem, natus debitis sint veniam ullam atque deleniti temporibus voluptas delectus suscipit iste recusandae eius nihil sunt molestias harum dolore! Quibusdam amet omnis tenetur facilis deserunt, porro quis distinctio!";

    $infoColumns = null; 

    // === Review Section ===
    $reviewSectionTitle = "Client Reviews";
    $reviewSectionText = "Read the wonderful feedback and success stories we have got from our current and previous clients.";
    $readAllLink = "testimonials";

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
            name => " Bryson Homewood "
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => " Paul Eliot "
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => " Paul Eliot "
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => " Paul Eliot "
        ),
        array(
            review => "Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend.",
            name => " Paul Eliot "
        )
    );


    // === Book Section (product / sessions showcase) ===
    $bookingTitle = "Sessions we offer";
    $learnMorePage = "product?productId=";
    $products = array(
        array(
            productId => 1,
            productName => "Private Training",
            productPrice => "19.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime? Voluptatibus, dolorum fugiat illo aut consequatur neque. Debitis blanditiis perferendis explicabo reiciendis tempore! Aspernatur eaque doloribus alias beatae sed iste, rem dignissimos esse? Veniam sapiente eius aperiam velit illum distinctio officia id non sit et? Quo non debitis ratione accusantium laborum aliquam at nesciunt?",
            productImageURL => "https://source.unsplash.com/1600x900/?session"
        ),
        array(
            productId => 2,
            productName => "Private Groups",
            productPrice => "29.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime? Voluptatibus, dolorum fugiat illo aut consequatur neque. Debitis blanditiis perferendis explicabo reiciendis tempore! Aspernatur eaque doloribus alias beatae sed iste, rem dignissimos esse? Veniam sapiente eius aperiam velit illum distinctio officia id non sit et? Quo non debitis ratione accusantium laborum aliquam at nesciunt?",
            productImageURL => "https://source.unsplash.com/1600x900/?session"
        ),
        array(
            productId => 3,
            productName => "Female Training",
            productPrice => "19.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime? Voluptatibus, dolorum fugiat illo aut consequatur neque. Debitis blanditiis perferendis explicabo reiciendis tempore! Aspernatur eaque doloribus alias beatae sed iste, rem dignissimos esse? Veniam sapiente eius aperiam velit illum distinctio officia id non sit et? Quo non debitis ratione accusantium laborum aliquam at nesciunt?",
            productImageURL => "https://source.unsplash.com/1600x900/?female"
        ),
        array(
            productId => 4,
            productName => "Mental Well-being",
            productPrice => "15.00",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime? Voluptatibus, dolorum fugiat illo aut consequatur neque. Debitis blanditiis perferendis explicabo reiciendis tempore! Aspernatur eaque doloribus alias beatae sed iste, rem dignissimos esse? Veniam sapiente eius aperiam velit illum distinctio officia id non sit et? Quo non debitis ratione accusantium laborum aliquam at nesciunt?",
            productImageURL => "https://source.unsplash.com/1600x900/?brain"
        ),
        array(
            productId => 5,
            productName => "Massage therapy",
            productPrice => "60.00",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime? Voluptatibus, dolorum fugiat illo aut consequatur neque. Debitis blanditiis perferendis explicabo reiciendis tempore! Aspernatur eaque doloribus alias beatae sed iste, rem dignissimos esse? Veniam sapiente eius aperiam velit illum distinctio officia id non sit et? Quo non debitis ratione accusantium laborum aliquam at nesciunt?",
            productImageURL => "https://source.unsplash.com/1600x900/?session"
        )
    ); 

    // === Product / Session Details
    $bookingDetailsTitle = "What we offer";
    $bookingDetails = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nam expedita tenetur similique, iure cumque numquam, commodi fugit ipsum ab, eum repudiandae deserunt quisquam. Repudiandae delectus, soluta impedit cupiditate perferendis voluptatum tempore. Sunt veritatis debitis aliquam veniam autem, accusantium quas, non obcaecati aliquid cum commodi eligendi dicta tenetur minus libero!";

    // === About Section ===
    $aboutSectionTitle = "Get to know your coach";
    $aboutSectionText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ipsum? Totam voluptatibus cumque obcaecati ipsam! Fugit praesentium quis odit libero pariatur. Qui optio necessitatibus modi id, aspernatur officia ratione consectetur illo harum hic, ipsum omnis voluptatum aut non vel rerum deserunt accusamus dolore commodi recusandae ullam ut debitis natus? Maxime dolor officia maiores quod dolorum. <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ipsum? Totam voluptatibus cumque obcaecati ipsam! Fugit praesentium quis odit libero pariatur. Qui optio necessitatibus modi id, aspernatur officia ratione consectetur illo harum hic, ipsum omnis voluptatum aut non vel rerum deserunt accusamus dolore commodi recusandae ullam ut debitis natus? Maxime dolor officia maiores quod dolorum. ";
    $aboutSectionProfile = null;

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
    $contactBackgroundImgURL = "https://source.unsplash.com/1600x900/?soccer";

    // === Footer Links ===
    $footerLinks = array(
        array(
            listTitle => "Contact us",
            links => array( 
                array(
                    title => "Contact Form",
                    location => "contact"
                ),
                array(
                    title => "FAQ Page",
                    location => "faq"
                ),
                array(
                    title => "About",
                    location => "about"
                )
            )
        ),
        array(
            listTitle => "Our socials",
            links => array( 
                array(
                    title => "Facebook",
                    location => "#"
                ),
                array(
                    title => "Twitter",
                    location => "#"
                ),
                array(
                    title => "Instagram",
                    location => "#"
                ),
                array(
                    title => "YouTube",
                    location => "#"
                )
            )
        )
    );

?>