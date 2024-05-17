<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora patriota</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
       body {
            background-color: green;
            color: yellow;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 2px;
            padding: 2px;
            height: 80vh; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            
        }


        .calculadora {
            background-color: blue;
            padding: 80px;
            border-radius: 25px;
            margin: 50px auto;
            width: 500px;
        }
        input, select, button {
            padding: 15px;
            margin: 10px;
            border-radius: 5px;
            border: none;
            background-color: green;
            color: black;
            width: 80px;
        }
        button:hover {
            background-color: yellow;
            cursor: pointer;
        }
        input[type="text"] {
            width: 80px;
            text-align: center;
        }
        .history {
            text-align: center;
            margin-top: 5px;
        }
    </style>
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