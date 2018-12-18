<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
<h1> liste des controleurs </h1>
    <?php
    include 'cnx.php';

        $sql= $cnx-> prepare( "select nom, prenom, id from controleur");
        $sql-> execute();
        echo"<table>";

        foreach($sql-> fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo"<tr>";
            echo"<td>" .$ligne['nom']. "<td>";
            echo"<td>" .$ligne['prenom']."<td>";
            echo"<td> <a href='index2.php?nom=".$ligne['nom']."&prenom=".$ligne['prenom']."&id=".$ligne['id']." '> Tous les clients </a> <td>";
            echo"<tr>";
        }
      
            

        echo"</table>";


    ?>


</body>
</html>