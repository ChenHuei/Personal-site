<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>收到訊息了！</title>
</head>
<body>

  <?php  

    $name = $_POST["name"];
    $email = $_POST["email"];
    $content = $_POST["textarea"];

    $link = mysql_connect("localhost","root","mypassword");

    mysql_select_db("Website");
    if (@mysql_select_db("Website")) {
      echo "資料庫存在！";
    } else {
      echo "資料庫不存在！";
    }

    mysql_query("SET NAMES 'UTF-8'");

    $sql = "INSERT INTO Comment(name,email,content) VALUES ("$name", "$email", "$content")";

    $result = mysql_query($sql) or die(mysql_error);

    mysql_close($link);

    echo "$name，已收到你的留言！";
  ?>

  <img src="images/thank.jpg" align="center" width="600px">

  
</body>
</html>