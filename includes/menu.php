<header class="top-header">
    <div class="container d-flex">
        <div class="header-contact-info">
            <span><i class="bi bi-geo-alt"></i> 2nd Floor, City House, Arua</span>
            <span><i class="bi bi-telephone"></i> +256 709 300 099</span>
            <span><i class="bi bi-envelope"></i> info@jubileemicrofinance.com</span>
        </div>
        <div class="social-links d-none d-md-flex">
            <a href="#" class="text-white ms-3"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white ms-3"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-white ms-3"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</header>

<nav class="navbar-custom">
    <div class="container">
        <a href="./" class="logo">
            <img src="assets/images/logo-jubilee.png" alt="Jubilee Microfinance">
        </a>
        
        <button class="mobile-nav-toggle" id="mobileToggle">
            <i class="bi bi-list"></i>
        </button>

        <div class="nav-links" id="navLinks">
            <a href="./" class="nav-link-custom active">Home</a>
            
            <div class="nav-item-dropdown">
                <a href="#" class="nav-link-custom">About Us <i class="bi bi-chevron-down ms-1"></i></a>
                <div class="dropdown-menu-custom">
                    <a href="about-us.php" class="dropdown-item-custom">Who We Are</a>
                    <a href="why-choose-us.php" class="dropdown-item-custom">Why Choose Us</a>
                    <a href="partners.php" class="dropdown-item-custom">Partners & Clients</a>
                </div>
            </div>

            <div class="nav-item-dropdown">
                <a href="#" class="nav-link-custom">Our Services <i class="bi bi-chevron-down ms-1"></i></a>
                <div class="dropdown-menu-custom">
                    <a href="personal-loans.php" class="dropdown-item-custom">Personal Loans</a>
                    <a href="business-loans.php" class="dropdown-item-custom">Business Loans</a>
                    <a href="agricultural-loans.php" class="dropdown-item-custom">Agricultural Loans</a>
                    <a href="group-loans.php" class="dropdown-item-custom">Group Savings & Loans</a>
                </div>
            </div>
            
            <a href="branches.php" class="nav-link-custom">Branches</a>
            <a href="contact-us.php" class="nav-link-custom">Contact Us</a>
            
            <a href="apply.php" class="btn btn-primary btn-sm ms-lg-3">Apply Now</a>
        </div>
    </div>
</nav>

<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navLinks = document.getElementById('navLinks');
    
    mobileToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        const icon = mobileToggle.querySelector('i');
        if (navLinks.classList.contains('active')) {
            icon.classList.replace('bi-list', 'bi-x');
        } else {
            icon.classList.replace('bi-x', 'bi-list');
        }
    });
</script>

