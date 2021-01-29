<?php $productID = intval($_GET['sessionId']);?>
<section class="section section-book" id="book">
    <?php if($products[$productID - 1] != null) : ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <div class="session-heading">
                        <h2 class="session-title"><?php echo $products[$productID - 1][productName]; ?></h2>
                        <p class="session-price">Price: &ThickSpace; <?php echo $products[$productID - 1][productPrice]; ?>/hr</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <img src="<?php echo $products[$productID - 1][productImageURL]; ?>" class="img-fluid session-feature-img" alt="">
                </div>
                <div class="col-lg-6">
                    <h3><?php echo $bookingDetailsTitle ?></h3>
                    <p>
                        <?php echo $products[$productID - 1][productDescription]; ?>
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-12">
                    <h3>Interested in making a booking?</h3>
                    <p class="lead"><?php echo $bookingDetails ?></p>
                    <a href="mailto:<?php echo $websiteEmail ?>" class="btn btn-primary btn-lg">Email us to book <i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php if($products[$productID - 1] == null) : ?>
        <?php include("Themes/Theme1/includes/components/pageNotFoundComponent.php") ?>
    <?php endif ?>
</section>
