<?php
/*
 *  var meses = {
    1: "Gen",
    2: "Feb",
    3: "Mar",
    4: "Abr",
    5: "Mai",
    6: "Jun",
    7: "Jul",
    8: "Ago",
    9: "Set",
    10: "Oct",
    11: "Nov",
    12: "Des"
};
*/
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="../../estils/informe.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <h1>Generar informes de assitencia</h1><br>
        <label>Mes a generar: </label><br>
        <select id="select-month">
            <option value="1">Gener</option>
            <option value="2">Febrer</option>
            <option value="3">Març</option>
            <option value="4">Abril</option>
            <option value="5">Maig</option>
            <option value="6">Juny</option>
            <option value="7">Juliol</option>
            <option value="8">Agost</option>
            <option value="9">Setembre</option>
            <option value="10">Octubre</option>
            <option value="11">Novembre</option>
            <option value="12">Desembre</option>
        </select><br>

        <label>Classe a generar: </label><br>
        <select id="select-class" required>
            <option value="---"></option>
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
         </select><br>
         <button onclick="request_data()">Generar informe</button><br>
         <div>
             <div style="font-family: DejaVu Sans;" id="informe">
             
                    
                <p> 
                    Hv : Ha vingut <br>
                    F : Festiu <br>
                    R : Retard Mati/RetardTarda <br>
                    AT: Absencia Total <br> 
                    AP: AbsenciaMati/AbsenciaTarda <br>
                </p>
                       
             
            </div>
        </div>
         
        <a href="../../servidor/inici/Assistenciesinici.php">Dessa i  Torna al inici </a><br>
        <a href="../../servidor/login/tanca.php">Tancar la sesió</a>
        <script src="informe.js"></script>
    </body>
</html>
