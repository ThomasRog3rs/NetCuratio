<section class="section section-testimonials" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center mb-5"><?php echo $reviewSectionTitle ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div class="col-lg-4 mb-4">
                            <div class="card testimonial-card border">
                                <p><span class="fa fa-quote-left"></span><?php echo $testimonial[review] ?><span
                                        class="fa fa-quote-right"></span></p>
                                <p class="text-muted">&ndash; <?php echo $testimonial[name] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>