<?php
require 'conf.php';
require 'header.php';

// sprawdza czy uzytkownik jest zalogowany
if (!$user->check()) {
    echo '<p class="error">Przykro nam, ale ta strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
    require 'footer.php';
    die;
}
?>


<div class="container roz1_1szk">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<h1><strong>Czego szukasz?</br>Co chcesz wiedzieć?</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>W zależności od tego, jakich informacji szukamy, możemy korzystać
						z różnych źródeł - słownika, encyklopedii, ksiązek w bibliotece, albumów...
						W dzisiejszych czasach coraz więcej informacji jest też zamieszczanych w internecie.
						Trzeba tylko wiedzieć, gdzie można je znaleźć. Warto także pamiętać o tym, 
						aby sprawdzić wiarygodność uzyskiwanych w ten sposób informacjii danych.
					</h3>
				</div> 
			</div>
			</div>
			
		</div>
		</br>
			</br>
			</br>
			
		<div class="row">
			
			<div class="col-lg-12">
			<div class="media"> 
				<div class="media-left">  
				</div> 
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h2 class="panel-title">Szukamy w Google</h2> 
							</div> 
							<div class="panel-body">Wiesz już, że strony WWW znajdują się na serwerach pod różnymi adresami internetowymi.
							 Co jednak możemy zrobić. gdy nie znamy adresu szukanej strony? Z pomocą przychodzą nam wtedy <b>internetowe wyszukiwarki</b>.
							 Umożliwiają one szybkie znalezienie innych stron i informacji w internecie. Najpopularniejszą wyszukiwarką jest <b>www.google.com</b> 
							 i jej polska wersja <b>www.google.pl</b>. Inna wyszukiwarkę możesz znaleźć pod adresem <b>www.bing.com</b>. Po wpisaniu w oknie 
							 wyszukiwarki słowa lub grupy słów związanych z interesującym cię tematem, wyświetlą się linki do stron WWW zawierających szukane hasła.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="media"> <img class="media-object" style="width: 600px; height: 400px; margin-left:300px;" src="images/google.png" data-holder-rendered="true"> 
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
						<h1 class="panel-title"><h1>!!</h1></h1> 
						</div> 
						<div class="panel-body"> <strong>Wyszukiwarka internetowa to program lub strona WWW, które ułatwiają przeszukiwanie zasobów internetu:stron, grafik, multimediów</strong>
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> <h1>Z pomocą wyszukiwarek możesz również przeszukiwać zgromadzone w internecie multimedia:grafikę, zdjęcia, filmy.
						W tym celu musisz wybrać odpowiedni link. Zobacz rysunek.</h1> </div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 800px; height: 600px;" src="images/gografika.png" data-holder-rendered="true"> </a></div></div>
				</div>
			</div>
			</br>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Wiem wszystko</h3> 
							</div> 
							<div class="panel-body"> To jednak nie wszystkie możliwości przeglądarek internetowych. Nie każdy wie, że 
							Google działa tez jak kalkulator, słownik ortograficzny,a nawet przelicznik jednostek.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 500px; height: 300px;margin-left:300px;" src="images/gokal.png" data-holder-rendered="true"> </a></div></div>
				</div>
			</div>
			
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Wirtualne podróże</h3> 
							</div> 
							<div class="panel-body"> Po obejrzeniu zdjęć i filmów związanych na przykłąd z Maczugą Herkulesa w Ojcowskim Parku Narodowym
							Możesz nabrać ochoty, aby zobaczyć ją na żywo. Dzięki odpowiednim stronom internetowym sprawdzisz, jak to jest daleko. Takie
							portale często pozwalają nie tylko opracować trasę przejazdu, ale także znaleźć noclegi i miejsca, gdzie można zjeść posiłek. 
							Najpopularniejsze serwisy tego typu to <b>www.maps.google.pl i zumi.pl</b>
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 500px; height: 300px;margin-left:300px;" src="images/maps.png" data-holder-rendered="true"> </a></div></div>
				</div>
			</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h1 class="panel-title"><h1>Poczta z małpką</h1></h1> 
							</div> 
							<div class="panel-body">Wiesz już, że Internet to ogólnoświatowa sieć połączonych ze sobą komputerów. 
							Znasz też najpopularniejszą z internetowych usług, czyli strony WWW. Inną bardzo użyteczną i popularną 
							usługą jest poczta elektroniczna. Opowiem dzisiaj o niej trochę więcej.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h1 class="panel-title">O co chodzi z tą małpą?</h1> 
							</div> 
							<div class="panel-body">Pocztę elektroniczną nazywamy też pocztą e mail. Podobnie jak w tradycyjnej poczcie,
							używamy w niej adresów. Gdy chcesz wysłać zwykły list,na kopercie musisz napisać imię i nazwisko adresata, 
							ulicę i numer domu, miasto oraz kod pocztowy. Gdy chcesz ten sam list wysłać przez internet w postaci e-mail, 
							również musisz go zaadresować,tylko inaczej. Należy napisać do jakiej osoby go wysyłasz oraz na jakim serwerze 
							znajduję się jej <b>konto pocztowe</b>. Poczta internetowa podobnie jak strony WWW, to usługa udostępniana przez serwery. 
							Jest obsługiwana przez zainstalowane na nich specjalne oprogramowanie. Właśnie dzięki takiemu oprogramowaniu każdy 
							internauta może założyć sobie wirtualną skrzynkę pocztową czyli inaczej konto pocztowe. 
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="media"><img class="media-object" style="width: 500px; height: 100px;margin-left:300px;" src="images/uwaga1.png" data-holder-rendered="true"></div>
				</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-body">Wśród kont pocztowych wyróżniamy konta bezpłatne i płatne. Bezpłatne konto możesz 
							założyć na wielu serwerach dostępnych w internecie. Każdy z nich ma swój adres. Na przykład: <b>wp.pl , interia.pl , onet.pl</b></br>
							Przykładowy adres e-mail może wyglądać tak: <b>jakub.kubowski@operon.pl</b>
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="media"><img class="media-object" style="width: 500px; height: 100px;margin-left:300px;" src="images/uwaga2.png" data-holder-rendered="true"></div>
				</div>
			</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-body">Każdy adres musi być niepowtarzalny w skali światowej. 
							Nie mogą go mieć jednocześnie dwie osoby. W takiej sytuacji program pocztowy 
							nie wiedziałby do kogo skierować daną wiadomość e-mail.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h1 class="panel-title"><h1>NETYKIETA</h1></h1> 
							</div> 
							<div class="panel-body">W internecie, tak jak w realnym świecie obowiązują pewne zasady postępowania.
								Nazywamy je etykietą. W języku angielskim słowo "net" oznacza sieć. Z połączenia
								tych dwóch słów powstało określenie zbioru zasad zachowania obowiązujących
								w internecie.
								<b>net + etykieta = netykieta</b>
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h1 class="panel-title"><h1>!!!</br> Najważniejsze zasady netykiety.</h1></h1> 
							</div> 
							<div class="panel-body">
							<b>1.Nie pisz samymi dużymi literami. W sieci inni
								mogą odebrać to jako krzyk.</br>
								2.Nie spamuj, czyli nie wysyłaj niechcianych e-maili</br>
								3.Nie umieszczaj w sieci zdjęć innych osób bez ich
								zgody.</br>
								4.Pisz zgodnie z regułami ortograficznymi.</br>
								5.Osoby,z którymi rozmawiasz przez internet traktuj
								z szacunkiem.</br>
								6.Nie nadużywaj emotikonów - ikon wyrażających emocje.</b>
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="media"><img class="media-object" style="width: 600px; height: 500px;margin-left:300px;" src="images/ciekawostka.png" data-holder-rendered="true"></div>
				</div>
			</div>
		
		
		<div class="row">
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination"style="margin-left:350px;"> 
				<?php echo'
				<li>
					<a href="roz1.5_szk.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz1_szk.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="roz1.1_szk.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li>
					<a href="roz1.2_szk.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li>
					<a href="roz1.3_szk.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				<li>
					<a href="roz1.4_szk.php?id='.$_GET['id'].'">1.4</a>
				</li> 
				<li>
					<a href="roz1.5_szk.php?id='.$_GET['id'].'">1.5</a>
				</li>
				<li class="active">
					<a href="roz1.6_szk.php?id='.$_GET['id'].'">1.6</a>
				</li>
				<li>
					<a href="roz1.7_szk.php?id='.$_GET['id'].'">1.7</a>
				</li> 
				<li>
					<a href="roz1.8_szk.php?id='.$_GET['id'].'">1.8</a>
				</li> 
				<li>
					<a href="roz1.7_szk.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> ';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';