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

    <div class="card">
        <div class="card-header">Select</div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="">
                <div class="row">
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file">
                            <label class="custom-file-label" for="customFile" id="filename">Choose file</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="center">
                            <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Upload"><i class="fas fa-upload"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if (isset($file)) { ?>
        <div class="card mt-5">
            <div class="card-header">File</div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Name</div>
                            </div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($file['name']) ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Size</div>
                            </div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($file['size']) ?>">
                            <div class="input-group-append">
                                <span class="input-group-text">Bytes</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Type</div>
                            </div>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($file['type']) ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">SHA256</div>
                            </div>
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
                $('#filename').text(this.files[0].name);
            }
        });
    });
</script>

</body>
</html>
