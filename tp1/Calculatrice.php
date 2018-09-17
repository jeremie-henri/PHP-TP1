<html>
<?php

function start_page($title)
{
    echo '<!DOCTYPE html><html lang="fr"><head><title>' . PHP_EOL . $title . '</title><br/></head><body>' . PHP_EOL . '<hr/><strong>TEST</strong><br/><hr/>';
};

function end_page()
{
    echo PHP_EOL. '</body><html/> ';
};

start_page('Calculatrice');
end_page();

echo '<form action="calcul.php" method="post" name="op1"><p><label>Valeur 1</label> <input type="text" name="valeur" placeholder="oui" size="30" maxlength="10" /></p></form>';
echo '<form action="calcul.php" method="post" name="op2"><p><label>Valeur 2</label> <input type="text" name="valeur" placeholder="oui" size="30" maxlength="10" /></p></form>';
echo '<input type="submit"  /><br/>';

echo '<input checked="checked" type="radio" name="op" value="*"/>*<br/>';
echo '<input type="radio" name="op" value="+"/>+<br/>';
echo '<input type="radio" name="op" value="-"/>-<br/>';
echo '<input type="radio" name="op" value="/"/>/<br/>';


?>
</html>