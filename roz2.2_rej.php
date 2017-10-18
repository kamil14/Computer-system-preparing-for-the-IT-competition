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
				<h1><strong>Bądź ostrożny w sieci</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer2.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Śmiało surfujesz już lo internecie. Przeglądasz interesujące strony WWW, wysyłasz e maile do znajomych, spotykasz się z przyjaciółmi na internetowych czatach i serwisach społecznościowych. Umiesz korzystać z komunikatorów internetowych. Może nawet piszesz swój blog? Musisz jednak wiedzieć, że internet,mimo wszystkich swoich zalet,niesie ze sobą także wiele zagrożeń.
					</h3>
				</div> 
			</div>
			</div>
			
		</div>
		</br>
			</br>
			</br>
			
		<div class="row">
			
			<div class="col-lg-6">
			<div class="media"> 
				<div class="media-left">  
				</div> 
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h2 class="panel-title">Ciemna strona intenetu</h2> 
							</div> 
							<div class="panel-body"> Komputer był chory i leżał w łóżeczku... Może właśnie tak brzmiałby początek słynnego wierszyka dla przedszkolaków, gdyby poeta Stanisław Jachowicz napiał go dzisiaj. Komputery wprawdzie nie chorują, ale mogą się zepsuć. Zajmują się nimi wtedy serwisanci. Przyczyną awarii oprogrmamowania, rzadziej samego sprzętu, mogą być wirusy komputerowe.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
			<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width: 200px; height: 200px;" src="images/siec1.png" data-holder-rendered="true"> 
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default"> 
						<div class="panel-heading"> 
						<h3 class="panel-title"><h1>!!!</h1></h3> 
						</div> 
						<div class="panel-body"> Wirus komputerowy - samopowielający się program uszkadzający inne programy lub pliki, a często cały system operacyjny. Wirusy mogą też uszkodzić twardy dysk. 
						</div> 
					</div>
				</div>
			
			<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width:200px; height: 200px;" src="images/siec2.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> Obecnie wirusy komputerowe dostają się do komputerów najczęściej przez internet. Mogą też być przenoszone na pendrive lub na płycie DVD. Aby się przed nimi zabezpieczyć, należy zainstalować program antywirusowy. Najlepiej wybrać taki, który ma dodatkowo zaporę sieciową, tak zwaną "ścianę ogniową". Taki program chroni też dodatkowo przed kradzieżą danych z komputera. Musi być często aktualizowany, ponieważ codziennie pojawiają się nowe zagrożenia. Zwykle dokonuje się to automatycznie.</div> 
					</div>
				</div>
			</div>
			
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Znajomi nieznajomi</h3> 
							</div> 
							<div class="panel-body">Serwisy internetowe pozwalają miło spędzić czas i poznać nowych przyjaciół. Nie możesz mieć jednak pewności,czy internetowy znajomy, z którym tak dobrze rozmawia się na czacie, jest tym za kogo się podaje.
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
							<h3 class="panel-title"><h1>Pamiętaj!</h1></h3> 
							</div> 
							<div class="panel-body">Nie umawiaj się z nieznajomymi przez internet! Nigdy nie wiesz, kto tak na prawdę znajduj się po drugiej stronie intenreotwego łącza.
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
							<h3 class="panel-title">Chroń swoje dane!</h3> 
							</div> 
							<div class="panel-body">Z internetu na korzystają nie tylko uczciwi ludzie. Udostępnione przez Ciebie w sieci informacje mogą zostać wykorzystane przeciwko tobie.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-6">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title"><h1>!!!</h1></h3> 
							</div> 
							<div class="panel-body">Nie podawaj nieznanym osobom w internecie:</br>
								- swojego nazwiska</br>
								- adresu domowego</br>
								- adresu szkoły,do której chodzisz</br>
								- numeru telefonu</br>

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		
				<div class="col-lg-6">
				<div class="media"style="margin-left:100px;"> <img class="media-object" style="width: 300px; height: 200px;" src="images/siec3.png" data-holder-rendered="true"> 
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
				<nav> 
			<ul class="pagination"style="margin-left:350px;"> 
			<?php echo'
				<li>
					<a href="roz2.1_rej.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz2_rej.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="roz2.1_rej.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li class="active">
					<a href="roz2.2_rej.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li>
					<a href="roz2.3_rej.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				<li>
					<a href="roz2.3_rej.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
				</li> ';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';