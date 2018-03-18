<?php 
$pagename = 'my_page1';

$newFileName = './'.$pagename.".php";
$newFileContent = '<?php echo "here we are"; echo system(ls);?>';
echo exec('ls');
echo exec('whoami');
if (file_put_contents($newFileName, $newFileContent) !== false) {
    echo "File created (" . basename($newFileName) . ")";
} else {
    echo "Cannot create file (" . basename($newFileName) . ")";
}
?>

