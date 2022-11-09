<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Ajout d'utilisateur</title>
</head>

<body>
  <?php

  require_once "../view/view-stocks.php";
  require_once "../model/model-stocks.php";

  if (isset($_POST['ajout'])) {
    $employe = new Modelutilisateur();
    $userData = $employe->connexionutilisateur($_POST['mail']);

    if ($userData['mail'] === $_POST['mail']) {
  ?>
      <br />
    <?php
      Viewutilisateur::alert("danger", "Mail déja existant !", "ajout-utilisateur.php");
    } else {
      $user = new Modelutilisateur();
      $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
      ($user->ajoututilisateur($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $pass, $_POST['r0le']));
    ?>
      <br />
  <?php
      Viewutilisateur::alert("success", "utilisateur ajouté avec succès", "liste-utilisateursadmin.php");
    }
  } else {
    Viewutilisateur::ajoututilisateur();
  }

  Viewutilisateur::footer();
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>