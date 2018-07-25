
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Cinemet_VOD</title>
    <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
  </head>
  <body>
    <?php include("include/header.php");?>

<div class="container">

    <div id="carousel" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
          <div class="black-divider"></div>
          <div class="black-divider-top"></div>
			</ol>


			<div class="carousel-inner" role="listbox">

				<div class="item active">
				<img src="img/slider_accueil/inde2slide.png" style="width: 100%; height:15% ;">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
				<img src="img/slider_accueil/lab.png" style="width: 100%; height:15% ;">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
				<img src="img/slider_accueil/metropolis.png" style="width: 100%; height:15% ;">
					<div class="carousel-caption"></div>
				</div>
			</div>

			<a href="#carousel" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a href="#carousel" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

		</div>

<section id="filmaccueil">
  <nav class="film-nav-accueil">
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="#nouveaute" data-toggle="tab">Nouveauté</a></li>
      <li role="presentation" ><a href="#promo" data-toggle="tab">En promo</a></li>
      <li role="presentation" ><a href="#avenir" data-toggle="tab">À venir</a></li>
    </ul>
  </nav>

  <div class="tab-content">

      <div class="tab-pane active" id="nouveaute">
        <div class="row">

          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/film/bladerunner.png" alt="...">
              </div>
            </div>


          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/film/labtrois.png" alt="...">
              </div>
            </div>


          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/film/metro.png" alt="...">
              </div>
            </div>


          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="img/film/inter.png" alt="...">
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="promo">
          <div class="row">

            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/film/labun.png" alt="...">
                </div>
              </div>


            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/film/labdeux.png" alt="...">
                </div>
              </div>


            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/film/stalker.png" alt="...">
                </div>
              </div>


            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="img/film/mom.png" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="avenir">
            <div class="row">

              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="img/film/indes.png" alt="...">
                  <div class="sortie">

                  </div>
                  </div>
                </div>


              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="img/film/venom.png" alt="...">
                  <div class="sortie">

                  </div>
                  </div>
                </div>


              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="img/film/dog.png" alt="...">
                  <div class="sortie">

                  </div>
                  </div>
                </div>


      </div>
</section>
  </div>

  </div>
</div>



<?php include("include/footer.php") ?>
  </body>
</html>
