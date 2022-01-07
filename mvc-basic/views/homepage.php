<h2>Xin chào <?= $title ?></h2>
<ul>
    <?php foreach($users as $u): ?>
        <li><?= $u['name'] ?></li>
    <?php endforeach?>
</ul>

<ul>
<?php foreach($posts as $p): ?>
        <li><?= $p['title'] ?></li>
    <?php endforeach?>
</ul>