<?php

class MessageUtil
{

    public static $_TIPO_MODAL_NONE = "none";

    public static $_TIPO_MODAL_SWAL = "swal";

    public static $_TIPO_MODAL_NOTIFY = "notify";

    public static $_TIPO_MSG_INFO = "info";

    public static $_TIPO_MSG_ERROR = "error";

    public static $_TIPO_MSG_SUCCESS = "success";

    public static $_TIPO_MSG_WARNING = "warning";

    public static function getMessageJSON($error, $tipoModal, $tipoMsg, $msg, $arrayMsgAdicional = null)
    {
        $arrayMsg = array(
            'tipoModal' => $tipoModal,
            'error' => $error,
            'tipoMsg' => $tipoMsg,
            'msg' => $msg
        );
        if ($arrayMsgAdicional != null) {
            $arrayMsg = array_merge($arrayMsg, $arrayMsgAdicional);
        }
        return json_encode($arrayMsg);
    }

    public static function getMessageDefault($arrayMsgAdicional = null)
    {
        return MessageUtil::getMessageJSON(false, MessageUtil::$_TIPO_MODAL_NONE, MessageUtil::$_TIPO_MSG_SUCCESS, "Ação Efetuada!", $arrayMsgAdicional);
    }

    /* NOTIFY */
    public static function getMessageNotifySuccess($message, $arrayMsgAdicional = null)
    {
        return MessageUtil::getMessageJSON(false, MessageUtil::$_TIPO_MODAL_NOTIFY, MessageUtil::$_TIPO_MSG_SUCCESS, $message, $arrayMsgAdicional);
    }

    public static function getMessageNotifyWarning($message, $arrayMsgAdicional = null)
    {
        return MessageUtil::getMessageJSON(false, MessageUtil::$_TIPO_MODAL_NOTIFY, MessageUtil::$_TIPO_MSG_WARNING, $message, $arrayMsgAdicional);
    }

    /* SWAL */
    public static function getMessageSwalSuccess($message, $arrayMsgAdicional = null)
    {
        return MessageUtil::getMessageJSON(false, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_SUCCESS, $message, $arrayMsgAdicional);
    }

    public static function getMessageSwalWarning($message, $arrayMsgAdicional = null)
    {
        return MessageUtil::getMessageJSON(false, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_WARNING, $message, $arrayMsgAdicional);
    }

    public static function getMessageSwalError($message, $arrayMsgAdicional = null)
    {
        return MessageUtil::getMessageJSON(true, MessageUtil::$_TIPO_MODAL_SWAL, MessageUtil::$_TIPO_MSG_ERROR, $message, $arrayMsgAdicional);
    }
}
?>