<?php 
    function trunc($phrase, $max_words) {
        $phrase_array = explode(' ',$phrase);
        if(count($phrase_array) > $max_words && $max_words > 0)
        $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
        return $phrase;
    }

    $theme = "Theme1";
    
    $websiteEmail = "thomas@trwebdev.com";
    /* This document contains all content for the pages of the site */

    // === Does page use hero section? ===
    $landingPage = true;

    // === Site Name ===
    $siteTitle = "Theme 1";

    // === Site Icon ===
    $siteIcon = "fa-smile";

    $siteLogo = null;

    // === General ===
    $pageBorder = null;
    $slantedSections = true;
    
    $textHighlight = "#007bff";
    
    $primarySolid = "#007bff";
    $primarySolidDark = "#0069d9";
    
    $primaryColor = "rgba(0,123,255,0.8)";
    $primaryColorDark = "rgba(0,105,217,0.8)";

    // === Nav Menu Items ===
    $navItems = array(
        array(
            location => "sessions",
            title => "Products"
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
            location => "contact",
            title => "Contact"
        )
    );

    //sponsor images
    $sponsorImages = null;

    // ****HOME PAGE****

    // === Hero Section ===
    /*Note: control the background image in ../css/custom.css */
    $heroHeading = "This is Theme 1";
    $heroIntro = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus harum enim, hic saepe ab maiores!";
    $heroBackgroundImgURL = "https://source.unsplash.com/1600x900/?fun";
    $heroRaised = false;

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
    $sectionOneText = "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi beatae voluptates atque quos. In, optio? Quo autem, natus debitis sint veniam ullam atque deleniti temporibus voluptas delectus suscipit iste recusandae eius nihil sunt molestias harum dolore! Quibusdam amet omnis tenetur facilis deserunt, porro quis distinctio!</p>";

    $sectionOneVideo = null;

    // $sectionOneSubHeading1 = "TERTIARY HEADING";
    // $sectionOneParagraph1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.";

    // $sectionOneSubHeading2 = "TERTIARY HEADING";
    // $sectionOneParagraph2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.";

    //Section One CTA
    $sectionOneBtnTitle = null;
    $sectionOneBtnLocation = null;

    //3 IMAGE COMPOSITION Component
    $imageComposition = ["https://source.unsplash.com/1920x1080/?nature","https://source.unsplash.com/1920x1080/?mountain","https://source.unsplash.com/1920x1080/?snow"]; //Default values

	// Feature Cards
    $infoColumns = array(
        array(
            icon => "far fa-heart",
            heading => "Heading 1",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        ),
        array(
            icon => "far fa-clock",
            heading => "Heading 2",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        ),
        array(
            icon => "far fa-user",
            heading => "Heading 3",
            body => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga."
        )
    ); 

    // === Review Section ===
    $reviewSectionTitle = "Client Reviews";
    $reviewSectionText = "Read the wonderful feedback and success stories we have got from our current and previous clients.";
    $readAllLink = "testimonials";

    $backgroundVideo = null;
    $backgroundVideoSrc = null;

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
    $learnMorePage = "session?sessionId=";
    $products = array(
        array(
            productId => 1,
            productName => "Product Name 1",
            productPrice => "19.99",
            productDescription => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptatibus unde iusto dolorem dolor, numquam corporis earum delectus maxime? Voluptatibus, dolorum fugiat illo aut consequatur neque. Debitis blanditiis perferendis explicabo reiciendis tempore! Aspernatur eaque doloribus alias beatae sed iste, rem dignissimos esse? Veniam sapiente eius aperiam velit illum distinctio officia id non sit et? Quo non debitis ratione accusantium laborum aliquam at nesciunt?",
            productImageURL => "https://source.unsplash.com/1600x900/?session"
        ),
        array(
            productId => 2,
            productName => "Product Name 2",
            productPrice => "29.99",
            productDescription => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga.",
            productImageURL => "https://source.unsplash.com/1600x900/?product"
        ),
        array(
            productId => 3,
            productName => "Product Name 3",
            productPrice => "39.99",
            productDescription => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque ad ea atque fuga.",
            productImageURL => "https://source.unsplash.com/1600x900/?session"
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
    $aboutSectionVideo = $sectionOneVideo;

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
            listTitle => "Useful links",
            links => array( 
                array(
                    title => "Customer Login",
                    location => "#"
                ),
                array(
                    title => "Book Online",
                    location => "#"
                ),
                array(
                    title => "About",
                    location => "#"
                )
            )
        ),
        array(
            listTitle => "Contact Us",
            links => array( 
                array(
                    title => "Contact Form",
                    location => "#"
                ),
                array(
                    title => "FAQ Page",
                    location => "#"
                )
            )
        ),
        array(
            listTitle => "Blog Posts",
            links => array( 
                array(
                    title => "Blog title 1",
                    location => "#"
                ),
                array(
                    title => "Blog title 2",
                    location => "#"
                ),
                array(
                    title => "Blog title 3",
                    location => "#"
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
                )
            )
        )
    );

    $footerCopyRight = $siteTitle.' '.date("Y").' '.' | Powered by <a class="light-link" href="http://www.trwebdev.com">NetCuratio</a>';

    //Extra Components
    $elfSightInstaFeedClass = null;  
    $YouYubePlaylist = null;

?>