<?php
$nameA = test_input($_POST["nameA"]);
$nameP = test_input($_POST["nameP"]);
file_put_contents("www/Themes/" . $nameA . "/" . $nameP, '<?php ?>');
wd_head($wd_type, $wd_app, 'MyThemePage.php', '&MyApp=' . $nameA . '&MyPage=' . $nameP);
?>