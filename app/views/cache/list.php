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

<form method="post" action="" role="form">
    <div class="card">
        <div class="card-header">cache</div>
        <div class="card-body row">
            <div class="form-group col-md-4">
                <label for="key">key</label>
                <input type="text" class="form-control" name="key" value="<?php echo htmlspecialchars(Request::post('key')) ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="key">value</label>
                <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars(Request::post('value')) ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="key">ttl</label>
                <input type="text" class="form-control" name="ttl" value="<?php echo htmlspecialchars(Request::post('ttl')) ?>">
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-sm btn-primary">save</button>
            </div>
        </div>
    </div>
</form>

<form id="delete-form" method="post" action="delete" role="form">
    <input type="hidden" name="key" value="">
    <div class="card mt-5">
        <div class="card-header">cached</div>
        <div class="card-body">
            <ul class="list-group">
                <?php foreach ($caches as $key => $cache) { ?>
                <li class="list-group-item" data-key="<?php echo htmlspecialchars($key) ?>">
                        <button type="button" class="btn btn-sm btn-danger" name="delete-btn">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        <?php echo htmlspecialchars($key) ?>
                        :
                        <?php if ($cache['ttl'] > 0) { ?>
                            <?php echo date('Y-m-d H:i:s', time() + $cache['ttl']) ?>まで
                        <?php } else { ?>
                            無期限
                        <?php } ?>
                        =>
                        <?php var_export($cache['value']) ?>
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
