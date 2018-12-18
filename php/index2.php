<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<h1> Liste des clients du controleur </h1>
<a href='index.php'> Home </a>

    <?php
    include 'cnx.php';

        $sql= $cnx-> prepare("select nom, prenom, ancienReleve, dernierReleve from client where idcontroleur=".$_GET['id']);
        $sql -> execute();
        echo"<table>";
        foreach($sql-> fetchALL (PDO::FETCH_ASSOC) as $ligne)
        {
            echo"<tr>";
            echo"<td>" .$ligne['nom']. "<td>";
            echo"<td>" .$ligne['prenom']. "<td>";
            echo"<td>" .$ligne['ancienReleve']. "<td>";
            echo"<td>" .$ligne['dernierReleve']. "<td>";
            echo"<td> <a href='index3.php?nom=".$ligne['nom']."&prenom=".$ligne['prenom']."&dernierreleve=".$ligne['dernierReleve']."&ancienReleve=".$ligne['ancienReleve']." '> Nouveau releve</a> <td>";
            echo"<tr>";
        }

        echo"</table>";
    ?>
</body>
</html>