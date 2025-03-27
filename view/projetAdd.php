<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Projet</title>
</head>
<body>
<h1>Ajouter un Nouveau Projet</h1>
<form method="POST" action="index.php?action=addProjet">
    <label>Titre: <input type="text" name="titre" required></label><br>
    <label>Description: <textarea name="description"></textarea></label><br>
    <label>Date Début: <input type="date" name="date_debut"></label><br>
    <label>Date Fin: <input type="date" name="date_fin"></label><br>
    <label>Statut:
        <select name="statut">
            <option value="Planifié">Planifié</option>
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
        </select>
    </label><br>
    <input type="submit" value="Ajouter Projet">
</form>
<a href="index.php?action=listProjets">Retour à la liste des projets</a>
</body>
</html>