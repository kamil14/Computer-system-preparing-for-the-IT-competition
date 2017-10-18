<?php
require 'conf.php';
require 'header.php';
$userData = $user->data();
$l = $db->query("SELECT id, imie, nazwisko, rola, k.nazwa as klasa FROM users u inner join klasy k on k.id_klasy = u.id_klasy WHERE u.id_klasy=".$userData['id_klasy']."");
echo '<div class="panel-body" style=" background-color:lightgray; height:auto; margin-left:500px; margin-right: 500px; margin-bottom:230px; text-align:center; border-radius:30px;">';
echo'<h1><b>'.$userData['klasa'].'</b></h1>';
echo'<h1><b>Sprawdź swoich uczniów.</b></h1>';
echo'</br>';
echo'<div class="btn-group">';
echo'<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false " "><h3>Wybierz ucznia</h3>';
echo'<span class="caret">';
echo'</span>';
echo'</button> ';
echo'<ul class="dropdown-menu">';
while ($i = $l->fetch_assoc()) {
	echo 
'
		<li>
			<a href="tabela.php?id='.$i['id'].'"><h3>'.$i["imie"].' '.$i["nazwisko"].' '.$i["klasa"].'</h3></a>
		</li> 
		
';
}
echo'</ul>';
echo'</div>';
echo '</br>';
echo '</br>';
echo'<a href="index.php"><button type="button" class="btn btn-success">Powrót</button></a>';
echo'</div>';


$l->free();
?>

<?php
require 'footer.php';




