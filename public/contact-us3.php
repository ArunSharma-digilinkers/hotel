<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

        <div class="contact2-page-banner">
            <img src="img/cont3-banner.jpg" class="img-fluid">  
        </div>

        <section class="section contact-wrapper page-section">
			<div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10  offset-md-1 col-sm-12 text-center mb-4">
                        <div class="section-title">
                                <h3>We’d love to hear from you!</h3>
                        </div>
                        <div class="mrb30">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iure saepe amet ratione cumque fuga molestias odio asperiores qui architecto corporis fugit adipisci aperiam velit voluptatem ducimus fugiat aliquam quasi quae voluptate, error dolorum beatae non numquam. Incidunt</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                           <div class="contact3-form-wrap">
                            <h5 class="mb-4">Fill out the form below and we’ll get back to you as soon as possible</h5>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<form class="contact-form" action="mail/mail.php" method="POST">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputName">First Name</label>
												<input type="text" class="form-control contact-form__input" id="inputName" name="name" placeholder="Enter your first name">
											</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMail">Last Name</label>
												<input type="email" class="form-control contact-form__input" id="inputMail" name="email" placeholder="Enter your last name">
											</div>
											</div>
										</div>
										<div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputPhone">Mobile Number</label>
												<input type="text" class="form-control contact-form__input" id="inputPhone" name="phone" placeholder="Enter your mobile">
											</div>
											</div>
											 <div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputPhone">Email Id</label>
												<input type="text" class="form-control contact-form__input" id="inputPhone" name="phone" placeholder="Enter your email">
											</div>
											</div>

										</div>
										
											
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMsg">Your Message</label>
												<textarea class="form-control contact-form__textarea" id="inputMsg" name="message" placeholder="Write your message" rows="5"></textarea>
											</div>
											<div class="contact-form__button">
												<button type="submit" class="btn c-btn" name="contact_submit">Submit</button>
											</div>
										</form>
									</div> 
								</div>

							</div>
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-12 cont2-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5347153394546!2d77.08292777429274!3d28.61373208493633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e4b3b5c3a1%3A0x7dac887432b854cf!2sDigilinkers%20-%20Best%20Digital%20Marketing%20Agency%20in%20Delhi%20%7C%20Website%20Development!5e0!3m2!1sen!2sin!4v1765339309616!5m2!1sen!2sin" width="100%" height="100%" border-radius="20px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
			</div>
		</section>


        <div class="contact3-info-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="cont3-box mb-3">
                            <div class="cont3-icon-box">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="cont3-txt-box">
                                <p>+91-123456789</p>
                            </div>
                        </div>
                        <div class="cont3-box mb-3">
                            <div class="cont3-icon-box">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="cont3-txt-box">
                                <p>infocafe@gmail.com</p>
                            </div>
                        </div>
                        <div class="cont3-box mb-3">
                            <div class="cont3-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="cont3-txt-box">
                                <p>2nd floor, Metro Station Gate, RZ-1/A, Steet No. 3, near Dabri Mor Flyover, Block E, Sitapuri Part 1, Sitapuri, New Delhi, Delhi, 110059</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>




    <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>