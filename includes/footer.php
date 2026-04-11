<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <a href="./" class="footer-logo">
                    <img src="assets/images/logo-jubilee.png" alt="Jubilee Microfinance">
                </a>
                <p>Jubilee Microfinance is a leading financial institution dedicated to empowering communities in Northern Uganda through accessible and transparent financial services.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="footer-links-wrap">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="./">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="services.php">Our Services</a></li>
                    <li><a href="branches.php">Branch Locator</a></li>
                    <li><a href="apply.php">Apply for Loan</a></li>
                </ul>
            </div>

            <div class="footer-links-wrap">
                <h3 class="footer-title">Services</h3>
                <ul class="footer-links">
                    <li><a href="agricultural-loans.php">Agricultural Loans</a></li>
                    <li><a href="business-loans.php">Business Loans</a></li>
                    <li><a href="personal-loans.php">Personal Loans</a></li>
                    <li><a href="group-loans.php">Group Lending</a></li>
                    <li><a href="savings.php">Savings Accounts</a></li>
                </ul>
            </div>

            <div class="footer-contact-wrap">
                <h3 class="footer-title">Contact Us</h3>
                <ul class="footer-contact">
                    <li>
                        <i class="bi bi-geo-alt text-secondary"></i>
                        <span>2nd Floor, City House, Arua, Uganda</span>
                    </li>
                    <li>
                        <i class="bi bi-telephone text-secondary"></i>
                        <span>+256 709 300 099 <br> +256 779 676 584</span>
                    </li>
                    <li>
                        <i class="bi bi-envelope text-secondary"></i>
                        <span>info@jubileemicrofinance.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y'); ?> Jubilee Microfinance. All Rights Reserved. | Designed by <a href="https://www.lwegatech.com" class="text-white">LWEGATECH</a></p>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center" id="backToTop">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Styles for Back to Top -->
<style>
.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 30px;
    bottom: 30px;
    z-index: 996;
    background: #27ae60; /* Secondary green */
    width: 45px;
    height: 45px;
    border-radius: 50%;
    transition: all 0.4s;
    color: white;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
}
.back-to-top.active {
    visibility: visible;
    opacity: 1;
}
.back-to-top i {
    font-size: 24px;
}
.back-to-top:hover {
    background: #003262; /* Primary blue */
    transform: translateY(-5px);
}
</style>

<!-- Scripts -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });

    // Back to top button
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.classList.add('active');
        } else {
            backToTop.classList.remove('active');
        }
    });

    // Remove preloader
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }
    });
</script>

</body>
</html>