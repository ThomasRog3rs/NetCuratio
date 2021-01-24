<?php include('includes/content.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->
        

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
            integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous" />

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/custom.css">
        <?php if(!$pageBorder) : ?>
            <link rel="stylesheet" href="css/removeBorder.css">
        <?php endif; ?>
        <?php if(!$slantedSections) : ?>
            <link rel="stylesheet" href="css/removeSlantedSections.css">
        <?php endif; ?>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title><?php echo $siteTitle ?></title>
    </head>

    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <?php include('includes/nav.php'); ?>
                </ul>
            </nav>
        </div>

        <header class="header" style="background-image: linear-gradient(to right bottom, rgba(126,213,111,0.8), rgba(40,180,133,0.8)),
    url(<?php echo $heroBackgroundImgURL ?>)">
            <div class="header__logo-box">
                <img src="<?php echo $siteLogo ?>" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main"><?php echo $heroHeading?></span>
                    <span class="heading-primary--sub"><?php echo $heroIntro?></span>
                </h1>

                <a href="<?php echo $heroCTA[location] ?>" class="<?php echo $heroCTA[classNames] ?>"><?php echo $heroCTA[title] ?></a>
            </div>
        </header>

        <main>