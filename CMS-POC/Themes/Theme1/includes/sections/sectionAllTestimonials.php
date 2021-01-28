<section class="section section-testimonials" id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb-5">
                        <h2 class=""><?php echo $reviewSectionTitle ?></h2>
                        <p><?php echo $reviewSectionText ?></p>
                    </div>
                </div>
                <div class="flex-row">
                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div class="card testimonial-card border mb-4">
                            <p><span class="fa fa-quote-left"></span><?php echo $testimonial[review] ?><span
                                    class="fa fa-quote-right"></span></p>
                            <p class="text-muted">&ndash; <?php echo $testimonial[name] ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>