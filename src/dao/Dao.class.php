<?php

class Dao
{

    private $pdo = null;

    private $tabela = null;

    private static $dao = null;

    private function __construct($conexao, $tabela = NULL)
    {
        if (! empty($conexao)) {
            $this->pdo = $conexao;
        } else {
            throw new Exception("Conexão inexistente!");
        }
        if (! empty($tabela)) {
            $this->tabela = $tabela;
        }
    }

    public static function getInstance($conexao, $tabela = NULL)
    {
        if (! isset(self::$dao) || self::$dao->pdo != $conexao) {
            try {
                self::$dao = new Dao($conexao, $tabela);
            } catch (Exception $e) {
                throw $e;
            }
        }
        return self::$dao;
    }

    public function setTableName($tabela)
    {
        if (! empty($tabela)) {
            $this->tabela = $tabela;
        }
    }

    private function buildInsert($arrayDados)
    {
        $sql = "";
        $campos = "";
        $valores = "";

        foreach ($arrayDados as $chave => $valor) {
            if ($valor == null) {}
            $campos .= $chave . ', ';
            $valores .= '?, ';
        }

        $campos = (substr($campos, - 2) == ', ') ? trim(substr($campos, 0, (strlen($campos) - 2))) : $campos;

        $valores = (substr($valores, - 2) == ', ') ? trim(substr($valores, 0, (strlen($valores) - 2))) : $valores;

        $sql .= "INSERT INTO {$this->tabela} (" . $campos . ")VALUES(" . $valores . ")";

        return trim($sql);
    }

    private function buildUpdate($arrayDados, $arrayCondicao)
    {
        $sql = "";
        $valCampos = "";
        $valCondicao = "";

        foreach ($arrayDados as $chave => $valor) {
            if ($valor == null) {}
            $valCampos .= $chave . '=?, ';
        }

        foreach ($arrayCondicao as $chave => $valor) {
            $valCondicao .= $chave . '? AND ';
        }

        $valCampos = (substr($valCampos, - 2) == ', ') ? trim(substr($valCampos, 0, (strlen($valCampos) - 2))) : $valCampos;

        $valCondicao = (substr($valCondicao, - 4) == 'AND ') ? trim(substr($valCondicao, 0, (strlen($valCondicao) - 4))) : $valCondicao;

        $sql .= "UPDATE {$this->tabela} SET " . $valCampos . " WHERE " . $valCondicao;

        return trim($sql);
    }

    private function buildDelete($arrayCondicao)
    {
        $sql = "";
        $valCampos = "";

        foreach ($arrayCondicao as $chave => $valor) {
            if ($valor == null) {}
            $valCampos .= $chave . '? AND ';
        }

        $valCampos = (substr($valCampos, - 4) == 'AND ') ? trim(substr($valCampos, 0, (strlen($valCampos) - 4))) : $valCampos;

        $sql .= "DELETE FROM {$this->tabela} WHERE " . $valCampos;

        return trim($sql);
    }

    public function insert($arrayDados)
    {
        try {
            $sql = $this->buildInsert($arrayDados);

            $stm = $this->pdo->prepare($sql);

            $cont = 1;
            foreach ($arrayDados as $valor) {
                if (preg_match("/^[\-+]?[0-9]*\.?[0-9]*\.?[0-9]*\,?[0-9]+$/", $valor) > 0) {
                    $valor = NumberUtil::parseSQL($valor);
                } else if (DateUtil::isDate($valor)) {
                    $valor = DateUtil::parseSQL($valor);
                }
                $stm->bindValue($cont, $valor);
                $cont ++;
            }

            $retorno = $stm->execute();
            if (! $retorno) {
                throw new Exception("Erro ao executar insert");
            }

            return $retorno;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function update($arrayDados, $arrayCondicao)
    {
        try {
            $sql = $this->buildUpdate($arrayDados, $arrayCondicao);

            $stm = $this->pdo->prepare($sql);

            $cont = 1;
            foreach ($arrayDados as $valor) {
                if (preg_match("/^[\-+]?[0-9]*\.?[0-9]*\.?[0-9]*\,?[0-9]+$/", $valor) > 0) {
                    $valor = NumberUtil::parseSQL($valor);
                } else if (DateUtil::isDate($valor)) {
                    $valor = DateUtil::parseSQL($valor);
                }
                $stm->bindValue($cont, $valor);
                $cont ++;
            }

            foreach ($arrayCondicao as $valor) {
                $stm->bindValue($cont, $valor);
                $cont ++;
            }

            $retorno = $stm->execute();
            if (! $retorno) {
                throw new Exception("Erro ao executar update");
            }

            return $retorno;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function delete($arrayCondicao)
    {
        try {
            $sql = $this->buildDelete($arrayCondicao);

            $stm = $this->pdo->prepare($sql);

            $cont = 1;
            foreach ($arrayCondicao as $valor) {
                $stm->bindValue($cont, $valor);
                $cont ++;
            }

            $retorno = $stm->execute();
            if (! $retorno) {
                throw new Exception("Erro ao executar delete");
            }

            return $retorno;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function getSQLGeneric($sql, $arrayParams = null, $fetchAll = TRUE)
    {
        try {
            $stm = $this->pdo->prepare($sql);

            if (! empty($arrayParams)) {

                $cont = 1;
                foreach ($arrayParams as $valor) {
                    $stm->bindValue($cont, $valor);
                    $cont ++;
                }
            }

            $stm->execute();

            if ($fetchAll) :
                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            else :
                $dados = $stm->fetch(PDO::FETCH_OBJ);
            endif;

            return $dados;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function loadGeneric($tabela, $cod, $codColumn = "cod")
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM  {$tabela} WHERE {$codColumn} ={$cod}");
            $stm->execute();
            $dados = $stm->fetch(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function loadCustom($sql, $cod)
    {
        try {
            $sql = str_replace('$cod', $cod, $sql);
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetch(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function execute($sql)
    {
        try {
            $stm = $this->pdo->prepare($sql);

            $retorno = $stm->execute();
            if (! $retorno) {
                throw new Exception("Erro ao executar execute");
            }
            return $retorno;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function getProxCod($xNome)
    {
        try {
            $stm = $this->pdo->prepare("SELECT fn_getProxCod('" . $xNome . "') as cod");
            $stm->execute();
            $dados = $stm->fetch(PDO::FETCH_OBJ);
            $cod = $dados->cod;
            if ($cod == null || empty($cod) || $cod == '0') {
                throw new Exception("Erro ao gerar sequencia");
            }
            return $cod;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}  