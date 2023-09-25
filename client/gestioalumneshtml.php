<?php
session_start();
if(!isset($_SESSION["usuari"])){
    header("location:../login/login.php"); 
}elseif($_SESSION["tipus"]=="Mestre"){
    header("location:../permisos/denegat.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador d'alumnes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="../estils/gestioalumne.css">
</head>
<body id="cuerpo">
    <h1>Eliminar/afexir alumnes</h1>
    <div id="manipular">
        <form action="" method="post">
            <label>Classe a manipular:</label>
            <select name="Classe" onchange="extreuretaula()" class="Classes"  required>
                <option value="i3a">I3A</option>
                <option value="i3b">I3B</option>
                <option value="i4a">I4A</option>
                <option value="i4b">I4B</option>
                <option value="i5a">I5B</option>
                <option value="i5b">I5A</option>
                <option value="1ra">1rA</option> 
                <option value="1rb">1rB</option>
                <option value="2na">2nA</option>
                <option value="2nb">2nB</option>
                <option value="3ra">3rA</option>
                <option value="3rb">3rB</option>
                <option value="4ra">4rA</option>  
                <option value="4rb">4rB</option>
                <option value="4rc">4rC</option>
                <option value="5ea">5eA</option>
                <option value="5eb">5eB</option>
                <option value="6ea">6eA</option>
                <option value="6eb">6eB</option>
            </select><br><br>
        </form>
        <button onclick="extreuretaula()">Manipula classe</button>
    </div>
    <div id="taula"></div>
    <h1>Donada l'alta a una classe</h1>
    <form action="" method="post">
        <label>Fitxer en format CSV: </label>
        <input type="file" name="Llistat" id="Llistat" required><br>
        <label>Classe a actualizar:</label>
        <select name="classeactualiza" class="classeactualiza"  required>
                <option value="i3a">I3A</option>
                <option value="i3b">I3B</option>
                <option value="i4a">I4A</option>
                <option value="i4b">I4B</option>
                <option value="i5a">I5B</option>
                <option value="i5b">I5A</option>
                <option value="1ra">1rA</option> 
                <option value="1rb">1rB</option>
                <option value="2na">2nA</option>
                <option value="2nb">2nB</option>
                <option value="3ra">3rA</option>
                <option value="3rb">3rB</option>
                <option value="4ra">4rA</option>  
                <option value="4rb">4rB</option>
                <option value="4rc">4rC</option>
                <option value="5ea">5eA</option>
                <option value="5eb">5eB</option>
                <option value="6ea">6eA</option>
                <option value="6eb">6eB</option>
        </select><br><br>
    </form>
    <div id="Antecio">
        <h1>Això substituirà tots els registres pels nous indicas en el fitcher , eliminara els actuals ¿Continuar?</h1>
        <button onclick="show('none')">No estic segur</button>
        <button onclick="previewFile()">Continuar</button>
    </div>
    <button onclick="show('block')">Actualiza</button>
    <p id="vamooss"></p>
    <script src="gestioalumnes.js"></script>
    <a href="./../servidor/inici/Assistenciesinici.php"><button>Dessa i  Torna al inici </button></a>
</body>
</html>
