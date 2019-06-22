<?php
use core\Config;

$selections = Config::get('selections')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php include 'views/parts/head.php' ?>
</head>
<body>
<?php include 'views/parts/navi.php' ?>

<div class="container">
    <h1>Input complete</h1>

    <div class="alert alert-success" role="alert">
        Completed
    </div>
</div>

<?php include 'views/parts/footer.php' ?>

<script>
</script>

</body>
</html>
