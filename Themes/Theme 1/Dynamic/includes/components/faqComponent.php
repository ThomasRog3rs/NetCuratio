<div class="accordion" id="accordionExample">
            <?php foreach ($faqs as $faq) : ?>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-acord btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapse<?php echo $faq[id] ?>" aria-expanded="<?php echo $faq[activeOnLoad] ?>" aria-controls="collapse<?php echo $faq[id] ?>">
                                <?php echo $faq[question] ?>
                            </button>
                        </h2>
                    </div>

                    <div id="collapse<?php echo $faq[id] ?>" class="collapse <?php echo $faq[show] ?>" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <?php echo $faq[answer] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>