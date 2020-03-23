<?php require_once 'header.php'; 

	$username = "test";
	$password = "123";
	$message = null;
	
	if(isset($_POST['login'])){
		if(isset($_POST['username']) && $_POST['username'] === $username ){
			if(isset($_POST['password']) && $_POST['password'] === $password) {
				$_SESSION['login'] = true;
				header('Location: index.php');
			} else {
				$message = 'Incorrect Password';
			}
		} else {
			$message = 'Incorrect Username';
		}
	}


 ?>

	<form action="login.php" class="login_form" method="POST">
		<?php if(isset($message)): ?>
			<div class="uk-alert uk-alert-danger uk-text-center"><?php echo $message; ?></div>
		<?php endif; ?>
		<div class="uk-margin">
			<label for="" class="uk-form-label">Username</label>
			<div class="uk-form-controls">
				<input type="text" class="uk-input" name="username" placeholder="Username" value="<?=$_POST['username'] ?? false?>">
			</div>
		</div>
		<div class="uk-margin">
			<label for="" class="uk-form-label">Password</label>
			<div class="uk-form-controls">
				<input type="password" class="uk-input" name="password" placeholder="Password">
			</div>
		</div>
		<div class="uk-margin">
			<button class="uk-button uk-button-primary" name="login">Login</button>
		</div>
	</form>

<?php require_once 'footer.php'; ?>