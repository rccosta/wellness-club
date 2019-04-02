<?php

class NumberUtil
{

    public static function parseSQL($valor)
    {
        if (! is_numeric($valor)) {
            return str_replace(",", ".", str_replace(".", "", $valor));
        }
        return $valor;
    }

    public static function parseSQLDecimal($valor, $decimal = 2)
    {
        if (! is_numeric($valor)) {
            $valor = str_replace(",", ".", str_replace(".", "", $valor));
        }
        return number_format($valor, $decimal, ".", "");
    }

    public static function parse($valor, $decimal = 2)
    {
        if (is_numeric($valor)) {
            $valor = number_format($valor, $decimal, ",", ".");
        }
        return $valor;
    }
}
?>