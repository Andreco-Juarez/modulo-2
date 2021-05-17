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
                    SET Promedio_cuarto = $promedio
                    WHERE Ncuenta = $Ncuenta";
        $query = mysqli_query($conexion, $peticion);
        echo '<form action="./promedio3.php" method="POST">
        Matematicas:<input type="number" name="Materia[]" max="10">
        <br><br>
        Quimica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Biologia:<input type="number" name="Materia[]" max="10">
        <br><br>
        Salud:<input type="number" name="Materia[]" max="10">
        <br><br>
        Historia de mexico:<input type="number" name="Materia[]" max="10">
        <br><br>
        Greco:<input type="number" name="Materia[]" max="10">
        <br><br>
        Lengua Extranjera:<input type="number" name="Materia[]" max="10">
        <br><br>
        Etica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Estetica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Educacion Fisica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Orientacion:<input type="number" name="Materia[]" max="10">
        <br><br>
        Literatura Universal:<input type="number" name="Materia[]" max="10">
        <br><br>
        <input type="hidden" name="Ncuenta" value='.$Ncuenta.'>
        <button type="Submit">Enviar</button>
    </form>'
    ?>
</body>
</html>