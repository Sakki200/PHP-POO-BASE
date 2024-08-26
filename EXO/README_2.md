Faire une classe nommée "Character", qui comporte les attributs privés "name", "strength"et "life".
Les valeurs par défaut lors de l’instanciation seront respectivement strength 0 et life 100
Faire les méthodes "getName", "getStrength" et "getLife".
Faire une implémentation de la méthode "__toString" afin d'afficher "Je m'appelle " avec le nom du personnage.

$robin = new Character('Robin');

echo $robin; // Doit afficher Je m'appelle Robin

Faire une classe nommée "Game", qui comporte l'attribut privé "players".
Le premier attribut est un tableau de personnages (par défaut vide).
Lors de l'instanciation de la classe "Game", le texte "Nouvelle partie !" doit s'afficher.
Ajouter la methode addPlayer($player) qui ajoute un "Character" dans le tableau $players.
Lors de l'appel de cette methode, afficher dans le terminal "Nouveau personnage " et le nom du "Character"

$game = new Game; // Doit afficher Nouvelle partie !
$game->addPlayer($robin); // Doit afficher Nouveau personnage "Robin"

Ajouter a la classe "Character" la methode attack qui prend en paramètre une autre instance de la classe "Character" et qui lui enleve des points de vie en fonction de la force de l'attaquant.
Cette methode affiche les phrases suivantes :
- 'nom du personnage attaquant' à frappé 'nom du personnage attaqué'
- 'nom du personnage attaqué' à perdu 'nombre de point de vie perdu' points de vie 

Si le personnage n'a plus de points de vie, alors afficher : 
- 'Nom du personnage' est mort

Toutes les actions doivent être faites via $game, jamais de $robin->attack()
Pour ce faire, faite une fonction player($i) dans votre classe Game, qui permet de récuperer le joueur à l'index $i dans votre tableau
$game = new Game;
$game->addPlayer($robin);
$game->addPlayer($cedrik);
$game->player(0)->attack($cedrik);

Finalement, nous ne voulons plus qu’il soit possible de créer directement des personnages, mais des trolls, des gobelins et des pangolins.
Les caractéristiques par défaut sont les suivantes :

|      |Troll|Gobelin|Pangolin|
|  vie | 200 |  150  |  120   |
| force| 50  |  35   |  40    |
| magie| 10  |  50   |  100   |


Ajouter dans la classe "Character" l'attribut privé magic avec le setter et le getter correspondant, ainsi que la methode heal($player = null) qui permet de soigner un personnage ou lui meme si pas d'argument.

Cette methode affiche :
- Si $player existe
- 'nom du personnage qui lance le sort' a soigné 'nom du personnage soigné' de 'nombre de point de vie soigné' PV
- Sinon :
- 'nom du personnage qui lance le sort' s'est soigné de 'nombre de point de vie soigné' PV

Bonus : 
- echo un gobelin dois afficher le message a l'envers (je m'appelle Robin-> niboR elleppa'm ej)
- Faire attention au erreurs, par exemple :
- addPlayer() avec une autre classe ou un autre type de variable
- taper de 0 qui affiche un message comme quoi le personnage ne fait pas de dégats
- Si je vais chercher un joueur qui n'existe pas dans le tableau des joueurs de la Game
- Si un troll tape un Pangolin, alors dégats x2
- Si un joueur se tape lui meme, alors afficher "x s'inflige x degats"

Toujours garder la même structure de fichier :
Class\
    Game.class.php
    Character.class.php
    etc
index.php