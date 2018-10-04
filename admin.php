
<?php
session_start();

 ?>
 <!Doctype html>
 <html lang="fr" dir="ltr">
 <head>
   <title>Connexion</title>
   <meta charset="utf-8">
 </head>
 <body>
   <?php
   if (isset($_POST['pseudo']) && isset($_POST['pass'])){
         $_SESSION['pseudo']=$_POST['pseudo'];
         $_SESSION['pass']=$_POST['pass'];

     echo "Bienvenue sur la page,  " . $_SESSION['pseudo'] . "!<br>";

   ?>
     <p>Pour vous déconnecter cliquez ici! <button type="submit" value="Logout"><a href="./logout.php">Logout</a></button></p>
   <?php
     } else {
       echo "Merci de vous connecter!";
    ?>

    <?php
     };
     ?>
     <form method="post" action="./index.php">
         <label>Section 1</label>
         <input type="checkbox" name="section1" value="Section_1"><section class="1">

         <label>Section 2</label>
         <input type="checkbox" name="section2" value="Section_2"><section class="2">

         <label>Section 3</label>
         <input type="checkbox" name="section3" value="Section_3"><section class="3">

         <input type="submit" value="Save">
      </form>
