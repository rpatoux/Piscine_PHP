#!/usr/bin/php
<?php
function ft_is_sort($array)
{
    $count = count($array);
    $arr = $array;
    sort($array);
    $i = 0;
    while($i != $count)
    {
        if ($array[$i] != $arr[$i])
            return (1);
        else
            return (0);
        $i++;
    }
}
?>