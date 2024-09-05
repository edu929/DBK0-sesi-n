<!Doctype html>
<html>
    <head>
        <title>Eduardo Ernesto Argueta Gomez</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
    <div class="container-fluid">
            <div class="contenedor">
                <div class= "row align-items-center h-100">
                    <div class="col"></div>
                       <div class="col">
                        <div class="align-items-center">
                            <p>Eduardo Ernesto Argueta Gomez</p>
                            <form name="frm-login" id="frm-login" action="core/process.php">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="parrafo_centrado">Inicio de Sesion</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                       <label for="txt_usuario">USUARIO:</label>
                                                       <input type="text" class="form-control" name="txt_usuario" id="txt_usuario" maxlenght="15" aria-description="txt_user_help" required>
                                                       <small id="txt_user_help" class="form-text text_muted">El usuario es obligatorio</small>
                                                    </div>
                                                    <div class = "form-group col-md-6">
                                                       <label for="txt_password">CONTRASEÑA:</label>
                                                       <input type="password" class="form-control" name="txt_password" id="txt_password" maxlenght="15" arial-description="txt_passwort_help" required>
                                                       <small id="txt_password_help" class="form-text text-muted">La contraseña es obligatoria</small>
                                                    </div>
                                                </div>    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <button type="button" class="btn btn-primary" name="btn_entrar" id="btn_entrar">iniciar sesion</button>
                                                <div class="mensaje"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            
			function enviar_datos(u,p){
				$.post($("#frm_login").attr("action"),{
						txt_usuario: u,
						txt_password: p
					}).done(function(datos){
						//console.log(datos.data.url);
						window.location.replace(datos.data.url+"?token="+datos.data.token)
					}).fail(function(xhr, status, error){
						$(".mensaje").html(xhr.responseJSON.mensaje);
					});
			}
			$(document).ready(function(){
				$("#btn_entrar").click(function(){
					enviar_datos($("#txt_usuario").val(),$("#txt_password").val());
				});
				$("#txt_usuario").keypress(function(event){
					if(event.which == 13){
						enviar_datos($("#txt_usuario").val(),$("#txt_password").val());
					}
				});
				$("#txt_password").keypress(function(event){
					if(event.which == 13){
						enviar_datos($("#txt_usuario").val(),$("#txt_password").val());
					}
				});
			});
		</script>
    </body>
    <fooder>
    </fooder>
</html>
