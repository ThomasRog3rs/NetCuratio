<div class="row testimonials">
    <div class="col-sm-12">
        <div class="carousel slide" id="inam" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <?php for($i = 0; $i < 3; $i++) : ?>  
                                <div class="col-lg mb-3">
                                    <div class="card testimonial-card">
                                        <p><span class="fa fa-quote-left"></span> <?php echo $testimonials[$i][review]?> <span class="fa fa-quote-right"></span></p>
                                        <p class="text-muted">&ndash; <?php echo $testimonials[$i][name]?></p>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 mt-5 text-center more-testimonial">
        <a href="<?php echo $readAllLink ?>">Read all &rarr;</a>
    </div>
</div>