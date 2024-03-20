<?php
session_start();
include 'db_connection.php'; // Připojení k databázi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vložení nového uživatele do databáze
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password_hash);
    $password_hash = password_hash($password, PASSWORD_DEFAULT); // Hashování hesla
    $stmt->execute();
    
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Registrace</title>
</head>
<body>
    <h2>Registrace</h2>
    <form action="register.php" method="post">
        <label for="username">Uživatelské jméno:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Heslo:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Registrovat se">
    </form>
</body>
</html>
