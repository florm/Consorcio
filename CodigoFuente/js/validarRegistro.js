$(document).ready(function () {
   $("#rpassword").keyup(checkPasswordMatch);
});

$(document).ready(function () {
   $("#password").keyup(checkPasswordMatch2);
});

 function checkPasswordMatch2() {
 	var repeatPass= $('#rpassword').val();
	var repeatclave = repeatPass.length;

	 if (repeatclave>0){
	    var password = $("#password").val();
	    var confirmarPassword = $("#rpassword").val();

	    if (password != confirmarPassword){
	        $("#checarSiSonIguales").html("<div class='alert alert-danger'> Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
	   		$("#registrarse").prop("disabled", true);
		} else{
	        $("#checarSiSonIguales").html("<div class='alert alert-success'> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
	        $("#registrarse").prop("disabled", false); 
	   	}
	}
}

function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmarPassword = $("#rpassword").val();

    if (password != confirmarPassword){
	    var contador=0;
	    $("#checarSiSonIguales").html("<div class='alert alert-danger'> Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
	    $("#registrarse").prop("disabled", true); 
	} else{
    	contador=1; 
        $("#checarSiSonIguales").html("<div class='alert alert-success'> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
        $("#registrarse").prop("disabled", false); 
    }
}



