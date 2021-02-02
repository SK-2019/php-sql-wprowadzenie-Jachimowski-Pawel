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
                        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
                        <a href="/pracownicy/org.php">Organizacja</a>;
                        <a href="/pracownicy/FAgregat.php">Funkcje Agregujace</a>;
                        <a href="/pracownicy/dataiczas.php">Data i czas</a>;
                        <a href="/cwiczenia/formularz.html">Formularz</a>;
                        <a href="/pracownicy/danedobazy.php">Dane do bazy</a>;
                        <a href="/biblioteka/ksiazki.php">Książki</a>;
                    </h9>
                </div>
                <div class="right">
                    <?php  
                    echo("coś");
                    require("connect.php");
                        // $sql="SELECT*FROM pracownicy where dzial=2";
                        // echo("<h2>Polecenie: Wszyscy pracownicy </h2>".$sql);
                        // $result=$conn->query($sql);
                        //     echo("<table border=1>");
                        //     echo("<th>id_pracownicy</th>");
                        //     echo("<th>imie</th>");
                        //     echo("<th>dzial</th>");
                        //     echo("<th>zarobki</th>");
                        //         while($row=$result->fetch_assoc()){
                        //             echo("<tr>");
                        //                 echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row["zarobki"]."</td>");
                        //             echo("</tr>");
                        //         };
                        //      echo("</table>");
                    // function worker($nr_zadania,$z_sql,$polecenie){
                    //     require("/assets/connect.php");
                    //     $sql=$z_sql;
                    //     echo("<h2>Tabelka $nr_zadania</h2>");
                    //     echo("<h2>Polecenie: $polecenie </h2>".$sql);
                    //     $result=$conn->query($sql);
                    //         echo("<table border=1>");
                    //         echo("<th>id_pracownicy</th>");
                    //         echo("<th>imie</th>");
                    //         echo("<th>dzial</th>");
                    //         echo("<th>zarobki</th>");
                    //             while($row=$result->fetch_assoc()){
                    //                 echo("<tr>");
                    //                     echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row["zarobki"]."</td>");
                    //                 echo("</tr>");
                    //             };
                    //         echo("</table>");
                    // };
                    // worker("Zad 1","SELECT*FROM pracownicy where dzial=2","Pracownicy z dzialu 2");
                    // worker("Zad 2","SELECT*FROM pracownicy where dzial=2 or dzial=3","Pracownicy z dzialu 2 lub 3");
                    // worker("Zad 3","SELECT*FROM pracownicy where zarobki<30","Pracownicy z zarobkami mniejszymi niż 30");
                    ?>
            </div>
        </body>
</html>
              
