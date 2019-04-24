<?php
header('Content-Type: application/json');
session_start();
require_once '../../Config.php';
try {
    $class = null;
    $object = null;
    $method = null;
    if (isset($_POST["dataPost"])) {
        $dataPost = json_decode($_POST["dataPost"]);
        if ($dataPost->classe == null && empty($dataPost->classe)) {
            throw new Exception("parametro classe não encontrado no objeto dataPost");
        }
        if ($dataPost->metodo == null && empty($dataPost->metodo)) {
            throw new Exception("parametro metodo não encontrado no objeto dataPost");
        }
        $class = $dataPost->classe;
        $method = $dataPost->metodo;
    } else {
        $class = $_POST['classe'];
        $method = $_POST['metodo'];
    }
    $object = new $class();
    echo $object->$method();
} catch (Exception $e) {
    throw $e;
}
?>