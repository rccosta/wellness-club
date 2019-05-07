
<?php

class LoginService
{

    public function onLogin()
    {
        $pdo = null;
        $dao = null;
        try {
            $pdo = Database::getInstance();
            $dao = Dao::getInstance($pdo, null);

            $dataPost = json_decode($_POST["dataPost"]);

            // Inicia variaveis
            $_SESSION['INDEX_USUARIO'] = null;

            // Verifica usuario e senha
            $postXUsuario = $dataPost->data->xEmail;
            $postXSenha = $dataPost->data->xSenha;

            $usuario = $dao->getSQLGeneric('SELECT u.* FROM usuario u WHERE u.xEmail = ? AND u.xSenha = ?', array(
                $postXUsuario,
                $postXSenha
            ), FALSE);
            if (empty($usuario)) {
                return MessageUtil::getMessageSwalError('Usuario/Senha incorretos.');
            } else {
                // Remove senha para não ficar setada na sessão
                $usuario->xSenha = null;
                $_SESSION['INDEX_USUARIO'] = $usuario;
                $_SESSION['INDEX_USUARIO_META'] = $dao->getSQLGeneric('SELECT * FROM usuario_meta WHERE cUsuario = ?', array(
                    $usuario->cod
                ), FALSE);

                return MessageUtil::getMessageDefault(array(
                    'isConfigurado' => $usuario->isConfigurado
                ));
            }
        } catch (Exception $e) {
            throw $e;
        } finally {
            $pdo = null;
            $dao = null;
        }
    }
}
?>