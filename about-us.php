<?php
$title = "Institutional Trust & Governance | Jubilee Microfinance";
$tagline = "Stability you can build on.";
$description = "Learn about the mission, governance, and institutional pillars that make Jubilee Microfinance Northern Uganda's most trusted partner.";
$keywords = "jubilee microfinance history, microfinance governance, financial stability arua, gulu banking leadership";
$featured_image = 'assets/images/pexels-moh-dikko-photography-2151327861-33023725.jpg';
include "includes/header.php";
include "includes/menu.php";
?>

<main class="page-content">
    <section class="page-hero" style="background: linear-gradient(rgba(10, 25, 47, 0.9), rgba(10, 25, 47, 0.8)), url('assets/images/pexels-artempodrez-5716034.jpg') center/cover;">
        <div class="container text-white py-5 mt-5">
            <h1 class="display-3 font-weight-bold">Who We <span class="text-secondary">Are.</span></h1>
            <p class="lead opacity-75 max-width-600">Forging an elite path for financial inclusion and high-impact economic growth across Northern Uganda's regional markets since 2012.</p>
        </div>
    </section>

    <section class="about-story py-5">
        <div class="container">
            <div class="grid-complex">
                <div class="story-content" data-aos="fade-right">
                    <h2 class="section-title mb-4">Our Institutional Pillars</h2>
                    <p>Jubilee Microfinance is more than a lending agency; we are a financial architect. Our core focus lies in identifying high-growth potential within agricultural value-chains and SME clusters, and deploying institutional-quality capital to catalyze growth.</p>
                    
                    <div class="mission-item-p mt-5">
                        <h4 class="font-weight-bold text-primary"><i class="bi bi-shield-check text-secondary me-2"></i> Unwavering Trust</h4>
                        <p class="text-muted">Adopting global best practices in governance to ensure every client's capital and growth trajectory is protected.</p>
                    </div>

                    <div class="mission-item-p mt-4">
                        <h4 class="font-weight-bold text-primary"><i class="bi bi-graph-up-arrow text-secondary me-2"></i> Regional Scale</h4>
                        <p class="text-muted">Focused expansion across West Nile, Gulu, Soroti, and Lira to provide unparalleled local access to capital.</p>
                    </div>
                </div>
                
                <div class="story-visual" data-aos="fade-left">
                    <div class="metric-card-p highlighted-metric">
                        <h2 class="metric-value">13+ Years</h2>
                        <span class="metric-label">Institutional Stability</span>
                        <hr>
                        <p class="small">Continuous operation without capital disruption since our inception.</p>
                    </div>
                    <img src="assets/images/pexels-moh-dikko-photography-2151327861-33023725.jpg" class="mt-4 rounded-lg shadow-lg" alt="Community Growth" style="width: 100%; border-radius: 20px;">
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.max-width-600 { max-width: 600px; }
.highlighted-metric { background: var(--primary); color: white; border: none; }
.highlighted-metric .metric-label { color: var(--secondary); opacity: 1; }
.mission-item-p h4 { font-size: 1.25rem; }
</style>

<?php include "includes/footer.php"; ?>
