<div class="row" id="scrollProduct">
    <div class="lineBackgroundColor">
        </div>
</div>

<div class="row">
        <div class="col-xs-12 col-md-4 col-md-4">
            <?php
                $id = $_GET['id'];
                $dirname = "img/products/$id/";
                $images = glob($dirname."*.*");
                    foreach($images as $image) {
                        echo '<img src="'.$image.'" class="img-thumbnail" /><br />';
                    }
            ?>
        </div>
        
          <?php  
                $id = $_GET['id'];
                include 'php/connection.php';
                mysql_query('SET NAMES utf8');
                $strSQL = "SELECT * FROM product WHERE id='$id'";
	            $rs = mysql_query($strSQL);
	            while($row = mysql_fetch_array($rs)) {
    
         echo '
         <div class="col-xs-12 col-md-8 col-md-8">
                <h1>'.$row['product_name'].'</h1><br><br>
                <h3>'.$row['product_desc'].'</h3><br><br>
                <h2>Wykonanie</h2><br><br>
                <h3>'.$row['product_made'].'</h3><br><br>
         </div>
         <div class="col-xs-12 col-md-6 col-md-6">
                <h1>Cena: '.$row['product_price'].' zł</h1><br>
                <div class="lineBackgroundColor"></div><br>
                <h3>Wymiary</h3><br>
                <h4>'.$row['product_dim'].'</h4><h4 text-align="right">Grubość blatu: '.$row['product_board_thickness'].'</h4><br>
                <div class="lineBackgroundColor"></div><br>
                <h3>Materiał</h3><br>
                <h4>'.$row['product_material'].'</h4><br>
                <div class="lineBackgroundColor"></div><br>
                <h3>Termin realizacji:</h3><br>
                <h4>Około '.$row['product_production_time'].' dni roboczych.</h4><br>
                <div class="lineBackgroundColor"></div><br>
         </div>
          ';

    }
    	mysql_close();
?>
       
</div>

<div class="row">
    <div class="lineBackgroundColor">
 </div>
</div>