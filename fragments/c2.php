
<div class="row">
        <div class="lineBackgroundColor">
        </div>
    </div>

<div class="row">
        <div class="col-xs-12 col-md-12 centerTextAlign productsTitle" id="scrollProductButton"><br><br>PRODUKTY<br></div>
    </div>

<div class="car marginTopBottom marginSlick"> 

<?php
  include 'php/connection.php';
  $strSQL = "SELECT * FROM product";
	$rs = mysqli_query($link,$strSQL);
	  while($row = mysqli_fetch_array($rs)) {
    
    echo '
    <div class="col-sm-6 col-md-4 ">
      <div class="thumbnail">
        <div class="caption thumbnailImg"><a href="product.php?product_name='.$row['product_name'].'"><img src="img/products/'.$row['product_name'].'/thumb/thumb.jpg" /></a></div>
      <div class="caption textProductThumbnail">
        <h3>'.$row['product_name'].'</h3>
        <h4><strong>Cena: '.$row['product_price'].' zł</strong></h4>
          </div>
        </div>
     </div>
          ';

    }
    	mysqli_close($link);
?>

</div>