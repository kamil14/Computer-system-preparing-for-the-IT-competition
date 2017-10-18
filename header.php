<!DOCTYPE html>
<html lang="pl">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Cardo&amp;subset=latin-ext" rel="stylesheet">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css"> body{ background:  url('images/tlo3.png');} </style>
	
</head>


<!-- NAVBAR
================================================== -->
  <body>
  <style>
	body
	{
		font-family: 'Cardo', serif;
	}
</style>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Informatyka dla każdego</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Strona główna</a></li>
			
                
                <li><a href="instrukcja.php" target=_blank>Instrukcja</a></li>
                <li><a href="http://stara.kuratorium.bialystok.pl/kuratorium2/DesktopDefault.aspx"target=_blank>Kuratorium Oświaty</a></li>
                <li><a href="http://www.uwb.edu.pl/"target=_blank>Uniwersytet w Białymstoku</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Więcej <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://www.google.pl/" target=_blank>Google</a></li>
                    <li><a href="https://pl.wikipedia.org/wiki/Wikipedia:Strona_g%C5%82%C3%B3wna" target=_blank>Wikipedia</a></li>
                    <li><a href="zrodla.php">Źródła materiałów</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Pomocne aplikacje</li>
                    <li><a href="https://play.google.com/store/apps/details?id=mquiz.informatyka&hl=pl" target=_blank>Quiz informatyka</a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.apps21.cursodecomputacion&hl=pl" target=_blank>Kurs komputerowy</a></li>
					 <li class="dropdown-header">Chcesz odpocząć?</li>
					 <li><a href="logout.php">Wyloguj się</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/4.jpg"  alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Regulamin konkursu</h1>
              <p>Jeżeli chcesz dowiedzieć się więcej, przeczytaj regulamin</p>
              <p><a class="btn btn-lg btn-primary" href="http://stara.kuratorium.bialystok.pl/kuratorium2/DesktopDefault.aspx?tabindex=3&tabid=2882" target=_blank role="button">Regulamin</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/2.jpg" class="img-responsive" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Regulamin konkursu</h1>
              <p>Jeżeli chcesz dowiedzieć się więcej, przeczytaj regulamin</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Regulamin</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Regulamin konkursu</h1>
              <p>Jeżeli chcesz dowiedzieć się więcej, przeczytaj regulamin</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Regulamin</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="js/jquery-2.2.0.min.js"></script>