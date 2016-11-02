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

<h1>List</h1>

    <?php echo Util::showMessage('error') ?>
    <?php echo Util::showMessage('success') ?>

<form method="post" action="" class="form-inline" role="form">
    <div class="panel panel-default">
        <div class="panel-heading">save</div>
        <div class="panel-body">
            <label for="key" class="control-label">key:</label>
            <input type="text" class="form-control" name="key" value="<?php echo htmlspecialchars(Request::post('key')) ?>" size="10">
            <label for="value" class="control-label">value:</label>
            <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars(Request::post('value')) ?>" size="20">
            <button type="submit" class="btn btn-sm btn-primary">save</button>
        </div>
    </div>
</form>

<form id="delete-form" method="post" action="delete" class="form-inline" role="form">
    <input type="hidden" name="key" value="">
    <div class="panel panel-default">
        <div class="panel-heading">saved</div>
        <div class="panel-body">
            <ul class="list-group">
                <?php foreach ($allSessions as $key => $val) { ?>
                <li class="list-group-item" data-key="<?php echo htmlspecialchars($key) ?>">
                        <button type="button" class="btn btn-sm btn-danger" name="delete-btn">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                        <?php echo htmlspecialchars($key) ?>
                        =>
                        <?php var_export($val) ?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</form>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
$(function() {
    $('button[name=delete-btn]').on('click', function() {
        $('#delete-form input[name=key]').val($(this).parents('li:first').attr('data-key'));
        $('#delete-form').submit();
    });
});
</script>

</body>
</html>
