<?php
if(isset($_GET['dir']) and isset($_POST['name'])){
$dir = test_input($_GET['dir']);
$name = test_input($_POST['name']);
file_put_contents($wd_file . $dir . $name, "");
wd_head($wd_type, $wd_app, 'start.php', '&dir=' . $dir . '&as=Created new file');
}
else{
wd_head($wd_type, $wd_app, 'start.php', '&dir=' . $dir . '*aw=Not enough information: action canceled');
}
?>