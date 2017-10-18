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
				<h1><strong>Komputerowe pisanie</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Komputer jest urządzeniem, które może służyć do robienia
						wielu rzeczy. Pewnie wiesz, że potrafi również pisać. Oczywiście, nie dosłownie.
						Komputer nie przygotuje za ciebie wybracowania z języka poslkiego i nie odrobi za ciebie lekcji! 
						Może jednak świetnie zastąpić dawną maszynę do pisania. Maszyna do pisania w porównaniu z komputerem jest jak pisanie patykiem
						na piasku wobec używania długopisu z kolorowymi wkładami na kartce papieru. Po zabawie w artystę grafiki i fotografa czas
						więc zabrać się za pracę pisarską. Na lekcjach języka polskiego uczysz się zasad ortograficznych i budowania poprawnych zdań.
						Teraz dowiesz się, w jaki sposób można zapisać je na komputerze. Poznasz tez kilka reguł, dzięki którym napisany tekst będzie się ładnie prezentował. 
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
							<h2 class="panel-title">Programem pisane</h2> 
							</div> 
							<div class="panel-body">Pewnie domyślasz się, że do pisania na komputerze musisz mieć specjalny program.
							Nazywa się go <b>edytorem tekstu</b>, ponieważ służy do pisania. Najprostszy, powszechnie znanym
							edytorem tekstu jest <b>Notatnik</b> dołączony do systemu operacyjnego Windows. Spotkasz sie z nim na pewno
							wiele razy. To właśnie w nim informatycy zapisują krótkie informacje dla użytkowników programów.
							Są one zamieszczone na płytach razem z plikami instalacyjnymi pod nazwą "CZYTAJTO", częściej po angielsku "README"
							(czytaj: ridmi). Pliki utworzone w Notatniku mają rozszerzenie .txt i zajmują bardzo mało miejsca na twardym dysku.
							Notatnik możesz uruchomić podobnie program Paint. Kliknij myszką przycisk menu <b>START</b> i poszukaj go w Akcesoriach.
							Jest też inny, dużo prostszy sposób. Przyda sie zwłaszcza tym osobom, które dużo piszą na klawiaturze. Nie trzeba
							tutaj w ogóle sięgać po myszkę! Naciśnij klawisz <b>Windows</b> na klawiaturze - jest on oznaczony znanym logo. W polu <b>Wyszukaj</b> wpisz słowo <b>notatnik</b>.
							Szukany program pojawi się w menu. W ten sposób możesz uruchomić również inne programy, jak choćby wspomniany wcześniej Paint.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="media">
				<img class="media-object" style="width: 400px; height: 300px;" src="images/notatnik.png" data-holder-rendered="true">
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="media">
				<img class="media-object" style="width: 400px; height: 500px;" src="images/menunot.png" data-holder-rendered="true">
				</div>
			</div>
			<div class="col-lg-6">
					<div class="media">
					<img class="media-object" style="width: 400px; height: 300px;" src="images/kl.png" data-holder-rendered="true">
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						
						<div class="panel-body"> W Akcesoriach znajdziesz jeszcze jeden edytor tekstu wbudowany w systemie Windows.
							Nazywa się <b>WordPad</b> i ma dużo większe możliwości. Przyjrzymy się mu bliżej na rysunku poniżej.
							Przed napisaniem swojego pierwszego swojego pierwszego tekstu zapoznaj sie z kilkoma zasadam.
							Należy ich przestrzegać przy korzystaniu z edytora.
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 600px; height: 400px;" src="images/wordpad.png" data-holder-rendered="true"> </a></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
							<h3 class="panel-title">Kiedy spację, a kiedy akapit</h3> 
						</div> 
						<div class="panel-body">- Znaki interpunkcyjne stawiamy tuż po słowie lub innym znaku - bez odstępu, czyli spacji. Zatem przed: kropką, przecinkiem, wielokropkiem, 
						dwukropkiem, średnikiem, pytajnikiem i wykrzyknikiem nie rób spacji! 
						Dopiero po tych znakach odstęp jest obowiązkowy.</br>
						-Przed nawiasem i po nawiasie oraz przed cudzysłowem i po nim musi być spacja. Pamiętaj też, że tekst, który znajduje się w nawiasie oraz cudzysłowie, nie powinien być oddzielany
						od nich spacją. Spójrz na przykład: Czytaj:"Przygody Mikołajka"i śmiali się serdecznie(trudno przy tej książce się nie śmiać).</br>
						- Pewnie wiesz, że każdy tekst składa się z akapitów. Zazwyczaj jest to wyodrębniona część tekstu zaczynająca się od nowego wiersza. Dotyczy jednej myśli, na przykład opisu jakiegoś wydarzenia. 
						W edytorze tekstu akapit oddzielamy znakiem<b>ENTER</b>. To ty musisz wiedzieć, kiedy chcesz zakończyć w swojej pracy akapit i kliknąć klawisz<b>ENTER</b>. 
						Podczas pisania wypowiedzi od akapitu należy rozpocząć wstęp, rozwinięcie i zakończenie. Wobrębie tych części także stosuje się akapity.</br>
						- Tekst nie powinien być podzielony na akapity w taki sposób, aby na jednej stronie znalazła się tylko jedna linijka, a reszta już na kolejnej.</br>
						- Akapit zaznaczamy zazwyczaj specjalnym wcięciem wykonywanym za pomocą przycisku <b>Tabulator</b>.</div> 
					</div>
				</div>
			</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Klawiaturowe sztuczki</h3> 
							</div> 
							<div class="panel-body"> Wiem że nie możesz się już doczekać, aby zasiąść do klawiatury. Jeszcze tylko
							słowo o pewnych przydatnych klawiaturowych skrótach i sprytnych kliknięciach myszką.
							</br>
							</br>
							</br>
							<b>- Ctrl + Home</b> - wracasz na początek tekstu</br>
							<b>- Ctrl + End</b> - wędrujesz na koniec tekstu</br>
							<b>- Home</b> - idziesz na początek linijki, czyli wiersza</br>
							<b>- End</b> -idziesz na koniec wiersza</br>
							<b>- Ctrl + strzałka w bok</b> -skok o jedno słowo</br>
							<b>- Ctrl + strzałka w góre lub w dół</b> -skok o jeden akapit</br>
							<b>- PgUp</b> -jedno okno w góre</br>
							<b>- PgDn</b> -jedno okno w dół</br>
							<b>- Ctrl + A</b> -zaznaczasz cały teskt</br>
							<b>- Kliknięcie dwa razy na słowo</b> -zaznaczasz słowo</br>
							<b>- Klikniecie trzy razy w dowolnym miejscu</b> -zaznaczasz cały akapit</br>
							<b>- Ctrl + Z</b> - cofnij ostatni wpis</br>
							<b>- Ctrl + Y</b> -ponów wpis</br>
							</br>
							</br>
							Jest jeszcze kilka ciekawych rozwiązań, ale na razie te podane powninny ci wystarczyć.
							Jeśli jednak koniecznie chcesz zaspokoić swoją ciekawość, możesz dodać do wymienionych skrótów klawisz <b>Shift</b>.
							Niektóre z nich zadziałają inaczej. Znasz już podstawowe zasady oraz skróty klawiaturowe. Napisz teraz krótki tekst o pewnej książce.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="media"><img class="media-object" style="width: 800px; height: 600px;margin-left:200px;" src="images/zadanietekst.png" data-holder-rendered="true"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">Kiedy skończysz pisanie, pamitaj o zapisaniu dokumentu. Spójrz na rysunek poniżej.
						Znajdziesz tam informacje o tym, w jaki sposób szybko znajdować wyrazy w tekscie.</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"><img class="media-object" style="width: 800px; height: 500px;margin-left:100px;" src="images/zapisywanie.png" data-holder-rendered="true"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">Warto nauczyć się pisać wszydtkimi palcami obu rąk. Dzięki temu zamiast patrzeć na klawiaturę, będziesz śledzieć na ekranieswój tekst.
						Wymaga to trochę wysiłku, ale bardzo ułatwi ci prace z komputerem. Do nauki bezwzrokowego pisania na klawiaturze służa specjalne oprogramowania.</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"><img class="media-object" style="width: 600px; height: 300px;margin-left:100px;" src="images/klawiatura.png" data-holder-rendered="true"></div>
				</div>
			</div>
		
			
		
		
		<div class="row">
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination" style="margin-left:350px;"> 
				<?php echo'
				<li>
					<a href="roz1.3_szk.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li >
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
				<li class="active">
					<a href="roz1.4_szk.php?id='.$_GET['id'].'">1.4</a>
				</li> 
				<li>
					<a href="roz1.5_szk.php?id='.$_GET['id'].'">1.5</a>
				</li> 
				<li>
					<a href="roz1.6_szk.php?id='.$_GET['id'].'">1.6</a>
				</li> 
				<li>
					<a href="roz1.7_szk.php?id='.$_GET['id'].'">1.7</a>
				</li>
				<li>
					<a href="roz1.8_szk.php?id='.$_GET['id'].'">1.8</a>
				</li> 
				<li>
					<a href="roz1.5_szk.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> ';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>
<?php
	require 'footer.php';