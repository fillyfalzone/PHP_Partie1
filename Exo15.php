<h1>Exo15</h1>
<p>
Créer une classe Personne (nom, prénom et date de naissance). <br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge <br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; <br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; <br>
</p>

<?php
    Class Personne{
        private string $_nom;
        private string $_prenom;
        private DateTime $_dateNaissance;
        //La funtion construteur
        public function __construct(string $nom, string $prenom,string $dateNaissance){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateNaissance = new DateTime($dateNaissance);
        }
        // Les Getters
        public function getNom(){
            return $this->_nom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
        public function getDateNaissance(){
            return $this->_dateNaissance;
        }
        //Les Setters
        public function setNom($nom){
            $this->_nom = $nom;
        }
        public function setPrenom($prenom){
            $this->_prenom = $prenom;
        }
        public function setDateNaissance($dateNaissance){
            $this->_dateNaissance = $dateNaissance;
        }

        // Function calculer age pour convertire la DateTime en format date 
        public function calculerAge(){
            $now = new DateTime(); // Timestamp actuel
            $age = $this->_dateNaissance->diff($now); //la function diff() fait la difference des deux timestamp et renvoie un objet interval de temp 
            return $age->format("%Y");
        }
        // Magic function converti touts les propriétés en string
        public function __toString(){
            return "Le nom est : ".$this->getNom()." son prenom est : ".$this->getPrenom()." elle est née le : ".$this->getDateNaissance()->format("Y-m-d")." son age est : ".$this->calculerAge()." ans <br>";
        }
    }
    $p1 = new Personne("DUPONT","Michel","1980-02-19");
    $p2 = new Personne("DUCHEMIN","Alice","1985-01-17");
    echo $p1;
    echo $p2;

?>