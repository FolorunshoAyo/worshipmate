<?php

require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/controllers/SendEmailController.php';
require_once dirname(__DIR__) . '/helpers/utility_functions.php';

class Database
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $pdo;

    public function __construct($host, $username, $password, $dbname)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->connect();
    }

    private function connect()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new Exception("Database Connection Error: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}

$database = new Database($db_host, $db_username, $db_password, $db_name);
$dbConnection = $database->getConnection();
?>