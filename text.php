<html>
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<?php include 'fragments/preloader.html';?>
<?php include 'fragments/header.html';?>

<?php
                $col = $_GET['col'];
                include 'php/connection.php';
                mysqli_set_charset($link, "utf8");
                $strSQL = "SELECT * FROM texts";
	            $rs = mysqli_query($link, $strSQL);
	            while($row = mysqli_fetch_array($rs)) {
                    echo $row[$col];
                }
                mysqli_close($link);
?>

<?php include 'fragments/c2.php';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>

<?php include 'fragments/js.html';?>  
</body>
</html>