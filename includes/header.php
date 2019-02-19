<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=produits">Produits</a></li>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <?php

            if ($_SESSION['login'] == ){
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>;

            }
            
            else {
            echo "<li><a href=\"index.php?page=login\">
            }




            <li><a href="index.php?page=login">Login</a></li>
            
            
            
            
            
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
</header>
<main>