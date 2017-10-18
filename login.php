
<?php
require 'conf.php';
require 'header.php';

// Zabezpiecz zmienne odebrane z formularza, przed atakami SQL Injection
if(isset($_POST['login']) ){
$login = $db->real_escape_string(htmlspecialchars(trim($_POST['login'])));
$password = $_POST['password'];
}

if ($_POST) {
	
    // Podstawowa walidacja formularza
    $errors = array();
if (empty($login) || empty($password)) {
        $errors[] = 'Wypełnij wszystkie pola';
    }
	
    $auth = $user->auth($login, $password);
    if (!$auth) 
	{
        $errors[] = '
		<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h3>Uzytkownik o podanym loginie, haśle lub roli nie istnieje</h3>
			</div>
		</div>
		';
    }

		if (empty($errors))
		{
			// Jeżeli nie ma błędów to przechodzi dalej
			// Zapisujemy ID użytkownika do sesji i tym samym oznaczamy go jako zalogowanego
			$_SESSION['user_id'] = $auth;
			
			echo '<script>location.href = "index.php";</script>';
		}
		
		else 
		{
			foreach ($errors as $error) 
			{
				echo '<p class="error">'.$error.'</p>';
			}
		}
	
}
?>
<div class="container logowanie"
	<div class="row">
		<div class="col-lg-4">
		
		</div>
		<div class="col-lg-4">
			<div class="container">
				
				<div class="panel2">

				  <form class="form-signin" method="post" action="login.php">
					<h2 class="form-signin-heading">LOGOWANIE</h2>
					</br>
					<label for="login" class="sr-only">Login</label>
					<input type="text" name="login" maxlength="32" id="login" class="form-control" placeholder="Login" required autofocus>
					</br>
					<label for="inputPassword" class="sr-only">Hasło</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Hasło" required>
				   </br>
								
					<button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj się</button>
				  </form>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
		
		</div>
	</div>
	<script src="js/jquery-2.2.0.min.js"></script>
<?php
require 'footer.php';