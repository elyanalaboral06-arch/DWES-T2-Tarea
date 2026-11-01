<?php
require_once 'clases/TriangleGenerator.php';

$generador = new TriangleGenerator();
$altura = isset($_GET['altura']) ? (int) $_GET['altura'] : 7;
$triangulo = $generador->generateTriangle($altura);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriangleGenerator</title>

    <style>
        body {
            font-family: monospace;
        }
    </style>
            
</head>
<body>


    <h1>Generador de Triángulos</h1>
    <form method="get" action="">
        <label for="altura">Altura del triángulo:</label>
        <input type="number" id="altura" name="altura" value="<?php echo $altura; ?>" min="0">
        <input type="submit" value="Generar">
    </form>

    <div>
        <?php echo $triangulo; ?>
    </div>


    
</body>
</html>