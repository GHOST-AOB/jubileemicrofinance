<footer class="footer-obsidian">
    <div class="container">
        <div class="footer-top-p">
            <div class="footer-brand-p">
                <a href="./" class="logo-wrap">
                    <img src="assets/images/logo-jubilee.png" alt="Jubilee Microfinance" style="filter: brightness(0) invert(1); height: 50px;">
                </a>
                <p class="mt-4 opacity-75">Establishing the benchmark for institutional-grade microfinance and economic empowerment across Northern Uganda's regional economies.</p>
                <div class="social-links-p mt-4 d-flex gap-3">
                    <a href="#" class="text-white opacity-50 hover-opacity-100"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white opacity-50 hover-opacity-100"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links-col">
                <h5 class="mb-4 font-weight-bold">Ecosystems</h5>
                <ul class="list-unstyled opacity-75">
                    <li class="mb-2"><a href="agri-finance.php" class="text-white">Agricultural Value-Chain</a></li>
                    <li class="mb-2"><a href="sme-capital.php" class="text-white">SME Capital Hub</a></li>
                    <li class="mb-2"><a href="innovation-loans.php" class="text-white">Innovation & Tech</a></li>
                    <li class="mb-2"><a href="group-empowerment.php" class="text-white">Group Empowerment</a></li>
                </ul>
            </div>

            <div class="footer-links-col">
                <h5 class="mb-4 font-weight-bold">Institutional</h5>
                <ul class="list-unstyled opacity-75">
                    <li class="mb-2"><a href="governance.php" class="text-white">Governance & Trust</a></li>
                    <li class="mb-2"><a href="impact-metrics.php" class="text-white">Impact Performance</a></li>
                    <li class="mb-2"><a href="careers.php" class="text-white">Executive Careers</a></li>
                    <li class="mb-2"><a href="news.php" class="text-white">Press & Media</a></li>
                </ul>
            </div>

            <div class="footer-contact-col">
                <h5 class="mb-4 font-weight-bold">Regional Hubs</h5>
                <ul class="list-unstyled opacity-75">
                    <li class="mb-2 d-flex gap-2"><i class="bi bi-geo-alt text-secondary"></i> <span>HQ: Arua City House, 2nd Floor</span></li>
                    <li class="mb-2 d-flex gap-2"><i class="bi bi-telephone text-secondary"></i> <span>+256 709 300 099</span></li>
                    <li class="mb-2 d-flex gap-2"><i class="bi bi-envelope text-secondary"></i> <span>ops@jubileemicrofinance.com</span></li>
                </ul>
            </div>
        </div>

        <div class="footer-legal-bar">
            <div class="copy-p">
                &copy; <?= date('Y'); ?> Jubilee Microfinance. Registered Financial Institution. 
            </div>
            <div class="legal-links d-flex gap-4">
                <a href="privacy.php" class="text-white opacity-50">Privacy Policy</a>
                <a href="terms.php" class="text-white opacity-50">Terms of Capital</a>
                <a href="https://www.lwegatech.com" class="text-white opacity-50">Digital by LWEGATECH</a>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top-p" id="backToTop">
    <i class="bi bi-chevron-up"></i>
</a>

<style>
.back-to-top-p {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: var(--secondary);
    color: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: 0.4s;
    z-index: 1000;
}
.back-to-top-p.active {
    opacity: 1;
    visibility: visible;
}
.hover-opacity-100:hover { opacity: 1 !important; }
</style>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
    
    // Back to top logic
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
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
            setTimeout(() => { preloader.style.display = 'none'; }, 500);
        }
    });

    // Counter Logic for multiple metrics
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.innerText.replace(/[^0-9.]/g, '');
            const count = +counter.getAttribute('data-current') || 0;
            const inc = target / 100;

            if (count < target) {
                const next = count + inc;
                counter.setAttribute('data-current', next);
                counter.innerText = (target % 1 === 0 ? Math.ceil(next) : next.toFixed(1)) + 
                                   (counter.innerText.includes('+') ? '+' : '') + 
                                   (counter.innerText.includes('%') ? '%' : '') + 
                                   (counter.innerText.includes('B') ? 'B' : '');
                setTimeout(updateCount, 10);
            } else {
                // Keep original text
            }
        };

        const observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) {
                updateCount();
                observer.unobserve(counter);
            }
        });
        observer.observe(counter);
    });
</script>
</body>
</html>