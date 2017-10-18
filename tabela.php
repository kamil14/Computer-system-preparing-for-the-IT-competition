<?php
require 'conf.php';
require 'header.php';

$u = $db->query("SELECT users.imie, users.nazwisko, wyniki.stopien_szkolny1, wyniki.stopien_szkolny2, wyniki.stopien_rejonowy1, wyniki.stopien_rejonowy2, wyniki.stopien_wojewodzki1, wyniki.stopien_wojewodzki2 FROM users, wyniki WHERE users.id = wyniki.id and users.id='".$_GET['id']."'");
if($t = $u->fetch_assoc()) {
    echo "
	<div ng-include='info.example' ng-if='showDiv' itemprop='exampleOfWork' class='ng-scope' style='margin-bottom: 64px ;'>
	<div class='bs-example ng-scope' data-example-id='table-within-panel'> 
		<div class='panel panel-default' style='margin-left:300px; margin-right:300px;'>  
			<div class='panel-heading'><h1>Panel wynikowy</h1></div> 
			<div class='panel-body' style='text-align:center;'> 
				<h2>Witaj w panelu wynikowym. Sprawdz postepy swojego ucznia.</br></br> Czy jest gotowy do uczestnictwa w konkursie?</h2>
			</div>  
			<table class='table'> 
				<thead> 
					<tr> 
						
						<th>Imię</th> 
						<th>Nazwisko</th> 
						 
						<th>1.Stopień szkolny 40 pkt</th> 
						<th>2.Stopień szkolny 40 pkt</th> 
						<th>1.Stopień rejonowy 40 pkt</th> 
						<th>2.Stopień rejonowy 35 pkt</th> 
						<th>1.Stopień wojewodzki 35 pkt</th> 
						<th>2.Stopień wojewodzki 35 pkt</th> 
					</tr> 
				</thead> 
				<tbody> 
					<tr> 
						
						<td>".$t["imie"]."</td> 
						<td>".$t["nazwisko"]."</td> 
						
						<td>".$t["stopien_szkolny1"]."</td> 
						<td>".$t["stopien_szkolny2"]."</td> 
						<td>".$t["stopien_rejonowy1"]."</td> 
						<td>".$t["stopien_rejonowy2"]."</td> 
						<td>".$t["stopien_wojewodzki1"]."</td> 
						<td>".$t["stopien_wojewodzki2"]."</td> 
					</tr> 

					
				</tbody> 
			</table> 
		</div> 
	</div>
</div>
";

}
else
{
	echo '<div class="panel panel-default" style="margin-left:400px; margin-right:400px; margin-bottom: 309px; background-color: lightgray;"> 
	<div class="panel-body"> <h1>Uczeń nie rozpoczął jeszcze rozwiązywać testów</h1> 
	</div>
	</div> 
	';
}
$u->free();
?>
<div class="row">
		<div class="col-lg-6">
<a href="index.php"><button  type="button" class="btn btn-success">Profil</button></a>
</div>


		<div class="col-lg-6" style="text-align:right;">
<a href="wyniki.php"><button  type="button" class="btn btn-success">Wybierz ucznia</button></a>
</div>
</div>
<?php
require 'footer.php';


?>
