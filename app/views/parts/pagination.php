<?php

use core\Request;

$url = preg_replace('/\?.*$/', '', Request::server('REQUEST_URI'));
$params = Request::get();
unset($params['page']);
$query = count($params) ? ('&amp;' . http_build_query($params, '', '&amp;')) : '';
?>

<div class="pagination-header">
    <?php echo $page['total'] ?>件中
    <?php echo $page['start'] ?>件
    ～
    <?php echo $page['end'] ?>件表示
</div>

<nav>
    <ul class="pagination">
        <?php if ($page['page']['prev']) { ?>
            <li class="page-item">
                <a href="<?php echo $url ?>?page=<?php echo $page['page']['prev'] ?><?php echo $query ?>"
                   aria-label="Previous" class="page-link">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="page-item">
                <span class="page-link" aria-hidden="true">&laquo;</span>
            </li>
        <?php } ?>

        <?php foreach ($page['page']['links'] as $link) { ?>
            <?php if ($link['current']) { ?>
                <li class="page-item active"><a href="#" class="page-link"><?php echo $link['number'] ?> <span class="sr-only">(current)</span></a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a href="<?php echo $url ?>?page=<?php echo $link['number'] ?><?php echo $query ?>" class="page-link"><?php echo $link['number'] ?></a>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if ($page['page']['next']) { ?>
            <li class="page-item">
                <a href="<?php echo $url ?>?page=<?php echo $page['page']['next'] ?><?php echo $query ?>"
                   aria-label="Next" class="page-link">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="page-item">
                <span aria-hidden="true" class="page-link">&raquo;</span>
            </li>
        <?php } ?>
    </ul>
</nav>
