<?php

function emptyInput($sku, $location) {
	$result;
	if (empty($sku) || empty($location)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function emptyInputFind($sku) {
	$result;
	if (empty($sku)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function addItem($conn, $sku, $location) {
	$sql = "INSERT INTO inventory (itemsku, itemlocation) VALUES (?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Something went wrong!";
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $sku, $location);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	exit();
}

function findItem($conn, $sku) {
	$sql = "SELECT * FROM inventory WHERE itemsku = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../finditem.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $sku);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	return $resultData;

	header("location: ../finditem.php?error=none");
	exit();
}
