<?php include('includes/content.php')?>
<?php include('includes/header.php')?>

<!-- Hero Section -->
<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><?php echo $siteTitle ?> <i class="far <?php echo $siteIcon ?> fa"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php include('includes/nav.php') ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section section-hero header-filter" id="home">
        <div class="container">
            <div class="row">
                <div class="text-left col-lg-6">
                    <h1><?php echo $heroHeading ?></h1>
                    <p><?php echo $heroIntro ?></p>
                    <?php
                        foreach($heroCTA as $cta){
                            echo "<a href=\"$cta[location]\" class=\"$cta[classNames]\">$cta[title]</a>";
                        }
                    ?>
                    <!-- <a href="elements.html" class="btn btn-primary btn-lg scroll-link shadow-lg ml-auto mr-3">View Elements</a>
                    <a href="#book" class="btn btn-lg scroll-link ml-auto">Get started</a> -->
                </div>
            </div>
        </div>
    </section>

    
    <?php if($heroRaised != true) :?>
        <main class="main">
    <?php endif ?>

    <?php if($heroRaised == true) :?>
        <main class="main main-raised">
    <?php endif ?>