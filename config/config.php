<?php
session_start();
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Load dotenv
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$db_host = $_ENV['DB_HOST'];
$db_username = $_ENV['DB_USERNAME'];
$db_name = $_ENV['DB_NAME'];
$db_password = $_ENV['DB_PASSWORD'];

$base_url = $_ENV['BASE_URL'];
$admin_url = $_ENV['ADMIN_URL'];
$uploads_dir = $_ENV['UPLOADS_DIR'];

?>