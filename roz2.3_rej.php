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
				<h1><strong>Cyfrowe liczydło</strong></h1>
				</br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<div class="media"> <div class="media-left"> <a href="#"> <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 200px; height: 150px;" src="images/komputer2.png" data-holder-rendered="true"> </a> 
				</div> 
				<div class="media-body"> 
					<h3>Znasz już możliwości edytorów tekstu. Dzięki nim biała kartka papieru zmienia się w kolorową reklamę dyskotekową. Taki edytor potrafi też uporządkować informacje i graficzne symbole w poukładaną tabelę. Wiesz, w jak różny sposób edytory tekstu pomagają na lekcjach języka polskiego, przyrody czy historii. A co z matematyką? Dobra wiadomość ! Są programy, które szybko i dokładnie liczą! Nazywa się je arkuszami kalkulacyjnymi. 
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
							<h2 class="panel-title">Arkusz kalkulacyjny</h2> 
							</div> 
							<div class="panel-body">
							Nazwa „arkusz” nie jest przypadkowa, bo jak widać na rysunku jest to wirtualny arkusz, czyli coś o większych rozmiarach niż zwykła kartka. Jest podzielony wyraźnie widocznymi liniami na małe okienka zwane komórkami. W otwartym oknie programu widzisz tylko małą część potężnego arkusza. 

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						 
						<div class="panel-body"> 
						Program uruchom w znany ci już sposób, na przykład wciśnij START i w polu Wyszukaj programy i pliki wpisz słowo „exel” lub „calc” w zależności od tego,który z nich jest zainstalowany w twoim komputerze. Na podstawie obrazków poniżej zapoznaj się z oknami programu i jego menu.</br>
						- komórki układają się w wiersze i kolumny</br>
						- wiersze są numerowane: 1, 2, 3... i tak dalej. Kolumny mają nazwy literowane A, B, C.</br>
						- Położenie komórki w arkuszu określa jej adres. Jest on nazwą kolumny i wiersza, w których komórka się znajduje. Na przykład komórka o adresie B18 to taka, która jest umiejscowiona w kolumnie B i jednocześnie w wierszu 18</br>
						- Komórka, w którą klikniesz lewym przyciskiem myszy, staje się aktywna. Można do niej wprowadzić dane.</br>
						- kliknij lewym klawiszem myszy na komórce B2 i napisz na klawiaturze słowo "tekst". Następnie w komórce B3 wpisz liczbę "21", a w komórce B4 datę "01-01-2012". Wpisywanie danych do komórki potwierdzaj klawiszem ENTER.


						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 500px; height: 600px;" src="images/liczby1.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
		
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-body"> 
						- Trzy arkusze: "Arkusz1", "Arkusz2" i "Arkusz3" tworzą standardowy skoroszyt, czyli wirtualną teczkę na arkusze z danymi. Aby pisać w kolejnym arkuszu, należy kliknąć lewym przyciskiem myszy jego nazwę: na przykład Arkusz2.</br>
						- Wpisz do komórek arkusza liczby zgodnie z obrazkiem poniżej. Następnie myszką zaznacz komórki z liczbami. Jest to zakres komórek D5:F8. Adres zakresu określa się przez podanie adresu górnej lewej komórki oraz po dwukropku adresu dolnej prawej komórki.
						</div> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/licz2.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default">  
							<div class="panel-body">
							- zmień nazwę arkusza. Kliknij prawym przyciskiem myszy na nazwie, na przykład "Arkusz1". Następnie w nowo otwartym menu podręcznym znów kliknij na zmień nazwę [1]. Nazwa "Arkusza1" zostanie podświetlona na czarno [2]. Wpisz nową nazwę, na przykład "Obliczenia" [3].
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 500px; height: 300px;" src="images/licz3.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
		<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							- Dodaj nowy arkusz. Kliknij lewym przyciskiem myszy na pole Wstaw arkusz [4]</br>
							- Arkusze możesz ustawić w dowolnej kolejności, chwytając za nie i przeciągając myszką.

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
							<h3 class="panel-title">Arkusz lepszy niż kalkulator</h3> 
							</div> 
							<div class="panel-body">W nowym arkuszu w komórkę o adresie B3 wpisz cyfrę „1”, a w komórkę B4 – cyfrę „2”. Zaznacz myszką obie liczby i złap za mały czarny kwadracik w prawym dolnym rogu zaznaczenia. Kursor myszki przybierze wtedy kształt krzyżyka. Pociągnij okienko w dół aż do pola B9. Arkusz sam wpisze w komórki B5, B6, B7, B8 i B9 kolejne liczby: 3, 4, 5, 6 i 7. 
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		
		<div class="row">
				<div class="col-lg-12">
				<div class="media"style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/licz4.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							Obok jedynki w komórce po prawej stronie wpisz słowo „poniedziałek”. Postępuj podobnie jak w przypadku cyfr – przeciągaj myszką w dół do B9. Arkusz znów wpisze kolejne dni tygodnia. Spróbuj zrobić to samo z miesiącami.  

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 400px; height: 200px;" src="images/licz5.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-6">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
									W komórce D2 wpisz tekst: liczba godzin, a następnie wypełnij komórki poniżej liczbą godzin lekcyjnych ze swojego planu. Wzoruj się na przykładzie.  

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		
				<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width: 300px; height: 200px;" src="images/licz6.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
			<div class="row">		
			<div class="col-lg-6">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default">  
							<div class="panel-body">
							Po wpisaniu cyfry w komórce D3 może się zdarzyć, że słowo „poniedziałek” zostanie obcięte, ponieważ nie mieści się w komórce. Zapisana komórka D3 zasłoni część słowa. Jest na to prosty sposób. Złap myszką za kreseczkę rozdzielającą kolumnę C od kolumny D i przeciągnij ją w prawo, aż słowo „poniedziałek” będzie całkowicie widoczne. 
							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		
				<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width: 300px; height: 200px;" src="images/licz7.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			
			<div class="row">		
			<div class="col-lg-6">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							Zsumuj liczbę lekcji z całego tygodnia. Możesz to wykonać w dowolnej komórce, na przykład w F10. W arkuszu zapiszesz działanie, podobnie jak na kalkulatorze lub w zeszycie. Pamiętaj jednak, że musisz wstawić na początku znak „=”. 

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		
				<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width: 300px; height: 200px;" src="images/licz8.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-6">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							Działanie zaakceptuj klawiszem Enter – w komórce otrzymasz wynik działania. Wróć myszą lub strzałką na klawiaturze do komórki F10. Zauważ, że choć w komórce jest tylko wynik, to w tak zwanym pasku formuły nadal widać pełny zapis działania.

							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		
				<div class="col-lg-6">
				<div class="media"> <img class="media-object" style="width: 300px; height: 200px;" src="images/licz9.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
				<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							W podobny sposób można w arkuszu odejmować (-), mnożyć (*) i dzielić wszelkie liczby (/). Dzielenie liczby 81 przez liczbę 9 zapisuje się w komórce arkusza jako =81/9, a mnożenie tych dwóch liczb jako =81*9. Na koniec nie zapomnij kliknąć klawisza ENTER.</br>
							Sumować dane można też dużo szybciej. Przekonaj się o tym. Uaktywnij komórkę D10 – kliknij na nią myszką. Następnie włącz wskazany na rycinie przycisk autosumowania. Działanie zaakceptuj klawiszem ENTER. W komórce C10 wpisz słowo „Suma”. W ten sposób zapis będzie bardziej czytelny. 


							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 600px; height: 400px;" src="images/licz10.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">		
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							
							<div class="panel-body">
							Liczba lekcji w tygodniu została szybko policzona. Ale dane i wynik prezentują się w arkuszu mało ciekawie, prawda? Arkusze kalkulacyjne mają jednak sporo opcji formatowania – podobnie jak edytory tekstu. Możesz więc zapis upiększyć sprawić by był bardziej czytelny i ładniejszy. Uwaga! Formatowanie stylami nie jest dostępne w programie Calc, tylko w MS Exel. 


							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
				<div class="media" style="margin-left:300px;"> <img class="media-object" style="width: 700px; height: 800px;" src="images/licz11.png" data-holder-rendered="true"> 
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="media"> 
					
					<div class="media-body">
						<div class="panel panel-default"> 
							<div class="panel-heading"> 
							<h3 class="panel-title">Średnia</h3> 
							</div> 
							<div class="panel-body">
							Zwraca średnią (arytmetyczną) argumentów. Jeśli na przykład zakres A1:A20 zawiera liczby, formuła =ŚREDNIA(A1:A20) zwraca średnią tych liczb.  


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
							<h3 class="panel-title">Składnia</h3> 
							</div> 
							<div class="panel-body">
							

							ŚREDNIA(liczba1;[liczba2];...)</br>

							W składni funkcji ŚREDNIA występują następujące argumenty:</br>

							- Liczba1    Argument wymagany. Pierwsza liczba, odwołanie do komórki lub zakres, dla którego ma zostać obliczona średnia.</br>

							- Liczba2; ...    Argument opcjonalny. Dodatkowe liczby, odwołania do komórek lub zakresy (maksymalnie 255), dla których ma zostać wyznaczona średnia. 


							</div> 
						</div>
						
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-6">
				<?php
							echo '
								<a href="test1.php?id='.$_GET['id'].'&stopien=rejonowy1" button type="button" class="btn btn-success btn-lg btn-block"><b>Przejdź do testu nr 1.</b></button></a>					
								<a href="test1.php?id='.$_GET['id'].'&stopien=rejonowy2" button type="button" class="btn btn-success btn-lg btn-block"><b>Przejdź do testu nr 2.</b></button></a>
								
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
					<a href="roz2.2_rej.php?id='.$_GET['id'].'" aria-label="Previous"><span aria-hidden="true">«</span></a>
				</li> 
				<li>
					<a href="roz2_rej.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
				</li>
				<li>
					<a href="roz2.1_rej.php?id='.$_GET['id'].'">1.1</a>
				</li> 
				<li>
					<a href="roz2.2_rej.php?id='.$_GET['id'].'">1.2</a>
				</li> 
				<li class="active">
					<a href="roz2.3_rej.php?id='.$_GET['id'].'">1.3</a>
				</li>'; 
				?>
			</ul> 
		</nav>
			</div>
		</div>
</div>

<?php
	require 'footer.php';