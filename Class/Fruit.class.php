<?php 

class Fruit {
    public $couleur = "Jaune";
    public $nom;
    public $poid = 30;
    public $taille = 10;

    // Permet d'instancier l'objet avec des valeurs définies par l'utilisateur lors du new Fruit('jaune', 50, 10, "Banane")
    // La fonction construct s'appelle dans tous les cas, dès qu'on fait un new Fruit
    public function __construct(string $newCouleur, int $newPoid, int $newTaille, string $newNom) {
        echo("Nouveau fruit\n");
      
        $this->couleur = $newCouleur;
        $this->poid = $newPoid;
        $this->taille = $newTaille;
        $this->nom = $newNom;
    }

    // Appelé lors d'un echo de l'instance (de l'objet)
    public function __toString() {
        return "Nom: $this->nom \nCouleur : $this->couleur \nPoid : $this->poid grammes\nTaille :  $this->taille cm\n";
    }

    // Methode (Fonction) classique public
    public function sayHello() {
        echo("Hello\n");
    }

    // Le (Fruit $fruit) permet de forcer le type du parametre $fruit à etre une instance de la class Fruit
    public function salade(Fruit $fruit) {
        // $this-> Correspond a l'instance qui a executé la fonction
        // $fruit-> est l'instance en parametre de la fonction salade
        echo("Je fais une salade avec des $this->nom et des $fruit->nom");
    }
}