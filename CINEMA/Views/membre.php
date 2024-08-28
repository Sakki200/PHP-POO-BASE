<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/style.css">
</head>
<body>
    <h1><?= $membre['full_name'] ?></h1>
    <p>Email : <?= $membre['email'] ?></p>
    <p>Ville : <?= $membre['ville'] ?></p>
    <h2>Historique de films</h2>
    <div class="grid">
        <?php foreach($films as $film) : ?>
            <div class="grid__single">
                <img src="<?= getPoster($film['titre']) ?>" alt="<?= $film['titre'] ?>">
                <p><?= $film['id'] ?></p>
                <h2><?= $film['titre'] ?></h2>
                <h3>Genre : <?= $film['genre'] ?></h3>
                <h4>Distributeur : <?= $film['distrib'] ?></h4>
                <p>Durée : <?= $film['duree_min'] ?></p>
                <p>Année de production : <?= $film['annee_prod'] ?></p>
            </div>            
        <?php endforeach ?>
    </div>
</body>
</html>