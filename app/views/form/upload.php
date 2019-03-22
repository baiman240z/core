<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php include 'views/parts/head.php' ?>
</head>
<body>
<?php include 'views/parts/navi.php' ?>

<div class="container">
    <h1>File upload</h1>

    <div class="panel panel-default">
        <div class="panel-heading">Select</div>
        <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="">
                <input type="file" name="file" class="hide">
                <div class="row text-center">
                    <span id="filename" class="text-info"></span>
                    <button type="button" class="btn btn-default btn-sm" name="file-btn"><i class="glyphicon glyphicon-file icon-white"></i> File</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-upload icon-white"></i> upload</button>
                </div>
            </form>
        </div>
    </div>

    <?php if (isset($file)) { ?>
        <div class="panel panel-default">
            <div class="panel-heading">File</div>
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-md-8">
                        <div class="input-group">
                            <div class="input-group-addon">Name</div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($file['name']) ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <div class="input-group-addon">Size</div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($file['size']) ?>">
                            <div class="input-group-addon">Bytes</div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon">Type</div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($file['type']) ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon">SHA256</div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($sha256) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
    $(function() {
        $('input[name=file]').on('change', function()
        {
            if (this.files.length > 0) {
                $('#filename').text(this.files[0].name + ':');
            }
        });

        $('button[name=file-btn]').on('click', function() {
            $('input[name=file]').trigger('click');
        });
    });
</script>

</body>
</html>
