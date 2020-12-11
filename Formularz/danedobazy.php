<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
</head>
        <head>
        <link rel="stylesheet" href="style1.css">
        </head>	
	
	<div class="nav"
<h3>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="Tabele/org.php">Organizacja</a>;
            <a href="Tabele/FAgregat.php">Funkcje Agregujace</a>;
            <a href="Tabele/dataiczas.php">Data i czas</a>;
            <a href="Formularz/formularz.html">Formularz</a>;
            <a href="Biblioteka/ksiazki.php">Książki</a>;
            

</h3>
</div>

<h1>Paweł Jachimowski</h1>
<hr>

<body>
<h2>DODAWANIE PRACOWNIKA</h2>
<form action="Formularz/insert.php" method="POST">
	<input type="text" name="name" placeholder="Imie"></br>
	<input type="number" name="dzial" placeholder="Dział"></br>
	<input type="number" name="zarobki" placeholder="Zarobki"></br>
	<input type="date" name="data_urodzenia" placeholder="Data urodzenia"></br>
	<input type="submit" value="wyślij do insert.php">
</form>

<h2>USUWANIE PRACOWNIKA</h2>
<form action="Formularz/delete.php" method="POST">
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
</html>