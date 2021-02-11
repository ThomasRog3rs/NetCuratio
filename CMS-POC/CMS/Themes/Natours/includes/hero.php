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

        <header class="header">
            <div class="header__logo-box">
                <a href="/"><img src="<?php echo $siteLogo ?>" alt="Logo" class="header__logo"></a>
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main"><?php echo $heroHeading?></span>
                    <span class="heading-primary--sub"><?php echo $heroIntro?></span>
                </h1>

                <a href="<?php echo $heroCTA[location] ?>" class="<?php echo $heroCTA[classNames] ?>"><?php echo $heroCTA[title] ?></a>
                <?php
                        foreach($heroCTA as $cta){
                            echo "<a href=\"$cta[location]\" class=\"$cta[classNames]\">$cta[title]</a>";
                        }
                   ?>
            </div>
        </header>

        <main>