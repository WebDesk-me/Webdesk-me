<?php
$nameA = test_input($_POST["nameA"]);
$con = htmlspecialchars_decode($_POST["con"], ENT_QUOTES);
file_put_contents("HUD/" . $nameA, $con);
wd_head($wd_type, $wd_app, 'hud.php', '&MyApp=' . $nameA);
?>