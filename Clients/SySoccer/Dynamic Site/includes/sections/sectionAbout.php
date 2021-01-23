<section class="section section-about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h2 class="text-center mb-5"><?php echo $aboutSectionTitle ?></h2>
                <?php 
                    include('includes/components/youtubeVideoComponent.php');
                    $video =  new YouTubeVideo();
                    $video->displayVideo("https://www.youtube.com/embed/5jyVjdkaAsg");
                ?>
                <div class="text-center mb-4">
                    <img src="<?php echo $aboutSectionProfile ?>"
                        style="border-radius: 100%; max-height: 150px;" alt="" loading="lazy">
                </div>
                <!-- <h2 class="text-center mb-5"><?php echo $aboutSectionTitle ?></h2> -->
                <p class="sub-text text-center mb-5"><?php echo $aboutSectionText ?></p>
            </div>
        </div>
    </div>
</section>