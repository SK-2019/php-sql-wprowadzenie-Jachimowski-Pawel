<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <?php include("../assets/header.php"); ?>
      </div>
      <div class="menu">
      <?php include("../assets/menu.php"); ?>
      </div>
      <div class="main">
        <?php
                  ini_set('display_errors', '1');
                  ini_set('display_startup_errors', '1');
                  error_reporting(E_ALL);
        echo("<h1>jestes w delete.php </h1>");
        require_once("../assets/connect.php");
        function delete($conn, $table, $column, $row){
        $sql = "DELETE  FROM $table WHERE $column = $row";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
          echo ("<h2>Record deleted successfully</h2>");
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        }
        delete($conn, $_POST['table'], $_POST['column'], $_POST['row']);

        ?>
      </div>
    </div>
  </body>
</html>