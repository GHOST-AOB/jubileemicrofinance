<?php
$title = "Financial Ecosystem & Loan Products | Jubilee Microfinance";
$description = "Explore our diverse loan products designed for the Ugandan market. Salary, Business, Agriculture, and Boda Boda financing with competitive rates.";
$keywords = "uganda microfinance products, salary loans, agricultural loans, sme capital, boda boda financing";
$featured_image = 'assets/images/Agriculture.jpg';

include "includes/header.php";
include "includes/menu.php";
?>

<main>
    <section class="section-padding bg-primary-deep text-white" style="padding-top: 15vw;">
        <div class="container" data-aos="fade-up">
            <span class="text-emerald fw-bold text-uppercase letter-spacing-1">Our Lending Engine</span>
            <h1 class="display-3 fw-bold mt-3">Tailored Capital <br> <span class="text-emerald">Ecosystems.</span></h1>
            <p class="lead opacity-75 mt-4" style="max-width: 600px;">Precision-targeted financing for the Core Engines of Ugandan Growth.</p>
        </div>
    </section>

    <!-- Product Deep Dives -->
    <section class="section-padding bg-white">
        <div class="container">
            <!-- Salary Loans -->
            <div class="row align-items-center g-5 mb-5 pb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/images/pexels-artempodrez-5716034.jpg" class="img-fluid rounded-4 shadow-lg" alt="Salary Loans">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="text-emerald fw-bold">Personal Financing</span>
                    <h2 class="display-5 fw-bold text-primary-deep mb-4">Salary Support Loans</h2>
                    <p class="text-muted mb-4">Designed for civil servants and private sector professionals. Whether it's an emergency, medical bills, or home improvement, we provide quick liquidity against your payroll.</p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <h5 class="fw-bold mb-1">Limit</h5>
                            <p class="small text-muted">Up to UGX 25 Million</p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="fw-bold mb-1">Processing</h5>
                            <p class="small text-muted">Same-day Approval</p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="fw-bold mb-1">Terms</h5>
                            <p class="small text-muted">1 to 36 Months</p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="fw-bold mb-1">Required</h5>
                            <p class="small text-muted">3 Pay Slips + ID</p>
                        </div>
                    </div>
                    <a href="salary-loans.php" class="btn btn-emerald mt-4">Apply Now</a>
                </div>
            </div>

            <!-- Agricultural Hub -->
            <div class="row align-items-center g-5 mb-5 pb-5 flex-lg-row-reverse">
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/images/Agriculture.jpg" class="img-fluid rounded-4 shadow-lg" alt="Agri Loans">
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="text-emerald fw-bold">Agri-Value Chain</span>
                    <h2 class="display-5 fw-bold text-primary-deep mb-4">Seasonal Agricultural Funding</h2>
                    <p class="text-muted mb-4">Uganda's backbone is farming. We provide capital matched to the coffee, maize, and livestock cycles. Get input advances (seeds, fertilizers) and mechanization support.</p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <h5 class="fw-bold mb-1">Structure</h5>
                            <p class="small text-muted">Seasonal Grace Periods</p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="fw-bold mb-1">Scale</h5>
                            <p class="small text-muted">Individual & Group SACCOs</p>
                        </div>
                    </div>
                    <a href="agri-loans.php" class="btn btn-emerald mt-4">Growth My Farm</a>
                </div>
            </div>

            <!-- Business Boost -->
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/images/Top-Side-Hustles-Most-Likely-to-Succeed-in-Kampala-in-2025.webp" class="img-fluid rounded-4 shadow-lg" alt="SME Loans">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="text-emerald fw-bold">Commercial Growth</span>
                    <h2 class="display-5 fw-bold text-primary-deep mb-4">Market Vendor & SME Boost</h2>
                    <p class="text-muted mb-4">For traders in Kalerwe, Owino, or Arua Market. Scale your inventory and never miss a sale. We provide short-term working capital with easy daily or weekly repayment options.</p>
                    <a href="business-loans.php" class="btn btn-emerald mt-4">Boost My Stock</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Generic Product Table -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="display-5 fw-bold text-center text-primary-deep mb-5">Product Matrix</h2>
            <div class="table-responsive rounded-4 shadow-sm bg-white p-4">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="py-3">Loan Product</th>
                            <th class="py-3">Max Amount</th>
                            <th class="py-3">Typical Interest</th>
                            <th class="py-3">Target Audience</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">Salary Quick Cash</td>
                            <td>UGX 2M</td>
                            <td>3.5% pm</td>
                            <td>SME Employees</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Boda Boda Asset</td>
                            <td>UGX 6.5M</td>
                            <td>Fixed Monthly</td>
                            <td>Youth Riders</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Market Vendor Daily</td>
                            <td>UGX 500k</td>
                            <td>Tiered</td>
                            <td>Small Traders</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tuition Relief</td>
                            <td>UGX 1.5M</td>
                            <td>Flat Rate</td>
                            <td>Parents/Guardians</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php include "includes/footer.php"; ?>
