
<?php
require 'conf.php';
require 'header.php';

// sprawdza czy uzytkownik jest zalogowany
if (!$user->check()) {
    echo '<p class="error">Przykro nam, ale ta strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
    require 'footer.php';
    die;
}

$id = intval($_GET['id']);

$profile = $user->data($id);




// Jeżeli skrypt doszedł do tego miejsca, to wszystko jest w porządku i można pokazać profil
?>
<div class="container jumbotron">
		<div class="row">
			<div class="col-lg-4">
				<img  style="width: 200px; height: 180px;" hspace="40" vspace="50" src="images/malpa2.png">
			</div>
			<div class="col-lg-4">
				<h1>Cześć <?php echo $profile['login'] ?></h1>
				</br>
				<p class="lead">Witaj na swoim profilu.</p>
				<dt>Login:</dt> <dd><?php echo $profile['login'] ?></dd></br>
				<dt>E-mail:</dt> <dd><?php echo $profile['email'] ?></dd> </br>
				<dt>Rola:</dt> <dd><?php echo $profile['rola'] ?></dd></br>
				<dt>Klasa:</dt> <dd><?php echo $profile['klasa'] ?></dd></br>
				<img  style="width: 100px; height: 100px;" hspace="40" vspace="50" src="images/malpa4.png">
			</div>
			<div class="col-lg-4">
				<img  style="width: 200px; height: 180px;" hspace="40" vspace="50" src="images/malpa3.png">
			</div>
			<?php 
				if($profile['rola'] == 'nauczyciel')
			{
				if ($profile['klasa']=='klasaIA')
				{
			   echo '<a href="wyniki.php?id='.$_GET['id'].'"><button style="margin-right:630px;" type="button" class="btn btn-success"><h2>Sprawdź ucznia</h2></button></a>'; 
			   }else 
				{
					echo '<a href="wyniki1.php?id='.$_GET['id'].'"><button style="margin-right:630px;" type="button" class="btn btn-success"><h2>Sprawdź ucznia</h2></button></a>';
				}
			}?>
		</div>
</div>

<div class="container nauka" style="margin-bottom:20px;">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<h1>Gotowy na ciekawą przygodę z informatyką?</h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/samochod.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
				<h2 class="media-heading">Komputer - rewolucja w świecie maszyn</h2>
				<p>Wyobraź sobie, że pewnego dnia nieznany wirus zakłuca prace wszystkich
				</br>komputerów na ziemi. Czy domyslasz sie, co sie wtedy bedzie działo? Oprócz
				</br> tego, że nigdy już nie zagrasz w swoje ulubione gry komputerowe, stanie się coś
				</br> dużo gorszego Przestanie pracować większośc maszyn i urządzeń. Samoloty nie bedą mogły
				 wystartować, a te, które są już w powietrzu, mogą miec duży
				</br>problem z wylądowaniem.</p> </div> </div>
			</div>
			
			<div class="col-lg-6">
			
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
			
			</div>
			
			<div class="col-lg-6">
			<div class="media"> 
			<div class="media-left"> 
			<a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 150px; height: 150px;" src="images/samolot.png" data-holder-rendered="true"></a> 
			</div> <div class="media-body">
				W większości samochodów zgasną silniki. Pdobnie
				</br>stanie sie z pociagami. Telefony komurkowe i stacjonarne zamilkną, zniknie też
				internet. Oznacza to, że ludzie stracą możliwość szybkiego kontaktu na duże
				odległości. Przyznasz, że brzmi to jak scenariusz z katastroficznego filmu! Nie musisz się
				go jednak obawiać, takich wirusów na szczęście nie ma na świecie. </div> </div>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-6">
			<div class="media"> 
			<div class="media-left"> 
			<a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 150px; height: 150px;" src="images/telefon.png" data-holder-rendered="true"></a> 
			</div> <div class="media-body">
				 Z pewnością
				</br>jednak zdziwiło cię, jak to możliwe? Komputer to przecież metalowa skrzynka
				z monitorem stojącym na biurku. Dlaczego zatem mowa o samolotach, samochodach,
				bankomatach, pralkach i telewizorach? Musisz wiedzieć, że w dzisiejszym
				świecie technologia komputerowa jest obecna właściwie wszędzie. Komputery
				na każdym kroku pomagają ludziom w ich codziennym życiu. Naprawdę są we
				wszystkich tych miejscach! Często są jednak ukryte i nawet o tym nie wiemy.
				Natomiast ten komputer na biurku, to komputer osobisty, o którym dowiesz się
				więcej już niebawem. </div> </div>
			</div>
			<div class="col-lg-6">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
			
			</div>
			<div class="col-lg-6">
				<div class="media"> 
			<div class="media-left"> 
			<a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 150px; height: 150px;" src="images/bankomat.png" data-holder-rendered="true"></a> 
			</div> <div class="media-body">
				 Wyobraź sobie jeszcze jedną, rówie fantastyczną sytuację.
				Okazuje się, że w wyniku tajemniczej choroby ludzie stracili umiejętność
				posługiwania sie komputerami. Domyslasz sie jak wpłynełoby to na nasze życie?
				teraz chyba rozumiesz, dlaczego chcę cię nauczyć czegoś więcej na temat tych
				wszechstronnych urządzeń. Nie wiem, kim będziesz w przyszłości, być może ty
				również jeszcze tego nie wiesz. </div> </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="media"> 
			<div class="media-left"> 
			<a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/pociag.png" data-holder-rendered="true"></a> 
			</div> <div class="media-body">
				 Jedno jest jedna pewne: cokolwiek bedziesz
				robic, bedziesz korzystać z komputerów. Im więcej sie o nich dowiesz dzisiaj,
				tym bardziej pomogą ci one w przyszłości. Wprowadze cię zatem w tajemniczy
				świat komputerów. Musisz wiedzieć, że rządzi się on swoimi prawami. Ma też
				swój własny jezyk. Nauczę cię sztuki rozumienia tych urządzeń i panowania
				nad nimi. </div> </div>
			</div>
			<div class="col-lg-6">
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				
			</div>
			<div class="col-lg-6">
				<div class="media"> 
			<div class="media-left"> 
			<a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 150px; height: 150px;" src="images/satelita.png" data-holder-rendered="true"> </a> 
			</div> <div class="media-body">
				W trakcie tej wędrówki dowiesz sie wielu ciekawostek. Czym jest
				serwer, a czym ruter? Co to za komputer, którego symbolem jest jabłko? A może
				zaciekawi cie system, którego znakiem jest pingwin? Dowiesz sie także, co jest
				mózgiem, a co sercem komputera. NAuczysz się panować nad oknami i wysyłać
				paczki e-mailem. Zdziwisz się na pewno, że opera nie zawsze jest do słuchania!
				Bedzie także mowa o internecie. Nie bedzie juz dla ciebie tajemnicą czym są
				strony WWW, blogi i fora internetowe. Nauczysz sie także, jak z nich korzystać.
				zapoznasz się też z tworzeniem
				animacji i prezentacji multimedialnych. </div> </div>
			</div>
		</div>
		<div class="row">
			<div class=col-lg-6>
				<div class="media"> 
			<div class="media-left"> 
			<a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 100px; height: 100px;" src="images/kasy.png" data-holder-rendered="true"> </a> 
			</div> <div class="media-body">
				A na koniec naszej przygody dowiesz
				się, w jaki sposób łatwo zmusić swój domowy komputer do pomocy przy odrabianiu lekcji!</p>
				<p>O wszystkich tych sprawach opowiem Ci ja, komputerowa małpa. Jeśli nie
				 wiesz jeszcze, kim jestem, oraz czego szukają pingwin i lis w informatycznymn
				świecie, nie martw się. Ta strona napewno Ci to wyjaśni.</p> </div></div>
			</div>
			<div class=col-lg-6>
			
			</div>
		</div>
		
</div>
<div class="container marketing">
		<div class="row">
		
			<div class="col-lg-4">
			  <img class="img-circle" src="images/komputer.png" alt="Generic placeholder image" width="140" height="140">
			  <h2>ROZDZIAŁ 1</br>Stopień szkolny</h2>
			  <p>Cześć jeżeli przystepujesz do konkursu informatycznego na poziomie stopnia szkolnego to ten rozdział jest dla Ciebie! W rozdziale 1 znajdują sie podrozdziały z których wyniesiesz wiele wiedzy i bardzo dobrze przygotujesz sie do konkursu na tym stopniu! POWODZENIA!</p>
			  <p> <?php
						echo'	<a href="roz1_szk.php?id='.$_GET['id'].'" type="button"  class="btn btn-default">Sprawdź się!</a>';
					 ?></p>
			</div><!-- /.col-lg-4 -->
			
			<div class="col-lg-4">
			  <img class="img-circle" src="images/komputer2.png" alt="Generic placeholder image" width="140" height="140">
			  <h2>ROZDZIAŁ 2</br>Stopień rejonowy</h2>
			 
			   <p>Hej, widzę że poradziłeś sobie z poprzednimi rozdziałami. SUPER! Jestem z ciebie dumny! W rozdziale 2 poznasz wiele równie ciekawych rzeczy jak w rozdziale 1 lecz może troche trudniejszych. Myślę ze dla ciebie to pestka! Jeżeli jesteś gotowy to... --></br> :) </p>
			  <p><?php
						echo'	<a href="roz2_rej.php?id='.$_GET['id'].'" type="button"  class="btn btn-default">Sprawdź się!</a>';
					 ?></p>
			</div><!-- /.col-lg-4 -->
			
			<div class="col-lg-4">
			  <img class="img-circle" src="images/komputer3.png" alt="Generic placeholder image" width="140" height="140">
			  <h2>ROZDZIAŁ 3</br>Stopień wojewódzki</h2>
			  <p>WSPANIALE! Gratuluję ci przejścia do kolejnego etapu konkursu! W tym rozdziale czeka cię dużo pracy, ale nie martw się, pomogę ci przygotować się jak najlepiej. Możesz na mnie liczyć!</br> :) </p>
			  <p><?php
						echo'	<a href="roz1_woj.php?id='.$_GET['id'].'" type="button"  class="btn btn-default">Sprawdź się!</a>';
					 ?></p>
			</div><!-- /.col-lg-4 -->
			
			
			
			
			
		</div><!-- /.row -->
		
		<div class="row">
			<div class="col-lg-4">
				 <div class="panel panel-success">
					 <div class="panel-heading"> 
						 <h3 class="panel-title">Test 1.</br>Stopień szkolny</h3> 
					 </div> 
					 <div class="panel-body"> Test konkursowy z informatyki z roku 2016. </br>
					 <?php
						echo'<a href="test1.php?id='.$_GET['id'].'&stopien=szkolny1" type="button"  class="btn btn-primary">Sprawdź się!</a>';
					 ?>
					 </div> 
				 </div>
			</div>
			
			
			<div id="1" class="col-lg-4">
				 <div class="panel panel-success"> 
					 <div class="panel-heading"> 
							<h3 class="panel-title">Test 1.</br>Stopień rejonowy</h3> 
					 </div> <div class="panel-body"> Test konkursowy z roku 2016</br>
							<?php
						echo'<a href="test1.php?id='.$_GET['id'].'&stopien=rejonowy1" type="button"  class="btn btn-warning">Sprawdź się!</a>';
					 ?>
					 </div> 
				 </div>
			</div>
			<div class="col-lg-4">
				 <div class="panel panel-success"> 
					 <div class="panel-heading"> 
							<h3 class="panel-title">Test 1.</br>Stopień wojewódzki</h3> 
					 </div> 
					 <div class="panel-body">Test konkursowy z informatyki z roku 2016. </br>
							<?php
						echo'<a href="test1.php?id='.$_GET['id'].'&stopien=wojewodzki1" type="button"  class="btn btn-success">Sprawdź się!</a>';
					 ?>
					 </div> 
				 </div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-lg-4">
				 <div class="panel panel-success">
					 <div class="panel-heading"> 
						 <h3 class="panel-title">Test 2.</br>Stopień szkolny</h3> 
					 </div> 
					 <div class="panel-body"> Test konkursowy z informatyki z roku 2015. </br>
							 <?php
						echo'<a href="test1.php?id='.$_GET['id'].'&stopien=szkolny2" type="button"  class="btn btn-primary">Sprawdź się!</a>';
					 ?>
					 </div> 
				 </div>
			</div>
			<div class="col-lg-4">
				 <div class="panel panel-success"> 
					 <div class="panel-heading"> 
							<h3 class="panel-title">Test 2.</br>Stopień rejonowy</h3> 
					 </div> <div class="panel-body"> Test konkursowy z informatyki z roku 2011. </br>
							<?php
						echo'<a href="test1.php?id='.$_GET['id'].'&stopien=rejonowy2" type="button"  class="btn btn-warning">Sprawdź się!</a>';
					 ?>
					 </div> 
				 </div>
			</div>
			<div class="col-lg-4">
				 <div class="panel panel-success"> 
					 <div class="panel-heading"> 
							<h3 class="panel-title">Test 2.</br>Stopień wojewódzki</h3> 
					 </div> 
					 <div class="panel-body"> Test konkursowy z informatyki z roku 2017. </br>
							<?php
						echo'<a href="test1.php?id='.$_GET['id'].'&stopien=wojewodzki2" type="button"  class="btn btn-success">Sprawdź się!</a>';
					 ?>
					 </div> 
				 </div>
			</div>
			
		</div>
</div>
<?php
require 'footer.php';