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
				<h1><strong>Na wirtualnym biurku</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Na początku musisz zapoznać się z pierwszym oknem,jakie zobaczysz
					po uruchomieniu systemu. Jest nim <b>Pulpit</b>, nazywany tak dlatego, że pełni 
					funkcję wirtualngo biurka. Zamiast zeszytów i książek układasz na nim 
					za pomocą myszki <b>ikony</b>. Kiedy klikniesz na ikonę myszką, uruchomisz 
					wybrany program, otworzysz folder lub plik. 
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
							<h2 class="panel-title">Ikona</h2> 
							</div> 
							<div class="panel-body"> <b>Ikona</b> - to symbol graficzny widoczny na ekranie. Oznacza jeden z elementów systemu: program, plik, folder lubinny obiekt.
							</div> 
						</div>
						
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
							 
							<div class="panel-body"> <b>Ikona ułatwia rozpoznanie danego obiektu w systemie.
							Popatrz na rysunki niżej. Paleta farb z pędzlem jest idealnym symbolem programu 
							graficznego MS Paint. Z kolei ikona folderu wygląda jak otwarta teczka,pusta w 
							środku lub wypełniona karteczkami lub obrazkami. Ikona pliku tekstowego utworzonego 
							w edytorze tekstowym Notatnik przypomina natomiast wydartą kartkę papieru z 
							zagiętym rogiem. Powiedzmy teraz,czym jest folder i plik.</b>
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				 <img class="media-object" style="width: 600px; height: 100px; margin-left:250px;" src="images/ikony.png" data-holder-rendered="true">
				
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
							<h2 class="panel-title">Folder</h2> 
							</div> 
							<div class="panel-body"><b>Folder</b> - nazywany też katalogiem, można porównać do teczki, w której system przechowuje ważne dane  zapisane w plikach. Ty również możesz zapisywać w plikach i folderach swoje informacje.
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
							<h3 class="panel-title">Dane w plikach zapisane</h3> 
						</div> 
						<div class="panel-body">Cały system operacyjny mieści się właśnie w takich teczkach-folderach.
						Dzięki temu w wirtualnym świecie panuje idealny porządek. Każdy element ma swoje z góry ustalone miejsce.
						Zakłócenie tego ładu grozi poważnymi konsekwencjami. W najgorszym wypadku moze skutkować nawet uszkodzeniem całego systemu.</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
							<h3 class="panel-title">Plik</h3> 
						</div> 
						<div class="panel-body"><b>Plik</b> - to zbiór danych,czyli informacji zapisany na dysku, płycie DVD lub pendrive. Każdy plik posiada nazwę, kropkę i po kropce tak zwane rozszerzenie.</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img class="media-object" style="width: 600px; height: 400px; margin-left:200px;" src="images/pingwiny.jpg" data-holder-rendered="true"></br><center><b>pingwiny.jpg</b> </center>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">Rozszerzenie określa zawartość pliku: może to być na przykład grafika lub zdjęcie,jak na 
						rysunku obok - wtedy plik ma rozszerzenie JPG. Może to być również kod programu w pliku aplikacji  i wtedy 
						rozszerzenie będzie miało postać <b>EXE</b>. Z kolei plik edytora Notatnik zawierający tekst będzie miał zawsze dołączone 
						rozszerzenie <b>TXT</b>. Plik z rozszerzeniem <b>MP3</b> to będzie z pewnością plik muzyczny, a <b>WMV</b> - filmowy. </div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img class="media-object" style="width: 600px; height: 500px; margin-left:300px;" src="images/pliki.png" data-holder-rendered="true">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"> 
						<div class="media-body">
							<div class="panel panel-default"> 
								<div class="panel-body">Typów plików i ich rozszerzeń jest bardzo dużo. 
								Niektóre z nich poznasz podczas omawiania różnych programów w dalszej części strony. 
								Uwaga! Standardowo system Windows nie pokazuje  rozszerzeń plików.
								</div> 
							</div>
							
						</div> 
					</div>
				</div>
			</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default"> 
					<div class="panel-body"> <h1>Wszyscy na start</h1> </div> 
				</div>
			</div>
		</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">System Windows ma wbudowanych wiele programów. Programy te możesz uruchomić z menu ukrytego pod przyciskiem <b>START</b>.
							''Menu start to główna brama do programów, folderów i ustawień na komputerze. Jest określana mianem Menu, ponieważ zawiera listę 
							opcjido wyboru...'' Te dwa zdania zostały umieszczone nieprzypadkowo w cudzysłowie. Jest to bowiem cytat z podręcznika dołączonego 
							do samego systemu operacyjnego.</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img class="media-object" style="width: 600px; height: 500px;" src="images/programy.png" data-holder-rendered="true">
				</div>
			</div>
		
		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">Jeśli czegoś nie wiesz, wystarczy, że w menu Start odszukasz i klikniesz w Pomoc i obsługa techniczna. 
						W oknie wyszukiwania, które Ci się ukaże, wpisujesz jedno lub kilka słów związanych z interesującym Cie tematem. Przykładowo,
						możesz tam wpisać słowo ''menu'' i z wyświetlonej listy artykułów wybrać i przeczytać opis ''menu Start'". Tego typu pomoc 
						znajduje sie w każdym programie. Jest bardzo użyteczna, dlatego warto o niej pamiętać. </br>
						  No tak, ale miało być o drzewie! Spokojnie, nie wszystko na raz. Tajemnicę jedynego drzewa w systemie Windows , a także sposoby chodzenia 
						  "na skróty" po wirtualnej krainie odkryjesz już w następnej lekcji...</div> 
					</div>
				</div>
			</div>
		
			
		<div class="row" >
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination" style="margin-left:350px;">
				<?php echo'
				<li>
					<a href="roz1.2_szk.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
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
				<li class="active">
					<a href="roz1.3_szk.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				<li>
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
					<a href="roz1.4_szk.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> ';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>
<?php
	require 'footer.php';