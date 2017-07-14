$('#simples-formulario-ajax').submit(function(e){
	
	e.preventDefault();

	if($('#enviar').val() == 'Enviando...'){
	
		return(false);
	}

	$('#enviar').val('Enviando...');

	$.ajax({
		url:'valida-formulario.php',
		type:'post',
		dataType:'html',
		data: {
			'metodo': $('#metodo').val(),
			'nome': $('#nome').val(),
			'email': $('#email').val(),
			'telefone': $('#telefone').val(),
			'empresa': $('#empresa').val(),
			'mensagem': $('#mensagem').val(),
			
			
		}
	}).done(function(data){
		alert(data);
			$('#simples-formulario-ajax').slideUp();
			$('#div1').append('<h2 style="margin:40px;">Sua mensagem foi recebida, em breve responderemos!</h2>');

	});

});