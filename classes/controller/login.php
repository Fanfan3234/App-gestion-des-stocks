<?php
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

   <title>Connexion dffezf</title>
</head>

<body>
   <?php

   require_once "../view/view-stocks.php";
   require_once "../model/model-stocks.php";

   



   if (isset($_POST['connexion'])) {
      $employe = new Modelutilisateur();
      $userData = $employe->connexionutilisateur($_POST['mail']);

      var_dump($_POST['mail'], $_POST['pass']);
      var_dump($userData);

      if ($userData && password_verify($_POST['pass'], $userData['pass'])) {
         

         $_SESSION['id'] = $userData['id'];
         $_SESSION['nom'] = $userData['nom'];
         $_SESSION['prenom'] = $userData['prenom'];
         $_SESSION['tel'] = $userData['tel'];
         $_SESSION['r0le'] = $userData['r0le'];
         if ($_SESSION['r0le'] == 'super') {
            header('Location: page-admin.php');
         }
         elseif ($_SESSION['r0le'] == 'directeur') {
            header('Location: page-directeur.php');
         } else {
            header('Location: page-utilisateur.php');
         }
      } else {
         Viewutilisateur::alert("danger", "Identifiants incorrects");
         header('login.php');
      }
   } else {
      Viewutilisateur::connexionutilisateur();
   }

   Viewutilisateur::footer();

   ?>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>