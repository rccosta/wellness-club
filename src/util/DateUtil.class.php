
<?php

class DateUtil
{

    public static function parseTime($value, $compacto = FALSE)
    {
        if ($compacto) {
            if (preg_match("/([0-9]{2}:/([0-9]{2}", $value) > 0) {
                return $value;
            } else {
                return date('H:i', strtotime($value));
            }
        } else {
            if (preg_match("/([0-9]{2}:/([0-9]{2}:/([0-9]{2}", $value) > 0) {
                return date('H:i:s', strtotime($value));
            }
        }
    }

    public static function parseDatetime($value)
    {
        if (preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/([0-9]{2}:/([0-9]{2}:/([0-9]{2}", $value) > 0) {
            return $value;
        }
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public static function parse($value)
    {
        if (DateUtil::isDate($value)) {
            return $value;
        }
        return date('d/m/Y', strtotime($value));
    }

    public static function parseDiaMes($value)
    {
        if (DateUtil::isDate($value)) {
            return $value;
        }
        return date('d/m', strtotime($value));
    }

    public static function parseMesAno($value)
    {
        if (DateUtil::isDate($value)) {
            return $value;
        }
        return date('m/Y', strtotime($value));
    }

    public static function parseSQL($value)
    {
        if (DateUtil::isDateSQL($value)) {
            return $value;
        } else {
            return DateTime::createFromFormat('d/m/Y', $value)->format('Y-m-d');
        }
    }

    public static function parseDatetimeSQL($value, $noSeconds = FALSE)
    {
        return DateTime::createFromFormat(('d/m/Y H:i' . ($noSeconds ? '' : ':s')), $value)->format(('Y-m-d H:i' . ($noSeconds ? '' : ':s')));
    }

    public static function parseATOMSQL($value)
    {
        return DateTime::createFromFormat('Y-m-d\TH:i:sP', $value)->format('Y-m-d H:i:s');
    }

    public static function parseATOMDate($value)
    {
        return DateTime::createFromFormat('Y-m-d\TH:i:sP', $value)->format('d/m/Y');
    }

    public static function agoraTimeStamp()
    {
        return date("Y-m-d H:i:s");
    }

    public static function agora()
    {
        return date("Y-m-d");
    }

    public static function agoraTime($compacto = false)
    {
        if ($compacto) {
            return date("H:i");
        } else {
            return date("H:i:s");
        }
    }

    public static function diferencaDatas($date1, $date2)
    {
        $date1 = date_create($date1);
        $date2 = date_create($date2);
        $diff = date_diff($date1, $date2);
        return $diff;
    }

    public static function isDate($value)
    {
        if (strlen($value) == 10 && preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $value) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function isDateSQL($value)
    {
        if (strlen($value) == 10 && preg_match("/([0-9]{4})-([0-9]{2})-([0-9]{2})/", $value) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>