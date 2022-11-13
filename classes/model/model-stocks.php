<?php
require_once "connexion.php";

class Modelutilisateur
{
  private $id;
  private $nom;
  private $prenom;
  private $mail;
  private $tel;
  private $role;
  private $pass;


  public function __construct(
    $id = null,
    $nom = null,
    $prenom = null,
    $mail = null,
    $tel = null,
    $role = null,
    $pass = null
  ) {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->tel = $tel;
    $this->role = $role;
    $this->pass = $pass;
  }

  public function listeutilisateur()
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM user
    ");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
  }



  public function ajoututilisateur($nom, $prenom, $mail,  $tel, $pass, $role)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("INSERT INTO user VALUES ( null, :nom, :prenom, :mail, :tel, :pass, :r0le)");


    return $requete->execute([
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':mail' => $mail,
      ':tel' => $tel,
      ':pass' => $pass,
      ':r0le' => $role,
    ]);
  }
  public static function connexionutilisateur($mail)
  {
    $PDO = connexion();
    $requete = $PDO->prepare("
      SELECT * FROM user WHERE mail=:mail
    ");

    $requete->execute([
      ':mail' => $mail,
    ]);
    return $requete->fetch(PDO::FETCH_ASSOC);
  }

  public function voirutilisateur($id)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM user where id=:id;
    ");
    $requete->execute([
      ':id' => $id,
    ]);
    return $requete->fetch(PDO::FETCH_ASSOC);
  }



  public function supputilisateur($id)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      DELETE  FROM user where id= :id;
    ");
    return $requete->execute([
      ':id' => $id,
    ]);
  }



  public function modifutilisateur($id, $nom, $prenom, $mail, $pass, $tel)
  {
    $idcon = connexion();
    $requet = $idcon->prepare("
      UPDATE user SET nom = :nom, prenom = :prenom, mail = :mail, pass = :pass, tel = :tel,  WHERE id = :id
    ");
    return $requet->execute([
      ':id' => $id,
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':mail' => $mail,
      ':pass' => $pass,
      ':tel' => $tel,


    ]);
  }

  public function modifutilisateuradmin($id, $nom, $prenom, $mail, $pass, $tel, $role)
  {
    $idcon = connexion();
    $requet = $idcon->prepare("
      UPDATE user SET nom = :nom, prenom = :prenom, mail = :mail, pass = :pass, tel = :tel, r0le = :r0le,  WHERE id = :id
    ");
    return $requet->execute([
      ':id' => $id,
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':mail' => $mail,
      ':pass' => $pass,
      ':tel' => $tel,
      ':r0le' => $role,

    ]);
  }




  /*
  
  GETTERS ET SETTERS

  */

  public function getId()
  {
    return $this->id;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function getPrenom()
  {
    return $this->prenom;
  }

  public function getMail()
  {
    return $this->mail;
  }

  public function getPass()
  {
    return $this->pass;
  }

  public function getTel()
  {
    return $this->tel;
  }


  public function getRole()
  {
    return $this->role;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
    return $this;
  }

  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
    return $this;
  }

  public function setMail($mail)
  {
    $this->mail = $mail;
    return $this;
  }

  public function setPass($pass)
  {
    $this->pass = $pass;
    return $this;
  }

  public function setTel($tel)
  {
    $this->tel = $tel;
    return $this;
  }

  public function setRole($role)
  {
    $this->role = $role;
    return $this;
  }
}


class Modelproduit
{
  private $id;
  private $nom;
  private $type;
  private $photo;
  private $description;

  public function __construct(
    $id = null,
    $nom = null,
    $type = null,
    $photo = null,
    $description = null
  ) {
    $this->id = $id;
    $this->nom = $nom;
    $this->type = $type;
    $this->photo = $photo;
    $this->description = $description;
  }

  public function listeproduits()
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM pdt
    ");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
  }



  public function ajoututilisateur($nom, $type, $photo,  $description)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("INSERT INTO pdt VALUES ( null, :nom, :prenom, :mail, :tel, :pass, :r0le)");


    return $requete->execute([
      ':nom' => $nom,
      ':type' => $type,
      ':photo' => $photo,
      ':description' => $description,

    ]);
  }


  public function voirproduit($id)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM pdt where id=:id;
    ");
    $requete->execute([
      ':id' => $id,
    ]);
    return $requete->fetch(PDO::FETCH_ASSOC);
  }



  public function suppproduit($id)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      DELETE  FROM pdt where id= :id;
    ");
    return $requete->execute([
      ':id' => $id,
    ]);
  }



  public function modifproduit($id, $nom, $type, $photo, $description)
  {
    $idcon = connexion();
    $requet = $idcon->prepare("
      UPDATE pdt SET nom = :nom, type = :type, photo = :photo, description = :description,  WHERE id = :id
    ");
    return $requet->execute([
      ':id' => $id,
      ':nom' => $nom,
      ':type' => $type,
      ':photo' => $photo,
      ':description' => $description,



    ]);
  }

  /*
  
  GETTERS ET SETTERS

  */

  public function getId()
  {
    return $this->id;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getPhoto()
  {
    return $this->photo;
  }

  public function getDescription()
  {
    return $this->description;
  }


  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
    return $this;
  }

  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }

  public function setPhoto($photo)
  {
    $this->photo = $photo;
    return $this;
  }

  public function setDescription($description)
  {
    $this->description = $description;
    return $this;
  }
}

class Modeldepot
{
  private $id;
  private $nom;
  private $ville;
  private $code_post;
  private $longit;
  private $lat;
  private $directeur;


  public function __construct(
    $id = null,
    $nom = null,
    $ville = null,
    $code_post = null,
    $longit = null,
    $lat = null,
    $directeur = null
  ) {
    $this->id = $id;
    $this->nom = $nom;
    $this->ville = $ville;
    $this->code_post = $code_post;
    $this->longit = $longit;
    $this->lat = $lat;
    $this->directeur = $directeur;
  }

  public function listedepot()
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM depot
    ");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
  }



  public function ajoutdepot($nom, $ville, $code_post,  $longit, $lat, $directeur)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("INSERT INTO depot VALUES ( null, :nom, :ville, :code_post, :longit, :lat, :directeur)");


    return $requete->execute([
      ':nom' => $nom,
      ':ville' => $ville,
      ':code_post' => $code_post,
      ':longit' => $longit,
      ':lat' => $lat,
      ':directeur' => $directeur,
    ]);
  }


  public function voirdepot($id)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      SELECT * FROM depot where id=:id;
    ");
    $requete->execute([
      ':id' => $id,
    ]);
    return $requete->fetch(PDO::FETCH_ASSOC);
  }



  public function suppdepot($id)
  {
    $idcon = connexion();
    $requete = $idcon->prepare("
      DELETE  FROM depot where id= :id;
    ");
    return $requete->execute([
      ':id' => $id,
    ]);
  }



  public function modifdepot($id, $nom, $ville, $code_post,  $longit, $lat, $directeur)
  {
    $idcon = connexion();
    $requet = $idcon->prepare("
      UPDATE depot SET nom = :nom, ville = :ville, code_post = :code_post, longit = :longit, lat = :lat, directeur = :directeur,  WHERE id = :id
    ");
    return $requet->execute([
      ':id' => $id,
      ':nom' => $nom,
      ':ville' => $ville,
      ':code_post' => $code_post,
      ':longit' => $longit,
      ':lat' => $lat,
      ':directeur' => $directeur,


    ]);
  }


  /*
  
  GETTERS ET SETTERS

  */

  public function getId()
  {
    return $this->id;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function getVille()
  {
    return $this->ville;
  }

  public function getCode_post()
  {
    return $this->code_post;
  }

  public function getLongit()
  {
    return $this->longit;
  }

  public function getLat()
  {
    return $this->lat;
  }


  public function getDirecteur()
  {
    return $this->directeur;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
    return $this;
  }

  public function setVille($ville)
  {
    $this->ville = $ville;
    return $this;
  }

  public function setCode_post($code_post)
  {
    $this->code_post = $code_post;
    return $this;
  }

  public function setLongit($longit)
  {
    $this->longit = $longit;
    return $this;
  }

  public function setLat($lat)
  {
    $this->lat = $lat;
    return $this;
  }

  public function setDescription($description)
  {
    $this->description = $description;
    return $this;
  }
}
