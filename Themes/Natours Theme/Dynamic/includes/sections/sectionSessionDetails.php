<?php $productID = intval($_GET['sessionId']);?>
<section class="section">
    <?php if($products[$productID - 1] != null) : ?>
            <div class="row">
                    <div class="session-heading u-margin-bottom-medium">
                        <h2 class="heading-tertiary"><?php echo $products[$productID - 1][productName]; ?></h2>
                        <p class="paragraph">Price: &ThickSpace; <?php echo $products[$productID - 1][productPrice]; ?>/hr</p>
                    </div>

                <div class="col-1-of-2">
                    <img src="<?php echo $products[$productID - 1][productImageURL]; ?>" alt="" style="max-width: 100%;">
                </div>
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary"><?php echo $bookingDetailsTitle ?></h3>
                    <p class="paragraph">
                        <?php echo $products[$productID - 1][productDescription]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="u-margin-bottom-small">
                    <h3 class="heading-tertiary">Interested in making a booking?</h3>
                    <p class="paragraph"><?php echo $bookingDetails ?></p>
                </div>
                <a href="mailto:<?php echo $websiteEmail ?>" class="btn btn--green">Contact Us &nbsp; <i class="fas fa-envelope"></i></a>
            </div>  
    <?php endif ?>
    <?php if($products[$productID - 1] == null) : ?>
        <?php include("includes/components/pageNotFoundComponent.php") ?>
    <?php endif ?>
</section>
