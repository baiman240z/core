<?php
use core\Util;
use core\Request;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include 'views/parts/head.php' ?>
</head>

<body>

<?php include 'views/parts/navi.php' ?>

<div class="container">

<form method="post" action="" class="form-horizontal" role="form">

<h1>Mailer</h1>

<?php echo htmlspecialchars(Util::showMessage('views/parts/message.php')) ?>

<div class="panel panel-primary">
<div class="panel-body">

    <div class="form-group">
        <label for="sender" class="col-sm-2 control-label">from</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="sender" placeholder="hoge@hoge.com" value="<?php echo htmlspecialchars(Request::post('sender')) ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="receiptto" class="col-sm-2 control-label">reciept to</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receiptto" placeholder="hoge@hoge.com" value="<?php echo htmlspecialchars(Request::post('receiptto')) ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="subject" class="col-sm-2 control-label">subject</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="subject" placeholder="件名" value="<?php echo htmlspecialchars(Request::post('subject')) ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="body" class="col-sm-2 control-label">body</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" name="body" placeholder="本文"><?php echo htmlspecialchars(Request::post('body')) ?></textarea>
        </div>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-sm btn-primary">send</button>
    </div>

</div>
</div>

</form>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
</script>

</body>
</html>
