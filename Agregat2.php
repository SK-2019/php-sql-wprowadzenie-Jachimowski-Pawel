<html>
    <head>
        <link rel="stylesheet" href="mainstyle.css">
        </head>
    <body>
<div class="nav">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
<a href="index.php">Strona Główna</a>;
<a href="Organizacja.php">Pracownicy i Organizacja</a>;
<a href="Agregat.php">Funkcje Agregujące 1-13</a>;
</div>
<?php
echo("<h1>Paweł Jachimowski</h1>");
function worker($nr_zadania,$z_sql,$polecenie,$kolumna1,$kolumna2){
    require("connect.php");
    $sql=$z_sql;
    echo("<h2>Polecenie: $polecenie </h2>");
    echo("<h3>Tabelka $nr_zadania</h3>".$sql);
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>$kolumna1</th>");
        echo("<th>$kolumna2</th>");
            while($row=$result->fetch_assoc()){
             echo("<tr>");
                    echo("<td>".$row[$kolumna1]."</td><td>".$row[$kolumna2]."</td>");
             echo("</tr>");
}
        echo("</table>");
}
worker(1,"SELECT SUM(zarobki) as suma_zarobki,nazwa_dzial FROM pracownicyn organizacja WHERE id_org=dzial GROUP BY nazwa_dzial HAVING SUM(zarobki)<28 ","Suma zarobków w poszczególnych działach mniejsza od 28 ","suma_zarobki","nazwa_dzial");
?>

    </body>
</html>