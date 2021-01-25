            <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        <?php echo $bookingTitle ?>
                    </h2>
                </div>

                <div class="row">
                    <?php 
                        $colNum = count($products); 
                        if($colNum > 3){
                            $colNum = 3;
                        }
                    ?>
                    <?php foreach($products as $product) : ?>
                        <?php 
                            if($product[productId] > 3){
                                break;
                            }    
                        ?>
                        <div class="col-1-of-<?php echo $colNum ?>">
                            <div class="card">
                                <div class="card__side card__side--front">
                                    <div class="card__picture card__picture--3" style="background-image: url('<?php echo $product[productImageURL] ?>');">
                                        &nbsp;
                                    </div>
                                    <h4 class="card__heading">
                                        <span class="card__heading-span card__heading-span--2"><?php echo $product[productName] ?></span>
                                    </h4>
                                    <div class="card__details">
                                        <p class="paragraph"><?php echo $product[productDescription] ?></p>
                                    </div>

                                </div>
                                <div class="card__side card__side--back card__side--back-2">
                                    <div class="card__cta">
                                        <div class="card__price-box">
                                            <p class="card__price-only">Only</p>
                                            <p class="card__price-value">&pound;<?php echo $product[productPrice] ?></p>
                                        </div>
                                        <a href="<?php echo $learnMorePage.$product[productId] ?>" class="btn btn--white">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if($sessionsBtnTitle != null) : ?>
                    <div class="u-center-text u-margin-top-big">
                        <a href="<?php echo $sessionsBtnLocation ?>" class="btn-text"><?php echo $sessionsBtnTitle ?></a>
                    </div>
                <?php endif; ?>

                            
            </section>