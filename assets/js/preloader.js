/** ========================================================================
 * ABB Billing System preloader JS file.
 * Add abit of animations for the system
 * Based on Bootstrap components.
 * Developed by LWEGATECH
========================================================================**/
let preloaderCount = 0;

window.start_load = function() {
  preloaderCount++;
  if (preloaderCount === 1) {
    $('body').prepend('<div id="preloader">'+
      '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>'+
      '<div class="spinner-grow text-warning" role="status"><span class="visually-hidden">Loading...</span></div>'+
      '<div class="spinner-grow text-info" role="status"><span class="visually-hidden">Loading...</span></div>'+
      '<div class="spinner-grow text-danger" role="status"><span class="visually-hidden">Loading...</span></div>'+
      '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>'+
      '<div class="spinner-grow text-warning" role="status"><span class="visually-hidden">Loading...</span></div>'+
      '</div>');
  }
}

window.end_load = function() {
  preloaderCount--;
  if (preloaderCount === 0) {
    $('#preloader').fadeOut('fast', function() {
      $(this).remove();
    });
  }
}