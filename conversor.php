<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="title">Fahrenheint para Celsius</div>
            <form method="POST" action="">
                <div class="input">
                    <label>Temperatura</label>
                    <input type="number" name="temperatura" required>
</div>
                <div class="input">
                <button type="submit">Calcular</button>

</div>
            </form>

            <div class="result" id="resultado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fahrenheit = $_POST['temperatura'];
                    $celsius = ($fahrenheit - 32) * 5/9;
                    echo "<p>A temperatura em Celsius é: " . round($celsius, 2) . "°C</p>";
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
