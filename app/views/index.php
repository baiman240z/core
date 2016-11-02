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

    <?php echo htmlspecialchars(Util::showMessage('views/parts/message.php')) ?>

</div>

<?php include 'views/parts/footer.php' ?>

</body>
</html>
