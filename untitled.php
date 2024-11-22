<?php
// Это процедурный нативный PHP MysqLi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test IS";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
die("Ошибка подключения:" mysqli connect error());
}
 
 $sql = "SELECt id, name, email FROM users"; 
 $result = mysqliquery($conn, $sql);

if (mysqli num rows(Sresult) > 0)
{
while ($row = mysqli_fetch_assod( $result))
	{
		echo "ID: " . $row["id"] . "- Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
	}
}	
else
{
	echo "0 results";
}

$sql = "SElect id, name, email froM users";
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