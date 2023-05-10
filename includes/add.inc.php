<?php
	include_once 'dbh.inc.php';
	$sku = $_POST["itemSkuInput"];
	$location = $_POST["itemLocInput"];

	require_once 'functions.inc.php';
	if (emptyInput($sku, $location) !== false) {
		echo "Please fill out all fields!";
		exit();
	}

	addItem($conn, $sku, $location);
