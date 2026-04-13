<footer class="footer-green-blue text-white">
    <div class="container py-4">
        <div class="row gy-5">
            <div class="col-lg-4">
                <img src="assets/images/logo-jubilee.png" alt="Logo" style="height: 50px; filter: brightness(0) invert(1);">
                <p class="mt-4 opacity-75">Empowering Ugandan individuals and SMEs through accessible, transparent, and innovative micro-financing solutions since 2012.</p>
                <div class="d-flex gap-4 mt-4 h4 mb-0 opacity-50">
                    <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5 class="fw-bold text-emerald mb-4">Our Loans</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 opacity-75">
                    <li><a href="ecosystems.php" class="text-white text-decoration-none">Salary Loans</a></li>
                    <li><a href="ecosystems.php" class="text-white text-decoration-none">Business Boost</a></li>
                    <li><a href="ecosystems.php" class="text-white text-decoration-none">Agri-Finance</a></li>
                    <li><a href="ecosystems.php" class="text-white text-decoration-none">Asset Financing</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5 class="fw-bold text-emerald mb-4">Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 opacity-75">
                    <li><a href="./" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="about-us.php" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="branches.php" class="text-white text-decoration-none">Our Hubs</a></li>
                    <li><a href="contact.php" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5 class="fw-bold text-emerald mb-4">Contact Us</h5>
                <p class="small opacity-75 mb-2"><i class="bi bi-geo-alt me-2 text-emerald"></i> Arua City House, 2nd Floor</p>
                <p class="small opacity-75 mb-2"><i class="bi bi-telephone me-2 text-emerald"></i> +256 709 300 099</p>
                <p class="small opacity-75"><i class="bi bi-envelope me-2 text-emerald"></i> info@jubileemicrofinance.com</p>
            </div>
        </div>
        <hr class="my-5 opacity-10">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center opacity-50 small">
            <p class="mb-0">&copy; <?= date('Y'); ?> Jubilee Microfinance. UMRA Licensed MFI. All Rights Reserved.</p>
            <p class="mb-0">A <a href="#" class="text-white text-decoration-none">SpiderwebUG</a> Digital Experience</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
    
    // Preloader Removal
    window.addEventListener('load', () => { 
        const p = document.getElementById('preloader'); 
        if(p) {
            p.style.opacity = '0'; 
            setTimeout(() => p.style.display = 'none', 500); 
        }
    });

    // Optimized Counter Logic
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const targetText = counter.innerText;
            const target = parseFloat(targetText.replace(/[^0-9.]/g, ''));
            const current = parseFloat(counter.getAttribute('data-count') || 0);
            const step = target / 100;
            
            if (current < target) {
                const next = current + step;
                counter.setAttribute('data-count', next);
                
                let suffix = counter.getAttribute('data-suffix') || '';
                let formatted;
                
                if (target % 1 === 0) {
                    formatted = Math.ceil(next).toLocaleString();
                } else {
                    formatted = next.toFixed(1);
                }
                
                counter.innerText = formatted + suffix;
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = targetText;
            }
        };
        const obs = new IntersectionObserver(e => { 
            if(e[0].isIntersecting) { 
                updateCount(); 
                obs.unobserve(counter); 
            } 
        });
        obs.observe(counter);
    });
</script>
</body>
</html>