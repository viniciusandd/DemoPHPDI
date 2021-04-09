<ul>
<?php foreach ($books as $book) { ?>
    <li>
        <strong><?= $book['id'] ?></strong> | <?= $book['name'] ?> | <?= $book['author'] ?>
    </li>
<?php } ?>
</ul>