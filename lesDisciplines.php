<?php
    include('header.php');
?>
<main class="disciplines">
    <h1>LES DISCIPLINES</h1>
    <div class="ligne">
        <a href="artistique.php?id=1">
            <div class="case" >
                <img class="vignette"src="photos/disciplines/danse-artistique.jpg"/>
                <p>ARTISTIQUE</p>
            </div>
        </a>
        <a href="danseSurGlace.php?id=2">
            <div class="case">
                <img class="vignette"src="photos/disciplines/danse-sur-glace.jpg"/>
                <p>DANSE SUR GLACE</p>
            </div>
        </a>
    </div>
    <div class="ligne">
        <a href="synchronise.php?id=3">
            <div class="case">
                <img class="vignette"src="photos/disciplines/patinage-artistique-synchro.jpg"/>
                <p>SYNCHRONISE</p>
            </div>
        </a>
        <a href="sportExtreme.php?id=4">
            <div class="case">
                <img class="vignette"src="photos/disciplines/sport-extrême.jpg"/>
                <p>SPORT EXTREME</p>
            </div>
        </a>
    </div>
    <div class="ligne">
        <a href="shortTrack.php?id=5">
            <div class="case">
                <img class="vignette"src="photos/disciplines/short-track.jpg"/>
                <p>SHORT TRACK</p>
            </div>
        </a>
        <a href="curling.php?id=6">
            <div class="case">
                <img class="vignette"src="photos/disciplines/curling.jpg"/>
                <p>CURLING</p>
            </div>
        </a>
    </div>
    <a href="ballet.php?id=7">
        <div class="case">
            <img class="vignette"src="photos/disciplines/ballet.jpg"/>
            <p>BALLET</p>
        </div>
    </a>
</main>
<?php
    include('footer.php');
?>