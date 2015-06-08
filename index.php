<html>
<head>
 <title>This is a test quickstart </title>
</head>
<body>

<?php
// This is a QuickStart.

$myApp = getenv('OPENSHIFT_APP_NAME');
function db_connect($myApp)
{
	// link to the DB
        $db_username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
        $db_password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
        $db_host = getenv('OPENSHIFT_MYSQL_DB_HOST') . ":" . getenv('OPENSHIFT_MYSQL_DB_PORT');
        $db_name = $dbName;
        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
        return $conn;
}

?>

The database contains the following information:
<table border="1">

<?php
echo "Welcome to my test quick-start application called " . $myApp;
$conn = db_connect($myApp);

$sql = "SELECT * FROM myQuickStartApp";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
        echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['email'] . "</td></tr>";
}

?>
</table>
End of app.

</body>
</html>
