<?php if(is_file("../../wd_protect.php")){ include_once "../../wd_protect.php"; }
//_wf_backbutton(wd_url($wd_type, $wd_app, 'start.php', ''));
include_once("config.inc.php");
include("appHeader.php");
?>
<nav class="webdesk_navbar webdesk_border-top webdesk_navbar-expand-md webdesk_navbar-light webdesk_bg-light">
  <a class="webdesk_navbar-brand" href="<?php echo wd_url($wd_type, $wd_app, 'start.php', ''); ?>"><i class="fa fa-arrow-circle-left"></i></a> Permissions
  <button class="webdesk_navbar-toggler" type="button" data-toggle="webdesk_collapse" data-target="#wf_adminSubHeader" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="webdesk_navbar-toggler-icon"></span>
  </button>
  
  <div class="webdesk_collapse webdesk_navbar-collapse" id="wf_adminSubHeader">
    <ul class="webdesk_navbar-nav webdesk_ml-auto">
      <li class="webdesk_nav-item">
        
      </li>
    </ul>
    
  </div>
</nav>
<div class="webdesk_row">
	<div class="webdesk_col-md-3 webdesk_p-5">
		<h3>Tiers</h3>
		<ul class="webdesk_nav webdesk_flex-column webdesk_mb-5">
			
			<?php
			if(empty($req["tier"]) || ($req["tier"] < 1))
				$req["tier"] = 1;
			
			$tier = 1;
			do{
				
				if(file_exists($wd_admin . 't' . $tier . '.json')){
					$tier_file = json_decode(file_get_contents($wd_admin . 't' . $tier . '.json'),true);
					?>
					<li class="webdesk_nav-item">
				    <a class="webdesk_nav-link webdesk_active <?php echo ($req["tier"] == $tier) ? "webdesk_bg-secondary webdesk_text-white" : "" ?>" href="<?php wd_url($wd_type, $wd_app, 'permissions.php', '&tier=' . $tier) ?>">Tier <?php echo $tier ?></a>
				  </li>
					
					<?php
					$continue = true;
				}
				else
					$continue = false;
				
				$tier ++;
			}
			while($continue);
			
			if($tier == 2){
				?>
				<li class="webdesk_nav-item webdesk_my-3">
					You have no active tiers
				</li>
				<?php
			}
			?>
			
		</ul>
		<a class="webdesk_btn webdesk_btn-<?php echo ($tier == 2) ? "primary" : "light"; ?>" href="<?php echo wd_urlSub($wd_type, $wd_app, 'permissionsSub.php', '&action=addTier&nextTier=' . ($tier - 1)); ?>"><i class="fa fa-plus fa-fw"></i> Add Tier</a>
	</div>
	<div class="webdesk_col webdesk_my-5">
		<?php
		if(file_exists($wd_admin . 't' . $req["tier"] . '.json')){
			?>
			<form name="savePermissionsForm" action="<?php wd_urlSub($wd_type, $wd_app, 'permissionsSub.php', ''); ?>" method="POST">
				<input type="hidden" name="action" value="saveTier" />
				<?php
				if(!empty($req["tier"])){
					$Obj = json_decode(file_get_contents($wd_admin . 't' . $req["tier"] . '.json'));
					?>
					<input type="hidden" name="tier" value="<?php echo $req["tier"] ?>" />
					<div class="webdesk_row webdesk_border-bottom">
						<div class="webdesk_col-sm-2 webdesk_text-center">
							<i class="fa fa-5x fa-fw fa-columns"></i>
							<br />
							User Experience
						</div>
						<div class="webdesk_col-sm-8 webdesk_offset-sm-1">
							<div class="webdesk_form-group webdesk_row">
								<label for="HUD-option" class="webdesk_col-sm-4 webdesk_col-form-label">HUD</label>
								<div class="webdesk_sm_8">
									<select id="HUD-option" name="HUD" class="webdesk_custom-select">
										<?php
										if ($handle = opendir('HUD/')) {
											while (false !== ($entry = readdir($handle))) {
												if ($entry != "." && $entry != "..") {
												?>
												<option value="<?php echo $entry; ?>" <?php if(file_exists($wd_admin . 't' . $tier . '.json') && isset($Obj->HUD)){$test = $Obj->HUD; if($test == $entry){echo ' selected="selected"';}} ?>><?php echo $entry; ?></option>
												<?php
												}
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="webdesk_form-group webdesk_row">
								<label for="MHUD-option" class="webdesk_col-sm-4 webdesk_col-form-label">MHUD</label>
								<div class="webdesk_sm_8">
									<select id="MHUD-option" name="MHUD" class="webdesk_custom-select">
										<?php
										if ($handle = opendir('MHUD/')) {
											while (false !== ($entry = readdir($handle))) {
												if ($entry != "." && $entry != "..") {
												?>
												<option value="<?php echo $entry; ?>" <?php if(file_exists($wd_admin . 't' . $tier . '.json' && isset($Obj->MHUD))){$test = $Obj->MHUD; if($test == $entry){echo ' selected="selected"';}} ?>><?php echo $entry; ?></option>
												<?php
												}
											}
										}
										?>
									</select>
								</div>
							</div>
							<div class="webdesk_form-group webdesk_row">
								<label for="chat-option" class="webdesk_col-sm-4 webdesk_col-form-label">Chat</label>
								<div class="webdesk_sm_8">
									
									<div class="webdesk_custom-control webdesk_custom-radio webdesk_custom-control-inline">
									  <input type="radio" id="chat-option-Yes" name="wd_chat" class="webdesk_custom-control-input" value="Yes" <?php echo (!empty($Obj->wd_chat) && ($Obj->wd_chat == "Yes") ) ? "checked" : ""; ?>>
									  <label class="webdesk_custom-control-label" for="chat-option-Yes">On</label>
									</div>
									<div class="webdesk_custom-control webdesk_custom-radio webdesk_custom-control-inline">
									  <input type="radio" id="chat-option-No" name="wd_chat" class="webdesk_custom-control-input" value="No" <?php echo (empty($Obj->wd_chat) || ($Obj->wd_chat == "No") ) ? "checked" : ""; ?>>
									  <label class="webdesk_custom-control-label" for="chat-option-No">Off</label>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					
					<?php
					$step = 0;
					while($step < 2){
						if($step == 0)
							$dir = "Apps";
						else
							$dir = "MyApps";
						?>
						<div class="webdesk_row webdesk_border-bottom webdesk_py-5">
							<div class="webdesk_col-sm-2 webdesk_text-center">
								<i class="fa fa-5x fa-fw fa-<?php echo ($step == 0) ? "shapes" : "object-group"; ?>"></i>
								<br />
								<?php echo ($step == 1) ? "My " : ""; ?> Apps
							</div>
							<div class="webdesk_col-sm-8 webdesk_offset-sm-1">
								<?php
								if ($handle = opendir($dir . '/')) {
			            while (false !== ($entry = readdir($handle))) {
			              
			              if ($entry != "." && $entry != "..") {
			              	
			              	if(file_exists($dir . "/" . $entry . "/app.json")){
			              		$this_app = json_decode(file_get_contents($dir . "/" . $entry . "/app.json"),true);
			              	}
			              	else
			              		$this_app["name"] = $entry;
			              	
			              	
			              	$entry = ($step == 1) ? "myApp_" . $entry : $entry;
			              	?>
			              	<div class="webdesk_form-group webdesk_row">
												<label for="app-<?php echo $entry ?>-option" class="webdesk_col-sm-4 webdesk_col-form-label"><?php echo $this_app["name"] ?></label>
												<div class="webdesk_sm_8">
													<div class="webdesk_custom-control webdesk_custom-radio webdesk_custom-control-inline">
													  <input type="radio" id="app-<?php echo $entry ?>-option-Yes" name="<?php echo $entry; ?>" class="webdesk_custom-control-input" value="Yes" <?php echo (!empty($Obj->$entry) && ($Obj->$entry == "Yes") ) ? "checked" : ""; ?>>
													  <label class="webdesk_custom-control-label" for="app-<?php echo $entry ?>-option-Yes">On</label>
													</div>
													<div class="webdesk_custom-control webdesk_custom-radio webdesk_custom-control-inline">
													  <input type="radio" id="app-<?php echo $entry ?>-option-No" name="<?php echo $entry; ?>" class="webdesk_custom-control-input" value="No" <?php echo (empty($Obj->$entry) || ($Obj->$entry == "No") ) ? "checked" : ""; ?>>
													  <label class="webdesk_custom-control-label" for="app-<?php echo $entry ?>-option-No">Off</label>
													</div>
												</div>
											</div>
			              	<?php
			              	
			              }
			                
			            }
			                
								}
								?>
							</div>
							
						</div>
					
						<?php
						
						$step ++;
					}//while
				}
				?>
				<div class="webdesk_py-4">
					<button type="submit" class="webdesk_btn webdesk_btn-primary"><i class="fa fa-save fa-fw"></i> Save changes</button>
					<?php
					if(!file_exists($wd_admin . 't' . ($req["tier"] + 1) . '.json')){
						?>
						<a href="<?php wd_urlSub($wd_type, $wd_app, 'permissionsSub.php', '&action=removeTier&tier=' . $req["tier"]); ?>" class="webdesk_btn webdesk_btn-danger"><i class="fa fa-trash fa-fw"></i> Remove tier</a>
						<?php
					}
					?>
				</div>
			</form>
			<?php
		}
		?>
	</div>
</div>
<?php
include("appFooter.php");
?>