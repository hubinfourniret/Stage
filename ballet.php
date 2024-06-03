<?php
include('header.php');
include("fonctions.php");
require "yaml1/vendor/autoload.php";

use Symfony\Component\Yaml\Yaml;

// Chargement du fichier YAML
$data = Yaml::parseFile('YAML/ballet.yaml');

// Accéder à la section "Artistique"
$artistique = $data['Artistique'];
?>
<main class="artistique">
    <h1><?php echo $artistique['tilte1']; ?></h1>
    <p class="para"><?php echo $artistique['para1']; ?></p>
    <img class="illustration" src="<?php echo $artistique['img']; ?>">
    <h1><?php echo $artistique['tilte2']; ?></h1>
    <div class="club">
        <?php foreach($artistique["solo"] AS $logo){
	        echo "<img class='logo' src='".$logo["chemin"]."'>";
        }?>
    </div>
    <div class="bas">
        <p class="bas"><?php echo $artistique['para5']; ?></p>
        <a href ="<?php echo $artistique['lien']; ?>"><img class="logo" src="<?php echo $artistique['logo']; ?>"></a>
    </div>
</main>
<?php
include('footer.php');
?>
