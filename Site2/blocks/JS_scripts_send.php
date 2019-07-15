<script>
$('#send').click (function () {
	var email = $('#email').val ();
	var name = $('#name').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'ajax/feedback.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");     /* Только начали отправку - кнопка не активная, чтобы 2 раза не отправить */
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Message was sent");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
				if (data == false)				
					alert ("Message wasn't sent. Try again");
				else {					
					switch (data) {
					case "Enter your name":
					$('#name').css ("border-color", "red");
					break;
					case "Enter your message":
					$('#message').css ("border-color", "red");
					break;
					case "E-mail is incorrect":
					$('#email').css ("border-color", "red");
					break;
					default:
					$('#email').css ("border-color", "red");
					$('#message').css ("border-color", "red");
					$('#name').css ("border-color", "red");
					}
				}
			}
			$('#send').removeAttr ("disabled");				
		}
	});
});
</script>