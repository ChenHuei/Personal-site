<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>收到訊息了！</title>
</head>
<body>

  <?php  
    require_once("dbtools.inc.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $content = $_POST["textarea"];
    $time = date("Y-m-d H:i:s"); 

    $link = create_connection();

    $sql = "INSERT INTO comment(name,email,content,date) VALUES ("$name", "$email", "$content", "$time")";

    $result = execute_sql($link,"website",$sql);

    mysqli_close($link);

    header("Location:https://chenhuei.github.io/Personal-site/");
    exit();
    
  ?>
</body>
</html>