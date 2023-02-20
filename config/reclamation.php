<?php
  
 
session_start();
if (! empty($_SESSION['log']))
{

include("../db/dbcon.php");

            $matricule = $_POST["matricule"] ;
            
            $typerec   = $_POST["select"] ;
            
            $text      = $_POST["textes"] ;
            
            $classe    = $_POST["classe"] ;

            $dates     = $_POST["dates"] ;
            
            $nom       = $_POST["nom"] ;

            $prenom    = $_POST["prenom"] ;

  $sql = "INSERT  INTO reclamation (matriculeE,typereclamation,datereclamation,nom,prenom,classeE,message,reponse
)
            VALUES ('$matricule','$typerec','$dates','$nom', '$prenom','$classe', '$text', 'En cours') " ; 
  
  $requete = mysqli_query($cnx,$sql)  ;
 
  
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
