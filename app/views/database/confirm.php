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

    <h1>Confirm</h1>

    <form method="post" action="complete" role="form">
        <?php Util::hidden(Request::post()) ?>

        <div class="alert alert-warning alert-dismissible" role="alert">
            OK?
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="card">
            <div class="card-body">

                <?php if (Request::post('hoge_id')) { ?>
                    <div class="form-group">
                        <label for="enc">id</label>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars(Request::post('hoge_id')) ?>"
                               readonly>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" placeholder="title" readonly
                           value="<?php echo htmlspecialchars(Request::post('title')) ?>">
                </div>
                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" rows="5" readonly
                              placeholder="body"><?php echo htmlspecialchars(Request::post('body')) ?></textarea>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-sm btn-warning" name="back-btn">Back</button>
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
    $(function () {
        $('button[name=back-btn]').on('click', function () {
            $('form[action=complete]').attr('action', 'form').submit();
        });
    });
</script>

</body>
</html>
