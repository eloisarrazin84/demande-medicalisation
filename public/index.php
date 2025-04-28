<?php require_once 'config/config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demande de Médicalisation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="text-center mb-4">Formulaire de demande de médicalisation</h1>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success text-center">Votre demande a été envoyée avec succès !</div>
    <?php endif; ?>

    <form action="submit_request.php" method="POST" class="card shadow p-4">
        <div class="mb-3">
            <label class="form-label">Nom de l'événement</label>
            <input type="text" class="form-control" name="evenement" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Date de l'événement</label>
                <input type="date" class="form-control" name="date_evenement" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Lieu</label>
                <input type="text" class="form-control" name="lieu" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Type d'événement</label>
            <input type="text" class="form-control" name="type_evenement" required>
        </div>
        <!-- Ajoute les autres champs ici -->

        <button type="submit" class="btn btn-primary w-100">Envoyer la demande</button>
    </form>
</div>
</body>
</html>
