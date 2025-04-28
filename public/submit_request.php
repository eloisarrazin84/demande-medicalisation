<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO demandes (evenement, date_evenement, lieu, type_evenement) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $_POST['evenement'],
        $_POST['date_evenement'],
        $_POST['lieu'],
        $_POST['type_evenement'],
    ]);

    header('Location: index.php?success=true');
    exit;
}
?>
