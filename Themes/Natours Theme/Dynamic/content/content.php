<?php 
    function trunc($phrase, $max_words) {
        $phrase_array = explode(' ',$phrase);
        if(count($phrase_array) > $max_words && $max_words > 0)
        $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
        return $phrase;
    }

    $websiteEmail = "thomas@trwebdev.com";
    /* This document contains all content for the pages of the site */

    // === Does page use hero section? ===
    $landingPage = true;

    // === Site Name ===
    $siteTitle = "Natours";

    // === Site Icon ===
    $siteIcon = "fas fa-seedling";

    $siteLogo = "img/logo-white.png";

    // === General ===
    $pageBorder = false;
    $slantedSections = true;

    $textHighlight = "rgba(126,213,111,1)";

    $primarySolid = "rgba(126,213,111,1)";
    $primarySolidDark = "rgba(40,180,133,1)";

    $primaryColor = "rgba(126,213,111,0.8)";
    $primaryColorDark = "rgba(40,180,133,0.8)";

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
    $heroBackgroundImgURL = "https://source.unsplash.com/1600x900/?nature";
    $heroRaised = null;

    // hero CTA
    $heroCTA = array(
        array(
            location => "sessions",
            title => "Descover More",
            classNames => "btn btn--white btn--animated mr-3"
        )
    );

    // === Section One ===
    $sectionOneIcon = "fas fa-seedling";
    $sectionOneTitle = "Section One";

    $sectionOneSubHeading1 = "TERTIARY HEADING";
    $sectionOneParagraph1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.";

    $sectionOneSubHeading2 = "TERTIARY HEADING";
    $sectionOneParagraph2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.";

    $sectionOneText = "<h3>".$sectionOneSubHeading1."</h3><p>".$sectionOneParagraph1."</p><br><br>"."<h3>".$sectionOneSubHeading2."</h3><p>".$sectionOneParagraph2."</p>";

    //Section One CTA
    $sectionOneBtnTitle = null;
    $sectionOneBtnLocation = null;

    //3 IMAGE COMPOSITION Component
    $imageComposition = ["https://source.unsplash.com/1920x1080/?nature","https://source.unsplash.com/1920x1080/?mountain","https://source.unsplash.com/1920x1080/?snow"];

    // Feature cards section
    $infoColumns = array(
        array(
            icon => "far fa-heart",
            heading => "Heading 1",
            body => "Sports Massage is tailored predominantly to those with injury or problems affecting range of motion which is impacting daily life, such as knee problems and back issues."
        ),
        array(
            icon => "far fa-clock",
            heading => "Heading 2",
            body => "Personal Training is bespoke exercise, tailored to your goals & needs taking in mind your past fitness experience and current fitness levels."
        ),
        array(
            icon => "far fa-user",
            heading => "Heading 3",
            body => "Diet is such a key part of your everyday life – diet impacts how you feel & how you look, simple as that. I do not believe in fad diets, quick fixes or magic pills."
        ),
        array(
            icon => "far fa-clock",
            heading => "Heading 2",
            body => "Corporate Wellness is tailored to your company needs – this can include everything I offer or simply the areas you, as a company, may be focussing on with your staff."
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
            review => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.",
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
    $learnMorePage = "session?sessionId=";
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
    $aboutSectionTitle = $sectionOneTitle;
    $aboutSectionText = $sectionOneText;
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
    $contactBackgroundImgURL = "https://source.unsplash.com/1600x900/?nature";

    // === Footer Links ===
    $footerLinks = array(
        array(
            listTitle => null,
            links => $navItems
        )
    );

    $footerCopyRight = $siteTitle.' '.date("Y"). ' | Powered by <a class="light-link" href="http://www.trwebdev.com">NetCuratio</a>';

    //Extra Components
    $elfSightInstaFeedClass = "elfsight-app-b8cfb078-34d5-4612-a44b-ca21179d4b5b";

?>