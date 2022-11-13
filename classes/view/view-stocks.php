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
      <a class="navbar-brand" href="acceuil.php">Acceuil</a>

      <div class="container d-flex justify-content-end">
        <a href="login.php?id=" class="btn btn-primary ">Connexion<span class="sr-only">(current)</span></a>
      </div>
    </nav>
  <?php

  }

  public static function menuutilisateur()
  {
    session_start();

    $bienvenue = "" .
      $_SESSION["prenom"] . "";

  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="page-utilisateur.php">Acceuil</a>
      <div class="container">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="liste-depots.php">Dépots<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="liste-utilisateurs.php">Utilisateurs<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="liste-produits.php">Produits<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <div class="d-flex justify-content-around">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        &nbsp
        &nbsp




        <div class="d-flex justify-content-around">
          <a href="profil-utilisateur.php?id=<?= $_SESSION['id'] ?>" class="btn btn-primary"><?php echo $bienvenue ?><span class="sr-only">(current)</span></a>
          &nbsp
          <a href="deconnexion.php?id=" class="btn btn-primary">Deconnexion<span class="sr-only">(current)</span></a>
        </div>


      </div>

      </div>

    </nav>
  <?php

  }

  public static function menuadmin()
  {
    session_start();

    $bienvenue = "" .
      $_SESSION["prenom"] . "";


  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="page-admin.php">Acceuil</a>
      <div class="container">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="liste-utilisateursadmin.php">Utilisateurs<span class="sr-only">(current)</span></a>
          </li>
        </ul>


        <div class="d-flex justify-content-around">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        &nbsp
        &nbsp







      </div>
      <div class="d-flex justify-content-around">

        <a href="profil-admin.php?id=<?= $_SESSION['id'] ?>" class="btn btn-primary"><?php echo $bienvenue ?><span class="sr-only">(current)</span></a>
        &nbsp
        <a href="deconnexion.php?id=" class="btn btn-primary">Deconnexion<span class="sr-only">(current)</span></a>
      </div>




    </nav>
  <?php

  }

  public static function menudirecteur()
  {
    session_start();

    $bienvenue = "" .
      $_SESSION["prenom"] . "";

  ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="page-directeur.php">Acceuil</a>
      <div class="container">



        <ul class="navbar-nav mr-auto">


          <li class="nav-item active">
            <a class="nav-link" href="liste-depotsdir.php">Depots <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="liste-produitsdir.php">Produits <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <div class="d-flex justify-content-around">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>




        <div class="d-flex justify-content-around">
          <a href="profil-directeur.php?id=<?= $_SESSION['id'] ?>" class="btn btn-primary"><?php echo $bienvenue ?><span class="sr-only">(current)</span></a>
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

              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>

              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            foreach ($liste as $utilisateur) {
            ?>
              <tr>
                <td><?= $utilisateur['nom'] ?></td>
                <td><?= $utilisateur['prenom'] ?></td>
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
        <div class="container">
          <table class="table"> <a href="ajout-utilisateur.php" class="btn btn-primary">+</a>

            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>

              <?php
              foreach ($liste as $utilisateur) {
              ?>
                <tr>
                  <td><?= $utilisateur['nom'] ?></td>
                  <td><?= $utilisateur['prenom'] ?></td>
                  <td>
                    <a href="voir-utilisateuradmin.php?id=<?= $utilisateur['id'] ?>" class="btn btn-primary">Voir</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
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

  public static function voirutilisateur($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>

    <div>
      <a href="liste-utilisateurs.php" class="btn btn-primary">retour</a>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $user['id'] . "  " . $user['nom'] . "  " . $user['prenom'];  ?> </h5>

          <p class="card-text">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank" class="text-dark"><?= $user['mail'] ?></a><br>

          </p>
          <br />
          <br />

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
      <a href="liste-utilisateursadmin.php" class="btn btn-primary">Retour</a>

      <div class="card" style="width: 18rem;">

        <div class="card-body">

          <h5 class="card-title"><?= $user['id'] . "  " . $user['nom'] . "  " . $user['prenom'];  ?> </h5>

          <p class="card-text ">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank" class="text-dark"><?= $user['mail'] ?></a><br>

          </p>
          <a href="modif-admin.php?id=<?= $user['id'] ?>" class="btn btn-info">Modifier</a>
          <a href="supp-admin.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
          <br />
          <br />

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
      <a href="liste-utilisateursadmin.php" class="btn btn-primary">Retour</a>

      <div class="card" style="width: 18rem;">

        <div class="card-body">

          <h5 class="card-title"><?= $user['id'] . "  " . $user['nom'] . "  " . $user['prenom'];  ?> </h5>

          <p class="card-text ">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank" class="text-dark"><?= $user['mail'] ?></a><br>

          </p>
          <a href="modif-admin.php?id=<?= $user['id'] ?>" class="btn btn-info">Modifier</a>
          <a href="supp.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
          <br />
          <br />

        </div>
      </div>
    </div>
  <?php
  }
  public static function profil($id)
  {
    $utilisateur = new Modelutilisateur();
    $user = $utilisateur->voirutilisateur($id);
  ?>

    <div>
      <a href="liste-utilisateursadmin.php" class="btn btn-primary">Retour</a>

      <div class="card" style="width: 18rem;">

        <div class="card-body">

          <h5 class="card-title"><?= $user['id'] . "  " . $user['nom'] . "  " . $user['prenom'];  ?> </h5>

          <p class="card-text ">
            Mail : <a href="mailto:<?= $user['mail'] ?>" target="_blank" class="text-dark"><?= $user['mail'] ?></a><br>

          </p>
          <a href="modif-utilisateur.php?id=<?= $user['id'] ?>" class="btn btn-info">Modifier</a>
          <a href="supp.php?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
          <br />
          <br />

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
        <a href="liste-utilisateursadmin.php" class="btn btn-primary">
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
    &nbsp<a href="liste-utilisateurs.php" class="btn btn-primary">
      < Retour</a>
        <br />
        <br />

        <form class="col-md-6 offset-md-3" method="post" action="modif-utilisateur.php">
          <input type="hidden" class="form-control" name="id" id="id" value="<?= $user['id'] ?>">
          <div class="form-group">
            <label for="nom"> Nom: </label>
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
            <input type="password" class="form-control" name="pass" id="pass" value="<?= $user['pass'] ?>">
          </div>
          <div class="form-group">
            <label for="tel"> Tel: </label>
            <input type="text" class="form-control" name="tel" id="tel" value="<?= $user['tel'] ?>">
          </div>

          <button type="submit" class="btn btn-primary" name="modif" id="modif"> Modifier </button>
          <button type="reset" class="btn btn-danger"> Réinitialiser </button>
        </form>
      <?php
    }



    public static function modifutilisateuradmin($id)
    {
      $utilisateur = new Modelutilisateur();
      $user = $utilisateur->voirutilisateur($id);
      ?>
        &nbsp<a href="liste-utilisateursadmin.php" class="btn btn-primary">
          < Retour</a>
            <br />
            <br />
            <form class="col-md-6 offset-md-3" method="post" action="modif-admin.php">
              <input type="hidden" class="form-control" name="id" id="id" value="<?= $user['id'] ?>">
              <div class="form-group">
                <label for="nom"> Nom: </label>
                <input type="text" class="form-control" name="nom" id="nom" value="<?= $user['nom'] ?>">
              </div>
              <div class="form-group">
                <label for="prenom"> Prenom: </label>
                <input type="text" class="form-control" name="prenom" id="prenom" value="<?= $user['prenom'] ?>">
              </div>
              <div class="form-group">
                <label for="mail"> Adresse mail: </label>
                <input type="mail" class="form-control" name="mail" id="mail" value="<?= $user['mail'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"> Mot de passe: </label>
                <input type="pass" class="form-control" name="pass" id="pass" value="<?= $user['pass'] ?>">
              </div>
              <div class="form-group">
                <label for="tel"> Tel: </label>
                <input type="tel" class="form-control" name="tel" id="tel" value="<?= $user['tel'] ?>">
              </div>
              <div class="form-group">
                <label for="r0le"> Role: </label>
                <input type="r0le" class="form-control" name="r0le" id="r0le" value="<?= $user['r0le'] ?>">
              </div>

              <button type="submit" class="btn btn-primary" name="modif" id="modif"> Modifier </button>
              <button type="reset" class="btn btn-danger"> Réinitialiser </button>
            </form>
          <?php
        }




        public static function footer()
        {
          ?>
            <div class="bg-dark py-2 mt-3 text-center text-light fixed-bottom">

              copyright &copy; <?= date("Y") ?>

            </div>
          <?php
        }



        public static function pageadmin()
        {

          if (date("H") < 18)
            $bienvenue = "Bonjour " .
              $_SESSION["prenom"] .
              " et bienvenue  dans votre espace personnel";
          else
            $bienvenue = "Bonsoir " .
              $_SESSION["prenom"] .
              " et bienvenue  dans votre espace personnel";
          ?>

            <body>
              <div class="container-fluid">
                <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light position-fixed collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-dark active" aria-current="page" href="#" data-source="tab-bord">
                            Tableau de bord </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="liste-utilisateursadmin.php">
                            Liste des Utilisateurs
                          </a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="ajout-utilisateur.php">
                            Ajout d'utilisateur
                          </a>

                        </li>
                      </ul>
                    </div>
                  </nav>

                  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 text-center">
                    <section class="contenu" data-cible="tab-bord">
                      <div class="py-4 "><?php echo $bienvenue ?></div>

                    </section>
                  </main>
                </div>
              </div>



            </body>


          <?php
        }

        public static function pageutilisateur()
        {

          if (date("H") < 18)
            $bienvenue = "Bonjour " .
              $_SESSION["prenom"] .
              " et bienvenue  dans votre espace personnel";
          else
            $bienvenue = "Bonsoir " .
              $_SESSION["prenom"] .
              " et bienvenue  dans votre espace personnel";
          ?>

            <body>
              <div class="container-fluid">
                <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light position-fixed collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-dark active" aria-current="page" href="#" data-source="tab-bord">
                            Tableau de bord </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="liste-utilisateurs.php">
                            Liste des Utilisateurs
                          </a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="liste-depot.php">
                            Liste des depots
                          </a>

                        </li>
                      </ul>
                    </div>
                  </nav>

                  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 text-center">
                    <section class="contenu" data-cible="tab-bord">
                      <div class="py-4 "><?php echo $bienvenue ?></div>

                    </section>
                  </main>
                </div>
              </div>



            </body>


          <?php
        }

        public static function pagedirecteur()
        {

          if (date("H") < 18)
            $bienvenue = "Bonjour " .
              $_SESSION["prenom"] .
              " et bienvenue  dans votre espace personnel";
          else
            $bienvenue = "Bonsoir " .
              $_SESSION["prenom"] .
              " et bienvenue  dans votre espace personnel";
          ?>

            <body>
              <div class="container-fluid">
                <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light position-fixed collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-dark active" aria-current="page" href="#" data-source="tab-bord">
                            Tableau de bord </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="ajout-depot.php">
                            Ajout de dépot
                          </a>

                        </li>
                        <li class="nav-item">

                          <a class="nav-link text-dark" href="liste-depots.php">
                            Liste des dépots
                          </a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="ajout-produit.php">
                            Ajout de produit
                          </a>

                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="liste-produit.php">
                            Liste des produits
                          </a>

                        </li>
                      </ul>
                    </div>
                  </nav>

                  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 text-center">
                    <section class="contenu" data-cible="tab-bord">
                      <div class="py-4 "><?php echo $bienvenue ?></div>

                    </section>
                  </main>
                </div>
              </div>



            </body>


          <?php
        }

        public static function pageacceuil()
        {

          if (date("H") < 18)
            $bienvenue = "Bonjour et bienvenue,<br/> connectez vous pour continuer";
          else
            $bienvenue = "Bonsoir et bienvenue,<br/> connectez vous pour continuer";
          ?>

            <body>
              <div class="container-fluid">
                <div class="row">


                  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 text-center">
                    <section class="contenu" data-cible="tab-bord">

                      <div class="position-sticky pt-3 sidebar-sticky h2">
                        <div class="py-4 "><?php echo $bienvenue ?></div>
                      </div>


                    </section>
                  </main>
                </div>
              </div>



            </body>


        <?php
        }
      }
