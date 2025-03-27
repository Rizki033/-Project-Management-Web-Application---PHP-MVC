<?php
// Autoload controllers
require_once 'controller/ProjetController.php';
require_once 'controller/UtilisateurController.php';

// Basic routing
$action = $_GET['action'] ?? 'listProjets';

$projetController = new ProjetController();
$utilisateurController = new UtilisateurController();

try {
    switch ($action) {
        case 'listProjets':
            $projetController->listProjets();
            break;
        case 'showAddProjetForm':
            $projetController->showAddProjetForm();
            break;
        case 'addProjet':
            $projetController->addProjet();
            break;
        case 'listUtilisateurs':
            $utilisateurController->listUtilisateurs();
            break;
        case 'showAffectationForm':
            $utilisateurController->showAffectationForm();
            break;
        case 'affecterProjet':
            $utilisateurController->affecterProjet();
            break;
        default:
            $projetController->listProjets();
    }
} catch (Exception $e) {
    echo "Une erreur s'est produite : " . $e->getMessage();
}