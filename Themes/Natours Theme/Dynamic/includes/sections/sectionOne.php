<section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        <?php echo $sectionOneTitle ?>
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small"><?php echo $sectionOneSubHeading1 ?></h3>
                        <p class="paragraph">
                            <?php echo $sectionOneParagraph1 ?>
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small"><?php echo $sectionOneSubHeading2 ?></h3>
                        <p class="paragraph">
                            <?php echo $sectionOneParagraph2 ?>
                        </p>

                        <?php if($sectionOneBtnTitle != null) : ?>
                            <a href="<?php echo $sectionOneBtnLocation ?>" class="btn-text"><?php echo $sectionOneBtnTitle ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-1-of-2">
                        <?php include('includes/components/imageCompositionComponent.php') ?>
                    </div>
                </div>
            </section>