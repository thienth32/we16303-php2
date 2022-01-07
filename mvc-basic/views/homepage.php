<h2>Xin chào <?= $title ?></h2>
<ul>
    <?php foreach($users as $u): ?>
        <li><?= $u['name'] ?></li>
    <?php endforeach?>
</ul>