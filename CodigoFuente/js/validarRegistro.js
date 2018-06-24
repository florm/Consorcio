$(document).ready(function () {
   $("#rpassword").keyup(checkPasswordMatch);
   $("#password").keyup(checkPasswordMatch2);
   $("#username").keyup(checarUsuarios);
   $("#username").change(checarUsuarios);
});

 function checkPasswordMatch2() {
 	var repeatPass= $('#rpassword').val();
	var repeatclave = repeatPass.length;

	 if (repeatclave>0){
	    var password = $("#password").val();
	    var confirmarPassword = $("#rpassword").val();

	    if (password != confirmarPassword){
	        $("#checarSiSonIguales").html("<div class='alert alert-danger'> Las contraseñas NO coinciden<input value='error' type='hidden' name='passwordchecker'></div>");
	   		//$("#registrarse").prop("disabled", true);
		} else{
	        $("#checarSiSonIguales").html("<div class='alert alert-success'> Las contraseñas coinciden<input type='hidden'  value='1' name='passwordchecker'></div>");
	        //$("#registrarse").prop("disabled", false); 
	   	}
	}
}

function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmarPassword = $("#rpassword").val();

    if (password != confirmarPassword){
	    var contador=0;
	    $("#checarSiSonIguales").html("<div class='alert alert-danger'> Las contraseñas NO coinciden<input value='error' type='hidden' name='passwordchecker'></div>");
	    //$("#registrarse").prop("disabled", true); 
	} else{
    	contador=1; 
        $("#checarSiSonIguales").html("<div class='alert alert-success'> Las contraseñas coinciden<input type='hidden'  value='1' name='passwordchecker'></div>");
        //$("#registrarse").prop("disabled", false); 
    }
}

function checarUsuarios() {
    
	var username= $('#username').val();
	var userlenght = username.length;

	if (userlenght<4){
		$("#checarSiExiste").html("<div class='alert alert-danger'>El usuario debe tener almenos 4 caracteres<input value='error' type='hidden' name='passwordchecker'></div>");
		$("#registrarse").prop("disabled", true);
	} else{
		$.ajax({
			url:"../usuario/revisarExistencia",
		    method:"POST",
		    data:{username:username},
		    success:function(data){

		    	if (data == 0) {
		    		$("#checarSiExiste").html("<div class='alert alert-danger'>El nombre de usuario ya existe</div>");
		        	$("#registrarse").prop("disabled", true);
		    	} else {
		    		$("#checarSiExiste").html("<div class='alert alert-success'>El nombre usuario esta disponible</div>");
		        	$("#registrarse").prop("disabled", false);
		    	}
		        
		    }
		});
	}
}