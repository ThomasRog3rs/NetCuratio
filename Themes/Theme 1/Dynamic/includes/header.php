<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle ?></title>
    <meta name="description" content="">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dux0rfm.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">
    <?php if($landingPage != true) : ?>
        <link rel="stylesheet" href="css/notLanding.css">
    <?php endif; ?>
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
        

</head>
