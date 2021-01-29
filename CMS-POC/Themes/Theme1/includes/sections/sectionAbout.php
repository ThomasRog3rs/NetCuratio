<section class="section section-about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <?php 
                    include('Themes/Theme1/includes/components/youtubeVideoComponent.php');
                    displayYouTubeVideo($aboutSectionVideo);
                ?>
                <div class="text-center mb-4">
                    <?php if($aboutSectionProfile != null) : ?>
                        <img src="<?php echo $aboutSectionProfile ?>"
                        style="border-radius: 100%; max-height: 150px;" alt="selfie" loading="lazy">
                    <?php endif; ?>
                </div>
                <h2 class="text-center mb-5"><?php echo $aboutSectionTitle ?></h2>
                <p class="sub-text text-center mb-5"><?php echo $aboutSectionText ?></p>
            </div>
        </div>
    </div>
</section>