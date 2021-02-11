<?php
    $count = 1;
    foreach($navItems as $item){
        echo "<li class=\"navigation__item\"><a style='min-width: 240px;' href=\"$item[location]\" class=\"navigation__link\">$item[title]</a></li>";
        $count = $count + 1;
    }
?>