<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">


        <section class="hero">
            <div class="hero-content">
                <h5>Your Perfect Escape Starts Here</h5>
                <h1>Discover comfort, elegance, and world-class hospitality.</h1>
                <!-- <p>
                    Experience a perfect blend of luxury and relaxation in our beautifully designed hotel. From premium rooms to exceptional service, every moment of your stay is crafted to deliver comfort, elegance, and unforgettable memories.
                </p> -->
                <form class="banner-booking-form">
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
                        <div class="info-img-wrap">
                           <!-- <img src="img/hm2-info-img.jpg" class="img-fluid br15" alt="Coffee Brewing Image"> -->
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
                        <p>
                            Managing a hotel today means more than just rooms and reservations — it’s about creating seamless guest experiences while maximizing operational efficiency. Our all-in-one hotel management solutions are built to help you streamline front desk operations, boost occupancy rates, and deliver 5-star service every time.
                        </p>

                        <div class="hm-btn mt-4">
                            <a href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- Amenities & Services -->
    <section class="home2-amenities section-entry">
        <div class="container">
            <div class="row">
                <div class="header-box mb-4">
                     <h3>Amenities & Services</h3>
                     <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. At accusantium voluptas est consectetur a maxime ducimus quod reprehenderit ut dolor! Perferendis tenetur quisquam accusantium repudiandae?
                     </p>
                </div>

                <div class="hm2-amenities owl-carousel owl-theme">
                    <div class="item test-wrap">
                        <div class="home-amenities-wrap">
                            <div class="img-box">
                                <img src="img/deluxe-rooms.jpg" alt="Spa">
                            </div>
                            <div class="txt-box">
                                <h4>
                                    Deluxe Rooms
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item test-wrap">
                        <div class="home-amenities-wrap">
                            <div class="img-box">
                                <img src="img/fine-dining-img.jpg" alt="Spa">
                            </div>
                            <div class="txt-box">
                                <h4>
                                    Fine Dinning
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item test-wrap">
                        <div class="home-amenities-wrap">
                            <div class="img-box">
                                <img src="img/pool-img.jpg" alt="Spa">
                            </div>
                            <div class="txt-box">
                                <h4>
                                    Swimming Pool
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item test-wrap">
                        <div class="home-amenities-wrap">
                            <div class="img-box">
                                <img src="img/event-space-img.jpg" alt="Spa">
                            </div>
                            <div class="txt-box">
                                <h4>
                                    Event Spaces
                                </h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    <div class="hotel-img-wrap section-entry">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="home2-rooms-header">
                    <h3>Find the Perfect Room for Your Journey</h3>
                    <p>
                        Whether you're traveling for business, leisure, or a family vacation, our hotel offers a variety of thoughtfully designed rooms to suit your needs. From elegant suites with stunning views to cozy standard rooms equipped with modern comforts, each accommodation is tailored to deliver a restful and memorable experience. Explore our room categories below to find the ideal space for your stay — comfort, style, and convenience included.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Exclusive Rooms -->
    <section class="home2-rooms mb-4"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="hm2-Rooms owl-carousel owl-theme mt120">
                        <div class="item test-wrap">
                            <div class="home2-room-card">
                                <img src="img/hm2-luxury-suite.jpg" alt="Room 1">
                                <h3>Luxury Suite</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni officia voluptatem iste, ut recusandae perferendis aperiam quis temporibus, veniam necessitatibus ex ad suscipit. Nulla?
                                </p>
                                <div class="hm-btn-1">
                                   <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item test-wrap">
                            <div class="home2-room-card">
                                <img src="img/hm2-deluxe-room.jpg" alt="Room 2">
                                <h3>Deluxe Room</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni officia voluptatem iste, ut recusandae perferendis aperiam quis temporibus, veniam necessitatibus ex ad suscipit. Nulla?
                                </p>
                                <div class="hm-btn-1">
                                   <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item test-wrap">
                            <div class="home2-room-card">
                                <img src="img/penthouse-img.jpg" alt="Room 2">
                                <h3>Penthouse</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni officia voluptatem iste, ut recusandae perferendis aperiam quis temporibus, veniam necessitatibus ex ad suscipit. Nulla?
                                </p>
                                <div class="hm-btn-1">
                                   <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section section-entry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                    <h5>Our Blog Section</h5>
                    <h3>Insights from the World of Hospitality</h3>
                    <p>
                        Stay updated with the latest in hospitality innovation, guest experience strategies, and operational excellence. From boutique transformations to tech-driven service upgrades, our blog explores how successful hotels are adapting, thriving, and redefining guest satisfaction in a fast-evolving industry.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="main-article">
                        <img src="img/hm-info-img.jpg" alt="Boutique Hotel" />
                        <div class="main-article-content">
                        <small>4 min read &nbsp;|&nbsp; 24 June 2023</small>
                        <h3>The Rise of Boutique Hotels: Unveiling Unique and Personalized Hospitality</h3>
                        <p>
                            Explore the growing phenomenon of boutique hotels offering unique and personalized hospitality experiences...
                        </p>
                        <a href="#">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="side-articles mrt30">
                        <div class="side-article">
                            <img src="img/deluxe-rooms.jpg" alt="Article 1" />
                            <div class="side-article-content">
                            <h5>Hotels Go Beyond Accommodation to Create Memorable Stays</h5>
                            <p>
                                Discover how hotels not only provide a place to stay, but also create memorable experiences for...
                            </p>
                            <a href="#">Read More →</a>
                            </div>
                        </div>
                        <div class="side-article">
                            <img src="img/deluxe-rooms.jpg" alt="Article 2" />
                            <div class="side-article-content">
                            <h5>Luxury Reimagined: Iconic Hotels Undergo Stunning Renovations</h5>
                            <p>
                                Be enchanted by the extraordinary transformations experienced by iconic hotels through...
                            </p>
                            <a href="#">Read More →</a>
                            </div>
                        </div>
                        <div class="side-article">
                            <img src="img/deluxe-rooms.jpg" alt="Article 3" />
                            <div class="side-article-content">
                            <h5>Preserving History Through Unique Accommodations</h5>
                            <p>
                                Reveals how heritage hotels preserve history through unique accommodations, providing a cultural...
                            </p>
                            <a href="#">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    </div> 
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>