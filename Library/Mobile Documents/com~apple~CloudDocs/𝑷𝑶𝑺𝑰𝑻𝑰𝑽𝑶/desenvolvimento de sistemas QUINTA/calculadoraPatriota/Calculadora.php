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
            margin: 1px;
            padding: 1px;
            height: 100vh; 
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
            width: 70px;
            text-align: center;
        }
        .history {
            text-align: left;
            margin-top: 30px;
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
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="text" name="num2" placeholder="Número 2">
                <button type="submit">Calcular</button>
            </form>
        </div>
        <div id="result">

        
            <?php
            if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
                $num1 = (float)$_POST['num1'];
                $num2 = (float)$_POST['num2'];
                $operation = $_POST['operation'];
                $result = 0;

                switch ($operation) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        $result = $num1 / $num2;
                        break;
                    default:
                        $result = 'Operacao invalida';
                        break;
                }

                echo "$num1 $operation $num2 = $result";
            }

            function factorial($num) {
                if ($num === 0 || $num === 1) {
                    return 1;
                } else {
                    return $num * factorial($num - 1);
                }
            }
            ?>
        </div> 
      </body>
</html>