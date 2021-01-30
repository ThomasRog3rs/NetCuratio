<section class="section-stories" style="background-color: #eee;">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        <?php echo $reviewSectionTitle ?>
                    </h2>
                    <p class="paragraph"><?php echo $reviewSectionText ?></p>
                </div>

                <div class="row">
                    <?php for($i = 0; $i < 2; $i++) : ?>
                        <div class="story u-margin-bottom-big">
                            <!-- <figure class="story__shape">
                                <img src="https://source.unsplash.com/1920x1080/?profile" alt="Person on a tour" class="story__img">
                                <figcaption class="story__caption">Mary Smith</figcaption>
                            </figure> -->
                            <div class="story__text">
                                <p class="u-margin-bottom-small">
                                    <span class="fa fa-quote-left"></span>
                                    <?php echo $testimonials[$i][review] ?>
                                    <span class="fa fa-quote-right"></span>
                                </p>
                                <h3 class="heading-tertiary u-margin-top-small">-<?php echo $testimonials[$i][name] ?></h3>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="u-center-text">
                    <a href="<?php echo $readAllLink ?>" class="btn-text">Read all stories &rarr;</a>
                </div>
            </section>