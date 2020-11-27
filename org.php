<html>
    <head> 
        <link rel="stylesheet" href="style1.css">
    </head>
        <body>
            <div class="nav">
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="F-agregat.php">Funkcje Agregujace</a>;
            </div>
                <?php
                    function worker($nr_zadania,$z_sql,$polecenie){
                        require("connect.php");
                        $sql=$z_sql;
                        echo("<h2>Tabelka $nr_zadania</h2>".$sql);
                        echo("<h2>Polecenie: $polecenie </h2>");
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
                                };
                            echo("</table>");
                    };
                    worker(1,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org","Pracownicy z nazwą działu");
                    worker(2,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and dzial=1 or dzial=4","Pracownicy z działu 1 i 4");
                    worker(3,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and imie like '%a'","Kobiety z nazwą działu");
                    worker(4,"SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and imie not like '%a'","Męzczyźni z nazwą działu");
                    worker(5,"SELECT *FROM pracownicy, organizacja WHERE id_org=dzial order by imie desc","Pracownicy posortowani malejąco wg imienia");
                    worker(6,"SELECT *FROM pracownicy, organizacja WHERE id_org=dzial and dzial=3 order by imie asc","Pracownicy z działu 3 posortowani rosnąco po imieniu");
                ?>
        </body>
</html>