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
                <?php include("../header.php") ?>
                </div>    
                <div class="left">
                <?php include("../menu.php") ?>

                </div>
                <div class="right">
                    <?php 
                    require("../connect.php");
                    $sql="SELECT*FROM Pracownik";
                    echo("<h2>Pracownicy</h2>".$sql);
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>imie pracownika</th>");
                        echo("<th>nazwisko pracownika</th>");
                        echo("<th>Usuwanie</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownika"]."</td><td>".$row["imie_pracownik"]."</td><td>".$row['nazwisko_pracownik']."</td>
                                    <td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='id' value='".$row['id_pracownika']."' hidden></br>
                                    <input type='submit' value='Usuń'>
                                </form>
                            </td>");
                                   echo("</tr>");
                               };
                            echo("</table>");
                        $sql="SELECT*FROM projekt";
                        echo("<h2>Projekt</h2>".$sql);
                        $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>id</th>");
                            echo("<th>nazwa projektu</th>");
                            echo("<th>Usuwanie</th>");
                               while($row=$result->fetch_assoc()){
                                   echo("<tr>");
                                       echo("<td>".$row["id_projektu"]."</td><td>".$row['nazwa_projekt']."</td>
                                       <td>
                                       <form action='delete.php' method='POST'>
                                       <input type='number' name='id' value='".$row['id_projektu']."' hidden></br>
                                       <input type='submit' value='Usuń'>
                                   </form>
                               </td>");
                                      echo("</tr>");
                                  };
                               echo("</table>");
                            $sql="SELECT * FROM projekt, Pracownik, pracownik_projekt where id_projektu=id_projekt and id_pracownika=id_pracownik";
                            echo("<h2>Przydział do projektu</h2>".$sql);
                            $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>Imie pracownika</th>");
                                echo("<th>nazwisko pracownika</th>");
                                echo("<th>projekt</th>");
                                echo("<th>Usuwanie</th>");
                                   while($row=$result->fetch_assoc()){
                                       echo("<tr>");
                                           echo("<td>".$row["imie_pracownik"]."</td><td>".$row["nazwisko_pracownik"]."</td><td>".$row['nazwa_projekt']."</td>
                                        <td>
                                        <form action='delete.php' method='POST'>
                                        <input type='number' name='id' value='".$row['id_projektu']."' hidden></br>
                                        <input type='submit' value='Usuń'>
                                    </form>
                                </td>");
                                       echo("</tr>");
                                   };
                                echo("</table>");
                                ?>
                                <h2>USUWANIE</h2>
                                <form action="delete.php" method="POST">
                                <input type="number" name="id"></br>
                                <input type="submit" value="Usuń pracownika">
                                </form>
