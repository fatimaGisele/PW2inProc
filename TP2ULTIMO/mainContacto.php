<?php 

require_once "funciones.php";


$formValido = false;
if($_POST) {
	$formValido = validarFormulario($_POST);
}

if($formValido) {
	guardarFormulario($_POST);
}

?>

<main>

	<h1 class="p-4 text-center">Contacto</h1>
	
	<div class="container">
	    <div class="row">
		<div class="col-md-8">
		    <div class="well well-sm">
		        <form id="formulario-contacto" action="#" method="post">
		        <div class="row">
		            <div class="col-md-6">
		                <div class="form-group">
		                    <label for="name">Nombre y Apellido</label>
		                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej. Juan José" required="required" />
		                </div>
		                <div class="form-group">
		                    <label for="email">Dirección de E-mail</label>
		                    <div class="input-group">
		                        <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@gmail.com" required="required" />
							</div>
							<small id="email-ayuda" class="form-text text-muted email-ayuda">Tu E-mail no se compartirá con nadie más.</small>
		                </div>
		                <div class="form-group">
		                    <label for="name">Teléfono</label>
		                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+54 11 1234-4567" required="required" />
		                </div>
                        <div class="form-group">
                            <label for="area">Área de Contacto</label>
                            <select id="area" name="area" class="form-control" required="required">
                                <option value="atencion-al-cliente">Atención al Cliente</option>
                                <option value="ventas">Ventas</option>
                                <option value="legales">Legales</option>
                            </select>
                        </div>
		            </div>
		            <div class="col-md-6">
		                <div class="form-group">
		                    <label for="name">Tu mensaje</label>
		                    <textarea name="mensaje" id="mensaje" class="form-control" rows="9" cols="25" required="required"
		                        placeholder="Escribe aquí..."></textarea>
		                </div>
		            </div>
		            <div class="col-md-12">
		                <button type="submit" class="btn btn-primary" id="boton-enviar">Enviar mensaje</button>
		            </div>
		        </div>
		        </form>
		    </div>
		</div>
		<div class="col-md-4">
		    <form>
		    <h4>Vení a conocernos</h4>
		    <address>
		        <strong>MLF &copy;</strong><br>
		        Av. Corrientes 2037 / C.A.B.A<br>
		        4523-0292
		    </address>
		    <address>
		        <strong>Dirección E-mail</strong><br>
		        <a href="mailto:contacto@mlf.com">contacto@mlf.com</a>
		    </address>
		    </form>
		</div>
	    </div>
	</div>
</main>
