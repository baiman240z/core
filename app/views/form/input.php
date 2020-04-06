<?php
use core\Config;
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
    <h1>Input forms</h1>

    <div class="card">
        <div class="card-body">
            <form method="post" action="confirm">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="text">Text</label>
                        <input type="text" class="form-control" name="text" value="<?php echo htmlspecialchars($form['text']) ?>">
                    </div>
                    <div class="form-group col-4">
                        <label for="text">TextArea</label>
                        <textarea name="textarea" class="form-control"><?php echo htmlspecialchars($form['textarea']) ?></textarea>
                    </div>
                    <div class="form-group col-4">
                        <label for="">Select</label>
                        <select class="form-control" name="select">
                            <option value=""></option>
                            <?php foreach ($selections as $code => $selection) { ?>
                                <option value="<?php echo htmlspecialchars($code) ?>"<?php echo $code == $form['select'] ? ' selected' : '' ?>><?php echo htmlspecialchars($selection) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label>Radio</label>
                        <div>
                            <?php foreach ($selections as $code => $selection) { ?>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="radio" id="radio-<?php echo htmlspecialchars($code) ?>" value="<?php echo htmlspecialchars($code) ?>"<?php echo $code == $form['radio'] ? ' checked' : '' ?>>
                                    <label class="form-check-label" for="radio-<?php echo htmlspecialchars($code) ?>"><?php echo htmlspecialchars($selection) ?></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label>Checkbox</label>
                        <div>
                            <?php foreach ($selections as $code => $selection) { ?>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="checkbox[]" id="checkbox-<?php echo htmlspecialchars($code) ?>" value="<?php echo htmlspecialchars($code) ?>"<?php echo in_array($code, $form['checkbox']) ? ' checked' : '' ?>>
                                    <label class="form-check-label" for="checkbox-<?php echo htmlspecialchars($code) ?>"><?php echo htmlspecialchars($selection) ?></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Send">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
    $(function() {
    });
</script>

</body>
</html>
