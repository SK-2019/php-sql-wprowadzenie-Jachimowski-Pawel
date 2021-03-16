<!DOCTYPE html>
<html lang="en">
<link rel="icon" 
      type="image/png" 
      href="/png.ico" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
    </head>
        <body>
            <div class="nav">
            <h3>
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="/pracownicy/org.php">Organizacja</a>;
            <a href="/pracownicy/FAgregat.php">Funkcje Agregujace</a>;
            <a href="/pracownicy/dataiczas.php">Data i czas</a>;
            <a href="/pracownicy/danedobazy.php">Dane do bazy</a>;

            </h3>
            </div>
                <hr>

                <?php
                
                require_once('connect.php');
                $sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
                echo("<h2>".$sql."</h2>");

                $result = $conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>Id</th>");
                        echo("<th>Autor</th>");
                        echo("<th>Tytuł</th>");
                            while($row=$result->fetch_assoc()){ 
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
                                echo("</tr>");
                            }

                        echo("</table>");
                ?>
        </body>