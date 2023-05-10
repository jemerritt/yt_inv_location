<?php
  include_once './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yesterday and Today Inventory Tracker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="styles.css">
    <script src=main.js></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $("#addButton").click(function() {
            var itemSku = $('#itemSkuInput').val();
            var itemLoc = $('#itemLocInput').val();
            var message = itemSku + " added to location " + itemLoc;
            notification(message, 3000);
            $('#itemSkuInput').val('');
            $('#itemLocInput').val('');
              $("#itemsList").load("includes/add.inc.php", {
                itemSkuInput: itemSku,
                itemLocInput: itemLoc
              });
          });
      });
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <h1 style="text-align:center;">Yesterday and Today Inventory Tracker</h1>
      <br>
      <a class="btn btn-primary" href="index.html" role="button">Return</a>
      <br>
      <br>
      <br>
      <div class="jumbotron">
        <h3>Add New Item:</h3>
          <div class="input-field">
            <label for="sku">SKU</label>
            <input type="text" class="skuInput" id="itemSkuInput" placeholder="Enter SKU">
          </div>
          <div class="input-field">
            <label for="location">Location</label>
            <input type="text" class="locInput" id="itemLocInput" placeholder="Enter SKU">
          </div>
          <button id="addButton" class="btn btn-primary btn-lg">Add</button>
      </div>
      <div class="col-lg-12">
        <div id="itemsList">
        </div>
      </div>

      <div id="notification-box">
      </div>

      <div class="footer">
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
