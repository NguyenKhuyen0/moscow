<!-- Contact Section Starts -->
<section>
    <!-- Contact Title Starts -->
    <div class="bl-box valign-wrapper">
        <div class="page-title center-align">
            <h2 class="center-align">
                <span data-hover="REACHING">REACHING </span>
                <span data-hover="ME OUT">ME OUT</span>
            </h2>
        </div>
    </div>
    <!-- Contact Title Ends -->
    <!-- Expanded Contact Starts -->
    <div class="bl-content">
        <!-- Main Heading Starts -->
        <div class="container page-title center-align">
            <h2 class="center-align">
                <span data-hover="REACHING">REACHING </span>
                <span data-hover="ME OUT">ME OUT</span>
            </h2>
        </div>
        <!-- Main Heading Ends -->
        <div class="container">
            <!-- Divider Starts -->
            <div class="divider center-align">
                <span class="outer-line"></span>
                <span class="fa fa-envelope-open" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <div class="row contact section-padding">
                <!-- Contact Infos Starts -->
                <div class="col s12 m5 l5 xl4 leftside">
                    <!-- Contacts Starts -->
                    <h6 class="font-weight-700 uppercase">Phone</h6>
                    <span class="font-weight-400 second-font"><i class="fa fa-phone"></i> +34 62 11 84 01</span>
                    <h6 class="font-weight-700 uppercase">Email</h6>
                    <span class="font-weight-400 second-font"><i class="fa fa-envelope"></i> you@youwebsite.com</span>
                    <h6 class="font-weight-700 uppercase">Skype</h6>
                    <span class="font-weight-400 second-font"><i class="fa fa-skype"></i> linda.smith</span>
                    <h6 class="font-weight-700 uppercase">Address</h6>
                    <span class="font-weight-400 second-font"><i class="fa fa-home"></i>  Moscow, Russia</span><br>
                    <!-- Contacts Ends -->
                    <!-- Social Media Profiles Starts -->
                    <h6 class="font-weight-700 uppercase">Social Profiles</h6>
                    <div class="social">
                        <ul class="list-inline social social-intro center-align p-none">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social Media Profiles Ends -->
                </div>
                <!-- Contact Infos Ends -->
                <!-- Contact Form Starts -->
                <div class="col s12 m7 l7 xl8 rightside">
                    <h6 class="uppercase m-none font-weight-700">Feel free to drop me a line</h6>
                    <div class="row">
                        <p class="col s12 m12 l12 xl10 second-font">
                            If you have any suggestion, project or even you want to say Hello.. please fill out the form below and I will reply you shortly.
                        </p>
                    </div>
                    <form class="contactform" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                        <?php wp_nonce_field('send_mail','security_code_1610'); ?>
                        <input name="action" value="send_mail" type="hidden">
                        <!-- Name Field Starts -->
                        <div class="input-field second-font">
                            <i class="fa fa-user prefix"></i>
                            <input id="name" name="name" type="text" class="validate" required>
                            <label class="font-weight-400" for="name">Your Name</label>
                        </div>
                        <!-- Name Field Ends -->
                        <!-- Email Field Starts -->
                        <div class="input-field second-font">
                            <i class="fa fa-envelope prefix"></i>
                            <input id="email" type="email" name="email" class="validate" required>
                            <label for="email">Your Email</label>
                        </div>
                        <!-- Email Field Ends -->
                        <!-- Comment Textarea Starts -->
                        <div class="input-field second-font">
                            <i class="fa fa-comments prefix"></i>
                            <textarea id="comment" name="comment" class="materialize-textarea" required></textarea>
                            <label for="comment">Your Comment</label>
                        </div>
                        <!-- Comment Textarea Ends -->
                        <!-- Submit Form Button Starts -->
                        <div class="col s12 m12 l9 xl8 submit-form">
                            <button class="btn font-weight-700" type="submit" name="send">
                                Send Message <i class="fa fa-send"></i>
                            </button>
                        </div>
                        <!-- Submit Form Button Ends -->
                        <div class="col s12 m12 l8 xl8 form-message">
                            <span class="output_message center-align font-weight-700 uppercase"></span>
                        </div>
                    </form>
                </div>
                <!-- Contact Form Ends -->
            </div>
        </div>
    </div>
    <!-- Expanded Contact Ends -->
    <img alt="close" src=<?php echo THEME_PATH."images/close-button.png" ?> class="bl-icon-close" />
</section>
<!-- Contact Section Ends -->