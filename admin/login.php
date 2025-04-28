<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: dashboard.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['email'] === 'admin@example.com' && $_POST['password'] === 'adminpass') {
        $_SESSION['loggedin'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card col-md-4 mx-auto p-4 shadow">
        <h3 class="text-center mb-3">Connexion Admin</h3>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
            <input type="password" name="password" placeholder="Mot de passe" class="form-control mb-3" required>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
    </div>
</div>
</body>
</html>
