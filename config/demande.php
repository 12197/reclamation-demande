<?php


session_start();
if (! empty($_SESSION['log']))
{

include("../db/dbcon.php");


  $matricule = $_POST["matricule"] ;
  
  $classe = $_POST["classe"] ;

  $dates = $_POST["dates"] ;
  
  $nom = $_POST["nom"] ;

  $prenom = $_POST["prenom"] ;

  $type = $_POST["select"] ;
  
  $text = $_POST["textes"] ;
  
  


  $sql = "INSERT  INTO demande (type, datedemande, matricule,  nom, prenom , classe , remarque , reponse)
   VALUES ('$type','$dates','$matricule', '$nom','$prenom','$classe', '$text', 'En cours') " ; 
  $requete = mysqli_query($cnx,$sql);

  
  if($requete)
    {
      echo "<script>window.open('../index2.php','_self')</script>";
    }
  else
    {
      echo("L'insertion a e echoue") ;
    }
 }
else
{
   header('Location: index.php');
}
    ?>                                                                                                                            