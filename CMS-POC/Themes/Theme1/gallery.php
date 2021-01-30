<?php
    include('Themes/Theme1/includes/navbar.php');
?>

<!-- Custom Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center mb-5">Gallery</h2>
            </div>
        </div>
        <div class="row">
            <ul class="nav nav-tabs mb-4" style="margin: 0px auto;">
                <?php if($elfSightInstaFeedClass != null) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#images">Images</a>
                    </li>
                <?php endif;?>
                <?php if($YouYubePlaylist != null) : ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#videos">Videos</a>
                    </li>
                <?php endif;?>
            </ul>
            <div id="myTabContent" class="tab-content border-left border-right border-bottom p-4" style="width:1400px;">
                <?php if($elfSightInstaFeedClass != null) : ?>
                    <div class="tab-pane fade active show" id="images">
                        <div class="<?php echo $elfSightInstaFeedClass ?>"></div>
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    </div>
                <?php endif; ?>
                <?php if($YouYubePlaylist != null) : ?>
                    <div class="tab-pane fade" id="videos">
                        <?php 
                            include('Themes/Theme1/includes/components/youtubeVideoComponent.php');
                            displayYouTubeVideo($YouYubePlaylist)
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
    include('includes/footer.php');
?>