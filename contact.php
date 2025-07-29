<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<main>

    <header class="site-header site-contact-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 mx-auto">
                    <h1 class="text-white">Urban Spice Bistro</h1>
                    <strong class="text-white">We'd love to hear from you</strong>
                </div>

            </div>
        </div>

        <div class="overlay"></div>
    </header>

    <section class="contact section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <h2 class="mb-4">Our Location</h2>

                    <p>
                        <strong>Royal Flavors</strong><br>
                        567 Culinary Avenue,<br>
                        New Delhi, India – 110001<br><br>

                        Phone: <a href="tel:+911234567890">+91 9345984304</a><br>
                        Email: <a href="mailto:info@royalflavors.com">info@Urban spice.com</a>
                    </p>

                    <h5 class="mt-5">Opening Hours</h5>
                    <p>Mon – Fri: 10:00 AM – 10:00 PM<br>
                       Sat – Sun: 11:00 AM – 11:30 PM</p>

                    <iframe class="google-map" src="https://www.google.com/maps/embed?..." width="100%" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Send Us a Message</h2>

                    <form action="#" method="post" class="custom-form contact-form" role="form">
                        <div class="row">

                            <div class="col-lg-6 col-12">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" rows="5" class="form-control" id="message" required></textarea>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Send</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>
