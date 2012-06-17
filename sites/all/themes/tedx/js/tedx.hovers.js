jQuery.noConflict();
jQuery(window).load(function(){
  jQuery('.views-row').click(function(){
    if (!this.classList.contains("user-profile-listing-row") && jQuery(this).find('a').attr('href')){
      var href = jQuery(this).find('a').attr('href');
      window.location.href = href;
      return false;
    }
  });
});
