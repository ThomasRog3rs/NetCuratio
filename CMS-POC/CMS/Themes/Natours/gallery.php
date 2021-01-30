<?php
    include('Themes/Natours/includes/navbar.php');
?>
<div class="header__text-box">
    <h1 class="heading-primary" style="margin: auto 0px">
        <span class="heading-primary--sub">Gallery</span>
    </h1>
</div>
</header>

<main>
    <?php if($elfSightInstaFeedClass != null) : ?>
        <section class="section">
            <div class="row">
                <div class="<?php echo $elfSightInstaFeedClass ?>"></div>
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            </div>
        </section>
    <?php endif; ?>

    <?php if($YouYubePlaylist != null) : ?>
        <section class="section">
        <div class="u-center-text u-margin-bottom-small">
                    <h3>
                        YouTube
                    </h3>
                </div>
            <div class="row u-center-text">
                <?php 
                    include('Themes/Natours/includes/components/youtubeVideoComponent.php');
                    displayYouTubeVideo($YouYubePlaylist)
                ?>
            </div>
        </section>
    <?php endif; ?>
<?php
    include('Themes/Natours/includes/footer.php');
?>