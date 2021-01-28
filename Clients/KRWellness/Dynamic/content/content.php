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
    $siteTitle = "KRWellness";

    // === Site Icon ===
    $siteIcon = null;

    $siteLogo = "img/kr-logo-white.png";

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
            title => "01 - Home"
        ),
        array(
            location => "about",
            title => "02 - About"
        ),
        array(
            location => "gallery",
            title => "03 - Gallery"
        ),
        array(
            location => "sessions",
            title => "04 - Services"
        ),
        array(
            location => "testimonials",
            title => "05 - Testimonials"
        ),
        array(
            location => "contact",
            title => "06 - Contact"
        )
    );

    // ****HOME PAGE****

    // === Hero Section ===
    /*Note: control the background image in ../css/custom.css */
    $heroHeading = "KR Wellness";
    $heroIntro = "Wellness is a choices";
    $heroBackgroundImgURL = "/img/hero3.jpg";
	$heroRaised = null;

    // hero CTA
    $heroCTA = array(
		array(
			location => "sessions",
			title => "Discover More",
			classNames => "btn btn--white btn--animated"
		)
    );

    // === Section One ===
    $sectionOneIcon = null;
    $sectionOneTitle = "What we are about";

    $sectionOneSubHeading1 = "About KR Welness";
    $sectionOneParagraph1 = "Kieran has over 15 years’ experience within the Health & Fitness managing four Health & Fitness Clubs, 3 of which for Marriott Hotels within the North West, as well running successful Boot Camps, Boxerfit Courses & Fit Clubs for David Lloyd Leisure.";

    $sectionOneSubHeading2 = "Our vision";
    $sectionOneParagraph2 = "The goal is not only to view health as the physical but to also recognise the mental aspects & how these tackled together can lead to a more sustainable & fulfilled lifestyle on a day to day basis. ";

	$sectionOneText = "<h3>".$sectionOneSubHeading1."</h3><p>".$sectionOneParagraph1."</p><br><br>"."<h3>".$sectionOneSubHeading2."</h3><p>".$sectionOneParagraph2."</p>";
	
    //Section One CTA
    $sectionOneBtnTitle = null;
    $sectionOneBtnLocation = null;

    //3 IMAGE COMPOSITION Component
    $imageComposition = ["/img/about1.jpg","/img/about2.jpg","/img/about3.jpg"];

    // Feature cards section
    $infoColumns = array(
        array(
            icon => "fas fa-spa",
            heading => "Sports Massage",
            body => "Sports Massage is tailored predominantly to those with injury or problems affecting range of motion
            which is impacting daily life, such as knee problems and back issues."
        ),
        array(
            icon => "fas fa-dumbbell",
            heading => "Personal Training",
            body => "Personal Training is bespoke exercise, tailored to your goals &amp; needs taking in mind your past fitness
            experience and current fitness levels."
        ),
        array(
            icon => "fas fa-seedling",
            heading => "Nutrition",
            body => "Diet is such a key part of your everyday life – diet impacts how you feel &amp; how you look, simple as
            that. I do not believe in fad diets, quick fixes or magic pills."
        ),
        array(
            icon => "fas fa-user-tie",
            heading => "Corporate Wellness",
            body => "Corporate Wellness is tailored to your company needs – this can include everything I offer or simply
            the areas you, as a company, may be focussing on with your staff."
        )
    ); 

    // === Review Section ===
    $reviewSectionTitle = "We make people genuinely happy";
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
            review => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.",
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
    $bookingTitle = "Services we offer";
    $learnMorePage = "session?sessionId=";
    $products = array(
        array(
            productId => 1,
            productName => "Sports Massage &amp; Deep Tissue",
            productPrice => "59.99",
            productDescription => "Sports Massage is tailored predominantly to those with injury or problems affecting range of motion
            which is impacting daily life, such as knee problems and back issues.<br><br>
            This type of massage can also be effective in a proactive sense for sports persons &amp; athletes. Regular
            deep, thorough all over sports massage can be used to keep muscles loose, pliable &amp; relaxed
            therefor preventing injury.<br><br>
            I have provided sports massage treatments for both the Manchester United &amp; Manchester City
            women’s football teams and other levels of all sports.
            <br><br>
            Deep Tissue Massage is specifically designed to focus on those tight areas built up from everyday
            life. Common focus areas include back &amp; shoulder pains &amp; aches and ridding knots.
            Everyone has focus points that differ to another and this is something we will discuss together prior
            treatment.
            <br><br>
            I have provided massage treatments for a range of reasons on a deep tissue level for people of all
            shapes and size &amp; most muscular/joint issues you could think of.",
            productImageURL => "img/contact.jpg"
        ),
        array(
            productId => 2,
            productName => "Personal Training",
            productPrice => "59.99",
            productDescription => "Personal Training is bespoke exercise, tailored to your goals &amp; needs taking in mind your past fitness
            experience and current fitness levels.<br><br>
            I look at personal training as a lifestyle piece and really work with you to make a sustainable plan
            that really fits into your lifestyle in order to maintain. The plan with personal training should never
            be a temporary solution and I aim to give you the tools to not only achieve your goals but to
            maintain them and evolve goals as you progress.",
            productImageURL => "https://source.unsplash.com/1600x900/?gym"
        ),
        array(
            productId => 3,
            productName => "Nutrition",
            productPrice => "39.99",
            productDescription => "Diet is such a key part of your everyday life – diet impacts how you feel &amp; how you look, simple as
            that. I do not believe in fad diets, quick fixes or magic pills.<br><br>
            Food diaries are a great way for me to gain a greater understanding of your diet as well as lifestyle
            given the detail around the times you are eating. By making gradual adjustments to your own diet
            we can work together to work toward a balanced diet that you will stick to.<br><br>
            This will not be ‘A Diet’, it will be your diet!",
            productImageURL => "https://source.unsplash.com/1600x900/?food"
        ),
        array(
            productId => 4,
            productName => "Corp Wellness",
            productPrice => "299.99",
            productDescription => "Corporate Wellness is tailored to your company needs – this can include everything I offer or simply
            the areas you, as a company, may be focussing on with your staff. This is key in staff retention &amp;
            productivity. A happier workforce is a healthy workforce.<br><br>
            Group training is always a good place to start, especially for moral boosting &amp; team building.<br><br>
            Speak with me to discuss the needs of your business &amp; we’ll work toward a bespoke wellness
            package to compliment your business.",
            productImageURL => "https://source.unsplash.com/1600x900/?business"
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
    $contactBackgroundImgURL = "img/contact.jpg";

    // === Footer Links ===
$footerLinks = array(
    array(
        listTitle => null,
        links => array(array(
        location => "/",
        title => "Home"
    ),
    array(
        location => "about",
        title => "About"
    ),
    array(
        location => "gallery",
        title => "Gallery"
    ),
    array(
        location => "sessions",
        title => "Services"
    ),
    array(
        location => "testimonials",
        title => "Testimonials"
    ),
    array(
        location => "contact",
        title => "Contact"
    )
    ))
);
	
    $footerCopyRight = $siteTitle.' '.date("Y"). ' | Powered by <a class="light-link" href="http://www.trwebdev.com">NetCuratio</a>';

        //Extra Components
        $elfSightInstaFeedClass = "elfsight-app-b8cfb078-34d5-4612-a44b-ca21179d4b5b";
?>