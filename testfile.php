<html>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";


$term = $_GET["x"];

$conn = new PDO("mysql:host=$servername;dbname=laravel_flight",$username,$password);
$query = "SELECT * FROM cities WHERE name LIKE '%{$term}%'";


foreach ($conn->query($query) as $thing){
echo "<div>".$thing['name']."</div>";}

?>
</body>
</html>

