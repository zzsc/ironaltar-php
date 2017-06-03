
<div class="row">
        <div class="col-xs-12 col-md-12 centerTextAlign footerFont1"><br><p>PRODUKTY</p><br></div>
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
        <a href="product.php?id='.$row['id'].'"><img src="img/products/'.$row['id'].'/a.jpg" /></a>
      <div class="caption centerTextAlign">
        <h3>'.$row['product_name'].'</h3> 
          </div>
        </div>
     </div>
          ';

    }
    	mysql_close();
?>

</div>