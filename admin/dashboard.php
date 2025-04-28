<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require_once '../config/config.php';

$demandes = $pdo->query("SELECT * FROM demandes ORDER BY date_creation DESC")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2>Tableau de bord</h2>
    <a href="logout.php" class="btn btn-danger mb-4">Déconnexion</a>

    <div class="card p-4 shadow">
        <h5>Demandes reçues</h5>
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Événement</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($demandes as $demande): ?>
                    <tr>
                        <td><?= htmlspecialchars($demande['evenement']) ?></td>
                        <td><?= htmlspecialchars($demande['date_evenement']) ?></td>
                        <td><?= htmlspecialchars($demande['lieu']) ?></td>
                        <td>
                            <?php
                            $status = $demande['statut'];
                            $badge = match($status) {
                                'validee' => 'success',
                                'refusee' => 'danger',
                                default => 'warning',
                            };
                            ?>
                            <span class="badge bg-<?= $badge ?>">
                                <?= ucfirst(str_replace('_', ' ', $status)) ?>
                            </span>
                        </td>
                        <td>
                            <?php if ($status === 'en_attente'): ?>
                                <a href="update_status.php?id=<?= $demande['id'] ?>&action=validee" class="btn btn-success btn-sm">Valider</a>
                                <a href="update_status.php?id=<?= $demande['id'] ?>&action=refusee" class="btn btn-danger btn-sm">Refuser</a>
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
