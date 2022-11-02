<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Modification d'utilisateurs</title>
</head>

<body>
  <?php
  
  require_once "../view/view-stocks.php";
  require_once "../model/model-stocks.php";

  ViewTemplate::menuutilisateur();

  $client = new Modelutilisateur();
  if (isset($_GET['id'])) {
    if ($client->voirutilisateur($_GET['id'])) {
      ViewTemplate::modifutilisateur($_GET['id']);
    } else {
      ViewTemplate::alert("danger", "Le client  n'existe pas", "liste-utilisateurs.php");
    }
  } else {
    if (isset($_POST['id']) && $client->voirutilisateur($_POST['id'])) {
      if ($client->modifutilisateur($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['pass'], $_POST['tel'], $_POST['adresse'], $_POST['ville'], $_POST['code_post'],$_POST['token'])) {
        ViewTemplate::alert("success", "Le client a été modifié avec succès", "liste-utilisateurs.php");
      } else {
        ViewTemplate::alert("danger", "Echec de la modification", "liste-utilisateurs.php");
      }
    } else {
      ViewTemplate::alert("danger", "Aucune donnée n'a été transmise", "liste-utilisateurs.php");
    }
  }

  ViewTemplate::footer();
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>