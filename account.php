<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
require_once 'header.php';?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->account( $_POST );
			if($data)$success = PASSOWRD_CHANAGE_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		} 
	}
?>
     	<div class="container">
     		<div class="col-md-6 col-sm-6 col-xs-12">
     			<?php require_once 'templates/message.php';?>
     			<h1>Mi cuenta:</h1><br>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-horizontal myaccount" role="form">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-span">Nombres</label>
						<div class="col-sm-8">
							<label> <?php echo $_SESSION['name']; ?> </label>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-span">Correo electrónico</label>
						<div class="col-sm-8">
							<label> <?php echo $_SESSION['email']; ?> </label>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-span">Contraseña Actual</label>
						<div class="col-sm-8">
							<input name="old_password" id="old_password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-span"> Nueva Contraseña</label>
						<div class="col-sm-8">
							<input name="password" id="password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-4 control-span"> Confirmar Contraseña</label>
						<div class="col-sm-8">
							<input name="confirm_password" id="confirm_password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
					<input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" />
					
					
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-primary" id="submit_btn" data-loading-text="Cambiando contraseña....">Cambiar Contraseña</button>
						</div>
					</div>
				</form>
		</div>
     		<?php require_once 'templates/sidebar.php';?>
     		
    </div> <!-- /container -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/account.js"></script>    
<?php require_once 'footer.php';?>
	

