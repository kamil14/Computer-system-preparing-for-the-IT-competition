<?php
	require 'conf.php';
	require 'header.php';
	
	if ($user->check()) 
	{ // pokazuje sie użytkownikom zalogowanym
		// Pobiera dane o użytkowniku i zapisuje je do zmiennej $userData
		$userData = $user->data();
		if($userData['rola'] == 'nauczyciel')
		{

		   echo 
		
			'
			<div class="container index1">
				<div class="row">
					<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="jum">
									<div class="jumbotron">
										<div class="container">
											<h1>Witaj '.$userData['login'].'</h1>
											<div class="log">
												<b>Możesz wejść na swój profil</b>
												</br>
												</br>
											<br><a href="wyniki1.php?id='.$userData['id'].'" class="btn btn-success btn-lg">Sprawdź uczniów</a>
											</br>
											<br><a href="profile.php?id='.$userData['id'].'" class="btn btn-success btn-lg">Profil</a>
												
											</div>
											<div class="res">
												<b>Jeżeli nie chcesz przeglądać profilu</b>
												</br>
												</br>
												</br><a href="logout.php" class="btn btn-success btn-lg">wyloguj się</a>
											</div>
										</div>
									</div>
							</div>
						</div>
					<div class="col-lg-1"></div>
						
				</div>
			
			</div>
			';
			
		}
		else
		{
			
			echo 
			
			'
			<div class="container index2">
				<div class="row">
					<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="jum">
									<div class="jumbotron">
										<div class="container">
											<h1>Witaj '.$userData['login'].'</h1>
											<div class="log">
												<b>Możesz wejść na swój profil</b>
												</br>
												</br>
											<br><a href="profile.php?id='.$userData['id'].'" class="btn btn-success btn-lg">Profil</a>
												
											</div>
											<div class="res">
												<b>Jeżeli nie chcesz przeglądać profilu</b>
												</br>
												</br>
												</br><a href="logout.php" class="btn btn-success btn-lg">wyloguj się</a>
											</div>
										</div>
									</div>
							</div>
						</div>
					<div class="col-lg-1"></div>
						
				</div>
			
			</div>
			';
		}
	}	
	else 
		{
			// pokazuje sie użytkownikom niezalogowanym
			echo 
			'
			<div class="container index">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<div class="jum">
							<div class="jumbotron">
								<div class="container">
									<h1>Cześć!</h1></br> <h1>Miło mi, że odwiedziłeś tę stronę! </h1>
									<h2>Dlaczego warto skorzystać z tego portalu i treści w niej zawartych? </h2>
									<h3>Dzięki tej stronie nauczysz sie dużo podstawowych oraz zaawansowanych rzeczy z zakresu informatyki oraz doskonale przygotujesz sie do konkursu Informatycznego </h3>
									</br>
									<div class="log">
										<b>Jęzeli masz już konto, zaloguj się.</b>
										</br>
										</br>
										<br><a href="login.php" class="btn btn-success btn-lg">Zaloguj się</a>
									</div>
									<div class="res">
										<b>Jeżeli nie masz konta, zarejestruj się.</br>To potrwa tylko chwilę :) </b>
										</br>
										</br><a href="register.php" class="btn btn-success btn-lg">Zarejestruj się</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
			';
			
		}
		require 'footer.php';
?>

