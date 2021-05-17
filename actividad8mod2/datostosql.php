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
        //var_dump($_POST);
        include("config.php");
        $conexion = conecta();
        $nombre = $_POST["nombre"];
        $Ncuenta = $_POST["cuenta"];
        $ApellidoP = $_POST["apPat"];
        $ApellidoM = $_POST["apMat"];
        $Area = $_POST["area"];
        $carrera = $_POST["carrera"];
        $peticion = "SELECT id_modalidad, id_ubicacion FROM pase_regla
                    INNER JOIN carrera ON carrera.clave_carrera = pase_regla.clave_carrera
                    WHERE nombre LIKE '$carrera'";
        $query = mysqli_query($conexion, $peticion);
        $num = mysqli_num_rows($query);
        if($num !== 0)
        {
            echo "<form action='./promedio1.php' method='POST'>";
                echo "Modalidad:<select name='id_modalidad'>";
                while($row = mysqli_fetch_array($query))
                {
                    echo '<option value='.$row["id_modalidad"].'>'.$row["id_modalidad"].'</option>';
                }
                echo "</select>";
                $query = mysqli_query($conexion, $peticion);
                echo "<br>";
                echo "Ubicacion:<select name='id_ubicacion'>";
                while($row = mysqli_fetch_array($query))
                {
                    echo '<option value='.$row["id_ubicacion"].'>'.$row["id_ubicacion"].'</option>';
                }
                echo "</select>";
                echo "<br>";
                $peticionsql = "INSERT INTO alumno (Ncuenta, Nombre, ApellidoP, ApellidoM, Area) 
                                VALUES ($Ncuenta, '$nombre', '$ApellidoP', '$ApellidoM', $Area)";
                $query = mysqli_query($conexion,$peticionsql);
                echo "<input type='hidden' name='Ncuenta' value=$Ncuenta>";
                echo "<button type='submit'>Enviar</button>";
            echo "</form>";
        }
        else
        {
            header("location: ./promedio1");
        }
    ?>
</body>
</html>