<?php 
    function trunc($phrase, $max_words) {
        $phrase_array = explode(' ',$phrase);
        if(count($phrase_array) > $max_words && $max_words > 0)
        $phrase = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
        return $phrase;
    }

    $theme = "Natours";

    $websiteEmail = "thomas@trwebdev.com";
    /* This document contains all content for the pages of the site */
	
	// === Does page use hero section? ===
    $landingPage = true;

    // === Site Name ===
    $siteTitle = "KRWellness";

    // === Site Icon ===
    $siteIcon = null;

    $siteLogo = "content/img/kr-logo-white-new.png";

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
            location => "gallery",
            title => "Gallery"
        ),
        array(
            location => "sessions",
            title => "Services"
        ),
        array(
            location => "faq",
            title => "FAQs"
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
    $heroHeading = "KR Wellness";
    $heroIntro = "Wellness is a choice";
    $heroBackgroundImgURL = "/content/img/hero3.jpg";
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

    $sectionOneSubHeading1 = "About KR Wellness";
    $sectionOneParagraph1 = "Kieran has over 15 years’ experience within the Health & Fitness managing four Health & Fitness Clubs, three of which for Marriott Hotels within the North West, as well running successful Boot Camps, Boxerfit Courses & Fit Clubs for David Lloyd Leisure.";

    $sectionOneSubHeading2 = "Our vision";
    $sectionOneParagraph2 = "The goal is not only to view health as the physical but to also recognise the mental aspects & how these tackled together can lead to a more sustainable & fulfilled lifestyle on a day to day basis. ";

    $sectionOneText = "<h3>".$sectionOneSubHeading1."</h3><p>".$sectionOneParagraph1."</p><br><br>"."<h3>".$sectionOneSubHeading2."</h3><p>".$sectionOneParagraph2."</p>";
    
    $sectionOneVideo = null;
	
    //Section One CTA
    $sectionOneBtnTitle = null;
    $sectionOneBtnLocation = null;

    //3 IMAGE COMPOSITION Component
    $imageComposition = ["content/img/about1.jpg","content/img/about2.jpg","content/img/about3.jpg"];

    // Feature cards section
    $infoColumns = array(
        array(
            icon => "fas fa-spa",
            heading => "Sports Massage",
            body => "Sports Massage is tailored predominantly to those with injury or problems affecting range of motion
            which is impacting daily life, such as knee problems and back issues."
        ),
        array(
            icon => "far fa-heart",
            heading => "Deep Tissue Massage",
            body => "Deep tissue massage is designed to be a step up depth wise from holistic massage therapy to
            target those tight and aching muscles."
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
        )
        // array(
        //     icon => "fas fa-user-tie",
        //     heading => "Corporate Wellness",
        //     body => "Corporate Wellness is tailored to your company needs – this can include everything I offer or simply
        //     the areas you, as a company, may be focussing on with your staff."
        // )
    ); 

    // === Review Section ===
    $reviewSectionTitle = "We make people genuinely happy";
    $reviewSectionText = "Read the wonderful feedback and success stories we have got from our current and previous clients.";
    $readAllLink = "testimonials";
	
    $backgroundVideo = false;
    $backgroundVideoSrc = "content/img/video.mp4";

    // === Testimonials ===
    $testimonials = array(
        array(
            review => "I have been training with Keiran for the best part of 6 months and he has helped me so much. I feel so much more active and healthy and as though my mental health has improved alongside my physical strength. Kez has been so great at adapting to the ever-changing government restrictions and we have managed to keep our sessions going, even in a National lockdown. Could not recommend him enough!",
            name => "Phoebe"
        ),
        array(
            review => "Following an ACL rupture, my days went from very sport-heavy to limited exercise. Kieran took me under his wing and devised plans, adequate enough for substantial progress to be made, without causing further injury to my knee. 6 sessions down, and I have lost 15lbs and noticeable inches around my body. Each session is then followed by an intense sports massage - what a difference this makes! I have noticed credible changes to my muscle tightness, and feel like a new woman! I will 100% be continuing with Kieran post surgery for the best recovery outcome.",
            name => "Dani"
        )
    );


    // === Book Section (product / sessions showcase) ===
    $bookingTitle = "Services we offer";
    $learnMorePage = "session?sessionId=";
    $products = array(
        array(
            productId => 1,
            productName => "Sports Massage &amp; Deep Tissue",
            productPrice => "25",
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
            shapes and size &amp; most muscular/joint issues you could think of.
            <br><br>
            £25 Half Body<br>
            £40 Full Body<br><br>
            Injury specific dependant on time/treatment required",
            productImageURL => "content/img/contact.jpg"
        ),
        array(
            productId => 2,
            productName => "Personal Training",
            productPrice => "30",
            productDescription => "Personal Training is bespoke exercise, tailored to your goals &amp; needs taking in mind both your past and current fitness levels and
            lifestyle.<br><br>
            I look at personal training as a lifestyle piece and really work with you to make a sustainable plan
            that really fits into your lifestyle in order to maintain. The plan with personal training should never
            be a temporary solution and I aim to give you the tools to not only achieve your goals but to
            maintain them and evolve goals as you progress.
            <br><br>
            £30 Pay as you go<br>
            £135 For 5 sessions<br>
            £220 For 10 sessions
            <br><br>",
            productImageURL => "content/img/ropes.jpg"
        ),
        array(
            productId => 3,
            productName => "Nutrition",
            productPrice => "20",
            productDescription => "Diet is such a key part of your everyday life – diet impacts how you feel &amp; how you look, simple as
            that. I do not believe in fad diets, quick fixes or magic pills.<br><br>
            Food diaries are a great way for me to gain a greater understanding of your diet as well as lifestyle
            given the detail around the times you are eating. By making gradual adjustments to your own diet
            we can work together to work toward a balanced diet that you will stick to.<br><br>
            This will not be ‘A Diet’, it will be your diet!
            <br><br>
            Food diary review £20<br>
            Template and Advice sheet included<br>
            Fortnightly reviews available",
            productImageURL => "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
        ),
        array(
            productId => 4,
            productName => "Corporate Wellness",
            productPrice => "",
            productDescription => "Corporate Wellness is tailored to your company needs – this can include everything I offer or simply
            the areas you, as a company, may be focussing on with your staff. This is key in staff retention &amp;
            productivity. A happier workforce is a healthy workforce.<br><br>
            Group training is always a good place to start, especially for moral boosting &amp; team building.<br><br>
            Speak with me to discuss the needs of your business &amp; we’ll work toward a bespoke wellness
            package to compliment your business.
            <br><br>
            Corporate Wellness<br>
            Prices available on request<br>
            Packages can be tailored to suit your company budget",
            productImageURL => "https://images.unsplash.com/photo-1455849318743-b2233052fcff?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
        )
    ); 
    $sessionsBtnTitle = "View All Sessions &rarr;";
    $sessionsBtnLocation = "sessions";

    // === Product / Session Details
    $bookingDetailsTitle = "What we offer";
    $bookingDetails = "<b>Prices reflect M28 and surrounding areas – charges may change outside of this area.
    Services are provided in Greater Manchester &amp; Manchester.</b> To make your booking please use the contact form and state, in your message, what services you require. Mobile visits in &amp; arround Manchester are available, or you can visit my place in Walkden";

    // === About Section ===
    $aboutSectionTitle = $sectionOneTitle;
    $aboutSectionText = $sectionOneText;
    $aboutSectionProfile = null;
    $aboutSectionVideo = $sectionOneVideo;

    // === FAQs ===
    $faqs = array(
        array(
            id => 1,
            question => "Sport massage &amp; Deep Tissue – Will it be painful?",
            answer => "All treatments and pressures will be discussed prior to treatment and constantly mentioned during
            massage – sometimes ‘pain’ may be necessary but never beyond anything you couldn’t handle and
            never without consent. This is often described as ‘that good pain’ so there is absolutely nothing to
            worry about",
            activeOnLoad => "true",
            show => "show"
        ),
        array(
            id => 2,
            question => "Personal Training – Do I have enough space in my home to do personal training?",
            answer => "You would be surprised how little space is needed bear in mind we don’t have large treadmills or
            cross trainers, just you, myself and a few pieces of equipment – and hard work obviously!",
            activeOnLoad => "false",
            show => null
        )
    );

    // === Contact Section ===
    $contactBackgroundImgURL = "content/img/contact.jpg";

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
    $elfSightInstaFeedClass = "elfsight-app-2b4ca0a5-c47e-4f51-b27b-57598e110579";  
    $YouYubePlaylist = $sectionOneVideo;
?>