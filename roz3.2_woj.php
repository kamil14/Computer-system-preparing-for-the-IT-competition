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


<div class="container roz1_1szk" style="background-image: url('images/tapetar3.png');">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<h1><strong>Ruchome obrazki</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer3.png" data-holder-rendered="true">
				 
				<div class="media-body"> 
					<h3>Potrafisz przygotować kolorowe, ozdobione grafiką slajdy. Nie jest to trudne. Wiele narzędzi i opcji używanych w programie do tworzenia prezentacji przypomina te stosowane w poznanych wcześniej edytorach tekstu. Czas poznać to, co odróżnia te programy od siebie. Są to animacje, czyli poruszające się elementy pokazu – obrazy i teksty. Dzięki nim Twoja prezentacja stanie się jeszcze bardziej atrakcyjna dla widza. W ten sposób zbliży się trochę do sztuki filmowej!
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
							<h2 class="panel-title">Porusz się</h2> 
							</div> 
							<div class="panel-body">
							1.	Otwórz stworzoną wcześniej w programie PowerPoint prezentację o Chopinie. Po kliknięciu w zakładce <b>Animacje</b> przycisku <b>Okienko</b> animacji zobaczysz obszar roboczy. W nim znajduje się lista wprowadzonych zdarzeń. Nowe okienko otworzy się z prawej strony okna projektu. Pełni ono taką samą funkcję jak okno po lewej stronie – pozwala kontrolować kolejność i rodzaj wprowadzanych opcji.</br>
							2.	Kliknij myszą na wizerunek kompozytora. Następnie w obszarze <b>Animacja</b> wybierz tak zwany <b>Efekt wejścia</b> o nazwie Koło. Nazywa się on efektem wejścia, ponieważ dodajemy go do pliku graficznego w momencie wejścia. Gdy klikniesz na tym efekcie, program powinien uruchomić jego podgląd. W <b>Okienku animacji</b> pojawi się wtedy ikona pierwszego wprowadzonego zdarzenia.

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez1.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						 
						<div class="panel-body"> 
						3.	Za pomocą przycisku <b>Otwórz</b> możesz otworzyć podgląd wprowadzonych animacji. Podgląd okaże się bardzo pomocny, gdy w okienku będzie już kilka ikon i zechcesz dodać kolejny efekt lub zmienić kolejność ich wyświetlania podczas pokazu.</br>
						4.	Jeśli chodzi o animację napisów, zasada jest taka sama. Kliknij myszką na tytule i w obszarze <b>Animacja</b> poszukaj ciekawego efektu. Wybór jest na prawdę duży, kliknij na trójkąciku wskazanym strzałką.</br>
						5.	W nowo otwartym oknie widzisz teraz nie tylko <b>Efekty wejścia</b>, ale też <b>Wyróżnienie</b>, <b>Efekty wyjścia</b> oraz <b>Ścieżki ruchu</b>. Na razie omówimy pierwsze z nich, ponieważ są najczęściej wykorzystywane.</br>
						6.	Kliknij przycisk <b>Więcej efektów wejścia</b>. Otworzy się okno <b>Zmienianie efektu wejścia</b>, w którym znajdziesz wszystkie animacje związane z pojawianiem się elementu graficznego lub tekstu na ekranie. Nie bój się eksperymentować z różnymi efektami. Po kliknięciu na jeden z nich program natychmiast uruchomi jego podgląd na projektowanym slajdzie. Jak widzisz, poszczególne efekty prezentują się niezwykle ciekawie. Dla tytułu wybierz efekt Przerzut. Zwróć uwagę na to, że w <b>Okienku Animacji</b> pojawiła się druga ikonka symbolizująca wprowadzenie do prezentacji kolejnego zdarzenia. 


						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez2.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez3.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> 
						7.	W ten sam sposób dodaj animację do podtytułu, czyli dat urodzenia i śmierci kompozytora. Wykorzystaj efekt <b>Wznoszenie</b>. Samodzielnie poszukaj go w oknie <b>Zmienianie efektu wejścia</b>.</br>
						8.	W tej chwili do każdego z trzech elementów pierwszego slajdu jest przypisany jeden efekt. Jeden element może mieć jednak dodanych więcej animacji. Ponownie kliknij myszą na zdjęcie pomnika Chopina i wybierz Dodaj animację. Tym razem naciśnij efekt <b>Wyróżnienia</b> o nazwie <b>Rozjaśnienie</b>.
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez4.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default">  
							<div class="panel-body">
							9.	Aby animacje pojawiły się podczas pokazu automatycznie jedna po drugiej, zmień sposób uruchamiania każdej z nich. Klikaj po kolei na ikonach zdarzeń i wybierz dla każdego z nich w okienku <b>Początek</b> opcję <b>Po poprzedniej</b>. Jeżeli tego nie zrobisz, odbiorca będzie zmuszony klikać co chwilę myszką, ponieważ pokaz będzie się zatrzymywał po każdym kolejnym efekcie.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez5.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Pomiędzy slajdami</h3> 
							</div> 
							<div class="panel-body">Oprócz  animacji jest jeszcze jeden sposób uatrakcyjnienia naszego pokazu. Zmianę każdego slajdu na kolejny również można ozdobić specjalnymi efektami. 
							Na zakładce <b>Przejścia</b> po kliknięciu na małym, czarnym trójkąciku zobaczysz panel ze wszystkimi opcjami. Dla pierwszego slajdu wybierz przejście o nazwie Wirowanie. Po kliknięciu myszką na wybranej ikonce program natychmiast uruchomi podgląd zdarzenia. Niestety ta opcja nie jest dostępna w starszych wersjach programu. Jeśli masz wersję PowerPoint z 2007 roku, wybierz efekt <b>Czworokąt od środka</b>. Wszystkie przyciski efektów przejścia znajdują się tam na zakładce <b>Animacje</b>.

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 700px; height: 400px;" src="images/prez6.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Pokaz</h3> 
							</div> 
							<div class="panel-body">Po tej czasochłonnej pracy możesz z dumą zaprezentować swój pokaz. Na zakładce <b>Pokaz slajdów</b> znajduje się przycisk <b>Od początku</b>. Uruchomi on całą prezentację. Jest też dużo szybsza metoda, wystarczy kliknąć przycisk <b>F5</b> na klawiaturze. Na zakładce jest też bardzo przydatny przycisk <b>Od bieżącego slajdu</b>. Użyj go w momencie, gdy będziesz chciał zaprezentować tylko fragment swojego dzieła. Przyda się on także wtedy gdy w fazie projektowania poszczególnych slajdów wystąpi konieczność sprawdzenia, czy dodane nowe efekty nam odpowiadają. Podczas pokazu animacje na poszczególnych slajdach będą uruchamiały się same, natomiast przejście do kolejnego slajdu nastąpi po kliknięciu myszką. Jest to bardzo dobre rozwiązanie. Dzięki niemu prezentacja nie będzie się nieoczekiwanie zatrzymywała po każdej animacji, a dopiero po automatycznym wyświetleniu wszystkich umieszczonych na slajdzie efektów. Kiedy odbiorcy spokojnie przeczytają opisy, można kliknięciem myszki uruchomić kolejny slajd. 
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez7.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Opcje dla arcymistrzów</h3> 
							</div> 
							<div class="panel-body">
							Jeżeli zafascynował Cię świat animowanych prezentacji, opowiem ci jeszcze o kilku ciekawych opcjach. Dzięki nim jeszcze bardziej uatrakcyjnisz swoje pokazy. Może Ci się to przydać podczas przygotowywania prac domowych lub szkolnych konkursów informatycznych.</br> 
							<b>1. Czas animacji</b> </br>
							Czas trwania każdej z animacji możesz wydłużać lub skracać. Aby to zrobić musisz zaznaczyć myszką w <b>Okienku animacji</b> ikonkę efektu, którego czas chcesz zmienić. W zależności od tematu pokazu, możesz stworzyć prezentację bardzo dynamiczną z szybkimi animacjami, np. pokaz samochodów wyścigowych. 

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez8.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
									<b>2. Dźwięk</B></br>
									Na slajdach możesz umieszczać nie tylko grafiki, zdjęcia i teksty. Bardzo przyjemnie ogląda się prezentację do której dołączono odpowiedni podkład muzyczny. Przy opowieści o Fryderyku Chopinie dobrym tłem byłaby skomponowana przez niego muzyka. Istnieje możliwość wstawienia takiego pliku bez konieczności ustawiania dodatkowego sprzętu. Przyjrzyj się dobrze zakładce <b>Wstawianie</b>. Na samym końcu z prawej strony jest ikonka głośniczka, a pod nią napis <b>dźwięk</b>. Za pomocą tego przycisku wstawisz plik muzyczny do wybranego slajdu. Musisz wiedzieć, że w programie PowerPoint nie każdy format pliku może być odczytany. Wiesz już że pliki mają różne rozszerzenia. W prezentacji na pewno możesz użyć pliku wma lub bardzo popularnego mp3. Przyciskiem <b>Obiekt clipart – audio wprowadzisz</b> odpowiednik dźwiękowy clipartu graficznego. Warto poeksperymentować z różnymi rozszerzeniami. 

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez9.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default">  
							<div class="panel-body">
							<b>3. Tło</b></br>Na slajdzie, podobnie jak podczas pracy w MS Word, również można nakładać zdjęcia i pliki graficzne jedne na drugie. Dzięki tej opcji zamiast Motywu możesz użyć pliku graficznego jako tła. Pamiętaj, aby plik tła wstawić w pierwszej kolejności.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez10.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							<b>4. Próba tempa</b></br>
							Jeśli chcesz, prezentacja może przebiegać bezdotykowo, czyli bez przełączania kolejnych slajdów kliknięciem myszki. Trzeba wtedy ustawić czas wyświetlania każdego slajdu na ekranie. Odbiorcy muszą zdążyć przeczytać wszystkie opisy i spokojnie przyjrzeć się zdjęciom i grafikom. Służy do tego przycisk Próba tempa na zakładce Pokaz slajdów. Uruchomiona tym przyciskiem prezentacja zarejestruje zarówno czas wyświetlania każdego slajdu, jak i ich przełączanie kliknięciem myszką. Po ponownym uruchomieniu pokazu będzie on wyświetlany zgodnie z ustawionym czasem.

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/prez11.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
		
		
		
		<div class="row">
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination"style="margin-left:350px;"> 
			<?php echo'
				<li>
					<a href="roz3.1_woj.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz1_woj.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="roz3.1_woj.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li class="active">
					<a href="roz3.2_woj.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li>
					<a href="roz3.3_woj.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				<li>
					<a href="roz3.3_szk.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> ';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';