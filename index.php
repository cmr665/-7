<?php

include "php/config.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sevostyanov_is";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){

die ("Ошибка подключения: " . mysqli_connect_error());
}
echo "Подключение процедурного MySQLi - удачно <br>";

$sql = "SELECT id, name, email FROM users"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_assod( $result))
	{
		echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
	}
}	
else
{
	echo "0 results";
}

$sql = "SElECT id, name, email FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	while ($row = mysqli_fetch_object ($result))
	{
		echo "ID: " . $row->id . " - Name: " . $row->name . " - Email: " . $row->email . "<br>";
	}
}
else
{
echo "O results";
}

?>


<?php

include "php/config.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sevostyanov_is";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
die("Ошибка подключения: " . $conn->connect_error);
}
echo "Подключение объектного MySQLi - удачно <br>";

$sql = "SELECT id, name, email FROM users"; 
$result = $conn->query($sql);
// Проверка и вывод данных в виде массива
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
	}
}
else
{
	echo "0 results";
}
 
 $sql = "SELECT id, name, email FROM users";
 $result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	while ($row = mysqli_fetch_object($result))
	{
		echo "ID: " . $row->id . "-Name: " . $row->name . "-Email: " . $row->email . "<br>";
	}
}
else
{
	echo "0 results";
}
?>


<?php

include "php/config.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sevostyanov_is";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Подключение PDO - удачно <br>";
}
catch (PDOException $e){
echo "Ошибка подключения: " . $e->getMessage();
}

$sql = "SELECT id, name, email FROM users";
$stmt = $conn->query($sql);
$rows = $stmt->fetchAll (PDO::FETCH_ASSOC); 
foreach ($rows as $row)
{
	echo "ID: ". $row['id'] . " - Name: " . $row['name'] . " - Email: ". $row['email'] . "<br>";
}
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	while ($row = $result->fetch_object())
	{
		echo "ID: " . $row->id . " - Name: " . $row->name . " - Email: " . $row->email . "<br>";
	}
}
else
{	
	echo "0 results";
}
?>

<html>
<head>
<title>Sevostyanov</title>
</head>
<body>
</body>
</html>


