<?php foreach($faqs as $faq) : ?>
    <div class="u-margin-bottom-big">
        <h1><?php echo $faq[question] ?></h1>
        <p class="paragraph"><?php echo $faq[answer] ?></p>
    </div>
<?php endforeach; ?>
