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



  public function modifutilisateur($id, $nom, $prenom, $mail, $pass, $tel, $role)
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
