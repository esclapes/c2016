
$(function() {
	$('#zone-contact-form').submit(function(event) {
		event.preventDefault();
		var subscribeForm = $(this);
		$.ajax({
			url: subscribeForm.prop('action'),
			type: 'POST',
			crossDomain: true,
			headers: {
				'accept': 'application/javascript',
			},
			data: $('#zone-contact-form').serialize(),
		})
		.done(function(response) {
			$('#zone-contact-form').css('display', 'none');
			$('#form-success').css('display', 'block');
		})
		.fail(function(response) {
			$('#zone-contact-form').css('display', 'none');
			$('#form-error').css('display', 'block');
		})
	});
});

