<div class="row" id="scrollProduct">
    <div class="lineBackgroundColor">
        </div>
</div>

<div class="row">
        <div class="col-xs-12 col-md-4 col-md-4">
            <?php
                $id = $_GET['product_name'];
                $dirname = "img/products/$id/";
                $images = glob($dirname."*.*");
                    foreach($images as $image) {
                        echo '<a class="example-image-link" href="'.$image.'" data-lightbox="example-set" data-title="Click">
                        <img src="'.$image.'" class="img-thumbnail" /></a><br />';
                    }
            ?>
        </div>
        
          <?php  
                $id = $_GET['product_name'];
                include 'php/connection.php';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM product WHERE product_name='$id'";
	            $rs = mysqli_query($link,$strSQL);
	            while($row = mysqli_fetch_array($rs)) {
    
         echo '
         <div class="col-xs-12 col-md-8 col-md-8">
                <h1>'.$row['product_name'].'</h1><br>
                <h4>'.$row['product_desc'].'</h4><br><br>
                <h3>Wykonanie</h3>
                <h4>'.$row['product_made'].'</h4><br><br>
         </div>
         <div class="col-xs-12 col-md-6 col-md-6">
                <h1>Cena: '.$row['product_price'].' zł</h1><br>
                <div class="lineBackgroundColor"></div><br>
                <h3>Wymiary</h3>
                <h4>'.$row['product_dim'].'</h4><h4 text-align="right">Grubość blatu: '.$row['product_board_thickness'].'</h4><br>
                <div class="lineBackgroundColor"></div><br>
                <h3>Materiał</h3>
                <h4>'.$row['product_material'].'</h4><br>
                <div class="lineBackgroundColor"></div><br>
                <h3>Termin realizacji:</h3>
                <h4>Około '.$row['product_production_time'].' dni roboczych.</h4><br>
                <div class="lineBackgroundColor"></div><br>
         </div>
          ';

    }
    	mysqli_close($link);
?>
       
</div>

<div class="row">
    <div class="lineBackgroundColor">
 </div>
</div>