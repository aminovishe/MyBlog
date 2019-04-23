<div class="col-8 divContact show-labels-posts">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
        <p class="m-0 widget-title d-inline-block">Contact the AmiBlog Team</p>
    </div>
    <?php if(isset($error)){ ?>
        <span class="badge badge-danger text-left"><?=$error?></span>
    <?php } ?>
    <div class="div-content-widget row d-flex flex-column justify-content-start align-items-start mt-3 mb-3">
        <p><span class="h3">Hello,</span><br>Please use this form only if you wish to contact AmiBlog.</p>
        <div class="formContact">
            <form action="lib/c_sendEmailContact.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="contact_full_name" placeholder="Full name" required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="contact_email" placeholder="Email" required/>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="contact_subject" placeholder="Subject" required/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="contact_message" placeholder="Your message here" required></textarea>
                </div>
                <button type="submit" class="btn btn-light mb-2">Send</button>
            </form>
        </div>
        <p>Would you like to be a member of our team ? <?php require_once 'includes/modalRegister.php'?></p>
    </div>
</div>

