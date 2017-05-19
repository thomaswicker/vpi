/* %%%%%%%%%%%%%%%%%%%% APPLICATION JS %%%%%%%%%%%%%%%%%%%% */

console.log('successful connection to JS file');

$('body').hide();

$(document).ready( function() {
  var siteNav         = $('#site-nav'),
      siteNavToggle   = $('#site-nav-toggle');

  $('#site-nav-toggle').on('click', function() {
    siteNav.toggleClass('active');
    console.log('test');
  });

  console.log('end of JS');


  if (typeof jQuery == 'undefined') {
    console.log('JQUERY NOT LOADING...');
  }
});
