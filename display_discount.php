<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>

        <?php
          $proddesc=$_POST['product_description'];
          $listprice=$_POST['list_price'];
  	  $discperc=$_POST['discount_percent'];
        ?>

        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo "$proddesc"; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$listprice"; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo "$discperc"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo ''; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo ''; ?></span><br>
   </main>
</body>
</html>
