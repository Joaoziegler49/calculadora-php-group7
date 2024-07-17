<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora patriota</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
</head>
<body>
    <div class="calculadora">
        <h2>Calculadora patriota</h2>
        <img src="imperiobr1.png" alt="republica">
        <div style="display: flex; justify-content: space-between;">
            <form method="post">
                <input type="text" name="num1" placeholder="Número 1">
                <select name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">÷</option>
                </select>
                <input type="text" name="num2" placeholder="Número 2">
                <button type="submit">Calcular</button>
            </form>
        </div>
        <div id="result">
            <?php
            if (isset($result)) {
                echo "$num1 $operation $num2 = $result";
            }
            ?>
        </div> 

        <div class="history">
            <h3>Histórico</h3>
            <?php
            foreach ($_SESSION['history'] as $calculation) {
                echo "<p>$calculation</p>";
            }
            ?>
        </div>

        <form method="post">
            <button type="submit" name="clear_history">Apagar Histórico</button>
        </form>
    </div>
</body>
</html>