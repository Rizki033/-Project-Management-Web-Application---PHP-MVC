<?php
require_once 'model/projet.php';
require_once 'model/utilisateur.php';

class ProjetController {
    // Afficher la liste des projets
    public function listProjets() {
        $projets = Projet::getAllProjets();
        require 'view/projetsList.php';
    }

    // Formulaire d'ajout de projet
    public function showAddProjetForm() {
        require 'view/projetAdd.php';
    }

    // Traitement de l'ajout de projet
    public function addProjet() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $projet = new Projet();
            $projet->setTitre($_POST['titre']);
            $projet->setDescription($_POST['description']);
            $projet->setDateDebut($_POST['date_debut']);
            $projet->setDateFin($_POST['date_fin']);
            $projet->setStatut($_POST['statut']);

            if ($projet->ajouterProjet()) {
                header('Location: index.php?action=listProjets');
            } else {
                echo "Erreur lors de l'ajout du projet";
            }
        }
    }
}