<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <p>ФИО: <?php echo $_SESSION['user']['full-name'];?>
        <p>ID: <?php echo $_SESSION['user']['id'];?>
        <p>EMAIL: <?php echo $_SESSION['user']['email'];?>
        <p><a href="vendor/logout.php" class="logout">Выход</a>
    </form>
</body>
</html>