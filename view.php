<?php
require 'admin/database.php';

if(!empty($_GET['id']))
{
  $id = checkInput($_GET['id']);
}

$db = Database::connect();
  $statement = $db->prepare("SELECT film.id, film.name, film.description, film.image, genres.name AS genre FROM film LEFT JOIN genres ON film.genre = genres.id WHERE film.id = ?");




// $db = database::connect();
// $statement = $db->prepare("SELECT film.id, film.name, film.description, genres.name As genre
//                          FROM film LEFT JOIN genres ON film.genre = genres.id
//                          WHERE film.id = ?");
$statement->execute(array($id));
$film = $statement->fetch();
Database::disconnect();

function checkInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>

 <!DOCTYPE html>
  <html lang="fr" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title> cinemetVOD</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
<?php include("include/header.php");?>
        <div class="container admin">
              <div class="col-sm-6 view">
                <div class="thumbnail">
                  <img src="<?php echo 'img/film/'.$film['image'];?>" alt="...">
                  <div class="caption">
                    <h4><strong><?php echo  $film['name']; ?></strong></h4>
                    <br>
                    <p><?php echo  $film['description']; ?></p>
                    <br>
                    <a class="btn btn-primary" href="location.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                  </div>
                </div>
              </div>
            </div>
<?php include("include/footer.php") ?>
    </body>
  </html>
