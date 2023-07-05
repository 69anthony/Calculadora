<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style/calculadora.css">
</head>
<body>
    <header class="calculadora">
        <div>
            <h1>Calculadora PHP</h1>
            <form method="post" action="" autocomplete="off">
                <input type="text" name="num1" placeholder="Primer número" required>
                <select name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="text" name="num2" placeholder="Segundo número" required>
                <input type="submit" value="Calcular">
            </form> 
            <?php
            // Verificación si la solicitud que se realizó fue mediante el método POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recupero los valores enviados por el formulario
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];
                $result = 0;

                //Estructura switch para determinar qué operación realizar        
                switch ($operator) {
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
                        // Verificamos si el divisor es diferente de cero antes de realizar la división
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "<h2 style='color: white;'>Error: División entre cero no permitida.</h2>";
                        }
                        break;
                    default:
                        echo "Error: Operador inválido.";
                        break;
                }
                // Mostramos el resultado en el navegador
                echo "<h2>Resultado: $result</h2>";
            }
            ?>
        </div>
    </header>
</body>
</html>

