<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

		<div class="main-cover">

			<div class="contact2-page-banner">
				<img src="img/cont2-banner.jpg" class="img-fluid">  
			</div>


            <div class="cont-info section-entry">
				<div class="container">
					<div class="row">
                        <div class="col-lg-12 col-sm-12 col-sm-12 mb-4">
							<div class="section-title">
									<h3>Let's Stay in Touch — We’d Love to Hear From You!</h3>
							</div>
							<div class="">
								<p>
									Whether you're looking for a reservation, need more details about our services, or just want to know about the best places to visit during your stay, we're here for you. Whether you prefer a quick chat, a phone call, or a visit to our hotel, we're always available to assist.
                                </p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm12">
							<div class="contact-info-section">

								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 mrb30">
										<div class="contact-section__widget">
											<h5 class="mb-3">Talk to us:</h5>
											<p><i class="fa-solid fa-phone-volume"></i><a href=""><span> +91-123456789</span></a></p>
											<p><i class="fa-solid fa-phone-volume"></i><a href=""><span>+91-987654321 </span></a></p>
										</div> 
									</div>   

									<div class="col-lg-4 col-md-4 col-sm-12 mrb30">
										<div class="contact-section__widget">
											<h5 class="mb-3">Address:</h5>
											<p>
												2nd floor, Metro Station Gate, RZ-1/A, Steet No. 3, near Dabri Mor Flyover, Block E, Sitapuri Part 1, Sitapuri, New Delhi, Delhi, 110059
											</p>
										</div>
									</div> 

									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="contact-section__widget">
											<h5 class="mb-3">Mail Us :</h5>

											<p><i class="fa-solid fa-envelope"></i><a href=""><span> infohotel@gmail.com</span></a></p>

											<p><i class="fa-solid fa-envelope"></i><a href=""><span>hotelcontact@gmail.com</span></a></p>
										</div>
									</div> 

								</div> 

							</div> 
						</div> 
					</div>
				</div>
			</div>

			<section class="form-contact-wrapper section-entry">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-sm-12 mb-4 text-center">
							<div class="section-title">
								<h4>Have Questions? We’re Just a Message Away</h4>
							</div>
							<div class="mrb30">
								<p>
									Have a question, feedback, or special request? Whether you’re looking to book a room, plan a stay, or inquire about our services, we’re here to assist you. Drop us a message and we’ll get back to you as soon as possible.
                                </p>
							</div>
						</div>

						<div class="col-lg-10 col-md-10 offset-md-1 mb-4">
							<div class="contact-form-wrap">

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


					</div>

				</div>
			</section>

			
			<section class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5347153394546!2d77.08292777429274!3d28.61373208493633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e4b3b5c3a1%3A0x7dac887432b854cf!2sDigilinkers%20-%20Best%20Digital%20Marketing%20Agency%20in%20Delhi%20%7C%20Website%20Development!5e0!3m2!1sen!2sin!4v1765339309616!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>
            

		</div>

	<div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>