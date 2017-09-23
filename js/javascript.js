$().ready(function()
{
     $('.contatos').click(function(){
	 	var form = $("#form" );
	 	if(form.valid()==true)
	 	{
            var nome =  $('#nome').val();
	 		var codigo =  $('#codigo').val();
	 		var tipo= $('#tipo').val();
	 		var quantidade= $('#quantidade').val();
	 		var preco= $('#preco').val();
            var negocio= $('#negocio').val();

	 		
	 		$.ajax({

	 			method:'post',
      		    url:'formvalidation.php',
      			data: {nome: nome,codigo: codigo, tipo: tipo, quantidade: quantidade, preco: preco,negocio: negocio},
      			dataType: 'html',
      		    
      		});

	 	}

	 });


})


