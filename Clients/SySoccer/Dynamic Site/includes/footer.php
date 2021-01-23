<footer class="p-4">
    <div class="container">
        <div class="row mt-3">
            <?php foreach ($footerLinks as $list) : ?>
                <div class="col">
                    <h6 class="footer-list"><?php echo $list[listTitle] ?></h3>
                    <ul class="footer-list">
                        <?php foreach ($list[links] as $link) : ?>
                            <li>
                                <a class="light-link" href="<?php echo $link[location] ?>"><?php echo $link[title] ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endforeach; ?>
            <div>
                <img src="https://www.underarmour.com/on/demandware.static/Sites-US-Site/-/default/dw3939754e/images/logo.svg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="site-info text-center mt-5 mb-4">
                    powerd by <p style="display: inline-block;"><a href="http://www.trwebdev.com"
                    target="_blank" class="light-link" rel="nofollow">NetCuratio.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</main>
    <!-- Modal -->
    <div class="modal fade" id="readMoreModal" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="readMoreModalLabel">Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

    <!-- Live chat button -->
    <!-- <div class="live-chat text-center" title="Live chat feature - tidio.com">
        <i class=" far fa-comments fa-2x text-white" style="margin-top: 12px;"></i>
    </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <?php if($landingPage == true) : ?>
        <!-- for the navbar -->
        <script src="js/scroll.js"></script>
    <?php endif; ?>
</body>

</html>