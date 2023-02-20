<?php 
 session_start();
include("../db/dbcon.php");
if(isset($_POST['login']))      $login=$_POST['login'];
else      $login="";

if(isset($_POST['password']))      $password=md5($_POST['password']);
else      $password="";


$req="select login,password from etudiant1 where login='$login' and password='$password'";
$res=mysqli_query($cnx,$req) ; 
$nb=mysqli_num_rows($res);
if($nb) {
    echo "<script>alert('etudiant bien connecter ')</script>";
    echo "<script>window.open('../index2.php','_self')</script>";
    $_SESSION['log'] = $login;


}
else {
echo "<script>alert('compte introuvable ')</script>";
echo "<script>window.open('../index.php','_self')</script>";}

?>