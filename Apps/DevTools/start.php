<?php 
/*
////////////////////////////////////////////////////////////
//
// START
// AUTHOR: ANDREW MCCALLISTER
//
// DESCRIPTION: LISTS THE INDIVIDUAL PROEJCTS BY THE 
// USER AND ORGANIZATION. DISPLAYS A DASHBOARD IF
// THERE ARE NO PROJECTS.
//
////////////////////////////////////////////////////////////
*/
if(is_file("../../wd_protect.php")){ include_once "../../wd_protect.php"; }
include_once("config.inc.php");
include("pageHeader.php"); 

$dt_my_apps = $wd_dt->getLocalProjects();

?>

<div class="webdesk_container webdesk_mt-4 <?php echo (count($dt_my_apps) > 0) ? "hide" : "" ?>" id="dt_dashboard">
	<div class="webdesk_row">
		<?php
		foreach($wd_dt->create_types as $dt_type){
			?>
			<div class="webdesk_col-md-4 webdesk_mb-3">
				<a href="#">
					<div class="webdesk_card">
						<div class="webdesk_card-body">
							<i class="fa fa-<?php echo $dt_type["icon"] ?> fa-fw fa-3x"></i>
							<h4 class="webdesk_mt-3 webdesk_card-title">Create <?php echo $dt_type["name"] ?></h4>
							<p><?php echo $dt_type["blurb"] ?></p>
						</div>
					</div>
				</a>
			</div>
			<?php
		}
		?>
	</div>
</div>
<div class="webdesk_container">
	<h1>My Projects</h1>
	<div class="webdesk_row">
	<?php
	foreach($dt_my_apps as $dt_app){
		
		$dt_app_img = (file_exists($dt_app["type"]."/".$dt_app["handle"]."/ic.png")) ? $dt_app["type"]."/".$dt_app["handle"]."/ic.png" : "MyApps/DevTools/ic.png";
		
		?>
		<div class="webdesk_col-md-4 webdesk_mb-3">
			<a href="<?php echo wd_url($wd_type,$wd_app,"projectEditor.php","&editApp=" . $dt_app["handle"]); ?>">
				<div class="webdesk_card">
					<div class="webdesk_card-body">
						<img src="<?php echo $dt_app_img ?>" class="webdesk_img" alt="" width="48" />
						<h4 class="webdesk_mt-3 webdesk_card-title"><?php echo $dt_app["name"] ?></h4>
					</div>
				</div>
			</a>
		</div>
		<?php
	}
	?>
	</div>
</div>