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
                    $sql="SELECT*FROM pacjent";
                    echo("<h2>Pacjenci</h2>".$sql);
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>imie pacjenta</th>");
                        echo("<th>nazwisko pacjenta</th>");
                        echo("<th>Usuwanie</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id_pacjenta"]."</td><td>".$row["imie_pacjent"]."</td><td>".$row['nazwisko_pacjent']."</td>
                                    <td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='id' value='".$row['id_pacjenta']."' hidden></br>
                                    <input type='submit' value='Usuń'>
                                </form>
                            </td>");
                                   echo("</tr>");
                               };
                            echo("</table>");
                        $sql="SELECT*FROM lekarz";
                        echo("<h2>Lekarze</h2>".$sql);
                        $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>id</th>");
                            echo("<th>imie lekarza</th>");
                            echo("<th>nazwisko lekarza</th>");
                            echo("<th>Usuwanie</th>");
                               while($row=$result->fetch_assoc()){
                                   echo("<tr>");
                                   echo("<td>".$row["id_lekarza"]."</td><td>".$row["Imie_lekarz"]."</td><td>".$row['nazwisko_lekarz']."</td>
                                       <td>
                                       <form action='delete.php' method='POST'>
                                       <input type='number' name='id' value='".$row['id_lekarza']."' hidden></br>
                                       <input type='submit' value='Usuń'>
                                   </form>
                               </td>");
                                      echo("</tr>");
                                  };
                               echo("</table>");
                            $sql="SELECT * FROM id_lekarz_pacjent, pacjent, lekarz WHERE id_lekarz=id_lekarza and id_pacjent=id_pacjenta";
                            echo("<h2>pacjenci lekarzy</h2>".$sql);
                            $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>imie lekarza</th>");
                                echo("<th>nazwisko lekarza</th>");
                                echo("<th>imie pacjenta</th>");
                                echo("<th>nazwisko pacjenta</th>");
                                echo("<th>Usuwanie</th>");
                                   while($row=$result->fetch_assoc()){
                                       echo("<tr>");
                                           echo("<td>".$row["Imie_lekarz"]."</td><td>".$row['nazwisko_lekarz']."</td><td>".$row['imie_pacjent']."</td><td>".$row['nazwisko_pacjent']."</td>
                                        <td>
                                        <form action='delete.php' method='POST'>
                                        <input type='number' name='id' value='".$row['id_lekarza']."' hidden></br>
                                        <input type='submit' value='Usuń'>
                                    </form>
                                </td>");
                                       echo("</tr>");
                                   };
                                echo("</table>");
