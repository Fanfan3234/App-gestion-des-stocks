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

  Viewutilisateur::menuadmin();

  $client = new Modelutilisateur();
  if (isset($_GET['id'])) {
    if ($client->voirutilisateur($_GET['id'])) {
      Viewutilisateur::modifutilisateuradmin($_GET['id']);
    } else {
      Viewutilisateur::alert("danger", "L'utilisateur'  n'existe pas", "liste-utilisateursadmin.php");
    }
  } else {
    if (isset($_POST['id']) && $client->voirutilisateur($_POST['id'])) {
      $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      if ($client->modifutilisateuradmin($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $pass, $_POST['r0le'])) {
        Viewutilisateur::alert("success", "L'utilisateur' a été modifié avec succès", "liste-utilisateursadmin.php");
      } else {
        Viewutilisateur::alert("danger", "Echec de la modification", "liste-utilisateursadmin.php");
        var_dump($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $pass, $_POST['r0le']);
      }
    } else {
      Viewutilisateur::alert("danger", "Aucune donnée n'a été transmise", "liste-utilisateursadmin.php");
    }
  }

  Viewutilisateur::footer();
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>