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

  <?php include('include/header.php') ?>

    <div class="container location">
      <div class="row">
        <br>
        <?php
      require 'admin/database.php';

              echo '<nav>
                      <ul class="nav nav-pills">';

              $db = Database::connect();
              $statement = $db->query('SELECT * FROM genres');
              $genres = $statement->fetchAll();
              foreach ($genres as $genre)
              {
                  if($genre['id'] == '1')
                      echo '<li role="presentation" class="active"><a href="#'. $genre['id'] . '" data-toggle="tab">' . $genre['name'] . '</a></li>';
                  else
                      echo '<li role="presentation"><a href="#'. $genre['id'] . '" data-toggle="tab">' . $genre['name'] . '</a></li>';
              }

              echo    '</ul>
                    </nav>';
              echo '<br>';
              echo '<div class="tab-content">';

              foreach ($genres as $genre)
              {
                  if($genre['id'] == '1')
                      echo '<div class="tab-pane active" id="' . $genre['id'] .'">';
                  else
                      echo '<div class="tab-pane" id="' . $genre['id'] .'">';

                  echo '<div class="row">';

                  $statement = $db->prepare('SELECT * FROM film WHERE film.genre = ?');
                  $statement->execute(array($genre['id']));
                  while ($film = $statement->fetch())
                  {
                      echo '<div class="col-sm-6 col-md-4">
                              <div class="thumbnail">
                              <a class="btn btn-default" href="view.php?id=' . $film['id'] .'"><img src="img/film/' . $film['image'] . '" alt="..."></a>
                                  <div class="caption">
                                  </div>
                              </div>
                          </div>';
                  }

                 echo    '</div>
                      </div>';
              }
              Database::disconnect();
              echo  '</div>';
          ?>


      </div>

    </div>


<?php include("include/footer.php") ?>


  </body>
  </html>
