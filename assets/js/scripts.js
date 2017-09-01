jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});

// code for redirecting to the thank-you page
// Also fetch the vars from the form and add them as params to the url

document.addEventListener( 'wpcf7mailsent', function( event ) {
  var inputs = event.detail.inputs;

  var details = [];
  var name;
  for ( var i = 0; i < inputs.length; i++ ) {
    if ( 'your-name' == inputs[i].name ) {
        details[name] = inputs[i].value;
        name = inputs[i].value;
        break;
    }
  }
  var params = '?fname=' + name;
  location = 'https://dev.inpowerwellness.com/thank-you/?fname=roy';
}, false );
