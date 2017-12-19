#!/usr/bin/php
<?php
    $file = file_get_contents($argv[1]);
    preg_match_all('/<a(.*?)<\/a>/', $file, $res);
    $i = 0;
    while ($i < count($res[0]))
    {
        preg_match_all('/>(.*?)</', $res[0][$i], $title);
        $j = 0;
        while ($j < count($title[1]))
        {
            $file = str_replace($title[1][$j], strtoupper($title[1][$j]), $file);
            $j++;
        }
        $i++;
    }
    $i = 0;
    while ($i < count($res[1]))
    {
        preg_match_all('/"(.*?)"/', $res[1][$i], $title);
        $j = 0;
        while ($j < count($title[1]))
        {
            $file = str_replace($title[1][$j], strtoupper($title[1][$j]), $file);
            $j++;
        }
        $i++;
    }
    echo($file);
?> 