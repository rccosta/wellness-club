<?php

function listFiles($from = '.')
{
    if (! is_dir($from))
        return false;
    $files = array();
    $dirs = array(
        $from
    );
    while (NULL !== ($dir = array_pop($dirs))) {
        if ($dh = opendir($dir)) {
            while (false !== ($file = readdir($dh))) {
                if ($file == '.' || $file == '..')
                    continue;
                $path = $dir . '/' . $file;
                if (is_dir($path))
                    $dirs[] = $path;
                else
                    $files[] = $path;
            }
            closedir($dh);
        }
    }
    return $files;
}