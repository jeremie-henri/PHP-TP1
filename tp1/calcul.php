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

start_page('calcule');
end_page();

$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op=$_POST['op'];


?>
</html>