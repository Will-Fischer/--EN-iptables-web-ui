<?php
require('config.php');

session_start();

if(!isset($_SESSION['connected'])) {
	header('Location: login.php');
	exit();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<title>Iptables Web UI | Home</title>
</head>
<body style="margin-top: 100px; margin-left: 270px; margin-right: 270px;">
	<div class="well" align="center">
	<h4>IP addresses commands</h4>
	<br>
	<a href="bloquerip.php"><button class="btn btn-danger">Block an IP address</button></a>
	<br><br>
	<a href="autoriserip.php"><button class="btn btn-success">Allow an IP address</button></a>
	<br><br>
	<h4>Ports commands</h4>
	<br>
	<a href="fermerport.php"><button class="btn btn-danger">Close a specific port</button></a>
	<br><br>
	<a href="ouvrirport.php"><button class="btn btn-success">Open a specific port</button></a>
	<br><br>
	<h4>Protocols commands</h4>
	<br>
	<a href="bloquerudp.php"><button class="btn btn-danger">Block UDP protocol</button></a>
	<br><br>
	<a href="autoriserudp.php"><button class="btn btn-success">Allow UDP protocol</button></a>
	<br><br><br>
	<a href="bloquericmp.php"><button class="btn btn-danger">Block ICMP protocol</button></a>
	<br><br>
	<a href="autorisericmp.php"><button class="btn btn-success">Allow ICMP protocol</button></a>
	<br><br><br><br>
	<a href="bloquertrafic.php"><button class="btn btn-warning">Block external trafic</button></a>
	<br><br><br><br>
	<a href="videregles.php"><button class="btn btn-warning">Clean iptables rules</button></a>
	</div>
<?php include('includes/footer.php'); ?>
