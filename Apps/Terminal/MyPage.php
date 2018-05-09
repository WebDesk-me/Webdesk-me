<?php
if(isset($_GET['dir'])){$dir = test_input($_GET['dir']); if(isset($_GET['file'])){$file = test_input($_GET['file']);}}
else{ $dir = ""; $file=""; }
if($dir != "" && $dir != '/'){
$ndir = '&dir=' . rtrim($dir, '/');
}
else{
$ndir = "";
}
$OldDir = $dir; 
$dir = $dir . $file; 
?> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php wd_url($wd_type, $wd_app, 'start.php', ''); ?>">Terminal Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php wd_url($wd_type, $wd_app, 'start.php', $ndir); ?>">Back</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-usd"></span> WD Functions</a></li>
        <li><a href="<?php wd_urlSub($wd_type, $wd_app, 'view.php', '&dir=' . $OldDir . '&file=' . $file); ?>" target="_blank"><span class="glyphicon glyphicon-file"></span> View</a></li>
        <li><?php wd_confirm($wd_type, $wd_app, 'MyPageSubDelete.php', '&dir=' . $OldDir . '&file=' . $file, '1', '<i class="glyphicon glyphicon-trash"> Delete</i>'); ?></li>
      </ul>
    </div>
  </div>
</nav>
<h2> <?php echo $dir; ?></h2>
<form method="post" action="<?php wd_urlSub($wd_type, $wd_app, 'MyPageSub.php', ''); ?>"  style="width: 90%; height: 60%;">
    <label for="con">Page Content: </label><br>
    <input type="hidden" name="dir" value="<?php echo $OldDir; ?>">
    <input type="hidden" name="file" value="<?php echo $file; ?>">
    <textarea id="con" name="con" for="con" class="form-control" placeholder="Enter your content." title="Enter your content." style="width: 100%; height: 100%; background-color: #000000; color: #ffffff; font-weight: bold; font-size: 1.25em;" autofocus><?php 
if(file_exists($dir)){
    echo htmlspecialchars(file_get_contents($dir));} 
?></textarea>
    <br>
    <input type="submit" class="btn btn-success" value="Save">
</form>
<br><br><br>
<?php
include("FunctionHelp.php");
?>
<script>
var myCodeMirror = CodeMirror.fromTextArea(con, {
lineNumbers: true,
  mode:  "php",
  theme: "abcdef",
matchBrackets: true,
matchTags: {bothTags: true},
lineWrapping: true,
foldGutter: true,
gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter", "CodeMirror-lint-markers"],
lint: true,
extraKeys: {"Ctrl-Space": "autocomplete",
"F11": function(cm) {
          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
        },
        "Esc": function(cm) {
          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
        },
"Ctrl-J": "toMatchingTag"
}
});
</script>
<br><br><br>