<?php define('DB_HOST', 'localhost:4306');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'e-com');

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
    $con = new PDO("mysql:host=".DB_HOST.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASS, $options);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
