<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Geométrica</title>
</head>
<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    
    <form method="POST" action="">
        <label for="figura">Selecciona una figura geométrica:</label>
        <select name="figura" id="figura">
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="triangulo">Triángulo</option>
            <option value="cubo">Cubo</option>
            <option value="esfera">Esfera</option>
            <option value="cilindro">Cilindro</option>
        </select><br><br>

        <div id="campos">
          
        </div>

        <button type="submit">Calcular</button>
    </form>

    <?php
    
    function area_circulo($radio) {
        return pi() * pow($radio, 2);
    }

    function perimetro_circulo($radio) {
        return 2 * pi() * $radio;
    }

    function area_cuadrado($lado) {
        return pow($lado, 2);
    }

    function perimetro_cuadrado($lado) {
        return 4 * $lado;
    }

    function area_rectangulo($largo, $ancho) {
        return $largo * $ancho;
    }

    function perimetro_rectangulo($largo, $ancho) {
        return 2 * ($largo + $ancho);
    }

    function area_triangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    function perimetro_triangulo($lado1, $lado2, $lado3) {
        return $lado1 + $lado2 + $lado3;
    }

    function volumen_cubo($lado) {
        return pow($lado, 3);
    }

    function area_superficial_cubo($lado) {
        return 6 * pow($lado, 2);
    }

    function volumen_esfera($radio) {
        return (4 / 3) * pi() * pow($radio, 3);
    }

    function area_superficial_esfera($radio) {
        return 4 * pi() * pow($radio, 2);
    }

    function volumen_cilindro($radio, $altura) {
        return pi() * pow($radio, 2) * $altura;
    }

    function area_superficial_cilindro($radio, $altura) {
        return 2 * pi() * $radio * ($radio + $altura);
    }

   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $figura = $_POST['figura'];
        echo "<h2>Resultados para la figura seleccionada: $figura</h2>";
        
        switch ($figura) {
            case 'circulo':
                $radio = floatval($_POST['radio']);
                echo "Área: " . area_circulo($radio) . "<br>";
                echo "Perímetro: " . perimetro_circulo($radio) . "<br>";
                break;
                
            case 'cuadrado':
                $lado = floatval($_POST['lado']);
                echo "Área: " . area_cuadrado($lado) . "<br>";
                echo "Perímetro: " . perimetro_cuadrado($lado) . "<br>";
                break;

            case 'rectangulo':
                $largo = floatval($_POST['largo']);
                $ancho = floatval($_POST['ancho']);
                echo "Área: " . area_rectangulo($largo, $ancho) . "<br>";
                echo "Perímetro: " . perimetro_rectangulo($largo, $ancho) . "<br>";
                break;

            case 'triangulo':
                $base = floatval($_POST['base']);
                $altura = floatval($_POST['altura']);
                $lado1 = floatval($_POST['lado1']);
                $lado2 = floatval($_POST['lado2']);
                $lado3 = floatval($_POST['lado3']);
                echo "Área: " . area_triangulo($base, $altura) . "<br>";
                echo "Perímetro: " . perimetro_triangulo($lado1, $lado2, $lado3) . "<br>";
                break;

            case 'cubo':
                $lado = floatval($_POST['lado']);
                echo "Volumen: " . volumen_cubo($lado) . "<br>";
                echo "Área superficial: " . area_superficial_cubo($lado) . "<br>";
                break;

            case 'esfera':
                $radio = floatval($_POST['radio']);
                echo "Volumen: " . volumen_esfera($radio) . "<br>";
                echo "Área superficial: " . area_superficial_esfera($radio) . "<br>";
                break;

            case 'cilindro':
                $radio = floatval($_POST['radio']);
                $altura = floatval($_POST['altura']);
                echo "Volumen: " . volumen_cilindro($radio, $altura) . "<br>";
                echo "Área superficial: " . area_superficial_cilindro($radio, $altura) . "<br>";
                break;
        }
    }
    ?>

    <script>
      
        const figuraSelect = document.getElementById('figura');
        const camposDiv = document.getElementById('campos');

        figuraSelect.addEventListener('change', function() {
            camposDiv.innerHTML = '';
            const figura = this.value;

            if (figura === 'circulo') {
                camposDiv.innerHTML = `<label for="radio">Ingrese el radio del círculo: </label><input type="number" name="radio" step="0.01" required><br><br>`;
            } else if (figura === 'cuadrado') {
                camposDiv.innerHTML = `<label for="lado">Ingrese el lado del cuadrado: </label><input type="number" name="lado" step="0.01" required><br><br>`;
            } else if (figura === 'rectangulo') {
                camposDiv.innerHTML = `<label for="largo">Ingrese el largo del rectángulo: </label><input type="number" name="largo" step="0.01" required><br><br>
                                       <label for="ancho">Ingrese el ancho del rectángulo: </label><input type="number" name="ancho" step="0.01" required><br><br>`;
            } else if (figura === 'triangulo') {
                camposDiv.innerHTML = `<label for="base">Ingrese la base del triángulo: </label><input type="number" name="base" step="0.01" required><br><br>
                                       <label for="altura">Ingrese la altura del triángulo: </label><input type="number" name="altura" step="0.01" required><br><br>
                                       <label for="lado1">Ingrese el primer lado del triángulo: </label><input type="number" name="lado1" step="0.01" required><br><br>
                                       <label for="lado2">Ingrese el segundo lado del triángulo: </label><input type="number" name="lado2" step="0.01" required><br><br>
                                       <label for="lado3">Ingrese el tercer lado del triángulo: </label><input type="number" name="lado3" step="0.01" required><br><br>`;
            } else if (figura === 'cubo') {
                camposDiv.innerHTML = `<label for="lado">Ingrese el lado del cubo: </label><input type="number" name="lado" step="0.01" required><br><br>`;
            } else if (figura === 'esfera') {
                camposDiv.innerHTML = `<label for="radio">Ingrese el radio de la esfera: </label><input type="number" name="radio" step="0.01" required><br><br>`;
            } else if (figura === 'cilindro') {
                camposDiv.innerHTML = `<label for="radio">Ingrese el radio del cilindro: </label><input type="number" name="radio" step="0.01" required><br><br>
                                       <label for="altura">Ingrese la altura del cilindro: </label><input type="number" name="altura" step="0.01" required><br><br>`;
            }
        });

      
        figuraSelect.dispatchEvent(new Event('change'));
    </script>
</body>
</html>
