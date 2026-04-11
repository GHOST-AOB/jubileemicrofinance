<?php
$title = "Jubilee Microfinance – Empowering Communities with Financial Solutions";
$tagline = "Building Futures, One Loan at a Time";
$description = "Jubilee Microfinance provides accessible financial services, soft loans, and economic empowerment to communities in West Nile, Gulu, Soroti, and Lira. Discover our modern banking solutions designed for growth and stability.";
$keywords = "microfinance Uganda, business loans West Nile, personal loans Gulu, savings accounts Soroti, agricultural financing Lira, financial inclusion, SME loans, mobile banking, microcredit, community banking, financial empowerment Northern Uganda";
$featured_image = 'assets/images/jubilee-hero-banner.jpg';
include "includes/header.php";
include "includes/menu.php";
?>

<main>
    <!-- Hero Section -->
    <section class="hero-custom py-0">
        <div class="hero-slides">
            <div class="hero-slide active" style="background-image: url('assets/images/Agriculture.jpg');"></div>
            <div class="hero-slide" style="background-image: url('assets/images/pexels-kaypics-28112436.jpg');"></div>
            <div class="hero-slide" style="background-image: url('assets/images/pexels-energepic-com-27411-2988232.jpg');"></div>
        </div>
        <div class="hero-overlay-custom"></div>
        <div class="container hero-content-custom" data-aos="fade-up">
            <span class="hero-badge">Trustworthy Financial Partner</span>
            <h1>Empowering Communities <br><span class="text-secondary">Through Accessible Finance</span></h1>
            <p>Jubilee Microfinance is dedicated to providing tailored financial solutions to individuals, small businesses, and agricultural enterprises across Northern Uganda.</p>
            <div class="hero-btns">
                <a href="apply.php" class="btn btn-secondary">Apply for a Loan <i class="bi bi-arrow-right"></i></a>
                <a href="about-us.php" class="btn btn-outline-light ms-md-3 mt-3 mt-md-0 d-inline-block">Discover Our Story</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light">
        <div class="container">
            <div class="section-title-wrap" data-aos="fade-up">
                <span class="section-subtitle-custom">Our Financial Solutions</span>
                <h2 class="section-title-custom">Tailored Loans for Every Need</h2>
                <p class="text-gray">We provide a wide range of financial products designed to support your growth, whether you're a farmer, a business owner, or looking to manage personal expenses.</p>
            </div>

            <div class="services-grid-custom">
                <!-- Agricultural Loans -->
                <div class="service-card-custom" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon-custom">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="card-title">Agricultural Loans</h3>
                    <p class="text-gray mb-4">Specialized financing for farmers in West Nile, Gulu, Soroti, and Lira. Cover costs of seeds, tools, and harvest advances.</p>
                    <a href="agricultural-loans.php" class="btn btn-outline">Learn More</a>
                </div>

                <!-- Business Loans -->
                <div class="service-card-custom" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon-custom">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="card-title">Business Loans</h3>
                    <p class="text-gray mb-4">Grow your SME with our flexible capital solutions. We support small businesses with quick processing and fair terms.</p>
                    <a href="business-loans.php" class="btn btn-outline">Learn More</a>
                </div>

                <!-- Group Savings -->
                <div class="service-card-custom" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon-custom">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="card-title">Group Loans</h3>
                    <p class="text-gray mb-4">Community-driven financial empowerment. Our group lending model helps local associations pool resources and grow together.</p>
                    <a href="group-loans.php" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Feature Section -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-block">
                <div class="feature-img-wrap" data-aos="fade-right">
                    <img src="assets/images/pexels-moh-dikko-photography-2151327861-33023725.jpg" alt="Economic Empowerment">
                    <div class="feature-img-badge">
                        <h3 class="text-white mb-0">10+</h3>
                        <p class="text-white mb-0">Years of Service</p>
                    </div>
                </div>
                <div class="feature-text-wrap" data-aos="fade-left">
                    <span class="section-subtitle-custom text-start d-block">Why Jubilee Microfinance</span>
                    <h2 class="section-title-custom text-start">Your Trusted Partner in Financial Growth</h2>
                    <p class="text-gray">We go beyond just lending. We provide the support and training needed to ensure our clients achieve sustainable economic independence.</p>
                    
                    <div class="feature-list">
                        <div class="feature-list-item">
                            <div class="feature-list-icon"><i class="fas fa-check"></i></div>
                            <div>
                                <h4 class="mb-1">Quick Processing</h4>
                                <p class="text-gray mb-0">Get your funds when you need them most with our streamlined application process.</p>
                            </div>
                        </div>
                        <div class="feature-list-item">
                            <div class="feature-list-icon"><i class="fas fa-check"></i></div>
                            <div>
                                <h4 class="mb-1">Fair Interest Rates</h4>
                                <p class="text-gray mb-0">Transparent pricing with no hidden fees, designed to be affordable for the local community.</p>
                            </div>
                        </div>
                        <div class="feature-list-item">
                            <div class="feature-list-icon"><i class="fas fa-check"></i></div>
                            <div>
                                <h4 class="mb-1">Modern Banking</h4>
                                <p class="text-gray mb-0">Manage your accounts easily with our digital-first approach to microfinance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
                    <h2 class="counter">5000+</h2>
                    <p>Clients Served</p>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
                    <h2 class="counter">4</h2>
                    <p>Main Branches</p>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                    <h2 class="counter">15B</h2>
                    <p>Disbursed (UGX)</p>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                    <h2 class="counter">95%</h2>
                    <p>Client Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-wrap" data-aos="fade-up">
                <div class="cta-content">
                    <h2>Ready to start your growth journey?</h2>
                    <p class="text-white opacity-75">Connect with our financial advisors today and find the perfect solution for your needs.</p>
                </div>
                <div class="cta-btns">
                    <a href="contact-us.php" class="btn btn-light btn-lg">Contact Us Today</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Hero Slide transition
    const slides = document.querySelectorAll('.hero-slide');
    let currentSlide = 0;
    
    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }
    
    setInterval(nextSlide, 5000);
</script>

<?php include "includes/footer.php"; ?>