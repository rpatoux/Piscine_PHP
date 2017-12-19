#!/usr/bin/php
<?php
    function exit_wrong()
    {
        echo "Wrong Format\n";
        exit (0);
    }
    
    function check_month($month)
    {
        $tre = 0;
        if ($month == "Janvier" || $month == "janvier")
            $tre = 1;
        if ($month == "Fevrier" || $month == "fevrier" || $month == "Février" || $month == "février")
            $tre = 2;
        if ($month == "Mars" || $month == "mars")
            $tre = 3;
        if ($month == "Avril" || $month == "avril")
            $tre = 4;
        if ($month == "Mai" || $month == "mai")
            $tre = 5;
        if ($month == "Juin" || $month == "juin")
            $tre = 6;
        if ($month == "Juillet" || $month == "juillet")
            $tre = 7;
        if ($month == "Aout" || $month == "aout")
            $tre = 8;
        if ($month == "Septembre" || $month == "septembre")
            $tre = 9;
        if ($month == "Octobre" || $month == "octobre")
            $tre = 10;
        if ($month == "Novembre" || $month == "novembre")
            $tre = 11;      
        if ($month == "Decembre" || $month == "decembre" || $month == "Décembre" || $month == "décembre")
            $tre = 12;
        return ($tre);
    }

    function check_day($day)
    {
        $day_check = array("Lundi","lundi", "Mardi", "mardi", "Mercredi", "mercredi", "Jeudi", "jeudi",
            "Vendredi", "vendredi", "Samedi", "samedi", "Dimanche", "dimanche");
        $i = 0;
        $res = 0;
        while ($i < count($day_check))
        {
            if ($day == $day_check[$i])
                $res = 1;
            $i++;
        }
        return ($res);
    }

    function check_year($year)
    {
        if (!is_numeric($year))
            return (-1);
        if ($year < 0 || $year > 2017)
            return (-1);
        return (1);
    }

   function check_nbrday($nbr_day)
    {
        if ($nbr_day > 31 || $nbr_day < 1)
            return (0);
        if (!is_numeric($nbr_day))
            return (0);
        return (1);
    }

    function check_hour($hour)
    {
        $tab = explode(":", $hour);
        if (count($tab) != 3)
            return (-1);
        if ($tab[0] < 0 || $tab[0] >= 24 || !is_numeric($tab[0]))
            return (-1);
        if ($tab[1] < 0 || $tab[1] >= 60 || !is_numeric($tab[1]))
            return (-1);
        if ($tab[2] < 0 || $tab[2] >= 60 || !is_numeric($tab[2]))
            return (-1);
        $res = ((($tab[0]) * 3600) + (($tab[1]) * 60) + $tab[2]);
        return ($res);  
    }
    
    if ($argc == 2)
    {
        //trim ($argv[1], " ");
        $time = explode(" ", $argv[1]);
        $second = check_hour($time[4]);
        $month = check_month($time[2]);
        if (count($time) != 5)
            exit_wrong();
		if ($month == 0)
			exit_wrong();
        if (!check_day($time[0]))
            exit_wrong();
        if (!check_nbrday($time[1]))
            exit_wrong();
        if (!check_year($time[3]))
            exit_wrong();
        if (!$second)
            exit_wrong();
        $res = $time[3]."/".$month."/".$time[1];
        date_default_timezone_set('Europe/Paris');
        $final = strtotime($res);
        $final_time = $final + $second;
        echo ($final_time);
        echo "\n";
    }
    else 
        exit_wrong();
?>