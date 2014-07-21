$('#send-sms').on("submit", function (e) {
	// Attach a submit handler to the form
	// Stop form from submitting normally
	e.preventDefault();
	// Get some values from elements on the page:
	var $form = $( this ),
	mobile = $form.find( "input[name='mobile']" ).val(),
	sms  = $form.find( "textarea[name='message']" ).val(),
	url = $form.attr( "action" );
	// Send the data using post
	var posting = $.post( url, { mobile: mobile, message : sms } );
	// Put the results in a div
	posting.done(function( data ) {
		$('#info').html('<div class="alert alert-success" role="alert">Congrats!  SMS Sent.</div>');
	});
});

