<html>
    <head>
        <link rel="stylesheet" href="mainstyle.css">
        </head>
    <body>
<div class="nav">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
<a href="index.php">Strona Główna</a>;
<a href="Agregat.php">Funkcje Agregujące</a>;
</div>
<?php
    echo("<h1>Paweł Jachimowski");
    function worker($nr_zadania,$z_sql,$polecenie){
        require("connect.php");
        $sql=$z_sql;
        echo("<h2>Polecenie $polecenie </h2>");
        echo("<h3>Tabelka $nr_zadania</h3>".$sql);
        $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    }
?>

 </body>
</html>