<section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        <?php echo $sectionOneTitle ?>
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <?php echo $sectionOneText ?>

                        <?php if($sectionOneBtnTitle != null) : ?>
                            <a href="<?php echo $sectionOneBtnLocation ?>" class="btn-text"><?php echo $sectionOneBtnTitle ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-1-of-2">
                        <?php include('includes/components/imageCompositionComponent.php') ?>
                    </div>
                </div>
            </section>