<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Interface Admin des contacts" />
  <meta name="author" content="Rocket Team - AFPA Calais" />
  <title>liste des utilisateurs</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/all.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="icon" href="https://www.youtube.com/s/desktop/1fa3f652/img/favicon_32x32.png" sizes="32x32">
</head>

<body>
  <?php
  require_once "../view/view-client.php";
  require_once "../view/view-template.php";

  ViewTemplate::menu();
  ViewClient::listeClient();
  ViewTemplate::footer();
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>