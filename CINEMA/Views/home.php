<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/style.css">
</head>

<body>
    <h1>CINEMA</h1>
    <main>
        <form action="" method="get">
            <select name="option" id="option" value="<?php $_GET['option'] ?? '0' ?>">
                <option value="0">Film par nom</option>
                <option value="1">Film par date de projection</option>
                <option value="2">Film par date de production</option>
                <option value="3">Film par genre</option>
                <option value="4">Membre par nom</option>
                <option value="5">Membre par prenom</option>
            </select>
            <input type="text" name="search" value="<?php $_GET['search'] ?? '' ?>">
            <button type="submit">
        </form>
        <section>
            <?php
            if (isset($movieResearch)) {
                foreach ($movieResearch as $movie) {
                    echo '<div class="movie">
            <h2>' . $movie['titre'] . '</h2>
            <p>' . $movie['resum'] . '</p>
            <p>Date de projection : ' . $movie['date_debut_affiche'] . '</p>
            <p>Date de production : ' . $movie['annee_prod'] . '</p>
            <p>Genre : ' . $movie['genre'] . '</p>
            <p>Distribution : ' . $movie['distrib'] . '</p>}            
            <p>Durée : ' . $movie['duree_min'] . 'min</p>
            </div>';
                }
            }
            if (isset($clientResearch)) {
                foreach ($clientResearch as $client) {
                    echo '<div class="client">
            <h2>' . $client['nom'] . '</h2>
            <p>' . $client['prenom'] . '</p>
            <p>Date de naissance : ' . $client['date_naissance'] . '</p>
            <p>Code Postal : ' . $client['cpostal'] . '</p>
            <p>Ville : ' . $client['ville'] . '</p>
            </div>';
                }
            }
            ?>
        </section>
    </main>
</body>

</html>