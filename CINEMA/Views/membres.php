<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/style.css">
</head>
<body>
    <h1>Membres</h1>

    <form>
        <label>
            Rechercher par nom/prenom
            <input type="text" name="search" value="<?= $_GET['search'] ?? '' ?>">
        </label>
        <button>Rechercher</button>
    </form>

    <div class="grid">
        <?php foreach($membres as $membre) : ?>
            <a href="/membre.php?id=<?= $membre['id'] ?>" class="grid__single">
                <h2>Prenom : <?= $membre['prenom'] ?></h2>
                <h2>Nom : <?= $membre['nom'] ?></h2>
            </a>            
        <?php endforeach ?>
    </div>
</body>
</html>