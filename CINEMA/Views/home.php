<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/style.css">
</head>
<body>
    <h1>Films</h1>
    <form>
        <label>
            Rechercher un film
            <input type="text" name="search" value="<?= $_GET['search'] ?? '' ?>">
        </label>
        <button>Rechercher</button>
    </form>

    <form>
        <label>
            Recherche par genre
            <select name="genre">
                <?php foreach($genres as $genre) : ?>
                    <option value="<?= $genre['id'] ?>" <?= !empty($_GET['genre']) && $_GET['genre'] == $genre['id'] ? 'selected' : '' ?> ><?= $genre['nom'] ?></option>
                <?php endforeach ?>
            </select>
        </label>
        <button>Rechercher</button>
    </form>

    <form>
        <label for="date_proj">
            Recherche par date de projection
            <input type="date" name="date_proj" value="<?= $_GET['date_proj'] ?? '' ?>">
        </label>
        <button>Rechercher</button>
    </form>

    <form>
        <label>
            Recherche par date de production
            <select name="date_prod">
                <?php foreach($anneeProd as $annee) : ?>
                    <option value="<?= $annee['annee_prod'] ?>" <?= !empty($_GET['date_prod']) && $_GET['date_prod'] == $annee['annee_prod'] ? 'selected' : '' ?>><?= $annee['annee_prod'] ?></option>
                <?php endforeach ?>
            </select>
        </label>
        <button>Rechercher</button>
    </form>

    <?php if(!empty($_GET['search'])) : ?>
        <p>Mot recherché : <?= htmlentities($_GET['search']) ?></p>
    <?php endif ?>

    <div class="grid">
        <?php foreach($films as $film) : ?>
            <div class="grid__single">
                <img src="<?= getPoster($film['titre']) ?>" alt="<?= $film['titre'] ?>">
                <p><?= $film['id'] ?></p>
                <h2><?= $film['titre'] ?></h2>
                <!-- <h2><?php /* echo $film['titre']*/ ?></h2> -->
                <h3>Genre : <?= $film['genre'] ?></h3>
                <h4>Distributeur : <?= $film['distrib'] ?></h4>
                <p>Durée : <?= $film['duree_min'] ?></p>
                <p>Année de production : <?= $film['annee_prod'] ?></p>
            </div>            
        <?php endforeach ?>
    </div>
    <?php for($i = 1; $i < $pages; $i++) : ?>
        <a href="/?page=<?= $i ?>"><?= $i ?></a>
    <?php endfor ?>
</body>
</html>