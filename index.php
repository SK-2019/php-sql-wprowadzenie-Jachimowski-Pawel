<html>
    <link rel="icon" 
      type="image/png" 
      href="/png.ico" />   
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
                    <div class="bottom"><a href="/pracownicy/org.php">Organizacja</a></div>
                    <div class="sub"><a href="/pracownicy/FAgregat.php">Funkcje Agregujace</a></div>
                    <div class="super"><a href="/pracownicy/dataiczas.php">Data i czas</a></div>
                    <div class="text-bottom"><a href="/pracownicy/danedobazy.php">Dane do bazy</a></div>
                    <div class="baseline"><a href="/biblioteka/ksiazki.php">Książki</a></div>
                    </h9>
                </div>
                <div class="right">
                    
                    <?php 
                    // require_once ("config.php");
                    echo("<li> Server password:".$_SERVER['pass']); 
                    echo("<li> Server password:".$_SERVER['PASSWORD']); 
                    echo("<li> Server password:".$_SERVER['SECRET_KEY']); 
                    require("assets/connect.php");
                        $sql="SELECT*FROM pracownicy";
                        echo("<h2>Polecenie: Wszyscy pracownicy </h2>".$sql);
                        $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>id_pracownicy</th>");
                            echo("<th>imie</th>");
                            echo("<th>dzial</th>");
                            echo("<th>zarobki</th>");
                                while($row=$result->fetch_assoc()){
                                    echo("<tr>");
                                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row["zarobki"]."</td>");
                                    echo("</tr>");
                                };
                             echo("</table>");
                   
                    ?>
                    
            </div>
        </body>
</html>
              
