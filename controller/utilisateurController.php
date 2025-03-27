<?php
require_once 'model/utilisateur.php';
require_once 'model/projet.php';

class UtilisateurController {
    // Afficher la liste des utilisateurs
    public function listUtilisateurs() {
        $utilisateurs = Utilisateur::getAllUtilisateurs();
        require 'view/utilisateursList.php';
    }

    // Formulaire d'affectation de projet
    public function showAffectationForm() {
        $utilisateurs = Utilisateur::getAllUtilisateurs();
        $projets = Projet::getAllProjets();
        require 'view/affectation.php';
    }

    // Traitement de l'affectation
    public function affecterProjet() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_utilisateur = $_POST['utilisateur'];
            $id_projet = $_POST['projet'];

            if (Utilisateur::assignerProjet($id_utilisateur, $id_projet)) {
                header('Location: index.php?action=listProjets');
            } else {
                echo "Erreur lors de l'affectation du projet";
            }
        }
    }
}