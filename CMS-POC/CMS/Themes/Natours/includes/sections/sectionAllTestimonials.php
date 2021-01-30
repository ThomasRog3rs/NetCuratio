<section class="section-stories" style="background-color: #eee;">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        <?php echo $reviewSectionTitle ?>
                    </h2>
                    <p class="paragraph"><?php echo $reviewSectionText ?></p>
                </div>

                <div class="flex-row">
                    <?php foreach($testimonials as $testimonial) : ?>
                        <div class="feature-box u-margin-bottom-big">
                                <i class="feature-box__icon far <?php echo $featureBox[icon] ?> fa-5x"></i>
                                <h3 class="heading-tertiary u-margin-bottom-small"><?php echo $testimonial[name] ?></h3>
                                <p class="feature-box__text">
                                    <span class="fa fa-quote-left"></span>
                                    <?php echo $testimonial[review] ?>
                                    <span class="fa fa-quote-right"></span>
                                </p>
                            </div>

                    <?php endforeach; ?>
                </div>
            </section>