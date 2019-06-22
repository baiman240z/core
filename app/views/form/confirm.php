<?php
use core\Config;
use core\Request;
use core\Util;

$selections = Config::get('selections')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php include 'views/parts/head.php' ?>
</head>
<body>
<?php include 'views/parts/navi.php' ?>

<div class="container">
    <h1>Input confirm</h1>

    <div class="card">
        <div class="card-body">
            <form method="post" action="complete">
                <?php Util::hidden(Request::post()) ?>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="text">Text</label>
                        <div class="list-group-item">
                            <?php echo htmlspecialchars($form['text']) ?>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="text">TextArea</label>
                        <div class="list-group-item">
                            <?php echo nl2br(htmlspecialchars($form['textarea'])) ?>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="">Select</label>
                        <div class="list-group-item">
                            <?php if ($form['select']) { ?>
                                <?php echo htmlspecialchars($selections[$form['select']]) ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label>Radio</label>
                        <div class="list-group-item">
                            <?php if ($form['radio']) { ?>
                                <?php echo htmlspecialchars($selections[$form['radio']]) ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label>Checkbox</label>
                        <ul class="list-group">
                            <?php foreach ($form['checkbox'] as $code) { ?>
                                <li class="list-group-item"><?php echo htmlspecialchars($selections[$code]) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-sm btn-warning" name="back-btn">Back</button>
                    <button type="submit" class="btn btn-sm btn-primary">OK</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
    $(function() {
        $('button[name=back-btn]').on('click', function () {
            $('form[action=complete]').attr('action', 'input').submit();
        });
    });
</script>

</body>
</html>
