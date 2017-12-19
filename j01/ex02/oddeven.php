#!/usr/bin/php
<?php
    while (1)
    {
        echo "Entrez un nombre: ";
        if (!($nb  = fgets(STDIN)))
            exit;
        $nb_ok = trim($nb);
        if (is_numeric($nb_ok))
        {
            if (($nb_ok % 2) == 0)
                echo "Le chiffre $nb_ok est Pair\n";
            if (($nb_ok % 2) == 1)
                echo "Le chiffre $nb_ok est Impair\n";
        }
        else
            echo "$nb_ok n'est pas un chiffre\n";
    }
?>