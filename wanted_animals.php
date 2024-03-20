<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam zvířat, které chceme</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        /* Stylování pro flexbox layout */
        main {
            display: flex;
            justify-content: center; /* Zarovnání obsahu na střed */
            align-items: center; /* Zarovnání na střed svisle */
            height: 100vh; /* Výška kontejneru na celou výšku viewportu */
        }

        .wanted-animals {
            list-style-type: none; /* Odstranění výchozího značkování seznamu */
            padding: 0;
            text-align: center;
        }

        .wanted-animals li {
            margin: 10px; /* Vnější okraje mezi položkami seznamu */
            padding: 15px 20px; /* Vnitřní okraje položek seznamu */
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php include 'navigation.php'; ?>
    <main>
        <section>
            <h2>Seznam zvířat, které chceme</h2>
            <ul class="wanted-animals">
                <li>Slon</li>
                <li>Tygři</li>
                <li>Panda</li>
                <li>Lev</li>
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