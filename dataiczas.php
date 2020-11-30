<html>
    <head>
        <link rel="stylesheet" href="style1.css">
    </head>
        <body>
            <div class="nav">
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="org.php">Organizacja</a>;
            <a href="FAgregat.php">Funkcje Agregujace</a>;
            </div>
                <?php
                    function worker($nr_zadania,$z_sql,){
                    require("connect.php");
                    $sql=$z_sql
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
                    worker("Zad 2",'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"')    
                ?>
        </body>
</html>  