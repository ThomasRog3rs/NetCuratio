<?php
    foreach($navItems as $item){
        echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"/$item[location]\">$item[title]</a></li>";
    }
?>