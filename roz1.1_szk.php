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
				<h1><strong>Moc pod maską</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Co dzieje się wewnątrz
						jednostki centralnej, jaką kryje ona tajemnicę? Gdzie powstaje
						obraz który widzisz na monitorze? Co wytwarza dźwięk który dobiega z głośników? 
						A także: dokąd trafiają zdjęcia i filmy z aparatu lub kamery
						ginące w czeluściach skrzynki pomrukującej cicho opd biurkiem? 
						No właśnie - i skąd bierze się ten niski bucząco-pomrukujący dźwięk? 
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
							<h2 class="panel-title">Serce i mózg komputera</h2> 
							</div> 
							<div class="panel-body">Wewnątrz jednostki centralnej znajduje się
								najważniejsza część komputera, która dokonujewszelkich obliczeń
								i operacji na otrzymywanych danych. To "mózg" komputera, zwany <b>procesorem</b>.
								Od szybkości, z jaką pracuje zależy ogólna wydajność komputera. Procesor wydziela
								duzo ciepła, dlatego jest chłodzony specjalnym <b>radiatorem</b> oraz <b>wentylatorem</b>.
								To właśnmie wentylator jest częściowo źródłem tego hałasu, 
								który wydobywa się z jednostki centralnej.
									</br>						

								  Procesror jest wpięty w gniazdo znajdujące się na <b>płycie głównej</b>. To "ciało
								komputera". Od jej jakości zależy stabilność, szybkość, i wydajność pracy
								całego komputera. Nawet najlepszy procesor nie pomoże, jesli płyta główna 
								będzie słaba. Dzieje się tak, ponieważ to właśnie na płycie głównej znajduje się
								"serce" komputera. To ono streuje przesyłaniem danych do wszytskich podzespołów.
								Tym sercem, jest tak zwany <b>chipset</b> (czytaj: czipset).
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 300px; height: 300px;" src="images/procesor1.png" data-holder-rendered="true"> </a></div>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
						<h3 class="panel-title">...</h3> 
						</div> 
						<div class="panel-body"> Procesror jest wpięty w gniazdo znajdujące się na <b>płycie głównej</b>. To "ciało
										komputera". Od jej jakości zależy stabilność, szybkość, i wydajność pracy
										całego komputera. Nawet najlepszy procesor nie pomoże, jesli płyta główna 
										będzie słaba. Dzieje się tak, ponieważ to właśnie na płycie głównej znajduje się
										"serce" komputera. To ono streuje przesyłaniem danych do wszytskich podzespołów.
										Tym sercem, jest tak zwany <b>chipset</b> (czytaj: czipset). 
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 600px; height: 600px;" src="images/plytagl.png" data-holder-rendered="true"> </a></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
							<h3 class="panel-title">Komputer pamięta</h3> 
						</div> 
						<div class="panel-body"> <h1>Komputer podobnie jak i Ty nie może się obejść bez pamięci.</h1> </div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 800px; height: 600px;" src="images/rodzpam.png" data-holder-rendered="true"> </a></div></div>
				</div>
			</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">...</h3> 
							</div> 
							<div class="panel-body"> <b>Pamięć ROM</b> - jest zamontowana na stałe na płycie głównej - bez niej komputer 
								nie mógłby się uruchomić. <b>Pamięć RAM</b> i <b>dysk twardy</b> wpinamy we właściwe gniazdo. 
								Pendrive podłączmy do gniazda USB na zewnątrz obudowy, natomiast 
								<b>płytę CD lub DVD</b> umieszczamy w <b>napędzie optycznym</b>, na przykład nagrywarce DVD.
								Uruchomiony komputer korzysta z danych zawartych w RAM. Jest to między innymi
								wszystko to, co widzisz na monitorze. Aby lepiej zrozumieć różnicę pomiędzy 
								ulotną pamięcią RAM, a trwałą <b>pamięcią masową</b>, pomyśl sobie, że Twoja pamięć 
								również bywa ulotna. Co innego informacje zapisane w zeszycie,
								które są trwałe i zawsze mozesz do nich sięgnać. Podobnie komputer korzysta
								z informacji zapisanych na dysku twardym, pendrive i płycie.
								Natomiast to, co ma w pamięci RAM, "zapomina" natychmiast po wyłączeniu.

								  Obraz jest wysyłany do monitora przez <b>kartę graficzną</b>, a dźwięk do głosników
								przez <b>kartę dźwiękową</b>. Aby cały ten układ połączonych cześci  mógł się uruchomić 
								potrzebna jest energia elektryczna.
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
				<li>
					<a href="roz1_szk.php" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz1_szk.php">1 <span class="sr-only">(current)</span></a>
				</li>
				<li class="active">
					<a href="roz1.1_szk.php">1.1</a>
				</li> 
				<li>
					<a href="roz1.2_szk.php">1.2</a>
				</li> 
				<li>
					<a href="roz1.3_szk.php">1.3</a>
				</li> 
				<li>
					<a href="roz1.4_szk.php">1.4</a>
				</li> 
				<li>
					<a href="roz1.5_szk.php">1.5</a>
				</li> 
				<li>
					<a href="roz1.2_szk.php" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> 
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';