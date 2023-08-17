<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    $_SESSION['username'] = $username;

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
</head>
<body>
<?php if (isset($_SESSION['username'])): ?>
    <p>Привет, <?php echo $_SESSION['username']; ?>!</p>
    <a href="exit.php">Выйти</a>
<?php else: ?>
    <form method="post" action="post.php">
        <label for="username">Введите ваше имя:</label>
        <input type="text" name="username" id="username" required>
        <button type="submit">Отправить</button>
    </form>
<?php endif; ?>
</body>
</html>