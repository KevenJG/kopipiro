<?php
session_start();

$pdo = new PDO(
    "mysql:host=localhost;dbname=kopipiro;charset=utf8mb4",
    "root", "",
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_FOUND_ROWS   => true,
    ]
);

const DISCOUNT_RATE = 0.10;                     // 10% for logged-in customers

if (file_exists(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
}
if (!defined('MIDTRANS_SERVER_KEY')) {
    define('MIDTRANS_SERVER_KEY', 'PASTE-YOUR-SANDBOX-SERVER-KEY');
}
