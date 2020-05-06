<?php
session_start();
if($_SESSION["role"] != "Manager")
{
    header('HTTP/1.0 404 Unauthorized');
    exit;
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../CSS/stylesheet.css"/>
		<title>Grocery Store</title>
	</head>
	<body class="managerBody">
    <div class="topnav">
        <a id='home' href="../M_ManagerHomePage.php">Home</a>
        <a id='manager' href="M_ManagerEmployeePage.php">Employees</a>
        
        <div>
            <button onclick="window.location.href = '../Login.php';">logout</button>
        </div>        
    </div>
    </body>
</head>