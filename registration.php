<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace - Chovatelé zvířat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Registrace</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Domů</a></li>
            <li><a href="about.php">O nás</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="login.php">Přihlášení</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <form action="register.php" method="post">
                <label for="username">Uživatelské jméno:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Heslo:</label><br>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" value="Registrovat se">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Chovatelé zvířat</p>
    </footer>
</body>
</html>
<?php
// Funkce pro registraci nového uživatele
function register($username, $password) {
    // Otevření souboru pro přidání nového uživatele
    $file = 'users.txt';
    $handle = fopen($file, 'a');

    // Zápis uživatelského jména a hesla do souboru
    fwrite($handle, "$username $password\n");

    // Uzavření souboru
    fclose($handle);
}

// Pokud byl formulář odeslán
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání uživatelského jména a hesla z formuláře
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Registrace nového uživatele
    register($username, $password);

    // Přesměrování na domovskou stránku nebo jinou po registraci
    header("Location: index.php");
    exit;
}
?>