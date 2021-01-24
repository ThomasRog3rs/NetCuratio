<section class="section-features">
    <div class="row">
        <?php foreach($infoColumns as $featureBox) : ?>
            <div class="col-1-of-4">
                <div class="feature-box">
                    <i class="feature-box__icon fas <?php echo $featureBox[icon] ?> fa-5x"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small"><?php echo $featureBox[title] ?></h3>
                    <p class="feature-box__text">
                        <?php echo $featureBox[body] ?>
                    </p>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</section>