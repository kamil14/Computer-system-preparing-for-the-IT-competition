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
				
					<h1><b>ROZDZIAŁ 2</b></h1></br><h2>Czy komputer ma duszę?</h2>
					
					<div class="panel panel-success"> 
						<div class="panel-heading"> 
							<h3 class="panel-title">Spis treści</h3> 
						</div> 
						<div class="panel-body"> 
							<div class="well center-block" style="max-width:400px"> 
							<?php echo '
							<a href="roz2.1_rej.php?id='.$_GET['id'].'" button  type="button" class="btn btn-primary btn-lg btn-block"><b>1.1.</b> System operacyjny</button> </a>
							<a href="roz2.2_rej.php?id='.$_GET['id'].'" button type="button" class="btn btn-success btn-lg btn-block"><b>1.2.</b> Bądź ostrożny w sieci! </button></a>							
							<a href="roz2.3_rej.php?id='.$_GET['id'].'" button type="button" class="btn btn-primary btn-lg btn-block"><b>1.3.</b> Arkusz kalkulacyjny</button></a>';
							?>							
							<?php
							echo '
								<a href="test1.php?id='.$_GET['id'].'&stopien=rejonowy1" button type="button" class="btn btn-warning btn-lg btn-block"><b>Przejdź do testu nr 1.</b></button></a>					
								<a href="test1.php?id='.$_GET['id'].'&stopien=rejonowy2" button type="button" class="btn btn-warning btn-lg btn-block"><b>Przejdź do testu nr 2.</b></button></a>
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
								<a href="roz2_rej.php?id='.$_GET['id'].'">1 <span class="sr-only">(current)</span></a>
							</li>
							<li>
								<a href="roz2.1_rej.php?id='.$_GET['id'].'">1.1</a>
							</li> 
							<li>
								<a href="roz2.2_rej.php?id='.$_GET['id'].'">1.2</a>
							</li> 
							<li>
								<a href="roz2.3_rej.php?id='.$_GET['id'].'">1.3</a>
							</li> 
							<li>
								<a href="roz2.1_rej.php?id='.$_GET['id'].'" aria-label="Next"><span aria-hidden="true">»</span></a>
							</li> ';
							?>
						</ul> 
					</nav>
		</div>
	</div>


</div>

<?php
	require 'footer.php';