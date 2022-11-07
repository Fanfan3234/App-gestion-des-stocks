<?php
require_once '../model/model-stocks.php';

class Viewutilisateur
{
  public static function alert($type = "info", $message = "oui", $lien = null)
  {
?>
    <div class="container alert  alert-<?= $type ?>" role="alert">
      <?= $message ?> <br />
      <?php
      if ($lien) {  ?>
        Cliquez <a href="<?= $lien ?>" class="alert-link px-2"> ici </a> pour continuer la navigation
      <?php
      }
      ?>
    </div>

  <?php

  }

  public static function menu()
  {
  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">

            </li>





          </ul>

          <a href="login.php?id=" class="btn btn-primary">Connexion<span class="sr-only">(current)</span></a>



        </div>

      </div>

    </nav>
  <?php

  }

  public static function menuutilisateur()
  {

  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="liste-depots.php">listes dépots<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="liste-utilisateurs.php">Listes utilisateurs<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="liste-produits.php">Listes produits<span class="sr-only">(current)</span></a>
            </li>



          </ul>
          <a href="profil.php?id=" class="btn btn-primary">Profil<span class="sr-only">(current)</span></a>
          &nbsp
          <a href="deconnexion.php?id=" class="btn btn-primary">Deconnexion<span class="sr-only">(current)</span></a>



        </div>

      </div>

    </nav>
  <?php

  }

  public static function menuadmin()
  {
  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="ajout-utilisateur.php">Ajout utilisateurs <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="liste-utilisateursadmin.php">Listes utilisateurs <span class="sr-only">(current)</span></a>
            </li>
            <li>
            </li>



          </ul>
          <a href="profil.php?id=" class="btn btn-primary">Profil<span class="sr-only">(current)</span></a>
          &nbsp
          <a href="deconnexion.php?id=" class="btn btn-primary">Deconnexion<span class="sr-only">(current)</span></a>



        </div>

      </div>

    </nav>
  <?php

  }

  public static function menudirecteur()
  {

  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="ajout-depot.php">Ajout depots <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="liste-depots.php">Listes depots <span class="sr-only">(current)</span></a>
            </li>
            <li>
            </li>



          </ul>
          <a href="profil.php?id=" class="btn btn-primary">Profil<span class="sr-only">(current)</span></a>
          &nbsp
          <a href="deconnexion.php?id=" class="btn btn-primary">Deconnexion<span class="sr-only">(current)</span></a>



        </div>

      </div>

    </nav>
  <?php


  }

  public static function connexionutilisateur()
  {
  ?>
    <div class="container mt-5">
      <a href="acceuil.php" class="btn btn-primary">Retour</a>
      <form class="col-md-6 offset-md-3" method="post" action="" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> enctype="multipart/form-data">
        Connexion
        <div class="form-group">
          <label for="mail">Mail : </label>
          <input type="email" required="veuillez compléter ce champ" class="form-control" name="mail">
        </div>
        <div class="form-group">
          <label for="pass">Mot de passe : </label>
          <input type="password" required="veuillez compléter ce champ" class="form-control" name="pass">
        </div>
        <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>

      </form>
    </div>
  <?php
  }

  public static function listeutilisateur()
  {
    $utilisateur = new Modelutilisateur();
    $liste = $utilisateur->listeutilisateur();
  ?>
    <div class="container">
      <?php
      if (count($liste) > 0) {
      ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Mail</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php
            foreach ($liste as $utilisateur) {
            ?>
              <tr>
                <th scope="row"><?= $utilisateur['id'] ?></th>
                <td><?= $utilisateur['nom'] ?></td>
                <td><?= $utilisateur['prenom'] ?></td>
                <td><?= $utilisateur['mail'] ?></td>
                <td>
                  <a href="voir-utilisateur.php?id=<?= $utilisateur['id'] ?>" class="btn btn-primary">Voir</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      <?php
      } else {
      ?>
        <div class="alert alert-danger" role="alert">
          Aucun contact n'existe dans la liste.
        </div>
      <?php
      }  ?>
    </div>
  <?php
  }

  public static function listeutilisateuradmin()
  {
    $utilisateur = new Modelutilisateur();
    $liste = $utilisateur->listeutilisateur();
  ?>
    <div class="container">
      <?php
      if (count($liste) > 0) {
      ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Mail</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php
            foreach ($liste as $utilisateur) {
            ?>
              <tr>
                <th scope="row"><?= $utilisateur['id'] ?></th>
                <td><?= $utilisateur['nom'] ?></td>
                <td><?= $utilisateur['prenom'] ?></td>
                <td><?= $utilisateur['mail'] ?></td>
                <td>
                  <a href="voir-utilisateur.php?id=<?= $utilisateur['id'] ?>" class="btn btn-primary">Voir</a>
                  <a href="modif-utilisateur.php?id=<?= $utilisateur['id'] ?>" class="btn btn-info">Modifier</a>
                  <a href="supp-utilisateur.php?id=<?= $utilisateur['id'] ?>" class="btn btn-danger">Supprimer</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      <?php
      } else {
      ?>
        <div class="alert alert-danger" role="alert">
          Aucun contact n'existe dans la liste.
        </div>
      <?php
      }  ?>
    </div>
  <?php
  }

  public static function profil($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>
    <div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $user['id'] . " : " . $user['nom'] . " : " . $user['prenom'];  ?> </h5>

          <p class="card-text">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank"><?= $user['mail'] ?></a><br>

          </p>
          <a href="modif-utilisateur.php?id=<?= $user['id'] ?>" class="btn btn-info">Modifier</a>
          <a href="supp-utilisateur.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a><br /><br />
          <a href="liste-utilisateurs.php" class="btn btn-primary">
            < Retour</a>
        </div>
      </div>
    </div>
  <?php
  }

  public static function profiladmin($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>
    <div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $user['id'] . " : " . $user['nom'] . " : " . $user['prenom'];  ?> </h5>

          <p class="card-text">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank"><?= $user['mail'] ?></a><br>

          </p>
          <a href="modif-utilisateur.php?id=<?= $user['id'] ?>" class="btn btn-info">Modifier</a>
          <a href="supp-utilisateur.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a><br /><br />
          <a href="liste-utilisateursadmin.php" class="btn btn-primary">
            < Retour</a>
        </div>
      </div>
    </div>
  <?php
  }

  public static function voirutilisateur($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>
    <div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $user['id'] . " : " . $user['nom'] . " : " . $user['prenom'];  ?> </h5>

          <p class="card-text">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank"><?= $user['mail'] ?></a><br>

          </p>
          <br />
          <br />
          <a href="liste-employe.php" class="btn btn-primary">
            < Retour</a>
        </div>
      </div>
    </div>
  <?php
  }

  public static function voirutilisateuradmin($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>
    <div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $user['id'] . " : " . $user['nom'] . " : " . $user['prenom'];  ?> </h5>

          <p class="card-text">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank"><?= $user['mail'] ?></a><br>

          </p>
          <a href="modif-employe.php?id=<?= $user['id'] ?>" class="btn btn-info">Modifier</a>
          <a href="supp-employe.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
          <br />
          <br />
          <a href="liste-employe.php" class="btn btn-primary">
            < Retour</a>
        </div>
      </div>
    </div>
  <?php
  }

  public static function ajoututilisateur()
  { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ajout utilisateur</title>
    </head>

    <body>

      <form class="col-md-6 offset-md-3" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">



        <br />
        <a href="liste-employe.php" class="btn btn-primary">
          < Retour</a>
            <br />
            <br />


            <div class="form-group">
              <label for="nom">Nom : </label>
              <input type="text" required="veuillez compléter ce champ" class="form-control" name="nom" id="nom">
            </div>
            <div class="form-group">
              <label for="prenom">Prenom : </label>
              <input type="text" required="veuillez compléter ce champ" class="form-control" name="prenom" id="prenom">
            </div>
            <div class="form-group">
              <label for="mail">Adresse mail : </label>
              <input type="email" required="veuillez compléter ce champ" class="form-control" name="mail" id="mail">
            </div>
            <div class="form-group">
              <label for="tel">Tel : </label>
              <input type="tel" required="veuillez compléter ce champ" class="form-control" name="tel" id="tel">
            </div>
            <div class="form-group">
              <label for="pass">Mot de passe : </label>
              <input type="password" required="veuillez compléter ce champ" class="form-control" name="pass" id="pass">

            </div>
            <div class="form-group">
              <label for="r0le" id="r0le">role : </label>
              <input type="text" class="form-control" name="r0le" id="r0le">
            </div>




            <button type="submit" class="btn btn-primary" name="ajout" id="ajout"> Ajouter </button>

            <button type="reset" class="btn btn-danger"> Réinitialiser </button>
      </form>
    </body>

    </html>

  <?php
  }

  public static function modifutilisateur($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>

    <form class="col-md-6 offset-md-3" method="post" action="modif-employe.php">
      <input type="hidden" class="form-control" name="id" id="id" value="<?= $user['id'] ?>">
      <div class="form-group">
        <label for="nom"> Nom: < /label>
            <input type="text" class="form-control" name="nom" id="nom" value="<?= $user['nom'] ?>">
      </div>
      <div class="form-group">
        <label for="prenom"> Prenom: </label>
        <input type="text" class="form-control" name="prenom" id="prenom" value="<?= $user['prenom'] ?>">
      </div>
      <div class="form-group">
        <label for="mail"> Adresse mail: </label>
        <input type="email" class="form-control" name="mail" id="mail" value="<?= $user['mail'] ?>">
      </div>
      <div class="form-group">
        <label for="pass"> Mot de passe: </label>
        <input type="password" class="form-control" name="pass" id="pass">
      </div>

      <button type="submit" class="btn btn-primary" name="modif" id="modif"> Modifier </button>
      <button type="reset" class="btn btn-danger"> Réinitialiser </button>
    </form>
  <?php
  }

  public static function footer()
  {
  ?>
    <div class="bg-dark py-4 mt-5 text-center text-light h3">
      <div class="container">
        copyright &copy; <?= date("Y") ?>
      </div>
    </div>
<?php
  }
}
