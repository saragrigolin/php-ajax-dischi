<?php
include __DIR__ . '/../server/db.php';
?>
    <?php foreach ($cards as $card) { ?>
    <div class="col">
        <div class="spotify-card p-3">
            <img class="pb-3" src="<?= $card['poster']?>" alt="<?= $card['title']?>">
            <span class="title pb-1"><?= $card['title']?></span>
            <span class="subtitle"><?= $card['author']?></span>
            <span class="year"><?= $card['year']?></span>
        </div>
    </div>
    <?php } ?>