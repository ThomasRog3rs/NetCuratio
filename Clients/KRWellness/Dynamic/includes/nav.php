<?php
    foreach($navItems as $item){
        echo "<li class=\"navigation__item\"><a href=\"$item[location]\" class=\"navigation__link\">$item[title]</a></li>";
    }
?>