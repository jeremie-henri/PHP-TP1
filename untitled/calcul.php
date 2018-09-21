<?php

if (isset ($_POST['op1']) AND isset($_POST['op2']) AND isset($_POST['op']))
{
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];
    $op=$_POST['op'];
    $action = $_POST['action'];
    echo $action;

    if($op1 != NULL AND $op2 != NULL)
    {
        if($op == "/" AND $op2 == 0)
        {
            echo 'division par 0';
        }
        else {
            if ($op == '+')
            {
                $resultat = $op1 + $op2;
                echo $resultat;
            }
            if ($op == "-")
            {
                $resultat = $op1 - $op2;
                echo $resultat;
            }
            if ($op == "*")
            {
                $resultat = $op1 * $op2;
                echo $resultat;
            }
            if ($op == "/") {
                $resultat = $op1 / $op2;
                echo $resultat;
            }
        }

    }
    else
    {
        echo 'non';
    }
}
?>;



