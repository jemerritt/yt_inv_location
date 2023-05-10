<?php
  include_once 'dbh.inc.php';

  $sku = $_POST['itemFindLocation'];

  require_once 'functions.inc.php';
  if (emptyInputFind($sku) !== false) {
		echo "Please enter a SKU #";
		exit();
	}

  $sql = "SELECT * FROM inventory WHERE itemsku = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Something went wrong!";
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $sku);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="well">';
      echo "<H3>";
      echo "Item SKU: ";
      echo $row['itemsku'];
      echo "</H3>";
      echo "<H3>";
      echo "Location: ";
      echo $row['itemlocation'];
      echo "</H3>";
      echo "<br>";
      echo '<button class="btn btn-danger" id="delete" data-id='.$row['itemid'].'>Delete</button>';
      echo '</div>';
    }
  }
  else {
    echo '<div class="well">';
    echo "<H1>No location found!</H1>";
    echo '</div>';
  }
