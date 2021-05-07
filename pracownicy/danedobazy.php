<!DOCTYPE html>
<html>
<link rel="icon" 
      type="image/png" 
      href="/png.ico" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="/assets/style1.css">
    </head>		
	<div class="all">
        <div class="top">
            <h8>Paweł Jachimowski</h8>
        </div>    
        <div class="left">
        <h9>
            <div class="middle"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a></div>
            <div class=up><a href="/index.php">Index</a></div>
            <div class="bottom"><a href="/pracownicy/org.php">Organizacja</a></div>
            <div class="sub"><a href="/pracownicy/FAgregat.php">Funkcje Agregujace</a></div>
            <div class="super"><a href="/pracownicy/dataiczas.php">Data i czas</a></div>
            <div class="text-bottom"><a href="/pracownicy/danedobazy.php">Dane do bazy</a></div>
            <div class="baseline"><a href="/biblioteka/ksiazki.php">Książki</a></div>
            </h9>
        </div>
        <div class="right">
            <body>
            <h2>DODAWANIE PRACOWNIKA</h2>
            <form action="insert.php" method="POST">
                <input type="text" name="name" placeholder="Imie"></br>
                <input type="number" name="dzial" placeholder="Dział"></br>
                <input type="number" name="zarobki" placeholder="Zarobki"></br>
                <input type="date" name="data_urodzenia" placeholder="Data urodzenia"></br>
                <input type="submit" value="wyślij do insert.php">
            </form>

            <h2>USUWANIE</h2>
            <form action="delete.php" method="POST">
            <input type="number" name="id"></br>
            <input type="submit" value="Usuń pracownika">
            </form>

            </body>

            <?php

            require_once("connect.php");

            $sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
            $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>Id_pracownicy</th>");
                echo("<th>Imie</th>");
                echo("<th>Zarobki</th>");
                echo("<th>Data_urodzenia</th>");
                echo("<th>Nazwa_działu</th>");
                echo("<th>Usuwanie</th>");


                while($row=$result->fetch_assoc()) {
                        echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>
                    
                    <td>
                    
                    <form action='delete.php' method='POST'>
                        <input type='number' name='id' value='".$row['id_pracownicy']."' hidden></br>
                        <input type='submit' value='Usuń'>
                    </form>
                    
                    </td>
                    
                    ");
                        echo("</tr>");
                    }
                echo("</table>");
            ?>
        </div>
</html>