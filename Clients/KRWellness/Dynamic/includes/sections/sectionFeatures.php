<section class="section-features">
    <div class="row">
        <div class="flex-row">
                    <?php foreach($infoColumns as $featureBox) : ?>
                        <div class="feature-box u-margin-bottom-big">
                    <i class="feature-box__icon fas <?php echo $featureBox[icon] ?> fa-5x"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small"><?php echo $featureBox[heading] ?></h3>
                    <p class="feature-box__text">
                        <?php echo $featureBox[body] ?>
                    </p>
                </div>

                    <?php endforeach; ?>
    </div>
</section>