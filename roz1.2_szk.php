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
				<h1><strong>Co do komputera wpływa, a co z niego wypływa</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Bogatsi o wiedzę z poprzedniego rozdziału rozpoczynacie
						swoją wędrówkę po tajemniczej krainie komputerów. Zanim wkroczycie 
						jednak na ścieżkę tej fascynującej przygody, musicie przemyśleć 
						kilka kwestii. Czy wiecie, jak pracować z komputerem? Aby uniknąć
						błędów, pora dowiedzieć się o nich trochę więcej.
					</h3>
				</div> 
			</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-12">
				 <img class="media-object" style="width: 600px; height: 500px; margin-left:450px;" src="images/roz1.png" data-holder-rendered="true">
				
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
							<h2 class="panel-title">Oczy, uszy i usta maszyny</h2> 
							</div> 
							<div class="panel-body">Komputer osobisty to po angielsku personal computer, w skrócie PC (czytaj: pisi).</br> 
								Składa się z:</br>
								- <b>jednostki centralnej</b></br>
								- urządzeń zewnętrznych, tak zwanych <b>peryferyjnych</b>, dzięki którym</br>
								 możesz z nim pracować.</br>
								 <p>Urządzenia peryferyjne komputera można porównać do narządów zmysłów człowieka. 
									Mógłby on bez nich pracować, ale my nie moglibyśmy wydawać mu poleceń ani widzieć 
									rezultatów jego pracy. Urządzenia peryferyjne dzielimy na:</br>
									- <b>urządzenia wejściowe</b> - przesyłamy poprzez nie informację i polecenia <b>do komputra</b>,
									Za pomocą tych urządzeń komputer "słucha", co do niego "mówimy".</br>
									- <b>urządzenia wyjściowe</b> - informacje do nich są wysyłane <b>od komputera</b>. Poprzez
									te urządzenia komputer "mówi" do nas.</p>
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 600px; height: 500px;" src="images/roz1_1.png" data-holder-rendered="true"> </a></div>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
							<h3 class="panel-title">Zadanie</h3> 
						</div> 
						<div class="panel-body">Mam teraz dla ciebie zadanie. Zastanów się i powiedz, do jakiej grupy urządzeń zaliczasz: cyfrowy aparat fotograficzny, cyfrową kamerę DVD, tablet graficzny 
						(rodzaj elektronicznego bloku rysunkowego, na którym piszemy rysikiem zamiast kredkami) oraz ploter (typ drukarki, która nanosi obrazy na duże poierzchnie: plakaty, plansze, mapy).
							Jak myślisz, które z tych urządzeń przesyłąją informacje do komputera, a które je z niego otrzymują? Co konkretnie jest tą informacją w wypadku każdego z tych sprzętów? </div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img class="media-object" style="width: 600px; height: 500px; margin-left:300px;" src="images/zadanie1.png" data-holder-rendered="true">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="media"> 
						<div class="media-body">
							<div class="panel panel-default"> 
								<div class="panel-body">Jest jeszcze trzecia grupa urządzeń. Są to takie sprzęty, które nie tylko przesyłają informacje (jak mówią informatycy:dane)
								z komputera na zewnątrz, ale też kierują do komputera to, co przychodzi z zewnątrz.
								Niektóre z tych urządzeń peryferyjnych mogą znajdować się wewnątrz jednostki centralnej. Nazywamy je urządzeniami wejściowo-wyjściowymi
								</div> 
							</div>
							
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img class="media-object" style="width: 600px; height: 500px;" src="images/wyjwej.png" data-holder-rendered="true">
				</div>
			</div>
		<div class="row">
			<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> <h1>Wszystko mi pasuje</h1> </div> 
					</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">Zastanawiasz się pewnie, jak te rożne urządzenia można podłączyć do komputera.
						Jest to bardzo łatwe, ponieważ kable przyłączeniowe mają wtyczki pasujące tylkoi wyłącznie we włąściwe miejsca. Najczęściej
						są to tak zwane gniazda <b>USB</b>. Klawiaturę i myszkę podłączamy zwykle do gniazd <b>PS/2</b>(chociaż są również myszki i klawiatury typu USB)
						Oznaczonych dodatkowo kolorami: zielony dla myszki i niebieski dla klawiatury. Głośniki i słuchawki mają zawsze gniazda koloru zielonego, natomiast
						mikrofon - różowego. Gdy więc dobrze przyjrzysz się wtyczce, zawsze znajdziesz dla niej włąściwe gniazdo, nie rób tego na siłę. 
						Być może trzeba ją we właściwy sposób obrócić lub wkładasz ją w niewłaściwe miejsce.</div> 
					</div>
				</div>
			</div>
		<div class="row">
				<div class="col-lg-12">
					<img class="media-object" style="width: 600px; height: 500px; margin-left:300px;" src="images/wmp.png" data-holder-rendered="true">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body">Wyróżniamy także gniazda <b>COM</b>, do których podłącza się <b>kasy fiskalne</b> lub <b>dekodery</b>
						do odbioru telewizji satelitarnej. Częściej zapewne użyjesz gniazda karty sieciowej, przez które możesz podłączyć komputer do sieci lokalnej.
						Wszystkie komputery w twojej szkolnej pracowni są połączone ze sobą włąśnie poprzez takie gniazda.</div> 
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<img class="media-object" style="width: 600px; height: 200px; margin-left:250px;" src="images/com.png" data-holder-rendered="true"> 
				
			</div>
			
		<div class="row" >
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination" style="margin-left:350px;"> 
			<?php echo'
				<li>
					<a href="roz1.1_szk.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz1_szk.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="roz1.1_szk.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li class="active">
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
					<a href="roz1.3_szk.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li>'; 
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>
<?php
	require 'footer.php';