
<div class="row">
        <div class="lineBackgroundColor">
        </div>
    </div>

<div class="row">
        <div class="col-xs-12 col-md-12 centerTextAlign productsTitle" id="scrollProduct"><br><br><h1>PRODUKTY</h1><br></div>
    </div>

<div class="car marginTopBottom marginSlick"> 

<?php
  include 'php/connection.php';
  $strSQL = "SELECT * FROM product";
	$rs = mysql_query($strSQL);
	  while($row = mysql_fetch_array($rs)) {
    
    echo '
    <div class="col-sm-6 col-md-4 ">
      <div class="thumbnail">
        <div class="caption thumbnailImg"><a href="product.php?id='.$row['id'].'"><img src="img/products/'.$row['id'].'/thumb/thumb.jpg" /></a></div>
      <div class="caption textProductThumbnail">
        <h3>'.$row['product_name'].'</h3>
        <h4><strong>Cena: '.$row['product_price'].' zł</strong></h4>
          </div>
        </div>
     </div>
          ';

    }
    	mysql_close();
?>

</div>