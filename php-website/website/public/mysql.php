
<?php
$servername = "website_mysql_1";
$username = "root";
$password = "my-secret-pw";
echo "Hello World"; 
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>

