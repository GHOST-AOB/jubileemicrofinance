<?php
$title = "Jubilee Microfinance | Sente Mangu, Growth Now";
$description = "Jubilee Microfinance provides fast, flexible, and affordable loan solutions across Uganda. Agricultural, Salary, Business, and Boda Boda loans with rapid approval.";
$keywords = "microfinance Uganda, salary loans Kampala, agricultural loans Gulu, business loans Arua, boda boda financing";
$featured_image = 'assets/images/pexels-kaypics-28112436.jpg';

include "includes/header.php";
include "includes/menu.php";
?>

<main id="top">
    <!-- Hero Slider -->
    <section class="slider-container-unique">
        <div class="slide-unique active" style="background-image: url('assets/images/pexels-kaypics-28112436.jpg'); background-size: cover; background-position: center;">
             <div class="slide-img-overlay"></div>
             <div class="container slide-content-unique text-white" data-aos="fade-right">
                <span class="badge bg-emerald text-white mb-3 px-3 py-2 shadow-sm">UMRA Licensed Institution</span>
                <h1 class="display-1 fw-bold text-white mb-3">Sente mangu.<br><span style="color: #10b981;">Growth now.</span></h1>
                <p class="lead opacity-75 mb-5" style="max-width: 600px;">Access fast, flexible, and affordable financial solutions designed for the Ugandan market. From Agriculture to Business, we fuel your dreams.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact.php" class="btn btn-emerald btn-lg px-4 fs-5">Get a Loan Today</a>
                    <a href="#products" class="btn btn-outline-light btn-lg px-4 fs-5">View Our Loans</a>
                </div>
             </div>
        </div>
        
        <div class="slide-unique" style="background-image: url('assets/images/Agriculture.jpg'); background-size: cover; background-position: center;">
            <div class="slide-img-overlay"></div>
            <div class="container slide-content-unique text-white">
               <span class="badge bg-emerald text-white mb-3 px-3 py-2 shadow-sm">Agricultural Financing</span>
               <h1 class="display-1 fw-bold text-white mb-3">Modern Farming.<br><span style="color: #10b981;">Massive Yields.</span></h1>
               <p class="lead opacity-75 mb-5" style="max-width: 600px;">Seasonal financing for Ugandan farmers. Get input advances and mechanization support when you need it most.</p>
               <a href="contact.php" class="btn btn-emerald btn-lg">Apply for Agri-Loan</a>
            </div>
       </div>

        <div class="slider-nav">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
        </div>
    </section>

    <!-- Loan Products Section -->
    <section id="products" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-4 fw-bold text-primary-deep">Loan Solutions for Every Ugandan</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">Tailored financial products with realistic terms, competitive interest rates, and fast processing.</p>
            </div>
            
            <div class="row g-4">
                <!-- Salary Loans -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card">
                        <img src="assets/images/pexels-artempodrez-5716034.jpg" class="product-img" alt="Salary Loans">
                        <div class="p-4">
                            <h4 class="fw-bold mb-2">Salary Loans</h4>
                            <p class="small text-muted mb-3">For civil servants and private sector employees. Quick cash for personal needs with easy repayments from your salary.</p>
                            <ul class="list-unstyled mb-4 small opacity-75">
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Limits up to UGX 20M</li>
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Approval under 24 hours</li>
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Flexible 6-36 month terms</li>
                            </ul>
                            <a href="salary-loans.php" class="btn btn-emerald w-100">Apply Now</a>
                        </div>
                    </div>
                </div>

                <!-- Business/SME Loans -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card">
                        <img src="assets/images/Top-Side-Hustles-Most-Likely-to-Succeed-in-Kampala-in-2025.webp" class="product-img" alt="Business Loans">
                        <div class="p-4">
                            <h4 class="fw-bold mb-2">Business Boost Loans</h4>
                            <p class="small text-muted mb-3">For market vendors, wholesalers, and shopkeepers. Scale your stock and operations with our working capital.</p>
                            <ul class="list-unstyled mb-4 small opacity-75">
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Competitive monthly rates</li>
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Daily/Weekly repayment options</li>
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Mentorship & Advisory included</li>
                            </ul>
                            <a href="business-loans.php" class="btn btn-emerald w-100">Boost My Business</a>
                        </div>
                    </div>
                </div>

                <!-- Boda Boda Financing -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card">
                        <img src="assets/images/pexels-energepic-com-27411-2988232.jpg" class="product-img" alt="Boda Boda Financing">
                        <div class="p-4">
                            <h4 class="fw-bold mb-2">Asset & Boda Financing</h4>
                            <p class="small text-muted mb-3">Become your own boss. We finance Bajaj Boxer motorcycles and other essential business assets.</p>
                            <ul class="list-unstyled mb-4 small opacity-75">
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Low initial deposit</li>
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Comprehensive Insurance</li>
                                <li><i class="bi bi-check-circle-fill text-emerald me-2"></i> Ownership transfer on completion</li>
                            </ul>
                            <a href="boda-boda-loans.php" class="btn btn-emerald w-100">Start My Journey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-emerald fw-bold text-uppercase">The Jubilee Way</span>
                <h2 class="display-4 fw-bold text-primary-deep">3 Easy Steps to Your Loan</h2>
            </div>
            
            <div class="row g-5 mt-4">
                <div class="col-lg-4 step-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-icon">1</div>
                    <h4 class="fw-bold mb-3">Submit Application</h4>
                    <p class="text-muted">Fill out our simple online form or visit any of our hubs in Arua, Gulu, or Kampala with your ID.</p>
                </div>
                <div class="col-lg-4 step-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-icon">2</div>
                    <h4 class="fw-bold mb-3">Rapid Approval</h4>
                    <p class="text-muted">Our credit team reviews your request within hours using our precision scoring system.</p>
                </div>
                <div class="col-lg-4 step-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-icon">3</div>
                    <h4 class="fw-bold mb-3">Instant Cash</h4>
                    <p class="text-muted">Funds are disbursed directly to your Mobile Money (MTN/Airtel) or Bank account instantly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Dashboard -->
    <section class="section-padding bg-primary-deep text-white text-center">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3" data-aos="zoom-in">
                    <h2 class="display-4 fw-bold counter" data-suffix="+">45,000</h2>
                    <p class="text-emerald text-uppercase fw-bold small">Total Disbursals</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <h2 class="display-4 fw-bold counter" data-suffix="B">125</h2>
                    <p class="text-emerald text-uppercase fw-bold small">Economic Impact (UGX)</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <h2 class="display-4 fw-bold counter" data-suffix="%">98.2</h2>
                    <p class="text-emerald text-uppercase fw-bold small">Repayment Rate</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <h2 class="display-4 fw-bold counter">14</h2>
                    <p class="text-emerald text-uppercase fw-bold small">Active Hubs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="section-padding bg-light overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                    <h2 class="display-4 fw-bold text-primary-deep mb-4">Empowering <br><span class="text-emerald">Ugandan Success.</span></h2>
                    <p class="lead text-muted">Join thousands of Ugandans who have scaled their dreams with Jubilee Microfinance.</p>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card p-4 border-0 rounded-4 shadow-sm h-100">
                                <p class="mb-4">"Jubilee took a chance on my matooke business when others said no. Today, I have three stalls at Nakasero Market thanks to their support."</p>
                                <div class="d-flex align-items-center mt-auto">
                                    <div>
                                        <h6 class="fw-bold mb-0">Sarah Namukasa</h6>
                                        <small class="text-muted">Market Vendor, Kampala</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="card p-4 border-0 rounded-4 shadow-sm h-100">
                                <p class="mb-4">"The agricultural loan helped me buy hybrid seeds and a pump for my coffee farm in Gulu. My harvest doubled this year!"</p>
                                <div class="d-flex align-items-center mt-auto">
                                    <div>
                                        <h6 class="fw-bold mb-0">Okello Moses</h6>
                                        <small class="text-muted">Coffee Farmer, Gulu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Hero Slider Logic (PHP Version)
    const slides = document.querySelectorAll('.slide-unique');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;

    function goToSlide(index) {
        if(!slides[currentSlide]) return;
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide = index;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    dots.forEach((dot, idx) => dot.addEventListener('click', () => goToSlide(idx)));
    setInterval(() => goToSlide((currentSlide + 1) % slides.length), 6000);
</script>

<?php include "includes/footer.php"; ?>