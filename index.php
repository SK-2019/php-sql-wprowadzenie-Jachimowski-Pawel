<?php
    echo("<h1>Paweł Jachimowski Klasa 2Ti Nr.10</h1>");
    function worker($nr_zadania,$z_sql,$polecenie){
        $conn=new mysqli("mysql-pawelj.alwaysdata.net","pawelj","Jachimowski0719","pawelj_baza");
        $sql=$z_sql;
        echo("<h2>Polecenie $polecenie </h2>");
        echo("<h3>Tabelka $nr_zadania</h3>");
        echo("<h4>Zapytanie SQL: $sql</h4>");
        $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
    }
worker(1,"SELECT*FROM pracownicy","stwórz 5 tabel");
worker(2,"SELECT*FROM pracownicy where imie like'%a'","stwórz 5 tabel");
worker(3,"SELECT*FROM pracownicy where imie not like '%a'","stwórz 5 tabel");
worker(4,"SELECT*FROM pracownicy where zarobki<30","stwórz 5 tabel");
worker(5,"SELECT*FROM pracownicy where dzial=2 or dzial=1","stwórz 5 tabel");
    
?>

