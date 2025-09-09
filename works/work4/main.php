<?php

// Userクラスの読み込み
require 'User.php';

$mainUser = new User(1111, "田中", 21, "大阪市西成区",);
$subUser = new User(2222, "伊藤", 21, "東京都渋谷区",);

showUserStatus($mainUser);
showUserStatus($subUser);

$mainUser->setName("佐藤");
$mainUser->setAge(30);
$subUser->setName("伊藤");
$subUser->setAge(21);
$mainUser->getOlder();
$subUser->getOlder();
showUserStatus($mainUser);
showUserStatus($subUser);

function showUserStatus($user)
{
    echo "========ユーザー情報========" . "\n";
    echo "ID: " . $user->getId() . "\n";
    echo "名前: " . $user->getName() . "\n";
    echo "年齢: " . $user->getAge() . "\n";
    echo "住所: " . $user->getaddress() . "\n";
}
