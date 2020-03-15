function addToken () {
	$.ajax({
		url: '/token.php',
		type: 'GET',
		success: function (result) {
			var Token = result;
			$("form.req-token").prepend('<input type="hidden" name="token" value="'+Token+'" />');

		}
	});
    
}
