<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "testzsbe");
$result = $mysqli->query("SELECT * FROM blog_post");

foreach($result as $item): ?>
<?php foreach($item as $key => $element): ?>
        <div><?= $key ?>: <?= $element ?> </div>
    <?php endforeach; ?>
<?php endforeach;
