<section class="section section-about" id="about">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="text-center mb-4">
                    <i class="far <?php echo $sectionOneIcon ?> fa-5x"></i>
                </div>
                <h2 class="text-center mb-5"><?php echo $sectionOneTitle ?></h2>
                <p class="text-center mb-5"><?php echo $sectionOneText ?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($infoColumns as $item) : ?>
                <div class="col">
                    <div class="text-center mb-4">
                        <i class="far <?php echo $item[icon] ?> fa-2x"></i>
                    </div>
                    <h4 class="text-center"><?php echo $item[heading] ?></h4>
                    <p class="sub-text text-center mb-5" style="max-width: 600px; margin: 0 auto;"><?php echo $item[body] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>