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
<div class="container roz1szk" style="background-image: url('images/tapetar2.png');">
	<div class="row">
		<div class="col-lg-12">
				
					<h1><b>ROZDZIAŁ 1</b></h1></br><h2>Co w blaszanej skrzynce piszczy?</h2>
					
					<div class="panel panel-success"> 
						<div class="panel-heading"> 
							<h3 class="panel-title">Spis treści</h3> 
						</div> 
						<div class="panel-body"> 
							<div class="well center-block" style="max-width:400px"> 
							<?php echo '
							<a href="roz1.1_szk.php?id='.$_GET['id'].'" button  type="button" class="btn btn-primary btn-lg btn-block"><b>1.1.</b> Moc pod maską</button> </a>
							<a href="roz1.2_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-success btn-lg btn-block"><b>1.2.</b> Co do komputera wpływa,</br>a co z niego wypływa</button></a>
							<a href="roz1.3_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-warning btn-lg btn-block"><b>1.3.</b> Na wirtualnym biurku</button></a>						
							<a href="roz1.4_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-primary btn-lg btn-block"><b>1.4.</b> Komputerowe pisanie</button></a>						
							<a href="roz1.5_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-success btn-lg btn-block"><b>1.5.</b> Multimedia</button></a>						
							<a href="roz1.6_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-warning btn-lg btn-block"><b>1.6.</b> Internet</button></a>					
							<a href="roz1.7_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-primary btn-lg btn-block"><b>1.7.</b> Grafika</button></a>	
							<a href="roz1.8_szk.php?id='.$_GET['id'].'" button type="button" class="btn btn-primary btn-lg btn-block"><b>1.8.</b> Edytor tekstu</button></a>';
							?>							
							<?php
							echo '
								<a href="test1.php?id='.$_GET['id'].'&stopien=szkolny1" button type="button" class="btn btn-success btn-lg btn-block"><b>Przejdź do testu nr 1.</b></button></a>					
								<a href="test1.php?id='.$_GET['id'].'&stopien=szkolny2" button type="button" class="btn btn-success btn-lg btn-block"><b>Przejdź do testu nr 2.</b></button></a>
								<a href="profile.php?id='.$_GET['id'].'" button type="button" class="btn btn-primary btn-lg btn-block"><b>STRONA GŁÓWNA</b></button></a>
								';								
							?>
								 	
								
											
						</div> 
						</div> 
					</div>
					
					<nav> 
						<ul class="pagination" style="margin-left:30px;"> 
						<?php echo '
							<li class="active">
								<a href="roz1_szk.php?id='.$_GET['id'].'v">1 <span class="sr-only">(current)</span></a>
							</li>
							<li>
								<a href="roz1.1_szk.php?id='.$_GET['id'].'">1.1</a>
							</li> 
							<li>
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
								<a href="roz1.1_szk.php" aria-label="Next"><span aria-hidden="true">»</span></a>
							</li> ';
							?>
						</ul> 
					</nav>
		</div>
	</div>


</div>

<?php
	require 'footer.php';