<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
        <body>
            <div class="nav">
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="org.php">Organizacja</a>;
            </div>
                <?php

                    // require("connect.php");
                    // $sql="SELECT sum(zarobki) as suma_zarobki FROM pracownicy";
                    // echo("<h2>Tabelka 1</h2>");
                    // echo("<h2>Polecenie Suma zarobków wszystkich pracowników</h2>".$sql);
                    // $result=$conn->query($sql); 
                    //     echo("<table border=1>");
                    //     echo("<th>suma_zarobki</th>");
                    //         while($row=$result->fetch_assoc()){ 
                    //             echo("<tr>");
                    //                 echo("<td>".$row["suma_zarobki"]."</td>");
                    //             echo("</tr>");
                    //         };
                    //     echo("</table>");
                    //                           (Funkcja z powyższej tabelki)
                    //                                      \/
                    //
                    function worker($nr_zadania,$z_sql,$polecenie,$kolumna1){
                        require("connect.php");
                        $sql=$z_sql;
                        echo("<h2>Polecenie: $polecenie </h2>");
                        echo("<h2>Tabelka $nr_zadania</h2>".$sql);
                        $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>$kolumna1</th>");
                             while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                     echo("<td>".$row[$kolumna1]."</td>");
                                echo("</tr>");
                        };
                            echo("</table>");
                    };
                    worker("Zad 1","SELECT SUM(zarobki) as suma_zarobki FROM pracownicy","Suma zarobków wszystkich pracowników","suma_zarobki");
                    worker("Zad 2","SELECT SUM(zarobki) as suma_zarobki FROM pracownicy where imie like '%a'","Suma zarobków kobiet","suma_zarobki");
                    worker("Zad 3","SELECT SUM(zarobki) as suma_zarobki FROM pracownicy where imie not like '%a' and dzial=2 or dzial=3","Suma zarobków mężczyzn z działu 2 i 3","suma_zarobki");
                    worker("Zad 4","SELECT AVG(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a'","Średnia zarobków wszystkich mężczyzn","srednia_zarobki");
                    worker("Zad 5","SELECT AVG(zarobki) as srednia_zarobki FROM pracownicy where dzial=4","Średnia zarobków z działu 4","srednia_zarobki");
                    worker("Zad 6","SELECT AVG(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a' and dzial=2 or dzial=3","Średnia zarobków mężczyzn z działu 2 i 3","srednia_zarobki");
                    worker("Zad 7","SELECT COUNT(imie) as ilu_pracownicy FROM pracownicy","ilość wszystkich pracowników","ilu_pracownicy");
                    worker("Zad 8","SELECT COUNT(imie) as ilu_pracownicy FROM pracownicy where imie like '%a' and dzial=1 or dzial=3","ilość wszystkich pracowników","ilu_pracownicy",);

                ?>
        </body>
</html>  