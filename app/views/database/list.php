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

    <h1>
        Database
        <a class="btn btn-sm btn-success" href="form"><i class="fas fa-plus"></i></a>
        <a class="btn btn-sm btn-warning" href="download"><i class="fas fa-download"></i></a>
    </h1>

    <?php echo Util::showMessage('success') ?>
    <?php echo Util::showMessage('error') ?>

    <?php include 'views/parts/pagination.php' ?>

    <table class="table table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>updated_at</th>
            <th></th>
        </tr>
        <?php foreach ($page['rows'] as $row) { ?>
        <tr data-id="<?php echo htmlspecialchars($row['hoge_id']) ?>">
            <td><a href="form?id=<?php echo htmlspecialchars($row['hoge_id']) ?>"><?php echo htmlspecialchars($row['hoge_id']) ?></a></td>
            <td><?php echo htmlspecialchars($row['title']) ?></td>
            <td><?php echo htmlspecialchars($row['updated_at']) ?></td>
            <td class="text-center">
                <button type="button" class="btn btn-sm btn-danger" name="delete-btn">
                    Delete
                </button>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

<form action="delete" method="post">
    <input type="hidden" name="id" value="">
</form>

<?php include 'views/parts/footer.php' ?>

<script>
    $(function () {
        $('button[name=delete-btn]').on('click', function () {
            if (!confirm('are you sure?')) { return false; }
            var id = $(this).closest('tr').attr('data-id');
            var form = $('form[action=delete]');
            form.find('input[name=id]').val(id);
            form.submit();
        });
    });
</script>

</body>
</html>
