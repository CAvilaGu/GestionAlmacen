<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content= "width=divice-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
		<title> Sistema de Gestión de Almacén </title>
	</head>
	<body>
		<div class="container">
			<?php
			$username = array('name' => 'username', 'placeholder' => 'Nombre de Usuario', 'class' => 'form-control', 'type' => 'text', 'autofocus');
			$password = array('name' => 'password','placeholder' => 'Contraseña', 'class' => 'form-control', 'type' => 'password');
			$submit = array('name' => 'submit', 'value' => 'Iniciar Sesión', 'title' => 'Iniciar sesión', 'class' => 'btn btn-lg btn-primary btn-block');
			?>	
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<img id="logoInicio" class="img-responsive" src="assets/images/logo.png">
					<h1 id="tituloInicio"> Sistema de Gestión de Almacén </h1>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<div class="panel-body">
						<?=form_open(base_url().'loginControl/new_user')?>
						<?=form_input($username)?> <p> <?=form_error('username')?> </p>
						<?=form_password($password)?> <p> <?=form_error('password')?> </p>
						<?=form_hidden('token',$token)?>
						<?=form_submit($submit)?>
						<?=form_close()?>
						<?php 
							if($this->session->flashdata('usuario_incorrecto'))
								{
						?>
									<p> <?=$this->session->flashdata('usuario_incorrecto')?> </p>
						<?php
								}
						?> 
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="assets/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>