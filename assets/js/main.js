/** ============================================================
 *  JS File for Kipya Template
 *===============================================================*/
//Sticky Top
document.addEventListener("DOMContentLoaded", function() {
  var header = document.querySelector('.menu-section');
  
  window.addEventListener('scroll', function() {
      if (window.scrollY > 200) {
          header.classList.add('sticky-header');
      } else {
          header.classList.remove('sticky-header');
      }
  });
});



 

  

/** ===============================================
 * Back to Top
 *=================================================*/
function select(selector) {
    return document.querySelector(selector);
}

// Check if the back-to-top element exists
var backtotop = select('.back-to-top');
if (backtotop) {
    const toggleBacktotop = () => {
        if (window.scrollY > 200) { // Change threshold to 200
            backtotop.classList.add('active');
        } else {
            backtotop.classList.remove('active');
        }
    };

    window.addEventListener('load', toggleBacktotop);
    window.addEventListener('scroll', toggleBacktotop);
    
    // Scroll to top on click
    backtotop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scroll to top
        });
    });
}

/** ====================================================
 * Accordion
 *=========================================================*/
document.addEventListener('DOMContentLoaded', () => {
    const accordionTitles = document.querySelectorAll('.accordion-title');

    accordionTitles.forEach(title => {
        title.addEventListener('click', () => {
            const content = title.nextElementSibling;
            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });
});