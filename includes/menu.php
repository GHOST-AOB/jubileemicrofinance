<header class="navbar-minimal" id="mainNav">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="./" class="logo-wrap">
            <img src="assets/images/logo-jubilee.png" alt="Jubilee Microfinance">
        </a>
        
        <div class="nav-links-p d-none d-lg-flex">
            <a href="./" class="nav-item-p active">Home</a>
            <a href="about-us.php" class="nav-item-p">Who We Are</a>
            <a href="ecosystem.php" class="nav-item-p">Ecosystems</a>
            <a href="impact.php" class="nav-item-p">Impact</a>
            <a href="branches.php" class="nav-item-p">Branches</a>
            <a href="contact.php" class="btn-premium btn-p-primary btn-sm">Join the Network</a>
        </div>

        <button class="menu-toggle-p d-lg-none" id="mobileNavToggle">
            <i class="bi bi-grid-3x3-gap-fill"></i>
        </button>
    </div>
</header>

<div class="mobile-nav-panel" id="mobileNavPanel">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <img src="assets/images/logo-jubilee.png" height="40" alt="Logo">
            <button class="btn-close-p" id="closeMobileNav"><i class="bi bi-x-lg"></i></button>
        </div>
        <nav class="d-flex flex-column gap-4">
            <a href="./" class="h3 font-weight-bold text-primary">Home</a>
            <a href="about-us.php" class="h3 font-weight-bold text-primary">Who We Are</a>
            <a href="ecosystem.php" class="h3 font-weight-bold text-primary">Ecosystems</a>
            <a href="impact.php" class="h3 font-weight-bold text-primary">Impact Report</a>
            <hr>
            <a href="apply.php" class="btn-premium btn-p-primary w-100 justify-content-center">Apply Now</a>
        </nav>
    </div>
</div>

<style>
/* Internal styles for menu components during transition */
.menu-toggle-p { background: none; border: none; font-size: 1.5rem; color: var(--primary); cursor: pointer; }
.btn-close-p { background: none; border: none; font-size: 1.5rem; color: var(--primary); cursor: pointer; }
.mobile-nav-panel {
    position: fixed;
    top: 0;
    right: -100%;
    width: 100%;
    height: 100vh;
    background: white;
    z-index: 3000;
    transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}
.mobile-nav-panel.active { right: 0; }
</style>

<script>
    // Navbar scroll interaction
    const mainNav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            mainNav.classList.add('scrolled');
        } else {
            mainNav.classList.remove('scrolled');
        }
    });

    // Mobile Navigation logic
    const mobileNavToggle = document.getElementById('mobileNavToggle');
    const closeMobileNav = document.getElementById('closeMobileNav');
    const mobileNavPanel = document.getElementById('mobileNavPanel');

    if (mobileNavToggle) {
        mobileNavToggle.addEventListener('click', () => {
            mobileNavPanel.classList.add('active');
        });
    }

    if (closeMobileNav) {
        closeMobileNav.addEventListener('click', () => {
            mobileNavPanel.classList.remove('active');
        });
    }
</script>

