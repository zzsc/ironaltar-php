<html>
<head>
<?php include 'fragments/head.html';?> 
</head>
<body>
<?php include 'fragments/preloader.html';?>
<?php include 'fragments/header.html';?>

<?php include 'fragments/c1.php';?>
<?php include 'fragments/collectionload.php';?>
<?php include 'fragments/footer.html';?>
<?php include 'fragments/modal.html';?>

<?php include 'fragments/js.html';?>  
    <script>
        $(function() {
            $(window).scrollTop($('#scrollCollection').offset().top);
        });
    </script>
</body>
</html>