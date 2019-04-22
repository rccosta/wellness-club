<?php
// Configura PHP
ini_set('upload_max_filesize', '1500M');
ini_set('memory_limit', '640M');

// error_reporting(E_ALL);
// ini_set('display_errors', 'On');
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set('America/Sao_Paulo');

// Seta ABS PATH
define('_ABS_PATH', (__DIR__ . "/"));

// Carrega Parametros
// Verifica arquivo parametros e sessao atual para não haver conflito
$_SESSION['PARAMETROS'] = NULL;
if (isset($_SESSION['PARAMETROS'])) {
    $urlTest = (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['HTTP_REFERER']);
    $urlTesteResult = strpos($urlTest, $_SESSION['PARAMETROS']['PATHS']['url_sistema']);
    if ($urlTesteResult) {} else {
        if (is_numeric($urlTesteResult) && $urlTesteResult >= 0) {} else {
            session_unset();
            session_destroy();
        }
    }
}
if (! isset($_SESSION['PARAMETROS'])) {
    $_SESSION['PARAMETROS'] = parse_ini_file((_ABS_PATH . "parametros.ini"), true);
}
// Define versão e URL de acesso ao sistema
if (isset($_SERVER['HTTP_HOST'])) {
    $actual_link = ((isset($_SERVER['HTTPS']) ? "https" : "http")) . "://" . $_SERVER['HTTP_HOST'] . $_SESSION['PARAMETROS']['PATHS']['url_sistema'];
    define('_URL_SISTEMA', $actual_link);
}
define('_VERSAO', $_SESSION['PARAMETROS']['VERSAO']['atual']);

// Cria Autoload
require_once (_ABS_PATH . 'src/util/FileUtil.php');

function application_autoloader($class)
{
    $cacheName = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? "classpaths_win.cache" : "classpaths_mac.cache");
    $class = $class;
    $class_filename = $class . '.class' . '.php';
    $cache_file = (_ABS_PATH . '/cache/' . $cacheName);
    $path_cache = (file_exists($cache_file)) ? unserialize(file_get_contents($cache_file)) : array();
    if (! is_array($path_cache)) {
        $path_cache = array();
    }

    if (array_key_exists($class, $path_cache)) {
        if (file_exists($path_cache[$class])) {
            require_once $path_cache[$class];
        }
    } else {
        $directories = listFiles((_ABS_PATH . "src/"));
        foreach ($directories as $controller) {
            if (stripos($controller, '.class.php')) {
                $tmp = explode('/', $controller);
                if (end($tmp) == $class_filename) {
                    $path_cache[$class] = $controller;
                    require_once $controller;
                    break;
                }
            }
        }
    }
    $serialized_paths = serialize($path_cache);
    if ($serialized_paths != $path_cache) {
        file_put_contents($cache_file, $serialized_paths);
    }
}
spl_autoload_register('application_autoloader');

// Cria Autoload composer
require_once _ABS_PATH . 'vendor/autoload.php';

// TESTES
$_SESSION['INDEX_USUARIO'] = NULL;
if (! isset($_SESSION['INDEX_USUARIO'])) {
    $pdo = Database::getInstance();
    $dao = Dao::getInstance($pdo, null);
    $_SESSION['INDEX_USUARIO'] = $dao->getSQLGeneric('SELECT * FROM usuario WHERE cod = 1', NULL, FALSE);
    $_SESSION['INDEX_USUARIO_META'] = $dao->getSQLGeneric('SELECT * FROM usuario_meta WHERE cUsuario = 1', NULL, FALSE);
    $pdo = NULL;
    $dao = NULL;
}

// Verifica segurança da pagina
if (isset($_SERVER['REQUEST_METHOD'])) {
    $url = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $url = (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $_SERVER['REQUEST_URI']);
    } else {
        $url = (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['HTTP_REFERER']);
    }
    if (! strpos($url, '/login') && ! strpos($url, '/recuperaSenha')) {
        if (isset($_SESSION['INDEX_USUARIO'])) {
            // continua navegacao
        } else {
            $token = base64_encode('notify|info|Voce nao esta conectado, efetue o login para continuar!');
            header('Location: ' . _URL_SISTEMA . 'login?token=' . $token);
        }
    }
}
?>