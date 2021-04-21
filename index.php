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
                <?php include("header.php") ?>
                </div>    
                <div class="left">
                <?php include("menu.php") ?>
                </div>
                <div class="right">
                    
                    <?php 
                    require("connect.php");
                        $sql="SELECT*FROM pracownicy";
                        echo("<h2>Polecenie: Wszyscy pracownicy </h2>".$sql);
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
                                };
                             echo("</table>");
                   
                    ?>
                    
            </div>
        </body>
</html>
              
