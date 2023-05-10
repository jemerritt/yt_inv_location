<?php
  include_once 'dbh.inc.php';

  $id = $_POST['itemToDelete'];

  $sql = "DELETE FROM inventory WHERE itemid = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Something went wrong!";
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $id);
	mysqli_stmt_execute($stmt);
