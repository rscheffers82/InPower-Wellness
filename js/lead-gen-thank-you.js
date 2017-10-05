jQuery(document).ready(function() {

    // code for redirecting to the thank-you page
    // Also fetch the vars from the form and add them as params to the url
      console.log('EventHandler code run to attach JS code to Lead Gen form submit');

      var wpcf7Elm = document.querySelector( '#wpcf7-f69-p63-o1' ) || document.querySelector( '#wpcf7-f225-p218-o1' );
      console.log('wpcf7Elm: ', wpcf7Elm);

      wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
        // alert( "Fire!" );
        console.log('fire...');

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
});
