<html>
    <head>
        <link rel="stylesheet" href="/assets/style2.css">
    </head>
        <body>
            <div class="nav">
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="/index.php">Index</a>;
            <a href="/pracownicy/org.php">Organizacja</a>;
            <a href="/pracownicy/FAgregat.php">Funkcje Agregujace</a>;
            <a href="/cwiczenia/formularz.html">Formularz</a>;
            <a href="/pracownicy/danedobazy.php">Dane do bazy</a>;
            <a href="/biblioteka/ksiazki.php">Książki</a>;
            </div>
                <?php
                    function worker($nr_zadania,$z_sql){
                        require("/assets/connect.php");
                        $sql=$z_sql;
                        echo("<h2>Tabelka $nr_zadania</h2>".$sql);
                        $result = $conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>Id</th>");
                            echo("<th>Imie</th>");
                            echo("<th>Dział</th>");
                            echo("<th>Nazwa_Działu</th>");
                            echo("<th>Zarobki</th>");
                            echo("<th>Data_urodzenia</th>");
                            echo("<th>Wiek</th>");
                                while($row=$result->fetch_assoc()){ 
                                    echo("<tr>");
                                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                    
                                    echo("</tr>");
                                };
                            echo("</table>");
                        };
                        worker("Zad 1","SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org");
                        worker("Zad 2",'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"');
                        worker("Zad 3",'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"');
                        worker("Zad 4",'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org');
                        worker("Zad 5",'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="handel"');
                        worker("Zad 6",'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie like "%a"');
                        worker("Zad 7",'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy WHERE imie not like "%a"');
                        worker("Zad 8",'SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as a, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial');
                        worker("Zad 9",'SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial');
                        worker("Zad 10",'SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial');


                ?>
        </body>
</html>  