<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
   <a href= 'index.php'> Home </a>
   <h1> Nouveau Releve </h1>

   <?php
   include'cnx.php';

   $sql=$cnx-> prepare( "select nom, prenom, nouveaureleve, ancienReleve from client where idcontroleur=".$_GET['nouveaureleve']   ");
   $sql->execute ();
    echo"<table>";
    echo"<tr>";
    echo"<td>" .$ligne['nom'].  "<td>";
    echo"<td>" .$ligne['prenom']. "<td>";
    echo"<td>" .$ligne['ancienReleve']. "<td>";
    echo"<td>" .$ligne['Nouveaueleve']. "<td>";
   ?>
</body>
</html>