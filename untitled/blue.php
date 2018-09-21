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
$operateurs = '*+-/';

echo '<strong> Voici mon premier programme php </strong><br/>' . "\n";
echo 'C\'est pas mal non ? <br/>'. "\n";

echo "var1 + var2<br/>";
echo $var1+$var2 . "<br/>";
echo $var1+$var3 . "<br/>";


echo '<form method="post" action="calcul.php" >
<p><label>Valeur 1</label></p>'.'<input type="text" name="op1" placeholder="oui" size="30" maxlength="10" />';
echo '<p><label>Valeur 2</label></p>'.'<input type="text" name="op2" placeholder="oui" size="30" maxlength="10" />';

for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
{
    echo '<input ';
    if($cpt == 0)
    {
        echo 'checked="checked" ';
    }
    echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
}


/*
echo '<select name="op">';
        echo'<option value="+">+</option>';
        echo'<option value="-">-</option>';
        echo'<option value="/">/</option>';
        echo'<option value="*">*</option>';
echo '</select>';
*/
echo '<input type="submit" name="action"/>';

echo '<input type="reset" value="efface"/><br/>';
echo '</form>';
?>
</html>


