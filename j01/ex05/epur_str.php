#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $tab = trim($argv[1]);
        while (strstr($tab, "  "))
            $tab = str_ireplace("  ", " ", $tab);
        $explode = explode(" ", $tab);
        $i = 0;
        foreach($explode as $value)
        {
            echo "$value";
            if ($i < count($explode) - 1)
                echo " ";
            else
                echo "\n";
            $i++;
        }
    }
?>