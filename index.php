<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<main>

    <section class="hero-section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <small>Urban Spice Bistro</small>

                    <h1 class="text-white mb-5">Flavors That Stir the Soul</h1>

                    <a class="btn custom-btn smoothscroll" href="about.php">Discover More</a>
                </div>

            </div>
        </div>

        <div class="video-wrap">
            <video autoplay loop muted class="custom-video" poster="">
                <source src="./video/6011719_Person_People_3840x2160.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="about-section section-padding" id="about-section">
        <div class="container">
            <div class="row">

               <div class="col-lg-6 col-12">
    <div class="about-image-wrap">
        <img src="./images/header/ChatGPT Image Jul 17, 2025, 07_40_22 PM.png" 
             class="about-image img-fluid" 
             style="width: 100%; max-height: 1000px; object-fit: cover;">
    </div>
</div>

<div class="col-lg-6 col-12">
    <div class="about-text-wrap">
        <h2 class="mb-4" style="color: white;">Welcome to Urban Spice Bistro</h2>

        <p style="color: white;">
            At Urban Spice Bistro, we celebrate bold global flavors and modern fusion cuisine. 
            Our chefs bring passion and creativity to every plate, offering a unique dining experience in the heart of the city.
        </p>

        <p style="color: white;">
            From savory starters to exquisite mains, enjoy a symphony of taste made from 
            locally sourced and sustainable ingredients.
        </p>

        <a href="menu.php" class="btn custom-btn mt-3">View Menu</a>
    </div>
</div>


            </div>
        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>
