<html>
        <head>
        <link rel="stylesheet" href="style1.css">
        </head>
<div class="nav"
        <h3>
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Jachimowski-Pawel">GITHUB</a>;
            <a href="index.php">Index</a>;
            <a href="org.php">Organizacja</a>;
            <a href="FAgregat.php">Funkcje Agregujace</a>;
            <a href="dataiczas.php">Data i czas</a>;
            <a href="formularz.html">Formularz</a>
            <a href="danedobazy.php">Dane do bazy</a>;
            <a href="ksiazki.php">Książki</a>;
        </h3>
</div>
  
</html> 

<?php
include("connect.php");
echo("<li> imie: ".$_POST['firstname']."</li>");
echo("<li> nazwisko: ".$_POST['lastname']."</li>");
echo("<li> miasto: ".$_POST['city']."</li>");
echo("<li> numer tel: ".$_POST['phone']."</li>");
echo("<li> kod pocztowy: ".$_POST['poscode']."</li>");


$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);

?>
