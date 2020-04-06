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

<h1>Session</h1>

<form method="post" action="" role="form">
    <div class="card">
        <div class="card-header">save</div>
        <div class="card-body row">
            <div class="form-group col-md-6">
                <label for="key">key</label>
                <input type="text" class="form-control" name="key" value="<?php echo htmlspecialchars(Request::post('key')) ?>" size="10">
            </div>
            <div class="form-group col-md-6">
                <label for="value">value</label>
                <input type="text" class="form-control" name="value" value="<?php echo htmlspecialchars(Request::post('value')) ?>" size="20">
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>

<form id="delete-form" method="post" action="delete" role="form">
    <input type="hidden" name="key" value="">
    <div class="card mt-5">
        <div class="card-header">saved</div>
        <div class="card-body">
            <ul class="list-group">
                <?php foreach ($allSessions as $key => $val) { ?>
                <li class="list-group-item" data-key="<?php echo htmlspecialchars($key) ?>">
                        <button type="button" class="btn btn-sm btn-danger" name="delete-btn">
                            <i class="far fa-trash-alt"></i>
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
