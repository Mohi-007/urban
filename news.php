<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<main>
    <!-- ✅ HEADER with background cover image -->
    <header class="site-header site-news-header" style="background: url('./includes/images/header/rod-long-I79Pgmhmy5M-unsplash.jpg') no-repeat center center/cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto text-center">
                    <h1 class="text-white">Latest News</h1>
                    <strong class="text-white">Updates & Stories from Urban's Spice Bistro</strong>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </header>
<section class="news section-padding bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">

                <!-- ✅ Bootstrap Carousel -->
                <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- News Item 1 -->
                        <div class="carousel-item active">
                            <div class="news-thumb text-center">
                                <img src="./includes/images/cheerful-traditional-indian-woman-white-background-studio-shot.jpg"
                                     class="img-fluid rounded mb-3" alt="Chef Riya">
                                <div class="news-text-info">
                                    <h5 class="news-title">Meet Chef Riya: The Heart of Urban's Spice Bistro</h5>
                                    <p class="news-date">July 17, 2025</p>
                                </div>
                                <p>Our star chef Riya Kumar brings fusion food to a whole new level. Read her journey and get a sneak peek into our signature dishes.</p>
                                <a href="news-detail.php" class="custom-btn btn btn-danger mt-3">Read More</a>
                            </div>
                        </div>

                        <!-- News Item 2 -->
                        <div class="carousel-item">
                            <div class="news-thumb text-center">
                                <img src="./includes/images/lunch/restaurant-interior.jpg"
                                     class="img-fluid rounded mb-3" alt="Restaurant Interior">
                                <div class="news-text-info">
                                    <h5 class="news-title">We’ve Redesigned Our Dining Space!</h5>
                                    <p class="news-date">July 1, 2025</p>
                                </div>
                                <p>Come experience our new ambiance! With rustic-chic design and cozy lighting, perfect for family dinners and romantic evenings.</p>
                                <a href="news-detail.php" class="custom-btn btn btn-danger mt-3">Read More</a>
                            </div>
                        </div>

                        <!-- News Item 3 -->
                        <div class="carousel-item">
                            <div class="news-thumb text-center">
                               <img src="./includes/images/Menu.png" class="img-fluid rounded mb-3 w-50" alt="Summer Menu">

                                <div class="news-text-info">
                                    <h5 class="news-title">New Summer Menu Released</h5>
                                    <p class="news-date">June 20, 2025</p>
                                </div>
                                <p>Beat the heat with refreshing summer specials — mango salads, cucumber soups & more, made with fresh, local ingredients.</p>
                                <a href="news-detail.php" class="custom-btn btn btn-danger mt-3">Read More</a>
                            </div>
                        </div>

                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>


                <!-- Sidebar -->
              <div class="col-12">
    <div class="news-sidebar d-flex justify-content-between align-items-center flex-wrap bg-light p-4 rounded shadow-sm">

        <!-- Categories -->
        <div class="d-flex align-items-center flex-wrap gap-2">
            <h5 class="me-3 mb-0">Categories:</h5>
            <a href="#" class="badge bg-dark text-white px-3 py-2">Events & Offers</a>
            <a href="#" class="badge bg-dark text-white px-3 py-2">Chef's Stories</a>
            <a href="#" class="badge bg-dark text-white px-3 py-2">Menu Launches</a>
            <a href="#" class="badge bg-dark text-white px-3 py-2">Restaurant Life</a>
        </div>

        <!-- Social Media -->
        <div class="d-flex align-items-center gap-3 mt-3 mt-md-0">
            <h5 class="me-2 mb-0">Follow Us:</h5>
            <a href="#" class="text-dark fs-5"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-dark fs-5"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-dark fs-5"><i class="bi bi-twitter"></i></a>
        </div>

    </div>
</div>


            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
