<?php
    echo("<h1>Paweł Jachimowski</h1>");
    function worker($nr_zadania,$z_sql){
        $conn=new mysqli("mysql-pawelj.alwaysdata.net","pawelj","Jachimowski0719","pawelj_baza");
        $sql=$z_sql;
        echo("<h2>Tabelka $nr_zadania </h2>".$sql);
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
worker(1,"SELECT*FROM pracownicy");
worker(2,"SELECT*FROM pracownicy where imie like'%a'");
worker(3,"SELECT*FROM pracownicy where imie not like '%a'");
worker(4,"SELECT*FROM pracownicy where zarobki<30");
worker(5,"SELECT*FROM pracownicy where dzial=2 or dzial=1");
    
?>

