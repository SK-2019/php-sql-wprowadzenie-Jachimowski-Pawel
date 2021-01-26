<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="ksiazki.php">Książki</a>;
            

</h3>
</div>

<?php

    echo("znadjuszesz się w insert.php <br>");
    echo ("<li>". $_POST['name']);
    echo ("<li>". $_POST['dzial']);
    echo ("<li>". $_POST['zarobki']);
    echo ("<li>". $_POST['data_urodzenia']);

    $servername="mysql-pawelj.alwaysdata.net";
    $username="pawelj";
    $password="Jachimowski0719";
    $database="pawelj_baza";

        $conn = new mysqli($servername,$username,$password,$database);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

        $sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
            VALUES (null,'".$_POST['name']."', 1, 76,'1991-11-21')";


        echo "<li>". $sql;

        if ($conn->query($sql) === TRUE) {
            echo ("New record created successfully");
            } else {
            
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

    $conn->close();

    header("location: https://projekt-testowy.herokuapp.com/danedobazy.php");

?>
