<?php
require 'conf.php';
require 'header.php';

if ($_POST) {
    $login = $db->real_escape_string(htmlspecialchars(trim($_POST['login'])));
    $password = $_POST['password'];
    $passwordVerify = $_POST['password_v'];
    $email = $db->real_escape_string(htmlspecialchars(trim($_POST['email'])));
    $emailVerify = $db->real_escape_string(htmlspecialchars(trim($_POST['email_v'])));
	$role = $_POST['role'];
	$klasa = $_POST['klasa'];
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
    $checkLogin = $db->query("SELECT COUNT(*) FROM users WHERE login = '$login'")->fetch_row();
    $checkEmail = $db->query("SELECT COUNT(*) FROM users WHERE email = '$email'")->fetch_row();
	
	//Podstawowa walidacja formularza
    $errors = array();

    if (empty($login) || empty($email) || empty($emailVerify) || empty($password) || empty($passwordVerify) || empty($imie) || empty($nazwisko)) {
        $errors[] = 'Proszę wypełnić wszystkie pola';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 
		'<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h3>Podany adres e-mail jest niepoprawny</h3>
			</div>
		</div>
		';
    }

    if ($checkLogin[0] > 0) {
        $errors[] = 
		'<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h5>Ten login jest już zajęty</h5>
			</div>
		</div>';
    }
    if ($checkEmail[0] > 0) {
        $errors[] = 
		'<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h5>Ten email jest już uzywany</h5>
			</div>
		</div>
		';
    }

    if ($password != $passwordVerify) {
        $errors[] = '<div class="bs-example">as
			<div class="alert alert-danger fade in">
				<h5>Podane hasła się nie zgadzają</h5>
			</div>
		</div>';
    }
    if ($email != $emailVerify) {
        $errors[] = '<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h5>Podane adresy e-mail sie nie zgadają</h5>
			</div>
		</div>';
    }
	if (!isset($_POST['role']))
	{
		$errors[] = '<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h5>Zaznacz </h5>
			</div>
		</div>';
	}
		if (!isset($_POST['klasa']))
	{
		$errors[] = '<div class="bs-example">
			<div class="alert alert-danger fade in">
				<h5>Zaznacz </h5>
			</div>
		</div>';
	}
	
    // Jeżeli wystąpiły jakieś błędy to są pokazywane
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }
		
    } else {
        // Blędów nie ma, możemy kontynuować rejestrację

        $password = password_hash($password, PASSWORD_BCRYPT); // hashowanie hasła

        // Zapisuje dane do bazy
        $result = $db->query("INSERT INTO users (imie,nazwisko,login, email, password, rola, id_klasy) VALUES('$imie', '$nazwisko', '$login', '$email', '$password', '$role', '$klasa')");
		

        if (!$result) {
            echo '<p class="error">Wystąpił błąd przy rejestrowaniu użytkownika.<br>'.$db->error.'</p>';
        } else {
			$db->query("INSERT INTO wyniki (id) VALUES(".$db->insert_id.")");
            echo 
			'<script>location.href = "login.php";</script>';
			
        }
    }
}

?>
<div class="container logowanie">
	<div class="row">
		<div class="col-lg-4">
		
		</div>
		<div class="col-lg-4">
			<div class="container">
					
						<div class="panel2">
							<form class="form-signin" method="post" action="register.php">
								<h2 class="form-signin-heading">REJESTRACJA</h2>
								</br>
								
								<label for="imie" class="sr-only">Imie</label>
								<input type="text" name="imie" maxlength="15" id="imie" class="form-control" placeholder="Imie" required autofocus>
								</br>
								<label for="nazwisko" class="sr-only">Nazwisko</label>
								<input type="text" name="nazwisko" maxlength="50" id="nazwisko" class="form-control" placeholder="Nazwisko" required autofocus>
								</br>
								<label for="login" class="sr-only">Login</label>
								<input type="text" name="login" maxlength="32" id="login" class="form-control" placeholder="Login" required autofocus>
								</br>
								<label for="inputPassword" class="sr-only">Hasło</label>
								<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Hasło" required>
								</br>
								<label for="inputPassword" class="sr-only">Hasło (ponownie)</label>
								<input type="password" name="password_v" id="inputPassword_v" class="form-control" placeholder="Powtórz hasło" required>
							   </br>
							   <label for="email" class="sr-only">Email:</label>
								<input type="email" name="email" maxlength="255" class="form-control" placeholder="Email" id="email" required>
								</br>
								<label for="email_v" class="sr-only">Email (ponownie):</label>
								<input type="email" name="email_v" maxlength="255" class="form-control" placeholder="Powtórz Email" id="email_v" required>
								</br>
								<span class="label label-warning">Kim jestem?</span>
								</br>
									
									<label> 
										<input type="radio" name="role" value="nauczyciel">Nuczyciel
									</label> 
									</br>
									<label> 
										<input type="radio" name="role" value="uczen">Uczeń
									</label> 
									</br>
								<span class="label label-warning">Wybierz klasę</span>
								</br>
								<?php 
								$klasy = $db->query("SELECT id_klasy, nazwa FROM klasy ORDER BY nazwa");
								while ($i = $klasy->fetch_assoc()) {
									echo '<label> 
										<input type="radio" name="klasa" value="'.$i['id_klasy'].'">'.$i["nazwa"].'
									</label> ';
									
									
								} $klasy->free(); ?>
									
									
								</br>
								<button class="btn btn-lg btn-primary btn-block" type="submit">Zarejestruj się</button>
							</form>
						  </div>
						
			</div>
		</div>
		<div class="col-lg-4">
		
		</div>
	</div>
</div>
	<?php
	require 'footer.php';