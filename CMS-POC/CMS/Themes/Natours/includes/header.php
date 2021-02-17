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

        <link rel="stylesheet" href="Themes/Natours/styles/style.css">
        <link rel="stylesheet" href="Themes/Natours/styles/custom.css">
        <?php if(!$pageBorder) : ?>
            <link rel="stylesheet" href="Themes/Natours/styles/removeBorder.css">
        <?php endif; ?>
        <?php if(!$slantedSections) : ?>
            <link rel="stylesheet" href="Themes/Natours/styles/removeSlantedSections.css">
        <?php endif; ?>
        <link rel="shortcut icon" type="image/png" href="content/img/kr-logo-white-new.png">
        <style>
            :root {
                --text-highlight: <?php echo $textHighlight ?> ;

                --primary-color: <?php echo $primaryColor ?>;
                --primary-color-dark: <?php echo $primaryColorDark ?>;

                --primary-color-solid: <?php echo $primarySolid ?>;
                --primary-color-dark-solid: <?php echo $primarySolidDark ?>;

                --header-background-img: url("<?php echo $heroBackgroundImgURL ?>");
            }
        </style>
        
        <title><?php echo $siteTitle ?></title>
    </head>