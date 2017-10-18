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


<div class="container roz1_1szk" style="background-image: url('images/tapetar2.png');">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<h1><strong>System operacyjny</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer2.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Wiesz już, jak jest zbudowany komputer, za co odpowiadają jego
						podzespoły i jak ze sobą współpracują. Na pewno pamiętasz, że 
						pomiędzy poszczególnymi częściami są przesyłane dane, czyli informacje.
						Skąd jednak komputer wie, co ma zrobić z wprowadzanymi do niego informacjami?
						Gdzie je umieścić: w pamięci operacyjnej, czy może masowej? 
						Wyświetlić za pomocą karty graficznej na monitorze czy też
						zachowac na twardym dysku? A jeśli wyświetlić, to w jakim kolorze 
						i jakiego kształtu, u dołu ekranu czy może jednak u góry? 
						Jak się zapewne domyślasz, takich pytań można postawić dużo więcej.
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
							<h2 class="panel-title">Umysł komputera</h2> 
							</div> 
							<div class="panel-body">Każdy komputer potrzebuje zarządcy, "czegóś" co steruje jego podzespołami
								i mówi im, co mają robić. Bez tego tajemniczego szefa wydającego instrukcje
								komputer będzie tylko konstrukcją z metalu i tworzyw sztucznych ze ścieżkami obwodów,
								którymi bezszelestnie przepływa prąd. Monitor nie wyświetli obrazów, 
								a głośniki nie odtworzą dźwięku. Takiego zawiadowcę ma również twoje ciało, 
								jest nim umysł, który przesyła instrukcję do nóg, rąk, głowy,
								oczu aby wiedziały, co mają robić. Umysł steruje wszystkimi czynnościami,
								które chcesz wykonać. Takim "umysłem" komputera jest program.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
						<h3 class="panel-title">Program</h3> 
						</div> 
						<div class="panel-body"> Program to szereg precyzyjnych instrukcji zapisanych w specjalnym języku
									programowania i wykonywanych przez komputer.Program nazywamy inaczej aplikacją.  
						</div> 
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> Komputerowy "umysł", czyli program, nie myśli samodzielnie. Jest to napisany 
							przez informatyka ciąg pewnych instrukcji. Te polecenia są nastepnie
							wykonywane przez komputer w określonej kolejności. Aby maszyna mogła
							zrozumieć kierowane do niej rozkazy, muszą one być napisane
							w specjalnym języku programowania.</div> 
					</div>
				</div>
			</div>
			
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">CIEKAWOSTKA !</h3> 
							</div> 
							<div class="panel-body">Istnieje wiele języków programowania. Mają one oryginalne, ciekawie 
								brzmiące nazwy: JAVA (czytaj: jawa),C,PHP,Python (czytaj:pyton), 
								Delphi (czytaj:delfi), Ada, Perl, czy Pascal (czytaj:paskal). Przykładowo
								Ada, bardzo odporny na błędystosuje się w wojsku, medycynie i energetyce. 
								Pascal jest używany głównie do nauki programowania, a PHP, do tworzenia
								stron internetowych. W języku C, pisze się gry.
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
							<h3 class="panel-title">BIOS* i OS</h3> 
							</div> 
							<div class="panel-body">W poprzednim rozdziale była mowa o pamięci ROM, w której są zawarte 
										instrukcje startowe komputera. Te instrukcje to właśnie pierwszy program 
										otwierany przez uruchamiający się komputer. Nazywa się BIOS.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 500px; height: 300px;" src="images/system1.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">Następnie komputer sięga do programu zaspianego na twardym dysku.
								Pamiętasz z poprzedniej lekcji, do jakiego rodzaju pamięci jest wczytywany
								taki program? Jest to system operacyjny - w skrócie OS. System operacyjny,
								to najważniejszy program komputera, ponieważ nadzoruje całym jego sprzętem
								i zarządza wszystkimi podzespołami. To w nim są uruchamiane inne programy. 
								Bez niego niemożliwe byłoby granie, pisanie, liczenie czy rysowanie na komputerze. 
								System operacyjny umożliwia także porozumiewanie się między człowiekiem a maszyną, 
								ponieważ dzięki niemu możesz wydawać komputerowi polecenia i widzieć wyniki 
								jego pracy. W środowisku OS można istalować również inne programy.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/system2.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Okna, Pingwin, Dzikie koty</h3> 
							</div> 
							<div class="panel-body">Istnieje wiele systemów operacyjnych pisanych przez różne firmy programistyczne.
							Najczęściej spotkasz się z systemem amerykańskiej firmy Microsoft o nazwie Windows, co po polsku znaczy "okna".
							Taki system jest zainstalowany na komputerach osobistych zgodnych z IBM - PC, czyli pecetach.
							Mniej popularny w polsce jest system amerykańskiej firmy Apple o nazwie MAC OS, dostępny na komputerach osobistych Macintosh.
							Innym bardzo ciekawym systemem jest występujący w różnych werscjach LINUX.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 700px; height: 800px;" src="images/system3.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">CIEKAWOSTKA</h3> 
							</div> 
							<div class="panel-body">Pierwsza wersja systemu MAC OS została wprowadzona na rynek w 1994 roku.
							Ostatnia, 10 już odsłona systemu pojawiła się 1999 roku i ma kilka wersji o wdzięcznych, kocich imionach: Gepard, Puma, Jaguar, Pantera, Tygrys, Lampard, Śnieżna Pantera i Lew. 
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"> <img class="media-object" style="width: 600px; height: 700px;" src="images/system4.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default">  
							<div class="panel-body">Aby zainstalować jakikolwiek program na komputerze, musisz posiadać tak zwaną licencję.
							Jest to umowa w której włąściciel aplikacji określa warunki korzystania z niej. Bez licencji program jest użytkowany nielegalnie, a jego posiadacz zasila szeregi piratów komputerowych, ściganych przez prawo.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 500px; height: 300px;" src="images/system5.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">Na pewno ucieszy cię fakt, że nie każda licencja wymaga opłat.
							Na przykład Linux jest systemem operacyjnym o licencji Open Source, co znaczy otwarte oprogramowanie.
							Otwarte, bo możesz nie tylko go używać i modyfikować czy ulepszać w dowolny sposób, w zależności od swoich potrzeb.
							Oczywiście, jeśli tylko potrafisz! Na razie lepiej pozostaw takie modyfikacje programistom. Możesz jednak Linuxa całkowicie pobrać za darmo z internetu i samodzielnie zainstalować na komputerze.
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
							<h3 class="panel-title">CIEKAWOSTKA</h3> 
							</div>
							<div class="panel-body">Jednym z najwybitniejszych informatyków pracujących na rzecz Otwartego Oprogramowania jest Fin Linus Torvalds, twórca systemu operacyjnego Linux. Logo Linuxa, to według słów Linusa, obiedzony rybami zadowolony pingwin o imieniu Tux.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:400px;"> <img class="media-object" style="width: 300px; height: 400px;" src="images/system6.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
		
		
		<div class="row">
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination"style="margin-left:350px;"> 
			<?php echo'
				<li>
					<a href="roz2_rej.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz2_rej.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li class="active">
					<a href="roz2.1_rej.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li>
					<a href="roz2.2_rej.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li>
					<a href="roz2.3_rej.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				<li>
					<a href="roz1.2.2_rej.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li>';
			?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';