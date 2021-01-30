<?php include('Themes/Natours/includes/header.php'); ?>

    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <?php include('Themes/Natours/includes/nav.php'); ?>
                </ul>
            </nav>
        </div>

        <header class="header not-home-header" id="elements">
        <div class="header__logo-box">
            <a href="/"><img src="<?php echo $siteLogo ?>" alt="Logo" class="header__logo"></a>
        </div>


