<?php
session_start();

if (!isset($_SESSION['ci'])) {
    header("Location: ../usuarios/logueo.php");
    exit;
}

if (isset($_POST['u1'])) {
    $codigo_clase = $_POST['u1'];
    $estudiante_id = $_SESSION['ci'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT idclase FROM clase WHERE codigo = '$codigo_clase'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $clase_id = $row['idclase'];

        $check_sql = "SELECT * FROM clase_estudiante WHERE id_estudiante = '$estudiante_id' AND id_clase = '$clase_id'";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows == 0) {
           
            $insert_sql = "INSERT INTO clase_estudiante (id_estudiante, id_clase) VALUES ('$estudiante_id', '$clase_id')";
            if ($conn->query($insert_sql) === TRUE) {
                echo "<script>alert('Te has unido a la clase exitosamente'); window.location = '../estudiante/prinest.php';</script>";
            } else {
                echo "<script>alert('Error al unirse a la clase'); window.location = '../estudiante/prinest.php';</script>";
            }
        } else {
            echo "<script>alert('Ya estás inscrito en esta clase'); window.location = '../estudiante/prinest.php';</script>";
        }
    } else {
        echo "<script>alert('Clase no encontrada'); window.location = '../estudiante/prinest.php';</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unirse a la Clase</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <style>
        body {
            position: relative;
            margin: 0;
            height: 100%;
            background-image: url("../diseño/logo.png");
            background-repeat: repeat;
            background-position: center;
            background-size: calc(70vw / 2) calc(70vh / 2);
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(0, 0, 0);
            z-index: 1;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: -1;
        }

        form {
            background: linear-gradient(135deg, #2d41b3ff, white, #003366);
            border: double 3px rgb(0, 0, 0);
            border-radius: 15px;
            width: 400px;
            padding: 40px;
            box-shadow: 0 8px 20px black;
            transition: transform 0.3s ease;
        }

        form:hover {
            transform: scale(1.04);
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(253, 244, 232);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 16px;
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(28, 28, 70, 1);
            font-size: 50px;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(28, 28, 70, 1);
        }

        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            background-color: rgba(28, 28, 70, 1);
            color: white;
            font-weight: bold;
            border: 3px solid;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        label.error {
            color: red;
            font-size: 13px;
            margin-top: -15px;
            margin-bottom: 10px;
            display: block;
        }

        .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: rgba(28, 28, 70, 1);
        }

        .sign {
            width: 100%;
            transition-duration: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
            width: 17px;
        }

        .sign svg path {
            fill: white;
        }

        .text {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            transition-duration: .3s;
        }

        .Btn:hover {
            width: 125px;
            border-radius: 40px;
            transition-duration: .3s;
        }

        .Btn:hover .sign {
            width: 30%;
            transition-duration: .3s;
            padding-left: 20px;
        }

        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: .3s;
            padding-right: 10px;
        }

        .Btn:active {
            transform: translate(2px, 2px);
        }
    </style>
</head>
<body>
    <form action="unirse.php" method="post" novalidate>
        <h1>UNIRSE</h1>
        <h2>Escribe el código de clase:</h2>
        <label for="co">Código de clase</label><br>
        <input type="text" id="co" name="u1" placeholder="Ej: cd8hpp" /><br>
        <br>
        <input type="submit" value="Unirme" />
        <input type="reset" value="Limpiar" />
        <button id="sal" class="Btn" type="button">
            <span class="sign">
                <svg viewBox="0 0 512 512">
                    <path d="M244 400L100 256l144-144v88h200v112H244z"/>
                </svg>
            </span>
            <span class="text">Volver</span>
        </button>
    </form>
    <script>
        $("form").validate({
            rules: {
                u1: {
                    required: true,
                    minlength: 5,
                    maxlength: 8
                }
            },
            messages: {
                u1: {
                    required: "Este campo es obligatorio",
                    minlength: "Mínimo 5 caracteres",
                    maxlength: "Máximo 8 caracteres"
                }
            }
        });

        $("#sal").on("click", function() {
            window.history.back();
        });
    </script>
</body>
</html>
