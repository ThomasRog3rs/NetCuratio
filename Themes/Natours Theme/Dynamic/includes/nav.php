<?php
    $count = 1;
    foreach($navItems as $item){
        echo "<li class=\"navigation__item\"><a href=\"$item[location]\" class=\"navigation__link\">0$count - $item[title]</a></li>";
        $count = $count + 1;
    }
?>