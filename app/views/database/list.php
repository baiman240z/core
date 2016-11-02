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

<form method="post" action="" class="form-horizontal" role="form">

    <h1>
        List &amp; Pagination
        <a class="btn btn-sm btn-success" href="form">add</a>
        <a class="btn btn-sm btn-warning" href="download">download</a>
    </h1>

    <?php echo htmlspecialchars(Util::showMessage('views/parts/message.php')) ?>

    <?php include 'views/parts/pagination.php' ?>

    <table class="table table-striped table-bordered">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
        </tr>
        <?php foreach ($page['rows'] as $row) { ?>
        <tr>
            <td><a href="form?id=<?php echo htmlspecialchars($row['hoge_id']) ?>"><?php echo htmlspecialchars($row['hoge_id']) ?></a></td>
            <td><?php echo htmlspecialchars($row['title']) ?></td>
            <td><?php echo htmlspecialchars($row['created_at']) ?></td>
        </tr>
        <?php } ?>
    </table>

</div>

<?php include 'views/parts/footer.php' ?>

<script>
</script>

</body>
</html>
