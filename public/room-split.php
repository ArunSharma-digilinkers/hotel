<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

    <div class="banner-wrap">
        <img src="img/room-banner.jpg" class="img-fluid">
    </div>

        
        <section class="hotel-wrap section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <img src="img/ab3-info-img.jpg" class="img-fluid br20">

                        <div class="room-decription mt-4">
                            <h3>Room Services</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia non, doloribus inventore vel nisi eum nostrum! Nulla omnis inventore eum dolore officia nostrum, nemo in, ullam reiciendis voluptatem beatae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum officia architecto incidunt sint nesciunt dignissimos! Tempore blanditiis excepturi nemo. Nemo!</p>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit amet reiciendis possimus, veritatis distinctio ipsa dolores! Beatae veniam, eligendi earum inventore perferendis cumque obcaecati, odit consequatur rerum praesentium tempora nam!</p>
                        </div>

                        <div class="room-amenities mt-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="amenity-item">
                                       <span class="check-icon">✔</span> Double Bed
                                    </div>
                                    <div class="amenity-item">
                                      <span class="check-icon">✔</span> 80 Sq mt
                                    </div>
                                    <div class="amenity-item">
                                       <span class="cross-icon">✘</span> Beach View
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="amenity-item">
                                       <span class="check-icon">✔</span> Double Bed
                                    </div>
                                    <div class="amenity-item">
                                      <span class="check-icon">✔</span> 80 Sq mt
                                    </div>
                                    <div class="amenity-item">
                                       <span class="cross-icon">✘</span> Beach View
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="amenity-item">
                                       <span class="check-icon">✔</span> Double Bed
                                    </div>
                                    <div class="amenity-item">
                                      <span class="check-icon">✔</span> 80 Sq mt
                                    </div>
                                    <div class="amenity-item">
                                       <span class="cross-icon">✘</span> Beach View
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="similar-rooms mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="room2-image">
                                        <img src="img/ab3-info-img.jpg"  class="img-fluid br20" alt="Double Room">
                                        <div class="price-tag">€99 NIGHT</div>
                                    </div>

                                    <div class="room-info">
                                        <h5>Double Room</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="room2-image">
                                        <img src="img/ab3-info-img.jpg" class="img-fluid br20"  alt="Double Room">
                                        <div class="price-tag">€99 NIGHT</div>
                                    </div>

                                    <div class="room-info">
                                        <h5>Double Room</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <!-- Booking Form Section -->
                        <div class="booking-form">
                            <h3>Book Online</h3>
                            <form>
                                <input type="text" placeholder="Enter Your Name" required>
                            
                                <input type="tel" placeholder="Enter Your Phone Number" required>
                                <select>
                                    <option value="single-room">Single Room</option>
                                    <option value="double-room">Double Room</option>
                                    <option value="suite-room">Suite Room</option>
                                </select>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input type="number" placeholder="Adults" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input type="number" placeholder="Children" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input type="date" placeholder="Arrival Date" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input type="date" placeholder="Departure Date" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn-book">BOOK A ROOM NOW</button>
                                <a href="#" class="advanced-booking">Advanced Booking Form</a>
                            </form>
                        </div>
                        <div class="room-offer-wrap">
                            <h3>Exclusive Offer – Book Your Stay at Unbeatable Rates!</h3>
                            <p>
                                Take advantage of our limited-time offer and enjoy luxurious accommodations at a price you won’t find anywhere else. Experience top-tier service and comfort with special discounts just for you.
                            </p>
                            <!-- <div class="room-cta">
                                <a  href=""></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>





     <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>