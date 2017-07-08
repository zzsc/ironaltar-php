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
                mysql_query('SET NAMES utf8');
                $strSQL = "SELECT * FROM texts";
	            $rs = mysql_query($strSQL);
	            while($row = mysql_fetch_array($rs)) {
                    echo $row[$col];
                }
?>

<?php include 'fragments/c2.php';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>

<?php include 'fragments/js.html';?>  
</body>
</html>