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
                    $sql="SELECT*FROM producent";
                    echo("<h2>Producenci</h2>".$sql);
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>producent</th>");
                        echo("<th>Usuwanie</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["id_producenta"]."</td><td>".$row['nazwa_producent']."</td>
                                    <td>
                                    <form action='delete.php' method='POST'>
                                    <input type='number' name='id' value='".$row['id_producenta']."' hidden></br>
                                    <input type='submit' value='Usuń'>
                                </form>
                            </td>");
                                   echo("</tr>");
                               };
                            echo("</table>");
                        $sql="SELECT*FROM produkty";
                        echo("<h2>produkty</h2>".$sql);
                        $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>id</th>");
                            echo("<th>produkty</th>");
                            echo("<th>Usuwanie</th>");
                               while($row=$result->fetch_assoc()){
                                   echo("<tr>");
                                   echo("<td>".$row["id_produktu"]."</td><td>".$row['nazwa_produkt']."</td>
                                       <td>
                                       <form action='delete.php' method='POST'>
                                       <input type='number' name='id' value='".$row['id_produktu']."' hidden></br>
                                       <input type='submit' value='Usuń'>
                                   </form>
                               </td>");
                                      echo("</tr>");
                                  };
                               echo("</table>");
                            $sql="SELECT * FROM producent, produkty, producent_produkt WHERE id_producent=id_producenta and id_produkt=id_produktu";
                            echo("<h2>producenci i prodkty</h2>".$sql);
                            $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>Producent</th>");
                                echo("<th>Produkt</th>");
                                echo("<th>Usuwanie</th>");
                                   while($row=$result->fetch_assoc()){
                                       echo("<tr>");
                                           echo("<td>".$row["nazwa_producent"]."</td><td>".$row['nazwa_produkt']."</td>
                                        <td>
                                        <form action='delete.php' method='POST'>
                                        <input type='number' name='id' value='".$row['id_produktu']."' hidden></br>
                                        <input type='submit' value='Usuń'>
                                    </form>
                                </td>");
                                       echo("</tr>");
                                   };
                                echo("</table>");
