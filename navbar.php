<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top">
    <div class="container">

        <!-- Logo & Brand -->
        <a class="navbar-brand fw-bold text-danger" href="index.php">
            <i class="bi bi-egg-fried me-2"></i> Urban's Spice Bistro
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links and buttons -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Centered Navigation -->
            <ul class="navbar-nav mx-auto">
                <?php
                $page = basename($_SERVER['PHP_SELF']);
                function active($target) {
                    global $page;
                    return $page == $target ? 'active text-danger fw-semibold' : '';
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link <?= active('index.php') ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= active('about.php') ?>" href="about.php">Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= active('menu.php') ?>" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= active('news.php') ?>" href="news.php">Our Updates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= active('contact.php') ?>" href="contact.php">Contact</a>
                </li>
            </ul>

            <!-- Right Side: Auth & Reservation -->
            <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2 mt-3 mt-lg-0">

                <!-- Reservation Button -->
                <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#BookingModal">
                    <i class="bi bi-calendar-check me-1"></i> Reserve
                </button>
   <!-- Authentication Buttons -->
                <?php if (isset($_SESSION['username'])) : ?>
                    <span class="nav-item mt-2 mt-lg-0 ms-lg-3 text-dark fw-semibold">
                        👋 Welcome, <?= htmlspecialchars($_SESSION['username']) ?>
                    </span>
                    <a class="btn btn-outline-danger ms-lg-2" href="/auth/logout.php">Logout</a>
                <?php else : ?>
                    <a class="btn btn-outline-primary ms-lg-2" href="/auth/login.php">Login</a>
                    <a class="btn btn-primary ms-lg-2" href="/auth/register.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
