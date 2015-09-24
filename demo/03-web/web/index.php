<?php
require_once __DIR__.'/../vendor/autoload.php'; 
$user_pdo = new UserPDO();
$users = $user_pdo->getAllUsers();
foreach ($users as $user) {
    echo $user->getFirstname() . "-" . $user->getLastname() . "<br/>";
}
?>