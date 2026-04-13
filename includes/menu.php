<header class="navbar-minimal" id="mainNav">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="./" class="logo-wrap">
            <img src="assets/images/logo-jubilee.png" alt="Jubilee Microfinance" style="height: 48px; filter: brightness(0) invert(1);">
        </a>
        
        <div class="nav-links-p d-none d-lg-flex">
            <a href="./" class="nav-item-p">Home</a>
            <a href="about-us.php" class="nav-item-p">About Us</a>
            <div class="dropdown">
                <a href="ecosystems.php" class="nav-item-p dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Loan Products</a>
                <ul class="dropdown-menu border-0 shadow-lg mt-3 p-3 rounded-4">
                    <li><a class="dropdown-item py-2 px-3 rounded-3" href="salary-loans.php">Salary Loans</a></li>
                    <li><a class="dropdown-item py-2 px-3 rounded-3" href="business-loans.php">Business Boost</a></li>
                    <li><a class="dropdown-item py-2 px-3 rounded-3" href="agri-loans.php">Agri-Finance</a></li>
                    <li><a class="dropdown-item py-2 px-3 rounded-3" href="boda-boda-loans.php">Boda Boda Finance</a></li>
                    <li><a class="dropdown-item py-2 px-3 rounded-3" href="school-fees-loans.php">School Fees</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item py-2 px-3 rounded-3 fw-bold text-emerald" href="ecosystems.php">All Solutions</a></li>
                </ul>
            </div>
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
        <div class="ms-3 mb-4">
            <span class="text-emerald fw-bold small text-uppercase mb-3 d-block">Lending Solutions</span>
            <div class="d-flex flex-column gap-2">
                <a href="salary-loans.php" class="text-white text-decoration-none opacity-75">Salary Loans</a>
                <a href="business-loans.php" class="text-white text-decoration-none opacity-75">Business Boost</a>
                <a href="agri-loans.php" class="text-white text-decoration-none opacity-75">Agri-Finance</a>
                <a href="boda-boda-loans.php" class="text-white text-decoration-none opacity-75">Boda Boda</a>
                <a href="school-fees-loans.php" class="text-white text-decoration-none opacity-75">School Fees</a>
            </div>
        </div>
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
