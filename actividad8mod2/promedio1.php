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
        include("./config.php");
        $id_modalidad = $_POST["id_modalidad"];
        $id_ubicacion = $_POST["id_ubicacion"];
        $Ncuenta = $_POST["Ncuenta"];
        $conexion = conecta();
        $peticion = "SELECT * FROM pase_regla
                    WHERE id_ubicacion = $id_ubicacion AND id_modalidad = $id_modalidad";
        $query = mysqli_query($conexion, $peticion);
        $row = mysqli_fetch_array($query);
        $id_pase = $row["id_pase"];
        $peticion = "UPDATE alumno
                    SET id_pase=$id_pase
                    WHERE Ncuenta = $Ncuenta";
        $query = mysqli_query($conexion, $peticion);
        echo '<form action="./promedio2.php" method="POST">
        Matematicas:<input type="number" name="Materia[]" max="10">
        <br><br>
        Fisica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Lengua:<input type="number" name="Materia[]" max="10">
        <br><br>
        Historia Universal:<input type="number" name="Materia[]" max="10">
        <br><br>
        Logica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Geografia:<input type="number" name="Materia[]" max="10">
        <br><br>
        Dibujo:<input type="number" name="Materia[]" max="10">
        <br><br>
        Lengua Extranjera:<input type="number" name="Materia[]" max="10">
        <br><br>
        Estetica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Educacion Fisica:<input type="number" name="Materia[]" max="10">
        <br><br>
        Orientacion:<input type="number" name="Materia[]" max="10">
        <br><br>
        Informatica:<input type="number" name="Materia[]" max="10">
        <br><br>
        <input type="hidden" name="Ncuenta" value='.$Ncuenta.'>
        <button type="Submit">Enviar</button>
    </form>'
    ?>
</body>
</html>