<?php
$title = "Contact Our Support Hub | Jubilee Microfinance";
$description = "Get in touch with Jubilee Microfinance for loan inquiries, customer support, or branch information across Uganda.";
$keywords = "contact jubilee microfinance, loan inquiry Uganda, support hub microfinance";
$featured_image = 'assets/images/pexels-kaypics-28112436.jpg';

include "includes/header.php";
include "includes/menu.php";
?>

<main>
    <section class="section-padding bg-primary-deep text-white" style="padding-top: 15vw;">
        <div class="container" data-aos="fade-up">
            <span class="text-emerald fw-bold text-uppercase letter-spacing-1">Direct Support</span>
            <h1 class="display-3 fw-bold mt-3">Connect With <br> <span class="text-emerald">Our Hubs.</span></h1>
            <p class="lead opacity-75 mt-4" style="max-width: 600px;">Direct access to our financial architects. We provide localized support to ensure your capital requirements are met with precision.</p>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="card p-4 p-md-5 border-0 rounded-4 shadow-sm">
                        <h2 class="fw-bold mb-4">Send an Inquiry</h2>
                        <form action="https://formspree.io/f/xvgoenra" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Full Name (As on ID)</label>
                                    <input type="text" name="name" class="form-control p-3 border-0 bg-light" placeholder="e.g. Okello Moses" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control p-3 border-0 bg-light" placeholder="07... / 07..." required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">What can we help you with?</label>
                                    <select name="subject" class="form-select p-3 border-0 bg-light" required>
                                        <option value="">Select Service Type</option>
                                        <option>Salary Loan Inquiry</option>
                                        <option>Business/Market Loan</option>
                                        <option>Agri-Value Chain Funding</option>
                                        <option>Boda-Boda Financing</option>
                                        <option>School Fees Support</option>
                                        <option>General Feedback</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Your Message</label>
                                    <textarea name="message" class="form-control p-3 border-0 bg-light" rows="5" placeholder="Tell us more about your needs..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-emerald w-100 p-3 fs-5">Submit Request <i class="bi bi-send ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="ps-lg-5">
                        <div class="mb-5">
                            <h3 class="fw-bold text-primary-deep mb-4">Hotline & Support</h3>
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-circle-p m-0 me-3" style="width: 50px; height: 50px;"><i class="bi bi-telephone"></i></div>
                                <div>
                                    <p class="mb-0 small text-muted">24/7 Support Line</p>
                                    <h5 class="fw-bold mb-0">+256 709 300 099</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-circle-p m-0 me-3" style="width: 50px; height: 50px; background: var(--secondary-emerald);"><i class="bi bi-whatsapp"></i></div>
                                <div>
                                    <p class="mb-0 small text-muted">WhatsApp Business</p>
                                    <h5 class="fw-bold mb-0">+256 709 300 099</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon-circle-p m-0 me-3" style="width: 50px; height: 50px; background: var(--primary-deep);"><i class="bi bi-envelope"></i></div>
                                <div>
                                    <p class="mb-0 small text-muted">Email Us</p>
                                    <h5 class="fw-bold mb-0">info@jubileemicrofinance.com</h5>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 rounded-4 bg-primary-deep text-white border-start border-emerald border-5">
                            <h5 class="fw-bold mb-3">Visit Any Hub</h5>
                            <p class="small opacity-75 mb-0">We have active service points in Arua, Gulu, Soroti, and Lira. Visit us for an on-the-spot appraisal of your business goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "includes/footer.php"; ?>
