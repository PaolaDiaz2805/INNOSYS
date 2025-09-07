<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .mensajito {
            background-color: #e0ffe0;
            border: 1px solid rgb(31, 20, 112);
            display: inline-block;
            padding: 20px;
            border-radius: 8px;
            color: #48277eff;
            font-size: 18px;
        }
         .boton {
            margin-top: 20px;
            background-color: rgb(31, 20, 112);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .boton:hover {
            background-color: rgb(48, 33, 163);
        }
    </style>
</head>
<body>
    <?php
if (isset($_POST['com']) && !empty(trim($_POST['com']))) {
    $a = $_POST['com'];

    $b = fopen('principal.txt', 'a'); 
    fwrite($b, $a . PHP_EOL);
    fclose($b);

    echo '<div class="mensajito">Tu comentario se envió correctamente:)</div>';
} else {
    echo '<div class="mensajito" style="background-color:#ffe0e0; border-color:#a00000; color:#600000;"> No se envió ningún comentario.:(</div>';
}
?>
<br>
<button class="boton" onclick="history.back()">⬅ Volver</button>
</body>
</html>

