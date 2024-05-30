<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Ligue de Normandie des sports de glace</title>
    </head>
    <body>
        <header>
            <div class="bande">
                <ul class="gauche">
                    <li><a class="gauche" href="https://www.ffsg.org/">Fédération Française des sports de glace</a></li>
                    <li><a class="gauche" href="https://www.normandie.fr/">Région Normandie</a></li>
                </ul>
                <ul class="droite">
                    <li><a class="droite1" href="partenaires.php">Partenaires</a></li>
                    <li><a class="droite" href="contact.php">Contact</a></li>
                </ul>
                <ul class="logoHead">
                    <li><a class="logoHead" href="contact.php"><img src="logos/reseau/yt.svg" alt="youtube"></a></li>
                    <li><a class="logoHead" href="contact.php"><img src="logos/reseau/fb.svg" alt="facebook"></a></li>
                    <li><a class="logoHead1" href="contact.php"><img src="logos/reseau/it.svg" alt="instagram"></a></li>
                </ul>
            </div>
        </header>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">La Ligue</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="evenement.php">Evenements</a></li>
                <li><a href="lesClubs.php">Clubs</a></li>
                <li><a href="lesDisciplines.php">Disciplines</a></li>
                <li><a href="formation.php">Formations</a></li>
                <li><a class="bouton" href="">Trouver un club</a></li>
            </ul>
            <div class="burger-nav">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="burger-menu">
                <ul class="links">
                    <li><a href="index.php">Actualité</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="laLigue.php">La ligue</a></li>
                    <li><a href="lesClubs.php">Les clubs</a></li>
                    <li><a href="lesDisciplines.php">Les disciplines</a></li>
                    <li><a href="formation.php">Formation</a></li>
                    <li><a class="droite1" href="partenaires.php">Partenaires</a></li>
                    <li><a class="droite" href="contact.php">Contact</a></li>
                    <li><a class="bouton" href="">Trouver un club</a></li>
                </lu>
        </nav>
        <script>
            const burgerNav = document.querySelector('.burger-nav')
            const burgerNavIcon = document.querySelector('.burger-nav i')
            const burgerMenu = document.querySelector('.burger-menu')

            burgerNav.onclick = function(){
                burgerMenu.classList.toggle('open')
                const isOpen = burgerMenu.classList.contains('open')
                burgerNavIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'
            }
        </script>