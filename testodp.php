<?php
require 'conf.php';
require 'header.php';

$l = $db->query("SELECT id_pytania, tresc, odpa, odpb, odpc, odpd, stopien, answer, czy_wielokrotne FROM pytania where stopien='".$_GET['stopien']."'");
echo '<div class="container quiz">';
echo'<h1><b>Czas na test, sprawdź swoja wiedzę</b></h1>';
echo'<ol>';
echo'<div class="row">';
echo'<div class="col-lg-6">';
$totalCorrect = 0;
while ($i = $l->fetch_assoc()) {
	$answer1 = $_POST['question-'.$i["id_pytania"].'-answers'];

if (!$user->check()) {
    echo '<p class="error">Przykro nam, ale ta strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
    require 'footer.php';
    die;
}

echo '
			<li>
					
					<h3>'.$i["tresc"].'</h3>
					<div class="btn-group" data-toggle="buttons">
						
							<label for="question-'.$i["id_pytania"].'-answers-A" class="btn btn-success">
								<input type="radio" name="question-'.$i["id_pytania"].'-answers[0]" id="question-'.$i["id_pytania"].'-answers-A" autocomplete="off" value="A" />
								
								<span class="glyphicon glyphicon-ok"></span>
								 A) '.$i["odpa"].'
							</label>
						
						</br>
						</br>
							<label class="btn btn-success" for="question-'.$i["id_pytania"].'-answers-B">
								<input type="radio" name="question-'.$i["id_pytania"].'-answers[1]" id="question-'.$i["id_pytania"].'-answers-B" autocomplete="off" value="B" />
								<span class="glyphicon glyphicon-ok"></span>
								B) '.$i["odpb"].'
							</label>
						</br>
						</br>
						<label class="btn btn-success" for="question-'.$i["id_pytania"].'-answers-C">
							<input type="radio" name="question-'.$i["id_pytania"].'-answers[2]" id="question-'.$i["id_pytania"].'-answers-C" autocomplete="off" value="C" />
							<span class="glyphicon glyphicon-ok"></span>
							C) '.$i["odpc"].'
						</label>
						</br>
						</br>
						<label class="btn btn-success" for="question-'.$i["id_pytania"].'-answers-D">
							<input type="radio" name="question-'.$i["id_pytania"].'-answers[3]" id="question-'.$i["id_pytania"].'-answers-D" autocomplete="off" value="D" />
							<span class="glyphicon glyphicon-ok"></span>
							D) '.$i["odpd"].'
						</label>
					</div>
					</br>
					</br>';
				$images = scandir("zdjeciaDoPytan", 1);
					$filename = $i["id_pytania"].'.PNG';
					
					if (in_array($filename, $images)) {
						echo '<div class="zdjecia"><img src="zdjeciaDoPytan/'.$filename.'" class="img-thumbnail" /></div>';
					}
			
	echo'</li>
				
				
				
	
';

		$odpowiedzi = $answer1[0]??'';
		$odpowiedzi .= ','.($answer1[1]??'');
		$odpowiedzi .= ','.($answer1[2]??'');
		$odpowiedzi .= ','.($answer1[3]??'');
		$odpowiedzi = trim($odpowiedzi, ',');
		$odpowiedzi = str_replace(',,', ',', $odpowiedzi);
		$odpowiedzi = str_replace(',,', ',', $odpowiedzi);
	
	
	if($odpowiedzi == $i['answer'])
	{
		$totalCorrect++;
		echo'<div class="alert alert-success" role="alert"> <strong>Super!</strong> '.$i["answer"].' to prawidłowa odpowiedz!</div>
		';
	}
	else 
	{		
		echo'<div class="alert alert-danger" role="alert"> <strong>UPSSSSS!</strong>
		'.str_replace(',', ', ', $odpowiedzi).' to zła odpowiedź. Prawidłowa odpowiedź to '.$i["answer"].' </div>
		';
	}
}

 echo "<h1><div id='results'>".$totalCorrect." / ".$l->num_rows." poprawnie</div></h1>";
			 $wynik = $db->query("UPDATE wyniki SET stopien_".$_GET['stopien']."=".$totalCorrect." WHERE id=".$_GET['id']);
			 
			 
				echo'<a href="index.php"><button type="submit" class="btn btn-warning"><b>Wróć do profilu</b></button></a>';

echo'</div>';
echo'</div>';
echo'</ol>';

$l->free();
?>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
	<?php
	require 'footer.php';