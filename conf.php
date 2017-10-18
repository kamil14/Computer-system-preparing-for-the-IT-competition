<?php
$config['db_host'] = 'localhost'; // Serwer bazy danych
$config['db_user'] = 'root'; // Nazwa użytkownika
$config['db_pass'] = ''; // Hasło
$config['db_name'] = 'baza1'; // Nazwa bazy danych
error_reporting(E_ALL & ~E_NOTICE);

$db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
$db->set_charset("utf8");

if ($db->errno) {
    die ('<p class="error">Nie udało się połączyć z bazą danych.</p>');
}

session_start();

require 'password.php';
require 'User.php';

$user = new User($db);