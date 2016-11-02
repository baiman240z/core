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

<h1>Save form</h1>

<form method="post" action="" class="form-horizontal" role="form">

<?php echo htmlspecialchars(Util::showMessage('views/parts/message.php')) ?>

<div class="panel panel-primary">
<div class="panel-body">

    <?php if (Request::get('id')) { ?>
    <div class="form-group">
        <label for="enc" class="col-sm-2 control-label">id</label>
        <div class="col-sm-10">
            <?php echo htmlspecialchars($form['hoge_id']) ?>
        </div>
    </div>
    <?php } ?>

    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title" placeholder="title" value="<?php echo htmlspecialchars($form['title']) ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="body" class="col-sm-2 control-label">body</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" name="body" placeholder="body"><?php echo htmlspecialchars($form['body']) ?></textarea>
        </div>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-sm btn-primary">save</button>
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
