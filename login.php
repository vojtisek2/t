<?php
session_start();
include 'db_connection.php'; // Připojení k databázi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dotaz pro získání uloženého hesla pro zadané uživatelské jméno
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    // Ověření hesla
    if ($result->num_rows == 1 && password_verify($password, $row['password'])) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit;
    } else {
        $login_err = "Neplatné uživatelské jméno nebo heslo.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Přihlášení</title>
</head>
<body>
    <h2>Přihlášení</h2>
    <form action="login.php" method="post">
        <label for="username">Uživatelské jméno:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Heslo:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Přihlásit se">
    </form>
</body>
</html>