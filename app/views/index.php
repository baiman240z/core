<?php
use core\Util;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include 'views/parts/head.php' ?>
</head>

<body>

<?php include 'views/parts/navi.php' ?>

<div class="container">

    <h1>Top</h1>

    <?php echo Util::showMessage('error') ?>
    <?php echo Util::showMessage('success') ?>

</div>

<?php include 'views/parts/footer.php' ?>

</body>
</html>
