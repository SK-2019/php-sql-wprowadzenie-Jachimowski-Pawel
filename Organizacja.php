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
    echo("<h1>Paweł Jachimowski</h1>");
    function worker($nr_zadania,$z_sql,$polecenie){
        require("connect.php");
        $sql=$z_sql;
        echo("<h2>Polecenie $polecenie </h2>");
        echo("<h3>Tabelka $nr_zadania</h3>".$sql);
        $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td><td>".$row["zarobki"]."</td>");
            echo("</tr>");
        }
    echo("</table>");
}
worker(1,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org","Pracownicy z nazwą działu");
worker(2,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and dzial=1 or dzial=4","Pracownicy z działu 1 i 4");
worker(3,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and imie like '%a'","Pracownicy z nazwą działu");
worker(4,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and imie not like '%a'","Pracownicy z nazwą działu");
?>

 </body>
</html>
