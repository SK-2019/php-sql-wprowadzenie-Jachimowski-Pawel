<html>
    <head>
        <link rel="stylesheet" href="mainstyle.css">
        </head>
    <body>
<div class="nav">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
<a href="index.php">Strona Główna</a>;
<a href="Organizacja.php">Pracownicy i Organizacja</a>;
<a href="Agregat2.php">Funkcje Agregujące 13-X</a>;
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
worker(1,"SELECT SUM(zarobki) as suma_zarobki FROM pracownicy","Suma zarobków wszystkich pracowników","suma_zarobki","-brak danych-");
worker(2,"SELECT SUM(zarobki) as suma_zarobki FROM pracownicy where imie like '%a'","Suma zarobków kobiet","suma_zarobki","-brak danych-");
worker(3,"SELECT SUM(zarobki) as suma_zarobki FROM pracownicy where imie not like '%a' and dzial=2 or dzial=3","Suma zarobków mężczyzn z działu 2 i 3","suma_zarobki","-brak danych-");
worker(4,"SELECT AVG(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a'","Średnia zarobków wszystkich mężczyzn","srednia_zarobki","-brak danych-");
worker(5,"SELECT AVG(zarobki) as srednia_zarobki FROM pracownicy where dzial=4","Średnia zarobków z działu 4","srednia_zarobki","-brak danych-");
worker(6,"SELECT AVG(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a' and dzial=2 or dzial=3","Średnia zarobków mężczyzn z działu 2 i 3","srednia_zarobki","-brak danych-");
worker(7,"SELECT COUNT(imie) as ilu_pracownicy FROM pracownicy","ilość wszystkich pracowników","ilu_pracownicy","-brak danych-");
worker(8,"SELECT COUNT(imie) as ilu_pracownicy FROM pracownicy where imie like '%a' and dzial=1 or dzial=3","ilość wszystkich pracowników","ilu_pracownicy","-brak danych-");
worker(9,"SELECT SUM(zarobki) as suma_zarobki,dzial FROM pracownicy GROUP BY dzial","Suma zarobków w poszczególnych działach ","suma_zarobki","dzial");
worker(10,"SELECT COUNT(imie) as ilu_pracownicy,dzial FROM pracownicy GROUP BY dzial","Ilość pracowników w poszczególnych działach ","ilu_pracownicy","dzial");
worker(11,"SELECT AVG(zarobki) as srednia_zarobki,dzial FROM pracownicy GROUP BY dzial","Średnie zarobków w poszczególnych działach","srednia_zarobki","dzial");
worker(12,"SELECT SUM(zarobki) as suma_zarobki, if( (imie not like '%a'), 'menzczyzni','kobiety') as 'plec' FROM pracownicy GROUP by (imie like '%a')","Suma zarobków kobiet i mężczyzn* ","suma_zarobki","plec");
worker(13,"SELECT AVG(zarobki) as srednia_zarobki, if( (imie not like '%a'), 'menzczyzni','kobiety') as 'plec' FROM pracownicy GROUP by (imie like '%a')","Średnia zarobków kobiet i mężczyzn* ","srednia_zarobki","plec");
?>

    </body>
</html>