<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

require_once '../config/config.php';

if (isset($_GET['id'], $_GET['action'])) {
    $id = intval($_GET['id']);
    $action = $_GET['action'];

    if (in_array($action, ['validee', 'refusee'])) {
        $stmt = $pdo->prepare("UPDATE demandes SET statut = ? WHERE id = ?");
        $stmt->execute([$action, $id]);
    }
}

header('Location: dashboard.php');
exit;
?>
