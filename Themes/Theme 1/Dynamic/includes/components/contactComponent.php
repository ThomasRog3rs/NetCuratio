<?php include('helpers/emails/contactForm.php') ?>
<div class="card contact-card mt-5 p-5" id="contact-form">
    <div class="mr-4">
        <h1 class="contact-heading">Contact</h1>
        <i class="far fa-comments fa-3x sub-text-light mb-3"></i>
        <h2 class="contact-heading">Leave Us A Message</h2>
        <p>
            For more info or inquiry about our services, and pricing please feel free to get in
            touch with us or <a href="faq.php">view our FAQ page</a>
        </p>
    </div>
    <div class="contact-form">
        <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']."#contact-form"; ?>">
            <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <input placeholder="Your Email" type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <textarea placeholder="Your Message" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg mt-1">Submit <i class="fas fa-arrow-right"></i></button>
            <!-- <button type="submit" class="btn btn-primary btn-lg mt-1">Send message <i class="fas fa-arrow-right"></i></button> -->
        </form>
    </div>
</div>