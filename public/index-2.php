<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">


<section class="hero">
        <div class="hero-content">
            <h1>Simplify Hotel Management. Elevate Every Guest Experience</h1>
            <p>Smart tools and expert support to streamline operations, boost bookings, and delight your guests — all in one platform.</p>
            <form class="booking-form">
                <input type="date" id="check-in" placeholder="Check-in">
                <input type="date" id="check-out" placeholder="Check-out">
                <input type="number" id="guests" placeholder="Guests">
                <button type="submit">Check Availability</button>
            </form>
        </div>
    </section>


        <div class="home2-info section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 mb-4 mb-md-0">
                        <div class="hm2-info-img-wrap">
                           <img src="img/hm-2-ifo-img.jpg" class="img-fluid br15" alt="Coffee Brewing Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <h5>Elevating Your Stay with Thoughtfully Crafted Experiences</h5>
                        <h3>Creating Comfort, One Guest at a Time</h3>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, a consectetur molestias cupiditate explicabo laborum blanditiis mollitia cumque odio. Impedit recusandae vel error sunt atque reiciendis repellendus voluptatibus odio eius laborum dignissimos enim vitae magnam quisquam assumenda soluta blanditiis voluptatem at quia hic beatae ad optio, esse id! Reprehenderit, debitis?
                        </p>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <div class="info-box">
                                    <h4><span>10,000+ </span>Happy Guests</h4>
                                    <p>
                                        We’re honored to welcome thousands of returning guests who choose us for comfort, convenience, and exceptional service.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                <div class="info-box">
                                    <h4><span>24/7 </span>Guest Support</h4>
                                    <p>
                                       From check-in to check-out, our dedicated team is here around the clock to ensure your experience is seamless, relaxing, and unforgettable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="home2-booking section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Smarter Management. Happier Guests. Stronger Profits.</h2>
                    <p>Managing a hotel today means more than just rooms and reservations — it’s about creating seamless guest experiences while maximizing operational efficiency. Our all-in-one hotel management solutions are built to help you streamline front desk operations, boost occupancy rates, and deliver 5-star service every time.</p>

                    <div class="hm-btn mt-4">
						<a href="">Book Now</a>
					</div>
               </div>
            </div>
        </div>
    </section>

    <!-- Our Exclusive Rooms -->
    <section class="home2-rooms section-entry">
        <div class="container">
            <div class="row">
                <h2>Our Exclusive Rooms</h2>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="home2-room-card">
                        <img src="img/luxury-bg-img.jpg" alt="Room 1">
                        <h3>Luxury Suite</h3>
                        <p>Spacious with stunning views</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="home2-room-card">
                        <img src="img/luxury-bg-img.jpg" alt="Room 2">
                        <h3>Deluxe Room</h3>
                        <p>Elegant and cozy</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="home2-room-card">
                        <img src="img/luxury-bg-img.jpg" alt="Room 3">
                        <h3>Standard Room</h3>
                        <p>Comfortable and affordable</p>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities & Services -->
    <section class="home2-amenities section-entry">
        <h2>Amenities & Services</h2>
        <div class="home2-amenities-list">
            <div class="home2-amenity">
                <img src="img/luxury-bg-img.jpg" alt="Spa">
                <p>Spa & Wellness</p>
            </div>
            <div class="home2-amenity">
                <img src="img/luxury-bg-img.jpg" alt="Dining">
                <p>Fine Dining</p>
            </div>
            <div class="home2-amenity">
                <img src="img/luxury-bg-img.jpg" alt="Pool">
                <p>Swimming Pool</p>
            </div>
            <div class="home2-amenity">
                <img src="img/luxury-bg-img.jpg" alt="Event Space">
                <p>Event Spaces</p>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials -->
    <section class="home2-testimonials section-entry">
        <h2>What Our Guests Say</h2>
        <div class="home2-testimonial-slider">
            <div class="home2-testimonial">
                <p>"The best experience I’ve ever had! The staff was incredible and the view was breathtaking!"</p>
                <p>- John Doe</p>
            </div>
            <div class="home2-testimonial">
                <p>"A luxurious escape that felt like home. I will definitely return!"</p>
                <p>- Jane Smith</p>
            </div>
            <div class="home2-testimonial">
                <p>"Outstanding service and facilities. Highly recommend to anyone looking for a 5-star stay!"</p>
                <p>- Emily Green</p>
            </div>
        </div>
    </section>




    	</div> 
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>