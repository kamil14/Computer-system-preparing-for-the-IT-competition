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
				<h1><strong>Uważaj! Komputer czasem gryzie!</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer3.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3><p>Zanim rozpoczniesz przygodę w tajemniczej
					krainie kompuerów, musisz dowiedzieć się o różnych niebezpieczeństwach
					i pułapkach. Jak każdy prawdziwy podróżnik 
					i uczony na początku zapoznaj się ze zwyczajami badanych maszyn.
					Musisz ustalić co lubią, a czego nie znoszą. Dzięki temu oswoisz się
					z nimi, a one będą Ci posłuszne.</p>
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
							<h2 class="panel-title">Po pierwsze: niebezpieczna strefa!</h2> 
							</div> 
							<div class="panel-body">
							Aby mieć energię do realizacji wszystich swoich pomysłów, musisz jeść. Podobnie
							komputery, muszą spożywać, aby mogły wykonywać powierzone im zadania. Ich
							źródłem energii jest energia elektryczna. Komputerom służy ona znakomicie, ale dla 
							ludzi jest śmiertelnie niebezpieczna. Zapamiętaj więc: pierwszą pułapką jest wszystko to, 
							co znajduje się z tyłu obudowy komputera, monitora, przewodu zasilającego i
							gniadka elektrycznego. Nie rozkręcaj komputera, nie baw się kablem zasilającym, nie 
							majstruj przy gniazdku elektrycznym. Tam, gdzie napięcie ma wartość 
							230 woltów, nie ma żartów!
							  Naprawę i zasilanie komputera prądem pozostaw dorosłym.
							Jeżeli więc po naciśnięciu dużego przycisku "Power" (czytaj: pałer) komputer
							się nie włączy, zwróć się o pomoc do nauczyciela lub rodzica. 

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/kom1.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						 <div class="panel-heading"> 
							<h2 class="panel-title">Po drugie: nie jedz przy komputerze!</h2> 
							</div> 
						<div class="panel-body"> 
						Nie jedz i nie pij przy komputerze. Wpadające do klawiatury okruszki mogą ją uszkodzić,a
							zalanie płynem może spowodować zwarcie i spalenie nawet całęgo komputera.
							Nie kładź też na komputerze żadnych przedmiotów. 
							Nie trzymaj więc na nich swoich książek, zeszytów lub piórnika. 
							Nie stawiaj także doniczki i wazonu z kwiatami. 
							  Zauważ, że w monitorze i komputerze znajdują się otwory. Mają one 
							różne kształty i czasami nie są widoczne na pierwszy rzut oka. 
							Nie jest to jednak żadna nowoczesna ozdoba. Są to otwory wentylacyjne. 
							Komputer i monitor wydzielają bowiem ciepło. Jeśli rozgrzeją się za mocno, przestaną działać 
							lub mogą nawet poważnie się uszkodzić. Zadaniem otworów wentylacyjnych jest 
							doprowadzanie chłodniejszego powietrza do środka i jednocześnie odprowadzanie
							gorącego powierza na zawnątrz. Dlatego właśnie nie wolno ich niczym zakrywać ani zasłaniać.
							Nie naklejaj w tych miejscach żadnyh naklejek. Pamiętaj też o nich, kiedy
							ustawiasz komputer na półce. Otwory wentylacyne mają także komputery
							przenośne (notebooki - czytaj: nołbuki,netbooki - czytaj: netbuki, i inne).
							Częstym błędem jest trzymanie ich na miękkim podłożu (na przykład na kołdrze).
							W ten sposób można łatwo zakryć takie otwory i doprowadzić do awarii.


						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
				<div class="media"style="margin-left:100px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/kom2.png" data-holder-rendered="true"> 
				</div>
			</div>
			
				<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width: 400px; height: 200px;" src="images/kom3.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
					<div class="panel-heading"> 
							<h2 class="panel-title">Po trzecie: właściwa postawa!</h2> 
							</div> 
						<div class="panel-body"> 
						Kolejna ważna sprawa: w szkolnej prawcowni nie włączaj komputera bez zgody nauczyciela.
						Pamiętaj, twój nauczyciel dużo wie na temat komputerów i chętnie przekaże Ci te wiadomości. 
						Czytaj uważnie też ten podręcznik. Dzięki temu przygotujesz się lepiej 
						i wykonanie różnych zadań zajmie Ci mniej czasu. Przed komputerem przyjmij
						postawę wyprosotowaną. Nie garb się, usiądź prosto na krześle, najlepiej o
						regulowanej wysokości. Zachowaj też odpowiednią odległość oczu od monitora,
						najlepiej około 30-70 centymetrów.
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 300px;" src="images/kom4.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
								<div class="panel-heading"> 
							<h2 class="panel-title">Po czwarte: chroń oczy!</h2> 
							</div> 						
							<div class="panel-body">
							Jeśli nie chcesz popsuć sobie wzroku, nie siedź przed monitorem w nieoświetlonym
							pomieszczeniu. Nie ustawiaj też monitora na tle okna. Często mrugaj oczyma. Twoje 
							oczy podczas wpatrywania się w monitor zapominają czasem o mryganiu i przez to
							wysuszają się. Dlatego właśnie co jakiś czas odwróć głowę od monitora i popatrz na 
							coś innego. Może to być biurko, boisko szkolne za oknem, a najlepiej zielone
							drzewa, trawa czy kwiaty.
							Twoje oczy będą Ci za to bardzo wdzięczne. 
							  Gorszej jakości monitory, szczególnie te starsze, wydzielają szkodliwe
							promieniowanie i pogarszają jakość powietrza. Dlatego należy wietrzyć 
							pomieszczenie, w którym jest komputer. W domu staraj się umieszczać go w pokoju, 
							w którym śpisz. Nie spędzaj też przy nim dłużej niż dwie godziny dziennie.
							Jeśli z powodu lekcji musisz posiedzieć trochę dłużej, zrób sobie przynajmniej
							15 minutową przerwę. 
							  Po skończonej pracy lub zabawie na komputerze wykonaj kilka ćwiczeń
							fizycznych. To bardzo ważne dla Twojego zdrowia. 
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		
		
		
		
		<div class="row">
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination"style="margin-left:350px;"> 
			<?php echo'
				<li>
					<a href="roz1_woj.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz1_woj.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li class="active">
					<a href="roz3.1_woj.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li>
					<a href="roz3.2_woj.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li>
					<a href="roz3.3_woj.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				<li>
					<a href="roz3.2_woj.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> ';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';