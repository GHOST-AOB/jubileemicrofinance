<header class="navbar-minimal" id="mainNav">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="./" class="logo-wrap">
            <img src="assets/images/logo-jubilee.png" alt="Jubilee Microfinance" style="height: 48px; filter: brightness(0) invert(1);">
        </a>
        
        <div class="nav-links-p d-none d-lg-flex">
            <a href="./" class="nav-item-p">Home</a>
            <a href="about-us.php" class="nav-item-p">About Us</a>
            <a href="ecosystems.php" class="nav-item-p">Loan Products</a>
            <a href="branches.php" class="nav-item-p">Our Hubs</a>
            <a href="contact.php" class="btn btn-emerald btn-sm ms-4">Apply Now</a>
        </div>

        <button class="menu-toggle-p d-lg-none" id="mobileNavToggle" aria-label="Toggle Mobile Menu">
            <i class="bi bi-list fs-1 text-white"></i>
        </button>
    </div>
</header>

<!-- Mobile Navigation Panel -->
<div class="mobile-nav-panel shadow-lg" id="mobileNavPanel">
    <div class="d-flex justify-content-between align-items-center mb-5">
         <img src="assets/images/logo-jubilee.png" alt="Logo" style="height: 40px; background: white; border-radius: 5px; padding: 5px;">
         <button class="btn btn-link text-white p-0" id="closeMobileNav"><i class="bi bi-x-lg fs-2"></i></button>
    </div>
    <nav class="d-flex flex-column">
        <a href="./" class="nav-link-m">Home</a>
        <a href="about-us.php" class="nav-link-m">About Us</a>
        <a href="ecosystems.php" class="nav-link-m">Loan Products</a>
        <a href="branches.php" class="nav-link-m">Regional Hubs</a>
        <a href="contact.php" class="btn btn-emerald w-100 p-3 mt-4">Apply Today</a>
    </nav>
</div>

<script>
    // Navigation Logic
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) { nav.classList.add('scrolled'); }
        else { nav.classList.remove('scrolled'); }
    });

    // Mobile Menu
    const mToggle = document.getElementById('mobileNavToggle');
    const mClose = document.getElementById('closeMobileNav');
    const mPanel = document.getElementById('mobileNavPanel');
    if(mToggle && mPanel) {
        mToggle.addEventListener('click', () => mPanel.style.right = '0');
        mClose.addEventListener('click', () => mPanel.style.right = '-100%');
        document.querySelectorAll('.nav-link-m').forEach(l => l.addEventListener('click', () => mPanel.style.right = '-100%'));
    }
</script>
