<section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        <?php echo $bookingTitle ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="sessions bg-white-tint">
                        <?php foreach($products as $product) : ?>
                            <div class="session">
                                <div>
                                    <h3 class="heading-tertiary"><?php echo $product[productName] ?></h3>
                                    <a href="<?php echo $learnMorePage.$product[productId] ?>" class="btn-text btn-book">Learn More</a>
                                </div>
                                <p class="heading-tertiary">&pound;<?php echo $product[productPrice] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>