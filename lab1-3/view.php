<?php if(isset($user) && count($user) > 0):?>
    <h2>Email: <?= $user['firstname'] . " " .$user['lastname']?></h2>
<?php endif?>
<form action="" method="post">
    <input type="text" name="email">
    <button type="submit">Search</button>
</form>