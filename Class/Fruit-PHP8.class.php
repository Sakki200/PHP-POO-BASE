<?php 

class Fruit {

    // Permet d'instancier l'objet avec des valeurs définies par l'utilisateur lors du new Fruit('jaune', 50, 10, "Banane")
    // La fonction construct s'appelle dans tous les cas, dès qu'on fait un new Fruit
    public function __construct(public string $couleur = "Jaune", public int $poid = 10, public int $taille = 50, public string $nom = "test") {
        echo("Nouveau fruit\n");
    }

    // Appelé lors d'un echo de l'instance (de l'objet)
    public function __toString() {
        return "Je suis un fruit $this->couleur, qui pèse $this->poid grammes et qui mesure $this->taille cm\n";
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