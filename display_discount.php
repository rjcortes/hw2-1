<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>

        <?php
          $proddesc=filter_input(INPUT_POST,
	  'product_description');
          $listprice=filter_input(INPUT_POST, 'list_price');
  	  $discperc=filter_input(INPUT_POST, 'discount_percent');
          $discamount=($listprice * $discperc / 100);
	  $discprice=($listprice - $discamount);
	?>

        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo "$proddesc"; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$listprice"; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo "$discperc"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$discamount"; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$discprice"; ?></span><br>
   </main>
</body>
</html>
