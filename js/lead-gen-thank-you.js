jQuery(document).ready(function() {

    // code for redirecting to the thank-you page
    // Also fetch the vars from the form and add them as params to the url

      var wpcf7Elm = document.querySelector( '#wpcf7-f69-p63-o1' ) || document.querySelector( '#wpcf7-f225-p218-o1' );

      if (wpcf7Elm) {
        // console.log('wpcf7Elm: ', wpcf7Elm);
        console.log('EventHandler code run to attach JS code to Lead Gen form submit OK');
        wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
          var details = [];
          var times = [];

          // check the url to determine the thank-you page, corporate or private
          var thank = window.location.href.indexOf('corporate') > -1 ? 'corporate' : 'private';
          details.push('fthank=' + thank);

          var inputs = event.detail.inputs;
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
              details.push('fdate=' + moment(inputs[i].value).format('MMMM Do'));
              break;
              case 'callback-time[]':
              times.push(inputs[i].value);
              break;
            }
          }

          if (times.length > 1) times = times.join(', ');
          else if (times.length === 1) times = times[0];
          if (times.lenght > 0) details.push('ftime=' + times);

          const params = '/?' + details.join('&');
          var getUrl = window.location;
          var baseUrl = getUrl.protocol + "//" + getUrl.host + "/thank-you" ;

          // location = 'https://dev.inpowerwellness.com/thank-you' + params;
          location = baseUrl + params;
        }, false );
      }
});
