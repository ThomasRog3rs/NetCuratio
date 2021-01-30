<?php
    function displayYouTubeVideo($url){
        if($url != null){
            echo '<div class="text-center mb-4"><iframe width="560" height="315" src="'.$url.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
        }
    }
?>