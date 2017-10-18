<?php
require 'conf.php';
require 'header.php';

$l = $db->query("SELECT id_pytania, tresc, odpa, odpb, odpc, odpd, stopien,answer, czy_wielokrotne FROM pytania where stopien='".$_GET['stopien']."'");
echo '<div class="container quiz">';
		echo'	<form action="testodp.php?id='.$_GET['id'].'&stopien='.$_GET['stopien'].'" method="post" id="quiz">';
			echo'<h1><b>Czas na test, sprawdź swoja wiedzę</b></h1>';
			echo'<div class="row">';
			echo'<div class="col-lg-12"style="line-height: 1.1cm">';
			echo'<ol>';
while ($i = $l->fetch_assoc()) {
	$typ_inputa = 'radio';
	if($i["czy_wielokrotne"]==1)
	{
		$typ_inputa = 'checkbox';
	}
if (!$user->check()) {
    echo '<p class="error">Przykro nam, ale ta strona jest dostępna tylko dla zalogowanych użytkowników.</p>';
    require 'footer.php';
    die;
}

echo '
	
								<li>
									<h3>'.$i["tresc"].'</h3>
									<div class="btn-group" data-toggle="buttons" >
										
											<label for="question-'.$i["id_pytania"].'-answers-a" class="btn btn-success">
												<input type="'.$typ_inputa.'" name="question-'.$i["id_pytania"].'-answers[]" id="question-'.$i["id_pytania"].'-answers-a" autocomplete="off" value="a" />
												
												<span class="glyphicon glyphicon-ok"></span>
												 A) '.$i["odpa"].'
											</label>
										
										</br>
										
											<label class="btn btn-success" for="question-'.$i["id_pytania"].'-answers-b">
												<input type="'.$typ_inputa.'" name="question-'.$i["id_pytania"].'-answers[]" id="question-'.$i["id_pytania"].'-answers-b" autocomplete="off" value="b" />
												<span class="glyphicon glyphicon-ok"></span>
												B) '.$i["odpb"].'
											</label>
										</br>
									
										<label class="btn btn-success" for="question-'.$i["id_pytania"].'-answers-c">
											<input type="'.$typ_inputa.'" name="question-'.$i["id_pytania"].'-answers[]" id="question-'.$i["id_pytania"].'-answers-c" autocomplete="off" value="c" />
											<span class="glyphicon glyphicon-ok"></span>
											C) '.$i["odpc"].'
										</label>
										</br>
										
										<label class="btn btn-success" for="question-'.$i["id_pytania"].'-answers-d">
											<input type="'.$typ_inputa.'" name="question-'.$i["id_pytania"].'-answers[]" id="question-'.$i["id_pytania"].'-answers-d" autocomplete="off" value="d" />
											<span class="glyphicon glyphicon-ok"></span>
											D) '.$i["odpd"].'
										</label>
										</div>
										</br>
										</br>
									
									';
									$images = scandir("zdjeciaDoPytan", 1);
									$filename = $i["id_pytania"].'.PNG';
									
									if (in_array($filename, $images)) {
										echo '<div class="col-lg-12"><img src="zdjeciaDoPytan/'.$filename.'" class="img-thumbnail" /></div>';
									}
									
									echo '</li>	
										
		
';

}
echo'</ol>';
echo'</div>';
echo'</div>';
echo'<button type="submit" class="btn btn-warning"><b>Sprawdz się</b></button>';
echo'</div>';

echo'</form>';
echo'</div>';
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