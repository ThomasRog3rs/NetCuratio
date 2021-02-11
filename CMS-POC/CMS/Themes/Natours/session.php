<?php
    include('Themes/Natours/includes/navbar.php');
?>
<div class="header__text-box">
    <h1 class="heading-primary" style="margin: auto 0px">
        <span class="heading-primary--sub">Session Details</span>
    </h1>
</div>
</header>

<main>
    <?php include('Themes/Natours/includes/sections/sectionSessionDetails.php'); ?>

    <section class="section" style="background-color: #eee">
        <div class="u-center-text u-margin-bottom-big">
                        <h2 class="heading-secondary">
                            <?php echo $bookingTitle ?>
                        </h2>
                    </div>
        <div class="row">
            <?php include('Themes/Natours/includes/components/sessionsComponent.php'); ?>
        </div>
    </section>

<?php
    include('Themes/Natours/includes/footer.php');
?>