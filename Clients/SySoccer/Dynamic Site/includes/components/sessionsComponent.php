<div class="sessions bg-white-tint">
    <?php foreach ($products as $item) : ?>
        <div class="session">
            <div>
                <h3 class="session-title"><?php echo $item[productName] ?></h1>
                <a href="<?php echo $learnMorePage.$item[productId] ?>">learn more</a>
            </div>
            <p class="session-price">&pound;<?php echo $item[productPrice] ?>/hr</p>
            <a href="<?php echo $learnMorePage.$item[productId] ?>" class="btn btn-primary btn-book">Book Now</a>
        </div>
    <?php endforeach; ?>
</div>