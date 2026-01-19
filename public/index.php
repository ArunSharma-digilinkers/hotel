<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">
	
		<?php include_once(TEMPLATE_FRONT . DS . "carousel.php"); ?>


		<div class="main-cover">

			<div class="hero-bar">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="amenities-bar">
								<div class="amenity">
								<i class="fas fa-suitcase-rolling"></i>
								<span>Elegant Rooms</span>
								</div>
								<div class="amenity">
								<i class="fas fa-utensils"></i>
								<span>Fine Dining</span>
								</div>
								<div class="amenity">
								<i class="fas fa-spa"></i>
								<span>Spa & Wellness</span>
								</div>
								<div class="amenity">
								<i class="fas fa-chalkboard"></i>
								<span>Event Spaces</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		    <div class="hm-hero-section section-entry">
				<div class="container">
					<div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12">
                             <img src="img/hm-hero-img.png" class="img-fluid br20">
						 </div>
						 <div class="col-lg-6 col-md-6 col-sm-12">
							<div class="hero-txt-box">
								<h3>Experience Luxury & Comfort</h3>
								<h5>Discover World-Class Service, Stunning Views & Unmatched Comfort</h5>
								<p>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt dolorem vitae sed nisi eum dolores voluptatum, odit repellendus, tempore quos amet aspernatur quasi eveniet delectus exercitationem rem repudiandae perspiciatis non sint? Ut iusto libero asperiores, praesentium, aliquid illo saepe, atque mollitia qui ducimus laborum itaque vitae assumenda quos omnis! Natus.
								</p>

                            </div>
						 </div>
					</div>
				</div>
			</div>


			<div class="explore-wrapper section-entry">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="head-box text-center">
							    <h3>Explore Our Rooms & Suites</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illum, saepe sapiente distinctio nemo aliquid corrupti nesciunt, eius fuga itaque recusandae odit dolor optio. Neque soluta numquam sequi vel sunt.</p>
                            </div>
						</div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="property-card">
								<div class="image-wrapper">
									<img src="img/luxury-bg-img.jpg" alt="New York Property">
									<div class="info-overlay">
										<div class="property-meta">
											<span class="property-count">Luxury Suite</span>
											
										</div>
										<div class="price-wrap">
											<div class="rating-box">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
											</div>
											<div class="price-box">
												<h2 class="location">New York</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
						<div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="property-card">
								<div class="image-wrapper">
									<img src="img/family-room-img.jpg" alt="New York Property">
									<div class="info-overlay">
										<div class="property-meta">
											<span class="property-count">Family Suite</span>
											
										</div>
										<div class="price-wrap">
											<div class="rating-box">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
											</div>
											<div class="price-box">
												<h2 class="location">New York</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="quick-search">
								<h4>Quick Search</h4>
								<label for="arrival">Arrival</label>
								<input type="date" id="arrival">
								
								<label for="departure">Departure</label>
								<input type="date" id="departure">

								<label for="guests">Guests</label>
								<select id="guests">
									<option>1</option>
									<option>2</option>
									<option>3+</option>
								</select>

								<button onclick="handleSearch()">Search</button>
							</div>
						</div>

					</div>
				</div>
			</div>


			<div class="special-offer section-entry">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="offer-box">
								<h3>Limited Time Offer! Book Now and Save Big!</h3>
								<p>Enjoy an unforgettable experience with our Exclusive Special Offer! For a limited time only, book your stay at [Hotel Name] and save up to <span>30% </span> off our best rates!</p>
							</div>
                        </div>
                    </div>
                </div>
			</div>

			<div class="home3-info-wrapper section-entry">
                <div class="container">
                    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="head-box">
								<h3>Where Comfort Meets Excellence</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur iste tempora, eligendi quidem qui similique nobis, sunt rem laboriosam possimus sapiente maiores. Esse nisi quod iure doloribus, in culpa voluptatem.</p>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12">
							<img src="img/hm-service-img.jpg" class="img-fluid br20">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12 mt35 pl30">
							
							<p>
								At [Your Hotel Name], we believe in creating a memorable stay with every detail thoughtfully designed for your comfort. Whether you're here for business or leisure, our commitment is to provide exceptional service and a peaceful environment where you can relax and recharge. From our elegant rooms to our attentive staff, we strive to make your experience truly remarkable.
							</p>

							<section class="features-section mt35">
								<div class="feature-box mt-4">
									<img src="img/room-service-img.png" class="img-fluid">
									<div>
									<h4>Room Service</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.</p>
									</div>
								</div>
								<div class="feature-box mt-4">
									<img src="img/wifi-img.png" class="img-fluid">
									<div>
									<h4>Fast wifi service</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.
									</p>
									</div>
								</div>
								<div class="feature-box mt-4">
									<img src="img/parking-img.png" class="img-fluid">
									<div>
									<h4>Online Tour Site</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.
									</p>
									</div>
								</div>
								<div class="feature-box mt-4">
									<img src="img/food-img.png" class="img-fluid">
									<div>
									<h4>Customer Reviews</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Zib is amet volutpat.
									</p>
									</div>
								</div>
							</section>

						</div>
					</div>
				</div>
			</div>


			<div class="cta-wrapper section-entry">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="cta-box">
								<h2>Ready For Unforgettable Stay?</h2>
								<p>Relax in world-class rooms, dine at award-winning restaurants, and explore breathtaking views—all curated to offer you the finest hospitality experience. Whether it’s business or leisure, your comfort is our top priority.Whether you're traveling for leisure or business, our hotel offers thoughtfully designed rooms, personalized service, and premium amenities to ensure a stay that’s both relaxing and memorable. Let your journey begin with us.</p>

								<div class="hm-btn mt-4">
									<a href="">Book Now</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		
	
		</div>
	
	</div> 
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>

