<?php

class ExceptionUtil
{

    public static function verificaExcessao($e)
    {
        if ($e instanceof CRUDException) {
            return MessageUtil::getMessageJSON(true, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_WARNING, $e->getMessage(), null);
        } else if (isset($e->errorInfo)) {
            $erroCode = $e->errorInfo[1];
            $errorMessage = $e->errorInfo[2];
            if ($erroCode == 1062) {
                return MessageUtil::getMessageJSON(true, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_ERROR, "Registro já cadastrado!<br><small>$errorMessage</small>", null);
            } else if ($erroCode == 1406) {
                return MessageUtil::getMessageJSON(true, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_ERROR, "Limite de campo excedido!<br><small>$errorMessage</small>", null);
            } else if ($erroCode == 1451) {
                return MessageUtil::getMessageJSON(true, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_ERROR, "Este registro esta lincado com outro é impossive deletar!<br><small>$errorMessage</small>", null);
            } else {
                throw $e;
            }
        } else {
            throw $e;
        }
    }
}