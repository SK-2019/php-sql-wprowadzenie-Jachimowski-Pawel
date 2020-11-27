<html>
    <head>
        <link rel="stylesheet" href="style1.css">
    </head>
        <body>
            <div class="nav">
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="org.php">Organizacja</a>;
            </div>
                <?php

                    require("connect.php");
                    $sql="SELECT sum(zarobki) as suma_zarobki FROM pracownicy";
                    echo("<h2>Tabelka 1</h2>");
                    echo("<h2>Polecenie Suma zarobków wszystkich pracowników</h2>".$sql);
                    $result=$conn->query($sql); 
                        echo("<table border=1>");
                        echo("<th>suma_zarobki</th>");
                            while($row=$result->fetch_assoc()){ 
                                echo("<tr>");
                                    echo("<td>".$row["suma_zarobki"]."</td>");
                                echo("</tr>");
                            };

                        echo("</table>");


                ?>
        </body>
</html>  