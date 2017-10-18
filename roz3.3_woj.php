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
				<h1><strong>Na wycieczkę z arkuszem kalkulacyjnym!</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer3.png" data-holder-rendered="true">
				 
				<div class="media-body"> 
					<h3>Na pięciodniową wycieczkę klasową wybiera się 17 osób. Trzeba się jeszcze dowiedzieć. Ile będą kosztować atrakcje:aquapark i muzeum. Koszt noclegów i przejazd autokarem zna nauczyciel. Do ceny wycieczki dochodzą jeszcze śniadania i obiadokolacje. Jak sprawdzić, ile każdy wycieczkowicz musi za to wszystko zapłacić? W obliczeniach pomoże z pewnością arkusz kalkulacyjny.
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
							<h2 class="panel-title">Arkusz to policzy</h2> 
							</div> 
							<div class="panel-body">
							Otwórz arkusz kalkulacyjny i wprowadź do niego wszystkie dane, które znasz. Dokładnie tak jak podczas rozwiązywania zadania na matematyce. Najlepiej zrobić to w formie tabeli. Nie zapomnij o opisie, aby całość była czytelna i przejrzysta. Dlaczego masz wpisać tylko cztery śniadania i obiadokolacje? Wycieczka ma trwać 5 dni, jednak w pierwszym dniu śniadanie, a w ostatnim kolację zjesz przecież w domu.</br>
							Liczbę porządkową z pierwszej kolumny uzupełnij poznanym na poprzedniej lekcji automatycznym sposobem. Przeciągnij zakres komórek B3:B4 myszką w dół. Musisz wyliczyć koszt całkowity wycieczki oraz jej cenę, czyli kwotę jaką każda z osób musi zapłacić.

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark1.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						 
						<div class="panel-body"> 
						Najpierw musisz jednak wyliczyć wartości poszczególnych elementów wycieczki: noclegu, śniadania, dziennej racji prowiantu, obiadokolacji i tak dalej. Koszt noclegów poznasz dzięki pomnożeniu ich liczby przez cenę jednego noclegu. W zeszycie do matematyki, zapis ten wyglądałby tak:
						4 noclegi * 20 złotych za nocleg = 80 złotych
						Tyle jedna osoba zapłaci za wszystkie noclegi.
						Zapisanie takiego działania w arkuszu kalkulacyjnym, w komórce F3, wymaga zapisu w odwrotnej kolejności – najpierw znaku równości, a następnie liczb:
						= 4*20
						Arkusz kalkulacyjny umożliwia jednak inny, sprytniejszy zapis tego działania. 

						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/ark2.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> 
						W ten sposób nakazujesz programowi następujące działanie: weź liczbę zapisaną w komórce D3, pomnóż ją przez liczbę zapisaną w komórce E3 i podaj wynik. Program od razu policzy i poda nową wartość wszystkich czterech noclegów.
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark3.png" data-holder-rendered="true"> 
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
							Do obliczenia wartości czterech śniadań należałoby wpisać w komórce F4 formułę: = D4*E4, czyli liczbę śniadań pomnożoną przez cenę jednego śniadania. Nie musisz tego robić. Pamiętasz jak program wypełnia komórki automatycznie? 
							To samo można zrobić z formułami. Wystarczy złapać za prawy dolny róg komórki F3 z wpisaną formułą i przeciągnąć ją do komórki F4.

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark4.png" data-holder-rendered="true"> 
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
							
							<div class="panel-body">Spowoduje to, że program mnoży wartości liczbowe z dwóch komórek znajdujących się po lewej stronie komórki z wynikiem. Jednak w czasie liczenia wciąż tego samego musi zmienić adresy komórek w formule. D3 zmienił się na D4, a E3 na E4, ponieważ wynik podaje teraz w komórce F4, a nie F3. A skoro tak, to w komórce F4 wylicza nową wartość:
							4*7=28, czyli D4*E4= F4</br>
							Teraz już chyba wszystko jasne. Przeciągnij formułę dalej, aż do komórki F9. Tym prostym sposobem zostaną wyliczone za jednym pociągnięciem myszki koszty czterech śniadań, pięciu suchych prowiantów, czterech obiadokolacji, jednego wstępu do Aquaparku, muzeum i przejazdu. Czy to nie wspaniałe? 

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 700px; height: 400px;" src="images/ark5.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			</br>
			</br>
			<div class="row">		
			<div class="col-lg-6">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
						
							<div class="panel-body">
							Gdyby coś poszło nie tak,na przykład wpisana formuła okaże się błędna, skorzystaj z narzędzia dostępnego w niemal każdym programie - cofnij jeden lub kilka ostatnij kroków. 
							</br>
							W kolumnie E najują się ceny, a w kolumnie F - wyliczone wartości w złotówkach. Niestety tych złotówek w tabelce nie widać, tylko liczby. Można temu zaradzić. Zaznacz myszką zakres komórek E3:F9 i zmień format zaznaczonych liczb przyciskiem Ksiegowy format liczb. Znajduje się on w zakłądce Narzędzia główne. W ten sposób wszystkie ceny i wartości otrzymały skrót zł.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		
				<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width:300px; height: 200px;" src="images/ark6.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12" style="margin-left:300px;">
				<div class="media"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark7.png" data-holder-rendered="true"> 
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
									Pozostało wyliczyć cenę wycieczki, która będzie sumą wartości wszystkich poszczególnych elementów.</br>
									80,00 złotych - noclegi</br>
									28,00 złotych - śniadania</br>
									60,00 złotych - suchy prowiant</br>
									120,00 złotych - obiadokolacja</br>
									40,00 złotych - wstęp do aquaparku</br>
									5,00 złotych - wstęp do muzeum</br>
									+ 90,00 złotych - przejazd</br>
									_____________________________________</br>
									=   ?
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
							<div class="panel-body">
							W excelu do tego przycisku Suma z zakłądkami Narzędzia główne.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark8.png" data-holder-rendered="true"> 
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
							Gdyby cena wycieczki okazała się za wysoka, można zrezygnować z jakiejś atrakcji lub poszukać tańszego noclegu. I znów wszystko na nowo przeliczać? Nie! W przypadku rezygnacji na przykład z aquaparku wystarczy tylko wartość 1 w komórce D7 zmienić na 0. Natomiast cenę noclegu możesz zmienić w komórce E3. Arkusz kalkulacyjny poda nową cenę wycieczki w komórce F10.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark9.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							Policzenie kosztu całkowitego wycieczki wydaje się już bardzo proste: cena wycieczki, jaką zapłaci jedna osoba*ilośc osób = ? czyli 423,00 złotych*17=?</br>
							Za pomocą adresów w komórce F12 należy pomnożyć przez siebie wartości z komórek F10 oraz D11.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark10.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							W Excelu możesz jeszcze sformatować tabelkę za pomocą Stylów, a także zapisać i wydrukować swoje obliczenia.
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		</br>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/ark11.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
				<?php
							echo '
								<a href="test1.php?id='.$_GET['id'].'&stopien=wojewodzki1" button type="button" class="btn btn-success btn-lg btn-block"><b>Przejdź do testu nr 1.</b></button></a>					
								<a href="test1.php?id='.$_GET['id'].'&stopien=wojewodzki2" button type="button" class="btn btn-success btn-lg btn-block"><b>Przejdź do testu nr 2.</b></button></a>
								
								';								
							?>
			</div>
			<div class="col-lg-6">
				<?php echo'<a href="profile.php?id='.$_GET['id'].'" button type="button" class="btn btn-primary btn-lg btn-block"><b>STRONA GŁÓWNA</b></button></a>'; ?>
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
				<li>
					<a href="roz3.2_woj.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li class="active">
					<a href="roz3.3_woj.php?id='.$_GET['id'].'">1.3</a>
				</li> 
				';
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';