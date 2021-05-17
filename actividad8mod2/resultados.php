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
        $materias = $_POST["Materia"];
        $Ncuenta = $_POST["Ncuenta"];
        $suma = 0;
        $cont = 0;
        foreach($materias as $valor)
        {
            $suma += $valor;
            $cont++;
        }
        $promedio = $suma/$cont;
        $peticion = "UPDATE alumno 
                    SET Promedio_sexto = $promedio
                    WHERE Ncuenta = $Ncuenta";
        $query = mysqli_query($conexion, $peticion);
        $peticion = "SELECT * FROM pase_regla
                INNER JOIN alumno ON pase_regla.id_pase = alumno.id_pase
                INNER JOIN carrera ON carrera.clave_carrera = pase_regla.clave_carrera
                WHERE NCuenta = $Ncuenta";
        $query = mysqli_query($conexion, $peticion);
        $datos = mysqli_fetch_array($query);
        $suma = $datos["Promedio_cuarto"] + $datos["Promedio_quinto"] + $datos["Promedio_sexto"];
        $promedio = $suma/3;
        $diferencia = $promedio-$datos["promedio"];
        if($diferencia > .5)
        {
            $resultado = "Muy alta";
        }
        elseif($promedio <= .5)
        {
            $resultado = "Alta";
        }
        elseif($promedio >= -.5)
        {
            $resultado = "Baja";
        }
        else
        {
            $resultado = "Casi nula";
        }
        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Nombre:</th>";
                    echo "<th>Apellido Paterno:</th>";
                    echo "<th>Apellido Materno:</th>";
                    echo "<th>Promedio Cuarto:</th>";
                    echo "<th>Promedio Quinto:</th>";
                    echo "<th>Promedio Sexto:</th>";
                    echo "<th>Promedio Final:</th>";
                    echo "<th>Carrera:</th>";
                    echo "<th>Posibilidad de exito:</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>".$datos[9]."</td>";
                    echo "<td>".$datos["ApellidoP"]."</td>";
                    echo "<td>".$datos["ApellidoM"]."</td>";
                    echo "<td>".$datos["Promedio_cuarto"]."</td>";
                    echo "<td>".$datos["Promedio_quinto"]."</td>";
                    echo "<td>".$datos["Promedio_sexto"]."</td>";
                    echo "<td>".$promedio."</td>";
                    echo "<td>".$datos["Nombre"]."</td>";
                    echo "<td>".$resultado."</td>";
                echo "</tr>";
            echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>