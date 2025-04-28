<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("
        INSERT INTO demandes (
            evenement, date_evenement, heure_debut, heure_fin, lieu, type_evenement,
            participants, public_cible, organisateur, responsable, telephone, email, adresse_facturation,
            dispositif, nombre_personnels, materiel_specifique, conditions_accueil,
            risques, historique, informations_complementaires, date_limite
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->execute([
        $_POST['evenement'],
        $_POST['date_evenement'],
        $_POST['heure_debut'],
        $_POST['heure_fin'],
        $_POST['lieu'],
        $_POST['type_evenement'],
        $_POST['participants'],
        $_POST['public_cible'],
        $_POST['organisateur'],
        $_POST['responsable'],
        $_POST['telephone'],
        $_POST['email'],
        $_POST['adresse_facturation'],
        $_POST['dispositif'],
        $_POST['nombre_personnels'],
        $_POST['materiel_specifique'],
        $_POST['conditions_accueil'],
        $_POST['risques'],
        $_POST['historique'],
        $_POST['informations_complementaires'],
        $_POST['date_limite']
    ]);

    header('Location: index.php?success=true');
    exit;
}
?>
