<?php

// TODO: Przenieść dane logowania do osobnego pliku,
// TODO: na podstawie query param ?author_id wyciągnij tylko posty przypisane do konkretnego autora i wszystkie posty jeśli author id nie zostanie podane
$mysqli = new mysqli("127.0.0.1", "root", "root", "testzsbe");
$result = $mysqli->query("SELECT * FROM blog_post");
?>
<ul>
<?php foreach($result as $item): ?>
<li>
    <?php foreach($item as $key => $element): ?>
		<div><?= $key ?>: <?= $element ?> </div>
    <?php endforeach; ?>
</li>
<?php endforeach; ?>
</ul>
