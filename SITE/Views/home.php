<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/style.css">
</head>
<body>
    <h1>Liste des employés</h1>
    <div class="grid">
        <?php foreach($employes as $employe) : ?>
            <div class="grid__single">
                <p>Prénom : <?= $employe['prenom'] ?></p>
                <p>Nom : <?= $employe['nom'] ?></p>
                <p>Service : <?= $employe['service'] ?></p>
                <p>Salaire : <?= $employe['salaire'] ?>€</p>
            </div>            
        <?php endforeach ?>
    </div>
</body>
</html>