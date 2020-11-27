<html>
    <head> 
        <link rel="stylesheet" href="style1.css">
    </head>
        <body>
            <div class="nav">
                <?php  
                  echo("<h1>Paweł Jachimowski</h1>");
                  function worker($nr_zadania,$z_sql,$polecenie){
                      require("connect.php");
                      $sql=$z_sql;
                      echo("<h2>Polecenie: $polecenie </h2>");
                      echo("<h3>Tabelka $nr_zadania</h3>".$sql);
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
                  }
                          echo("</table>");
                  };
                  worker("Zad 1","SELECT*FROM pracownicy where dzial=2","Pracownicy z dzialu 2");
                  worker("Zad 2","SELECT*FROM pracownicy where dzial=2 or dzial=3","Pracownicy z dzialu 2 lub 3");
                  worker("Zad 3","SELECT*FROM pracownicy where zarobki<30","Pracownicy z zarobkami mniejszymi niż 30");
                ?>
        </body>
</html>
              
