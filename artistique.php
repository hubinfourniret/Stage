<?php
    include('header.php');
    include("fonctions.php");
    $id=$_GET["id"];
    $cnx=mysqli_connect("localhost","root","","stage");

    $h1="SELECT "
    
    if (mysqli_connect_error()) {
        echo "Erreur de connexion a la base de donnees : ".mysqli_connect_error();
        exit();
    }

    if (empty($_POST)) {
        $res=select(['albums'],['idAlb'=>$id]);
    }
?>
<main>
    <h1></h1>
    <img class="image" src="">
    <p></p>
    <p></p>
    <p></p>
    <img class="image" src="">
    <p></p>
    <h1></h1>
    <div>
        
    </div>
    <h1></h1>

</main>
<?php
    include('footer.php');
?>