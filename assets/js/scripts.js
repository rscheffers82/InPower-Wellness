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
  var times = [];
  console.log('event', event);
  for ( var i = 0; i < inputs.length; i++ ) {
    switch (inputs[i].name) {
      case 'your-name':
        details.push('fname=' + inputs[i].value);
        break;
      case 'callback-vs-email':
        if(inputs[i].value == 'Schedule your callback') details.push('fcontact=phone');
        if(inputs[i].value == 'No thanks, email is fine') details.push('fcontact=email');
        break;
      case 'callback-day':
        // console.log('moment: ', moment());
        // console.log('moment formatted: ', moment(inputs[i].value).format('MMM Do'));
        details.push('fdate=' + moment(inputs[i].value).format('MMMM Do'));
        break;
      case 'callback-time[]':
        times.push(inputs[i].value);
        break;
    }
  }

  if (times.length > 1) times = times.join(', ');
  else times = times[0];

  details.push('ftime=' + times);
  const params = '/?' + details.join('&');
  // console.log('params: ', encodeURIComponent(params));
  var getUrl = window.location;
  var baseUrl = getUrl.protocol + "//" + getUrl.host + "/thank-you" ;
  // location = 'https://dev.inpowerwellness.com/thank-you' + params;

  location = baseUrl + params;
}, false );
