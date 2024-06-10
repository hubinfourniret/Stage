<?php
    include("header.php");
    include('fonctions.php');
    $cnx=mysqli_connect("localhost","root","","stage");
    if (mysqli_connect_error()) {
        echo "Erreur de connexion � la base de donn�es : ".mysqli_connect_error();
        exit();
    }
?>
<main>
    <h1>LES EVENEMENTS</h1>
<?php
    $res=select(['evenement']);
    echo $res;
?>
<?php
    include("footer.php");
?>
