<?php
require_once 'config/database.php';

class Projet {
    private $id;
    private $titre;
    private $description;
    private $date_debut;
    private $date_fin;
    private $statut;

    // Getters and Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getTitre() { return $this->titre; }
    public function setTitre($titre) { $this->titre = $titre; }

    public function getDescription() { return $this->description; }
    public function setDescription($description) { $this->description = $description; }

    public function getDateDebut() { return $this->date_debut; }
    public function setDateDebut($date_debut) { $this->date_debut = $date_debut; }

    public function getDateFin() { return $this->date_fin; }
    public function setDateFin($date_fin) { $this->date_fin = $date_fin; }

    public function getStatut() { return $this->statut; }
    public function setStatut($statut) { $this->statut = $statut; }

    // Méthode pour récupérer tous les projets
    public static function getAllProjets() {
        $db = Database::getConnection();
        $query = "SELECT * FROM projets";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour ajouter un projet
    public function ajouterProjet() {
        $db = Database::getConnection();
        $query = "INSERT INTO projets (titre, description, date_debut, date_fin, statut) 
                  VALUES (:titre, :description, :date_debut, :date_fin, :statut)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':titre', $this->titre);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':date_debut', $this->date_debut);
        $stmt->bindParam(':date_fin', $this->date_fin);
        $stmt->bindParam(':statut', $this->statut);
        return $stmt->execute();
    }
}