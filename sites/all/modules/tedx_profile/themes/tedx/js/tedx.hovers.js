jQuery.noConflict();
jQuery(window).load(function(){
  jQuery('.views-row').click(function(){
    if (jQuery(this).find('a').attr('href')){
      var href = jQuery(this).find('a').attr('href');
      window.location.href = href;
      return false;
    }
  });
});
