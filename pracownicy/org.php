<html>
    <head> 
        <link rel="stylesheet" href="/assets/style1.css">
    </head>
        <body>
            <div class="all">
                <div class="top">
                    <h8>Paweł Jachimowski</h8>
                </div>    
                <div class="left">
                    <h9>
                    <div class="middle"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a></div>
                    <div class=up><a href="/index.php">Index</a></div>
                    <div class="sub"><a href="/pracownicy/FAgregat.php">Funkcje Agregujace</a></div>
                    <div class="super"><a href="/pracownicy/dataiczas.php">Data i czas</a></div>
                    <div class="text-bottom"><a href="/pracownicy/danedobazy.php">Dane do bazy</a></div>
                    <div class="baseline"><a href="/biblioteka/ksiazki.php">Książki</a></div>
                    </h9>
                </div>
                <div class="right">
                <?php
                    function worker($nr_zadania,$z_sql,$polecenie){
                        require("connect.php");
                        $sql=$z_sql;
                        echo("<h2>Tabelka $nr_zadania</h2>");
                        echo("<h2>Polecenie: $polecenie </h2>".$sql);
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
                    worker("Zad 1","SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org","Pracownicy z nazwą działu");
                    worker("Zad 2","SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and dzial=1 or dzial=4","Pracownicy z działu 1 i 4");
                    worker("Zad 3","SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and imie like '%a'","Kobiety z nazwą działu");
                    worker("Zad 4","SELECT imie, dzial, zarobki, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE dzial = id_org and imie not like '%a'","Męzczyźni z nazwą działu");
                    worker("Zad 5","SELECT *FROM pracownicy, organizacja WHERE id_org=dzial order by imie desc","Pracownicy posortowani malejąco wg imienia");
                    worker("Zad 6","SELECT *FROM pracownicy, organizacja WHERE id_org=dzial and dzial=3 order by imie asc","Pracownicy z działu 3 posortowani rosnąco po imieniu");
                ?>
                </div>
        </body>
</html>