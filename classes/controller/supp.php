<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Suppression de client</title>
</head>

<body>
  <?php
  
  require_once "../view/view-stocks.php";
  require_once "../model/model-stocks.php";

  ViewTemplate::menuutilisateur();

  if(isset($_GET['id'])) {
    $client = new Modelutilisateur();
    if($client->voirClient($_GET['id'])) {
      if($client->suppClient($_GET['id'])){
        ViewTemplate::alert("success", "Client supprimé avec succès", "liste-client.php");
      }
      else{
        ViewTemplate::alert("danger", "Echec de la suppression", "liste-client.php");
      }
    }
    else {
      ViewTemplate::alert("danger", "Contact n'existe pas", "liste-client.php");
    }
  }
  else {
    ViewTemplate::alert("danger", "Aucune donnée n'a été transmise", "liste-client.php");
  }

  ViewTemplate::footer();
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>