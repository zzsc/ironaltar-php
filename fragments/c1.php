<div class="row marginTopBottom">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">


<div class="item active">
    <a href="collection.php?id=1">
            <img src="img/collections/1/a.jpg" />
                <div class="carousel-caption">
                    <h1>KOLEKCJA</h1>
                    </div>
                    </a>
                </div>


<?php
      include 'php/connection.php';
      $strSQL = "SELECT * FROM collection WHERE NOT id='1'";
	  $rs = mysql_query($strSQL);
	  while($row = mysql_fetch_array($rs)) {
    
        echo '

            <div class="item">
            <a href="collection.php?id='.$row['id'].'">
                    <img src="img/collections/'.$row['id'].'/a.jpg" />
                        <div class="carousel-caption">
                            <h1>KOLEKCJA</h1>
                            </div>
                            </a>
                        </div>
        ';
    }
    	mysql_close();
?>





        </div>

        <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
    </div>
</div>