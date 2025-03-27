<!DOCTYPE html>
<html>
<head>
    <title>Liste des Projets</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
<h1>Liste des Projets</h1>
<a href="index.php?action=showAddProjetForm">Ajouter un Projet</a>
<a href="index.php?action=showAffectationForm">Affecter un Projet</a>
<table>
    <thead>
    <tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Date Début</th>
        <th>Date Fin</th>
        <th>Statut</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($projets as $projet): ?>
        <tr>
            <td><?php echo htmlspecialchars($projet['titre']); ?></td>
            <td><?php echo htmlspecialchars($projet['description']); ?></td>
            <td><?php echo $projet['date_debut']; ?></td>
            <td><?php echo $projet['date_fin']; ?></td>
            <td><?php echo htmlspecialchars($projet['statut']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>