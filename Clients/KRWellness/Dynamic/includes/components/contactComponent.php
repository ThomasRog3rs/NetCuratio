<?php include('helpers/emails/contactForm.php') ?>
<div class="book" id="contact-form" style="background-image: linear-gradient(105deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.9) 50%, transparent 50%),url(<?php echo $contactBackgroundImgURL ?>)">
    <div class="book__form">
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']."#contact-form"; ?>">
            <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Contact Us
                </h2>
            </div>

            <?php if($msg != ''): ?>
                <div class="u-margin-bottom-medium">
    		        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                </div>
    	    <?php endif; ?>

            <div class="form__group">
                <input type="text" class="form__input" placeholder="Full name" id="name" name="name">
                <label for="name" class="form__label">Full name</label>
            </div>

            <div class="form__group">
                <input type="email" class="form__input" placeholder="Email address" id="email" name="email">
                <label for="email" class="form__label">Email address</label>
            </div>

            <div class="form__group">
                <textarea class="form__input" id="textarea" rows="3" ria-describedby="messageHelp" placeholder="Enter your message" name="message"></textarea>
            </div>

            <div class="form__group">
                <button class="btn btn--green" type="submit" name="submit">Send &rarr;</button>
            </div>
        </form>
    </div>
</div>