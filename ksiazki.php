<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karolina Zatylny 2Ti</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
            <div class="nav"
            <h3>
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
                        <a href="index.php">Index</a>;
                        <a href="org.php">Organizacja</a>;
                        <a href="FAgregat.php">Funkcje Agregujace</a>;
                        <a href="dataiczas.php">Data i czas</a>;
                        <a href="formularz.html">Formularz</a>;
                        <a href="danedobazy.php">Dane do bazy</a>;

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