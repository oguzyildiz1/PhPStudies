<?php
if (isset($_GET)) {
    print_r($_GET);
}

$users = ["Orhan", "anne", "Oğuzhan"];
$user = "Hello";

?>






<div class="info">
    <h3><?= $users[0] ?></h3>
    <img src=<?= "user 1 photo" ?> alt="user1 photo" />

    <p id="user1">
        <?= "user 1 contact info" ?>
    </p>
</div>

<div class="info">
    <h3><?= $users[1] ?></h3>
    <img src=<?= "user 1 photo" ?> alt="user1 photo" />

    <p id="user1">
        <?= "user 1 contact info" ?>
    </p>
</div>

<div class="info">
    <h3><?= $users[2] ?></h3>
    <img src=<?= "user 1 photo" ?> alt="user1 photo" />

    <p id="user1">
        <?= "user 1 contact info" ?>
    </p>
</div>