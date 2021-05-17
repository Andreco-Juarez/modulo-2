<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("config.php");
        $conexion = conecta();
        $cuenta = $_POST["cuenta"];
        $peticion = "SELECT * FROM alumno
                    WHERE Ncuenta = $cuenta";
                    echo $peticion;
        $query = mysqli_query($conexion,$peticion);
        $num = mysqli_num_rows($query);
        if($num != 0)
        {
            header("location: ./resultados.php");
        }
        else
        {
            $peticion = "SELECT nombre FROM carrera";
            $query = mysqli_query($conexion,$peticion);
            echo '<form action="./datostosql.php" method="POST">
                nombre<input type="text" name="nombre">
                <br><br>
                Apellido paterno:<input type="text" name="apPat">
                <br><br>
                Apellido Materno<input type="text" name="apMat">
                <br><br>
                Area<input type="number" name="area" max="4">
                <input type="hidden" name="cuenta" value='.$cuenta.'>
                <br><br>
                <label>Carrera
                <select name="carrera">';
                while($carreras = mysqli_fetch_array($query))
                {
                    echo '<option value='.$carreras[0].'>'.$carreras[0].'</option>';
                }
            echo '</select>
            </label>
            <br>
            <button type="submit">Enviar</button>
            </form>';
        }
    ?>
</body>
</html>