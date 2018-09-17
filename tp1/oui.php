<html>
<?php

    function start_page($title)
    {
        echo '<!DOCTYPE html><html lang="fr"><head><title>' . PHP_EOL . $title . '</title><br/></head><body>' . PHP_EOL . '<hr/><strong>TEST</strong><br/><hr/>';
    };

    function end_page()
    {
        echo PHP_EOL. '</body><html/> ';
    }
/*
    $jour = date('l F d, Y',strtotime('2020-04-01'));
    $jour_france = date ('d/m/Y');
    echo $jour. '<br/>' . $jour_france;
*/
    $jour = date('F d, Y, H:i');
    $jour_france =date ('d/m/Y');
    echo $jour_france . '<br/>' . $jour;

    start_page('test');
    end_page();

    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';

    echo '<strong> Voici mon premier programme php </strong><br/>' . "\n";
    echo 'C\'est pas mal non ? <br/>'. "\n";

    echo "var1 + var2<br/>";
    echo $var1+$var2 . "<br/>";
    echo $var1+$var3 . "<br/>";


?>
</html>


