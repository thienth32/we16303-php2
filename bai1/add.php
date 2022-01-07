<?php

$connect = new PDO("mysql:host=127.0.0.1;dbname=we16303-php2;charset=utf8", "root", "12345678");
$sql = "select * from users";
$stmt = $connect->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<form action="save-add.php">
    <div>
        <label for="">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="">Author</label>
        <select name="author_id" >
            <?php foreach($users as $u): ?>
                <option value="<?= $u['id']?>"><?= $u['name']?></option>
            <?php endforeach?>
        </select>
    </div>
    <div>
        <button type="submit">Save</button>
    </div>
</form>