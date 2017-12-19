#!/usr/bin/php
<?PHP
    if ($argc > 1)
    {
        $arg[1] = $argv[1];
        $ar[1] = trim($arg[1]);
        $ar[1] = preg_replace('/\t+/', ' ', $ar[1]);
        $ar[1] = preg_replace('/\s+/', ' ', $ar[1]); //caractere blanc
        echo "$ar[1]\n";
    }
?>