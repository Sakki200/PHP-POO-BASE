<?php 

abstract class Fruit {
    // Public = Disponible partout, dans la class ou depuis l'objet instancié
    public $test;    
    // Disponible uniquement dans la classe via le $this
    private $couleur = "Jaune";
    // Dispo dans la class et dans les class hérités (enfants) via $this->
    protected $nom;
    private $poid = 30;
    private $taille = 10;

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

    // SETTERS ET GETTERS
    public function getCouleur() : string
    {
        return ucFirst($this->couleur);
    }

    public function setCouleur(string $couleur) {
        if ($couleur == "gris") {
            return;
        }
        $this->couleur = $couleur;
    }

    public function getNom() : string // : string permet de forcer une valeur de retour en chaine de caractere, si ce n'est pas le cas, alors type error
    {
        return $this->nom;
    }

    public function setNom(string $nom) : void // : void permet de préciser qu'il n'y a pas de valeur de retour
    {
        $this->nom = $nom;
    }
    
    public function getTaille() : int
    {
        return $this->taille;
    }

    public function setTaille(int $taille) {
        $this->taille = $taille;
    }

    public function getPoid() : int
    {
        return $this->poid;
    }

    public function setPoid(int $poid) {
        $this->poid = $poid;
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