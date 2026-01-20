<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

	<div class="page-banner-wrap page-banner-fixed">
		<div class="auto-container">
			<h2>Services</h2>
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


    <div class="our-philosophy-wrap section-entry">
       <div class="container">
           <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="img/philosophy-img.jpg" class="img-fluid br20">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="philosophy-box">
                        <h3>Our Philosophy</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit soluta nobis, obcaecati omnis alias, iusto sequi repudiandae ducimus aperiam eaque officiis temporibus odio molestias! Alias necessitatibus quo quaerat voluptatem harum, blanditiis vitae itaque fuga ratione?</p>

                        <div class="philosopy-value-box">
                            <div class="img-box">
                                 <img src="img/guest-support-img.png" class="img-fluid">
                            </div>
                            <div class="txt-box">
                                <h5>24/7 Guest Support</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consequuntur sapiente natus ex cum, nostrum.</p>
                            </div>
                        </div>
                         <div class="philosopy-value-box">
                            <div class="img-box">
                                 <img src="img/staff-img.png" class="img-fluid">
                            </div>
                            <div class="txt-box">
                                <h5>Trained & Friendly staff </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consequuntur sapiente natus ex cum, nostrum.</p>
                            </div>
                        </div>
                         <div class="philosopy-value-box">
                            <div class="img-box">
                                 <img src="img/prime-location.png" class="img-fluid">
                            </div>
                            <div class="txt-box">
                                <h5>Prime Location</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consequuntur sapiente natus ex cum, nostrum.</p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </div>


    <div class="hm3-blog-section section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="blog-header">
                            <h3>Latest News & Articles from the Blog Posts</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo doloribus inventore voluptates facere excepturi architecto animi, et, quos veniam quasi eligendi autem distinctio ut nesciunt quia quaerat blanditiis iste recusandae maxime? Odio rerum iusto, laboriosam tempore ex rem.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="img/hm-info-img.jpg" class="img-fluid" alt="Luxury Hotel" />
                                <div class="blog-date">
                                <span class="date">15</span>
                                <span class="month">March</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                <span>👤 By Admin</span>
                                <span>💬 2 Comments</span>
                                </div>
                                <h4>Check The Top 6 Luxury Hotels In The World</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable...
                                </p>
                                <a href="#" class="read-more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="img/hm-info-img.jpg" class="img-fluid" alt="Luxury Hotel" />
                                <div class="blog-date">
                                <span class="date">15</span>
                                <span class="month">March</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                <span>👤 By Admin</span>
                                <span>💬 2 Comments</span>
                                </div>
                                <h4>Check The Top 6 Luxury Hotels In The World</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable...
                                </p>
                                <a href="#" class="read-more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="img/hm-info-img.jpg" class="img-fluid" alt="Luxury Hotel" />
                                <div class="blog-date">
                                <span class="date">15</span>
                                <span class="month">March</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                <span>👤 By Admin</span>
                                <span>💬 2 Comments</span>
                                </div>
                                <h4>Check The Top 6 Luxury Hotels In The World</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable...
                                </p>
                                <a href="#" class="read-more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>