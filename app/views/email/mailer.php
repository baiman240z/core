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

    <form id="email-form" method="post" action="" class="form-horizontal" role="form">

        <h1>e-Mail</h1>

        <div class="card">
            <div class="card-body">

                <div class="form-group">
                    <label for="sender">from</label>
                    <input type="text" class="form-control" name="sender" placeholder="hoge@hoge.com" validation="require"
                           value="<?php echo htmlspecialchars(Request::post('sender')) ?>">
                </div>
                <div class="form-group">
                    <label for="receiptto">reciept to</label>
                    <input type="text" class="form-control" name="receiptto" placeholder="hoge@hoge.com" validation="require"
                           value="<?php echo htmlspecialchars(Request::post('receiptto')) ?>">
                </div>
                <div class="form-group">
                    <label for="subject">subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="件名" validation="require"
                           value="<?php echo htmlspecialchars(Request::post('subject')) ?>">
                </div>
                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" rows="5" name="body" validation="require"
                              placeholder="本文"><?php echo htmlspecialchars(Request::post('body')) ?></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Send">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>

            </div>
        </div>

    </form>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
    $(function () {
        Validation.init('#email-form');
    });
</script>

</body>
</html>
