<?php

class PrimeiroAcessoService
{

    public static function onConfirmar()
    {
        $pdo = null;
        $dao = null;
        try {
            $dataPost = json_decode($_POST['dataPost']);
            $pdo = Database::getInstance();
            $dao = Dao::getInstance($pdo, 'usuario');
            $pdo->beginTransaction();

            $usuario = $_SESSION['INDEX_USUARIO'];
            $usuario->xInteresseDieta = json_encode($dataPost->data->xInteresseDieta);
            $usuario->xInteresseTreino = json_encode($dataPost->data->xInteresseTreino);
            $usuario->xInteresseCoach = json_encode($dataPost->data->xInteresseCoach);
            $usuario->xInteresseSuplementacao = json_encode($dataPost->data->xInteresseSuplementacao);
            $usuario->isConfigurado = 'S';
            $usuario->xAnamnese = json_encode($dataPost->data->xAnamnese);

            $usuarioMeta = new stdClass();
            $usuarioMeta->cod = $dao->getProxCod('usuario_meta');
            $usuarioMeta->cUsuario = $usuario->cod;
            $usuarioMeta->vPesoInicial = $dataPost->data->vPesoInicial;
            $usuarioMeta->vPesoDesejado = $dataPost->data->vPesoDesejado;
            $usuarioMeta->indPrazo = $dataPost->data->indPrazo;
            $usuarioMeta->dInicio = $dataPost->data->dInicio;
            $usuarioMeta->dTermino = $dataPost->data->dInicio; // $dataPost->data->dTermino;
            $usuarioMeta->xFotoFrente = $dataPost->data->xFotoFrente;
            $usuarioMeta->xFotoPerfil = $dataPost->data->xFotoPerfil;
            $usuarioMeta->xFotoCostas = $dataPost->data->xFotoCostas;

            $dao->setTableName('usuario_meta');
            $dao->insert($usuarioMeta);

            $dao->setTableName('usuario');
            $dao->update($usuario, array(
                'cod=' => $usuario->cod
            ));

            $pdo->commit();
            // throw new CRUDException('TESTE EX');
            return MessageUtil::getMessageSwalSuccess('Suas configrações foram salvas!');
        } catch (Exception $e) {
            if ($pdo->inTransaction()) {
                $pdo->rollBack();
            }
            return ExceptionUtil::verificaExcessao($e);
        } finally {
            $pdo = null;
            $dao = null;
        }
    }
}
