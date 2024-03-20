<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam chovaných zvířat</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        /* Stylování pro flexbox layout */
        main {
            display: flex;
            justify-content: center; /* Zarovnání obsahu na střed */
            align-items: center; /* Zarovnání na střed svisle */
            height: 100vh; /* Výška kontejneru na celou výšku viewportu */
        }

        .animals {
            list-style-type: none; /* Odstranění výchozího značkování seznamu */
            padding: 0;
            text-align: center;
            display: flex; /* Použití flexbox layoutu pro položky seznamu */
            flex-direction: column; /* Zarovnání položek seznamu ve sloupci */
            align-items: center; /* Zarovnání položek na střed */
        }

        .animals li {
            margin: 10px; /* Vnější okraje mezi položkami seznamu */
            padding: 15px 20px; /* Vnitřní okraje položek seznamu */
            background-color: #f0f0f0;
            border-radius: 5px;
            width: 200px; /* Stejná šířka pro všechny položky */
        }

        .btn-home {
            display: inline-block;
            margin-top: 20px; /* Vnější okraj nad tlačítkem */
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-home:hover {
            background-color: #0056b3; /* Barevný efekt po najetí myší */
        }
    </style>
</head>
<body>
    <?php include 'navigation.php'; ?>
    <main>
        <section>
            <h2>Seznam chovaných zvířat</h2>
            <ul class="animals">
                <li>Kočka</li>
                <li>Pes</li>
                <li>Kůň</li>
                <li>Králík</li>
                <!-- Přidat další zvířata podle potřeby -->
            </ul>
            <a href="index.php" class="btn-home">Domů</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Chovatelé zvířat</p>
    </footer>
</body>
</html>
