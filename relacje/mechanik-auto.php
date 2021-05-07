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
                    $sql="SELECT*FROM mechanik";
                    echo("<h2>Mechanicy</h2>".$sql);
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>imie mechanika</th>");
                        echo("<th>nazwisko mechanika</th>");
                        echo("<th>Usuwanie</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id_mechanika"]."</td><td>".$row["mechanik_imie"]."</td><td>".$row['mechanik_nazwisko']."</td>
                                    <td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='id' value='".$row['id_mechanika']."' hidden></br>
                                    <input type='submit' value='Usuń'>
                                </form>
                            </td>");
                                   echo("</tr>");
                               };
                            echo("</table>");
                        $sql="SELECT*FROM auto";
                        echo("<h2>Samochody</h2>".$sql);
                        $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>id</th>");
                            echo("<th>samochód</th>");
                            echo("<th>Usuwanie</th>");
                               while($row=$result->fetch_assoc()){
                                   echo("<tr>");
                                       echo("<td>".$row["id_samochód"]."</td><td>".$row['samochód']."</td>
                                       <td>
                                       <form action='delete.php' method='POST'>
                                       <input type='number' name='id' value='".$row['id_samochód']."' hidden></br>
                                       <input type='submit' value='Usuń'>
                                   </form>
                               </td>");
                                      echo("</tr>");
                                  };
                               echo("</table>");
                            $sql="SELECT * FROM mechanik, auto, id_mechanik_auto WHERE id_mechanika=id_mechanik and id_samochód=id_auto";
                            echo("<h2>mechanik do samochodu</h2>".$sql);
                            $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>imie mechanika</th>");
                                echo("<th>nazwisko mechanika</th>");
                                echo("<th>samochód</th>");
                                echo("<th>Usuwanie</th>");
                                   while($row=$result->fetch_assoc()){
                                       echo("<tr>");
                                           echo("<td>".$row["mechanik_imie"]."</td><td>".$row["mechanik_nazwisko"]."</td><td>".$row['samochód']."</td>
                                        <td>
                                        <form action='delete.php' method='POST'>
                                        <input type='number' name='id' value='".$row['id_mechanik']."' hidden></br>
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
