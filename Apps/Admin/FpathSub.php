<?php if(is_file("../../wd_protect.php")){ include_once "../../wd_protect.php"; }
$path = test_input($_POST['path']);
file_put_contents('path.php', $path);
$userd = f_dec($user);
wd_head($wd_type, $wd_app, 'Fpath.php', '&wd_as=Path saved');
?>
