<?php
    include('header.php');
?>
<main class="disciplines">
    <h1>LES DISCIPLINES</h1>
    <div class="ligne">
        <a href="artistique.php?id=1">
            <div class="case" >
                <img class="vignette"src="logos/Vignettes/a.png"/>
                <p>ARTISTIQUE</p>
            </div>
        </a>
        <a href="danseSurGlace.php?id=2">
            <div class="case">
                <img class="vignette"src="logos/Vignettes/b.png"/>
                <p>DANSE SUR GLACE</p>
            </div>
        </a>
    </div>
    <div class="ligne">
        <a href="synchronise.php?id=3">
            <div class="case">
                <img class="vignette"src="logos/Vignettes/c.png"/>
                <p>SYNCHRONISE</p>
            </div>
        </a>
        <a href="sportExtreme.php?id=4">
            <div class="case">
                <img class="vignette"src="logos/Vignettes/d.png"/>
                <p>SPORT EXTREME</p>
            </div>
        </a>
    </div>
    <div class="ligne">
        <a href="shortTrack.php?id=5">
            <div class="case">
                <img class="vignette"src="logos/Vignettes/e.png"/>
                <p>SHORT TRACK</p>
            </div>
        </a>
        <a href="curling.php?id=6">
            <div class="case">
                <img class="vignette"src="logos/Vignettes/f.png"/>
                <p>CURLING</p>
            </div>
        </a>
    </div>
    <a href="ballet.php?id=7">
        <div class="case">
            <img class="vignette"src="logos/Vignettes/g.png"/>
            <p>BALLET</p>
        </div>
    </a>
</main>
<?php
    include('footer.php');
?>