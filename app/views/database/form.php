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

    <h1>Form</h1>

    <form method="post" action="confirm" role="form">
        <input type="hidden" name="hoge_id" value="<?php echo htmlspecialchars($form['hoge_id']) ?>">

        <?php echo Util::getMessage('success') ?>
        <?php echo Util::getMessage('error') ?>

        <div class="card">
            <div class="card-body">

                <?php if ($form['hoge_id']) { ?>
                    <div class="form-group">
                        <label for="enc">id</label>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($form['hoge_id']) ?>"
                               readonly>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" name="title" placeholder="title"
                           value="<?php echo htmlspecialchars($form['title']) ?>">
                </div>
                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" rows="5" name="body"
                              placeholder="body"><?php echo htmlspecialchars($form['body']) ?></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-primary">Check</button>
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
