<?php
require_once 'config/database.php';

class Utilisateur {
    private $id;
    private $nom;
    private $prenom;
    private $email;

    // Getters and Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getNom() { return $this->nom; }
    public function setNom($nom) { $this->nom = $nom; }
    // ... other getters and setters

    // Méthode pour récupérer tous les utilisateurs
    public static function getAllUtilisateurs() {
        $db = Database::getConnection();
        $query = "SELECT * FROM utilisateurs";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour affecter un utilisateur à un projet
    public static function assignerProjet($id_utilisateur, $id_projet) {
        $db = Database::getConnection();
        $query = "INSERT INTO projets_utilisateurs (id_utilisateur, id_projet) VALUES (:id_utilisateur, :id_projet)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id_utilisateur', $id_utilisateur);
        $stmt->bindParam(':id_projet', $id_projet);
        return $stmt->execute();
    }
}