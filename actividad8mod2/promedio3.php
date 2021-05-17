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
                        SET Promedio_quinto = $promedio
                        WHERE Ncuenta = $Ncuenta";
            $query = mysqli_query($conexion, $peticion);
            $peticion = "SELECT Area FROM alumno
                        WHERE Ncuenta = $Ncuenta";
            $query = mysqli_query($conexion, $peticion);
            $row = mysqli_fetch_array($query);
            echo '<form action="./resultados.php" method="POST">
            Derecho:<input type="number" name="Materia[]" max="10">
            <br><br>
            Literatura:<input type="number" name="Materia[]" max="10">
            <br><br>
            Lengua Extranjera:<input type="number" name="Materia[]" max="10">
            <br><br>
            Psicologia:<input type="number" name="Materia[]" max="10">
            <br><br>
            Higine Mental:<input type="number" name="Materia[]" max="10">
            <br><br>
            Estadistica y Prob:<input type="number" name="Materia[]" max="10">
            <br><br>
            ';
            if($row["Area"] == 1)
            {
                echo '<form action="./resultados.php" method="POST">
                Matematicas:<input type="number" name="Materia[]" max="10">
                <br><br>
                Dibujo Constructivo:<input type="number" name="Materia[]" max="10">
                <br><br>
                Fisica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Quimica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Geologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Fisico-Quimica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Temas selectos:<input type="number" name="Materia[]" max="10">
                <br><br>
                Informatica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Biologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Astronomia:<input type="number" name="Materia[]" max="10">
                <br><br>
                '; 
            }
            if($row["Area"] == 2)
            {
                echo '<form action="./resultados.php" method="POST">
                Matematicas:<input type="number" name="Materia[]" max="10">
                <br><br>
                Biologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Fisica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Quimica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Geologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Fisico-Quimica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Temas selectos Biologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Temas selectos Morfologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Informatica:<input type="number" name="Materia[]" max="10">
                <br><br>
                '; 
            }
            if($row["Area"] == 3)
            {
                echo '<form action="./resultados.php" method="POST">
                Geografia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Estudio Ciencias:<input type="number" name="Materia[]" max="10">
                <br><br>
                Problemas:<input type="number" name="Materia[]" max="10">
                <br><br>
                Matematicas:<input type="number" name="Materia[]" max="10">
                <br><br>
                Contabilidad:<input type="number" name="Materia[]" max="10">
                <br><br>
                Fisico-Quimica:<input type="number" name="Materia[]" max="10">
                <br><br>
                Geografia:<input type="number" name="Materia[]" max="10">
                <br><br>
                Sociologia:<input type="number" name="Materia[]" max="10">
                <br><br>
                '; 
            }
            if($row["Area"] == 4)
            {
                echo '<form action="./resultados.php" method="POST">
                Introduccion a Ciencias sociales:<input type="number" name="Materia[]" max="10">
                <br><br>
                Historia de la cultura:<input type="number" name="Materia[]" max="10">
                <br><br>
                Historia de las doctrinas:<input type="number" name="Materia[]" max="10">
                <br><br>
                Matematicas:<input type="number" name="Materia[]" max="10">
                <br><br>
                Revoluvion Mexicana:<input type="number" name="Materia[]" max="10">
                <br><br>
                Pensamientoo Filosofico mexicano:<input type="number" name="Materia[]" max="10">
                <br><br>
                Modelado:<input type="number" name="Materia[]" max="10">
                <br><br>
                latin:<input type="number" name="Materia[]" max="10">
                <br><br>
                Griego:<input type="number" name="Materia[]" max="10">
                <br><br>
                Comunicacion Visual:<input type="number" name="Materia[]" max="10">
                <br><br>
                Estetica:<input type="number" name="Materia[]" max="10">
                <br><br>
                HIstoria del arte:<input type="number" name="Materia[]" max="10">
                <br><br>
                '; 
            }
            echo '<input type="hidden" name="Ncuenta" value='.$Ncuenta.'>
            <button type="Submit">Enviar</button>
        </form>'
        ?>
</body>
</html>