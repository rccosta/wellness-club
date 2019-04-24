 <?php
define('HOST', $_SESSION['PARAMETROS']['DATA_BASE']['host']);
define('DBNAME', $_SESSION['PARAMETROS']['DATA_BASE']['dbname']);
define('CHARSET', $_SESSION['PARAMETROS']['DATA_BASE']['charset']);
define('USER', $_SESSION['PARAMETROS']['DATA_BASE']['usuario']);
define('PASSWORD', $_SESSION['PARAMETROS']['DATA_BASE']['senha']);

class Database
{

    private static $pdo;

    private static $pdoWRed;

    private function __construct()
    {}

    public static function getInstance()
    {
        if (! isset(self::$pdo)) {
            $opcoes = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_PERSISTENT => TRUE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => TRUE
            );
            try {
                self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);
            } catch (PDOException $e) {
                throw $e;
            }
        }
        return self::$pdo;
    }
}