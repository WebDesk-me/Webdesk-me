<?php if(is_file("../../wd_protect.php")){ include_once "../../wd_protect.php"; } ?>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="footNavbar">
    <ul class="nav navbar-nav">
      <li><a href="https://www.copyright.gov/title17/" target="_blank" rel="noopener"><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date("Y") . ' ' . $wd_Title; ?>, All Rights Reserved
</a></li>
      <li><a href="<?php wd_www('Terms.php', ''); ?>">Terms Of Use</a></li>
      <li><a href="<?php wd_www('Privacy.php', ''); ?>">Privacy Policy</a></li>
      <li><a href="<?php wd_www('community-covenant.php', ''); ?>">Community Covenant</a></li>
      <li><a href="<?php wd_www('blog.php', ''); ?>">Blog</a></li>
      <li><a href="feed.xml" target="_blank">RSS Feed <i class="fas fa-rss"></i></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://webdesk.me" target="_blank">Proudly powerd by WebDesk</a></li>
    </ul>
    </div>
  </div>
</nav>
