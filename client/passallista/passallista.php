    <?php
        session_start();
            if(!isset($_SESSION["usuari"])){
                header("location:../../servidor/login/login.php"); 
            }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="./../../estils/passallista.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div id="main">
            <div id="opcions" onclick="">
                <p onclick="setinci('Festiu')">Festiu</p>
                <p onclick="setinci('Ha vingut')">Ha vingut</p>
                <p onclick="setinci('Absencia Total')">Absencia Total</p>
                <p onclick="setinci('RetardMati')">RetardMati</p>
                <p onclick="setinci('RetardTarda')">RetardTarda</p>
                <p onclick="setinci('AbsenciaMati')">AbsenciaMati</p>     
                <p onclick="setinci('AbsenciaTarda')">AbsenciaTarda</p> 
            </div>

            <select id="Classes" required>
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
            </select><br><br>
            <div id="taula-contenidor">
                <table id="legenda">
                    <tr>
                        <td> &#x1F7E2 : Ha vingut </td>
                        <td> &#x1F389 : Festiu </td>
                        <td> &#x1F610 : Retard Mati </td>
                        <td> &#x1f534: Absencia Total </td>
                        <td> &#x1F611 : RetardTarda </td>
                        <td> &#128993: AbsenciaMati </td>
                        <td> &#128992 : AbsenciaTarda</td>
                    </tr>
                </table>
            </div>
            <script src="passallista.js"></script>
            <button onclick="peticio_lista()">Passa llista</button><br>
            <div id="linea">
                <div>
                    <h1>Filtrar per data</h1><br>
                    <form>
                        <label>Data inicial: </label><br>
                        <input id="data-inici" type="date"><br>
                        <label>Data final: </label><br>
                        <input id="data-final" type="date"><br>
                        
                    </form>
                    <button onclick="procesa_data()">Filtra</button>
                    <p style="height:20px"></p><br>
                    <?php
                        if ($_SESSION["tipus"]=="Mestre"){
                            echo "<a href='../../servidor/login/tanca.php'><button>Desa y tanca la sessió</button></a><br>";
                        }else{
                            echo "<a href='../../servidor/inici/Assistenciesinici.php'><button>Desa y torma al inici</button></a><br>";
                        }
                    
                    ?>
                    
            </div>
        </div>
    </div>   
</body>
</html>