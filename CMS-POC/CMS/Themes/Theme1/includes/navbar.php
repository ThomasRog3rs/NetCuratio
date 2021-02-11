<?php 
    $landingPage = false;
?>

<?php include('Themes/Theme1/includes/header.php')?>


<!-- Navbar -->
<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><?php echo $siteTitle ?> <i class="far <?php echo $siteIcon ?> fa"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php include('Themes/Theme1/includes/nav.php') ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">