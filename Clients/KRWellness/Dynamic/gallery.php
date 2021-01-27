<?php
    include('includes/navbar.php');
?>
<div class="header__text-box">
    <h1 class="heading-primary" style="margin: auto 0px">
        <span class="heading-primary--sub">Gallery</span>
    </h1>
</div>
</header>

<main>

    <section class="section">
        <div class="row">
                    <div class="<?php echo $elfSightInstaFeedClass ?>"></div>
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        </div>
    </section>
<?php
    include('includes/footer.php');
?>