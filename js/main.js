jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();

jQuery.ajax({
  url: 'login.php',
  type: 'POST',
  dataType: 'json',
  data: $(this).serialize(),
  beforesend: function() {
    $('.botonlg').val('Validando...');
  }
}).done( function(respuesta) {
    console.log(respuesta);
    if(!respuesta.error){
        location.href = 'listado.php';
    }else{
       $('.error').slideDown('slow');
       setTimeout(function(){
        $('.error').slideUpp('slow');
       },3000);
       $('.botonlg').val('Iniciar Sesión');
    }
  })

.fail( function(resp) {
    console.log(resp.responseText);
  })
.always(function(){
	console.log("complete");
});
});
