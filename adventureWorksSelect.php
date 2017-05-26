<html>
		<head>
	<title>Find a record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
</head>

	<body>
		<div id="page" data-role="page" data-theme="b" >
			<div data-role="header" data-theme="b">
                <h1>AdventureWorks DB || Find a record</h1>
           	</div>

  	<div data-role="content">
	<?php
$servername = "adventureworksbonifs1.mysql.database.azure.com";
$username = "bonifs1@adventureworksbonifs1";
$password = "2h40yxuvTIcg";
$dbname = "adventureworks";

// $completed = (isset($_POST['Finished'])    ? $_POST['Finished']   : '');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT LoginID, Title, HireDate FROM employee ORDER BY
LoginID LIMIT 20";

$result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($result)) {
        echo "<b>Login ID: " . $row["LoginID"]. "<br>";
        echo "<b>Title: " . $row["Title"]. "</b><br>";
				echo "<b>Hire Date: " . $row["HireDate"]. "</b><br><br>";
	}

mysqli_close($conn);
?>



<div data-role="footer" data-theme="b">
  <h4>YOUR APP NAME &copy; 2016</h4>
</div>

</body>
</html>
