<div class="alert alert-danger alert-dismissible" role="alert">
    <?php foreach ($messages as $message) { ?>
        <div><?php echo htmlspecialchars($message) ?></div>
    <?php } ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
