<?php
session_name('player');
session_start([
    'cookie_lifetime' => 10,
]);
$_SESSION['name'] = 'Alex';
echo $_SESSION['name'];

// $_SESSION['counter'] = 'Asif';
// echo $_SESSION['name'];

// $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
// $_SESSION['counter']++;
// echo $_SESSION['counter'];
// // session_destroy();


