<?php require_once '/config/config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Demande de Médicalisation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="text-center mb-4">Demande de médicalisation</h1>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success text-center">Votre demande a été envoyée !</div>
    <?php endif; ?>

    <form action="submit_request.php" method="POST" class="card p-4 shadow">
        
        <h4 class="mb-3">Informations Événement</h4>
        <div class="mb-3">
            <label class="form-label">Nom de l'événement</label>
            <input type="text" class="form-control" name="evenement" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Date de début</label>
                <input type="date" class="form-control" name="date_evenement" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Heure de début</label>
                <input type="time" class="form-control" name="heure_debut" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Heure de fin</label>
                <input type="time" class="form-control" name="heure_fin" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Lieu exact</label>
                <input type="text" class="form-control" name="lieu" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Type d'événement</label>
            <input type="text" class="form-control" name="type_evenement" required>
        </div>

        <h4 class="mb-3">Participants</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nombre de participants</label>
                <input type="number" class="form-control" name="participants" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Public concerné</label>
                <input type="text" class="form-control" name="public_cible" required>
            </div>
        </div>

        <h4 class="mb-3">Organisateur</h4>
        <div class="mb-3">
            <label class="form-label">Nom de l'organisateur</label>
            <input type="text" class="form-control" name="organisateur" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Responsable</label>
            <input type="text" class="form-control" name="responsable" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Téléphone</label>
                <input type="text" class="form-control" name="telephone" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Adresse de facturation</label>
            <input type="text" class="form-control" name="adresse_facturation" required>
        </div>

        <h4 class="mb-3">Besoins en Médicalisation</h4>
        <div class="mb-3">
            <label class="form-label">Type de dispositif souhaité</label>
            <input type="text" class="form-control" name="dispositif" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre de personnels souhaités</label>
            <input type="number" class="form-control" name="nombre_personnels" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Matériel spécifique requis</label>
            <textarea class="form-control" name="materiel_specifique"></textarea>
        </div>

        <h4 class="mb-3">Conditions d'Accueil</h4>
        <div class="mb-3">
            <label class="form-label">Conditions d'accueil</label>
            <textarea class="form-control" name="conditions_accueil"></textarea>
        </div>

        <h4 class="mb-3">Risques et Informations complémentaires</h4>
        <div class="mb-3">
            <label class="form-label">Risques spécifiques</label>
            <textarea class="form-control" name="risques"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Historique d'incidents précédents</label>
            <textarea class="form-control" name="historique"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Autres informations importantes</label>
            <textarea class="form-control" name="informations_complementaires"></textarea>
        </div>

        <h4 class="mb-3">Deadline</h4>
        <div class="mb-3">
            <label class="form-label">Date limite pour réponse</label>
            <input type="date" class="form-control" name="date_limite" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
        </div>
    </form>
</div>
</body>
</html>
