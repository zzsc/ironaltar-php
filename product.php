<html>
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<?php include 'fragments/preloader.html';?>
<?php include 'fragments/header.html';?>

<?php include 'fragments/c2.php';?>
<?php include 'fragments/productload.php';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>

<?php include 'fragments/js.html';?>  
    <script>
        $(function() {
            $(window).scrollTop($('#scrollProduct').offset().top);
        });
    </script>
</body>
</html>