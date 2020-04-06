<?php foreach ($messages as $message) { ?>
    <div class="toast shadow" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-danger">
            <strong class="mr-auto text-white">通知</strong>
            <small class="text-light"><?php echo date('H:i') ?></small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <?php echo htmlspecialchars($message) ?>
        </div>
    </div>
<?php } ?>
