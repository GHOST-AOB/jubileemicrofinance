/** 
 * Jubilee Microfinance - Main JS
 * Modern, non-blocking vanilla JS for interactions
 */

document.addEventListener("DOMContentLoaded", function() {
    
    // Sticky Navbar logic
    const navbar = document.querySelector('.navbar-custom');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Mobile Navbar Toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navLinks = document.getElementById('navLinks');
    if (mobileToggle && navLinks) {
        mobileToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.replace('bi-list', 'bi-x');
            } else {
                icon.classList.replace('bi-x', 'bi-list');
            }
        });
    }

    // Counter Animation for Stats
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const updateCount = () => {
                const targetText = counter.innerText;
                const hasPlus = targetText.includes('+');
                const hasB = targetText.includes('B');
                const hasPercent = targetText.includes('%');
                
                const target = parseFloat(targetText.replace(/[^0-9.]/g, ''));
                const countAttr = parseFloat(counter.getAttribute('data-count') || 0);
                
                const speed = 200;
                const inc = target / speed;

                if (countAttr < target) {
                    const nextCount = countAttr + inc;
                    counter.setAttribute('data-count', nextCount);
                    
                    let displayValue = Math.ceil(nextCount);
                    if (hasB) displayValue += 'B';
                    if (hasPlus) displayValue += '+';
                    if (hasPercent) displayValue += '%';
                    
                    counter.innerText = displayValue;
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = targetText;
                }
            };
            
            const observer = new IntersectionObserver((entries) => {
                if(entries[0].isIntersecting) {
                    updateCount();
                    observer.unobserve(counter);
                }
            }, { threshold: 0.5 });
            
            observer.observe(counter);
        });
    }
    animateCounters();

    // Accordion Logic (Restored)
    const accordionTitles = document.querySelectorAll('.accordion-title');
    accordionTitles.forEach(title => {
        title.addEventListener('click', () => {
            const content = title.nextElementSibling;
            if (content) {
                const isOpen = content.style.maxHeight;
                if (isOpen) {
                    content.style.maxHeight = null;
                    title.classList.remove('active');
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                    title.classList.add('active');
                }
            }
        });
    });

    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 85,
                    behavior: 'smooth'
                });
            }
        });
    });
});