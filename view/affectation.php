<!DOCTYPE html>
<html>
<head>
    <title>Affecter un Projet</title>
</head>
<body>
<h1>Affecter un Utilisateur à un Projet</h1>
<form method="POST" action="index.php?action=affecterProjet">
    <label>Utilisateur:
        <select name="utilisateur">
            <?php foreach ($utilisateurs as $utilisateur): ?>
                <option value="<?php echo $utilisateur['id']; ?>">
                    <?php echo htmlspecialchars($utilisateur['prenom'] . ' ' . $utilisateur['nom']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <label>Projet:
        <select name="projet">
            <?php foreach ($projets as $projet): ?>
                <option value="<?php echo $projet['id']; ?>">
                    <?php echo htmlspecialchars($projet['titre']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label><br>
    <input type="submit" value="Affecter Projet">
</form>
<a href="index.php?action=listProjets">Retour à la liste des projets</a>
</body>
</html>