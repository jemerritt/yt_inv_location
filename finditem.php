<?php
  include_once './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <script src=main.js></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $("#findButton").click(function() {
            var itemSku = $('#itemSkuInput').val();
            $('#itemSkuInput').val('');
              $("#itemsList").load("includes/find.inc.php", {
                itemFindLocation: itemSku
              });
          });
      });
    </script>

    <title>Yesterday and Today Inventory Tracker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Yesterday and Today Inventory Tracker</h1>
      <br>
      <a class="btn btn-primary" href="index.html" role="button">Return</a>
      <br>
      <br>
      <br>
      <div class="jumbotron">
        <h3>Find Item:</h3>
          <div class="input-field">
            <label for="itemSkuInput">SKU</label>
            <input type="text" class="skuInput" id="itemSkuInput" placeholder="Enter SKU">
          </div>
          <button class="btn btn-primary btn-lg" id="findButton" >Find</button>
      </div>
      <div class="col-lg-12">

        <div class="itemsList" id="itemsList">


        </div>

      </div>
      <div class="footer">
      </div>
    </div>
  </body>

  <script type="text/javascript">
    $('#itemsList').on('click', 'button', function(e){
      var clicked_button = $(e.target);
      var itemId = clicked_button.data('id');
      var message = "Deleted from location";
      notification(message, 3000);
      $("#itemsList").load("includes/delete.inc.php", {
        itemToDelete: itemId
      });
    });
  </script>

</html>
