$(document).ready(function(){
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
	
	$('#myTab a').click(function (e) {
		  e.preventDefault();
		  if($(this).hasClass('active')){
			  $(this).tab('show');
		  }		  
	})

	$('#form-addsender-step-one').on("submit", function (e) {
		e.preventDefault();
		// Get some values from elements on the page:
		var $form = $( this ),
		mobile = $form.find( "input[name='mobile']" ).val(),
		sms  = $form.find( "textarea[name='message']" ).val(),
		url = $form.attr( "action" );
		// Send the data using post

		var posting = $.post( url, $form.serialize());
		// Put the results in a div
		posting.done(function( data ) {
			$('#info').html('<div class="alert alert-success" role="alert">Congrats!  An SMS Code Sent to your mobile, Please enter to verify .</div>');
			$('#myTab a[href="#step2"]').tab('show');
		});
		
		
	});
	$('#form-addsender-step-two').on("submit", function (e) {
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
			$('#info').html('<div class="alert alert-success" role="alert">Congrats!  Mobile verification done.</div>');
			$('#myTab a[href="#step3"]').tab('show');
		});

		
	});

})
