<!-- edit-user.php -->
<?php

include "../classes/User.php";

// CREATE AN OBJECT
$user = new User;

// CALL THE METHOD
$user->update($_POST, $_FILES);
