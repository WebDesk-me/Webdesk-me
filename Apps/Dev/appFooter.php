<div class="webdesk_modal webdesk_fade" id="newFileModal" tabindex="-1" role="dialog" aria-labelledby="newFileModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog" role="document">
    <div class="webdesk_modal-content webdesk_shadow">
      <div class="webdesk_modal-header">
        <h5 class="mwebdesk_odal-title" id="newFileModalLabel">Create a new file</h5>
        <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php wd_urlSub($wd_type, $wd_app, 'NewFileSub.php', ''); ?>">
      	<input type="hidden" name="nameA" value="<?php echo (!empty($req["editApp"])) ? $req["editApp"] : ""; ?>">
      	<input type="hidden" name="type" value="<?php echo (!empty($req["editType"])) ? $req["editType"] : ""; ?>">
	      <div class="webdesk_modal-body">
	        
			    <label for="nameP">New file name: </label>
			    <input type="text" name="nameP" for="nameP" class="webdesk_form-control" placeholder="new_page.php" title="">
			    
				  
	      </div>
	      <div class="webdesk_modal-footer">
	        <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
	        <button type="submit" class="webdesk_btn webdesk_btn-primary">Create file</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="newFolderModal" tabindex="-1" role="dialog" aria-labelledby="newFolderModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog" role="document">
    <div class="webdesk_modal-content webdesk_shadow">
      <div class="webdesk_modal-header">
        <h5 class="mwebdesk_odal-title" id="newFolderModalLabel">Create a new folder</h5>
        <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php wd_urlSub($wd_type, $wd_app, 'projectFilesSub.php', ''); ?>">
        <input type="hidden" name="f" value="createFolder" />
      	<input type="hidden" name="editApp" value="<?php echo (!empty($req["editApp"])) ? $req["editApp"] : ""; ?>" />
      	<input type="hidden" name="editType" value="<?php echo (!empty($req["editType"])) ? $req["editType"] : ""; ?>" />
      	<input type="hidden" name="dir" value="<?php echo (!empty($req["dir"])) ? $req["dir"] : ""; ?>" />
	      <div class="webdesk_modal-body">
	        
			    <label for="nameP">New folder name: </label>
			    <input type="text" name="folder_name" for="nameP" class="webdesk_form-control" placeholder="" title="">
			    <!--<input type="submit" class="btn btn-success" value="Start">-->
				  
	      </div>
	      <div class="webdesk_modal-footer">
	        <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
	        <button type="submit" class="webdesk_btn webdesk_btn-primary">Create folder</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="removeFileModal" tabindex="-1" role="dialog" aria-labelledby="removeFileModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog" role="document">
    <div class="webdesk_modal-content webdesk_shadow">
      <div class="webdesk_modal-header">
        <h5 class="mwebdesk_odal-title" id="removeFileModalLabel">Remove file</h5>
        <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php wd_urlSub($wd_type, $wd_app, 'editFileSub.php', ''); ?>">
        <input type="hidden" name="f" value="removeFile" />
      	<input type="hidden" name="editApp" value="<?php echo (!empty($req["editApp"])) ? $req["editApp"] : ""; ?>">
      	<input type="hidden" name="editType" value="<?php echo (!empty($req["editType"])) ? $req["editType"] : ""; ?>">
      	<input type="hidden" name="dir" value="<?php echo (!empty($req["dir"])) ? $req["dir"] : ""; ?>" />
      	<input type="hidden" name="file" value="<?php echo (!empty($req["file"])) ? $req["file"] : ""; ?>">
	      <div class="webdesk_modal-body">
	        
			    <p class="lead">Are you sure you wish to delete this file? This action <b>CANNOT</b> be undone.</p>
				  
	      </div>
	      <div class="webdesk_modal-footer">
	        <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
	        <button type="submit" class="webdesk_btn webdesk_btn-danger">Confirm delete</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="renameFileModal" tabindex="-1" role="dialog" aria-labelledby="renameFileModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog" role="document">
    <div class="webdesk_modal-content webdesk_shadow">
      <div class="webdesk_modal-header">
        <h5 class="mwebdesk_odal-title" id="renameFileModalLabel">Rename file</h5>
        <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php wd_urlSub($wd_type, $wd_app, 'editFileSub.php', ''); ?>">
        <input type="hidden" name="f" value="renameFile" />
      	<input type="hidden" name="editApp" value="<?php echo (!empty($req["editApp"])) ? $req["editApp"] : ""; ?>">
      	<input type="hidden" name="editType" value="<?php echo (!empty($req["editType"])) ? $req["editType"] : ""; ?>">
      	<input type="hidden" name="dir" value="<?php echo (!empty($req["dir"])) ? $req["dir"] : "" ?>" />
      	<input type="hidden" name="file" value="<?php echo (!empty($req["file"])) ? $req["file"] : ""; ?>">
	      <div class="webdesk_modal-body">
	        
			    <label for="newName">New file name</label>
			    <input type="text" name="newFileName" class="webdesk_form-control" value="<?php echo (!empty($req["file"])) ? $req["file"] : "" ?>" title="">
				  
	      </div>
	      <div class="webdesk_modal-footer">
	        <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
	        <button type="submit" class="webdesk_btn webdesk_btn-primary">Save file name</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="newMediaUploadModal" tabindex="-1" role="dialog" aria-labelledby="newMediaUploadModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog" role="document">
    <div class="webdesk_modal-content webdesk_shadow">
      <div class="webdesk_modal-header">
        <h5 class="mwebdesk_odal-title" id="newMediaUploadModalLabel">Upload icon</h5>
        <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php wd_urlSub($wd_type, $wd_app, 'upload.php', ''); ?>" method="post" enctype="multipart/form-data">
      	<input type="hidden" name="type" value="<?php echo $req["editType"]; ?>">
      	<input type="hidden" name="app" value="<?php echo $req["editApp"]; ?>">
	      <div class="webdesk_modal-body">
	        <div class="webdesk_custom-file">
				    
				    <input type="file" class="webdesk_custom-file-input" name="fileToUpload" id="fileToUpload" />
				    <label class="webdesk_custom-file-label" for="fileToUpload">Select file</label>
			    </div>
				  <small class="webdesk_form-text webdesk_text-muted">Select a PNG to upload as your icon</small>
	      </div>
	      <div class="webdesk_modal-footer">
	        <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
	        <button type="submit" class="webdesk_btn webdesk_btn-primary">Upload</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="newProjectModal" tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog webdesk_shadow-lg webdesk_modal-lg" role="document">
    <form name="newProjectForm" action="<?php wd_urlSub($wd_type, $wd_app, 'startSub.php', ''); ?>" method="POST">
      <div class="webdesk_modal-content">
        <div class="webdesk_modal-header">
          <h5 class="webdesk_modal-title" id="newProjectModalLabel"><i class="fa fa-project-diagram"></i> New Project</h5>
          <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="webdesk_modal-body">

          <div class="webdesk_row webdesk_no-gutters webdesk_mb-4">
            <div class="webdesk_col">
              <div class="webdesk_btn-group webdesk_btn-group-toggle" data-toggle="webdesk_buttons">
              <?php
              foreach($wd_dt->create_types as $key => $dt_type){
                ?>

                <label class="webdesk_btn webdesk_btn-outline-secondary <?php echo ($key == 0) ? "webdesk_active" : ""; ?> webdesk_pt-3 webdesk_px-4" data-toggle="webdesk_tooltip" title="<?php echo $dt_type["blurb"] ?>" onclick="$('.app_base_path').text('<?php echo $dt_type["dir"] ?>');">
                  <input type="radio" name="project_type" value="<?php echo $dt_type["dir"] ?>" autocomplete="off" <?php echo ($key == 0) ? "checked" : ""; ?>>
                  <i class="fa fa-<?php echo $dt_type["icon"] ?> fa-fw fa-2x"></i>
                  <h5 class="webdesk_mt-1 webdesk_card-title"><?php echo $dt_type["name"] ?></h5>
                </label>

                <?php
              }
              ?>
              </div>
            </div>
          </div>

          <div class="webdesk_form-group">
            <label for="new_project_name">Project Name</label>
            <input type="text" name="project_name" id="new_project_name" class="webdesk_form-control" onblur="$('#new_project_path').val(devTools.remove_characters($(this).val()));" />
          </div>
          <div class="webdesk_form-group">
            <label for="new_project_description">Description (Optional)</label>
            <textarea name="project_description" id="new_project_description" class="webdesk_form-control"></textarea>
          </div>
          <div class="webdesk_form-group">
            <label for="new_project_path">File Path</label>
            <div class="webdesk_input-group">
              <div class="webdesk_input-group-prepend">
                <span class="webdesk_input-group-text"><span class="app_base_path">MyApps</span>/</span>
              </div>
              <input type="text" name="project_path" id="new_project_path" class="webdesk_form-control" aria-described-by="new_project_path_help" />
            </div>
            <small id="new_project_path_help" class="webdesk_text-muted webdesk_form-text">This is where your project files will be saved</small>
          </div>

        </div>
        <div class="webdesk_modal-footer">
          <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
          <button type="submit" class="webdesk_btn webdesk_btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="publishAppModal" tabindex="-1" role="dialog" aria-labelledby="publishAppModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog webdesk_shadow" role="document">
    <form name="deleteApp" class="no-loader" onsubmit="">
      <div class="webdesk_modal-content">
        <div class="webdesk_modal-header">
          <h5 class="webdesk_modal-title" id="publishAppModalLabel"><i class="fa fa-shipping-fast"></i> Publish to Marketplace</h5>
          <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="webdesk_modal-body webdesk_py-3">

          <?php
          
          if(file_exists("Apps/MarketPublisher/publish_externalPopup.php")){
            include_once("Apps/MarketPublisher/publish_externalPopup.php");
          }
          else{
            ?>
            Download the Marketplace Publisher app to publish your apps to the Marketplace!
            <?php
          }
          
          ?>

        </div>
        <!--<div class="webdesk_modal-footer hide">-->
        <!--  <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>-->
        <!--  <button type="submit" class="webdesk_btn webdesk_btn-primary">Confirm</button>-->
        <!--</div>-->
      </form>
    </div>
  </div>
</div>
<div class="webdesk_modal webdesk_fade" id="removeAppModal" tabindex="-1" role="dialog" aria-labelledby="removeAppModalLabel" aria-hidden="true">
  <div class="webdesk_modal-dialog" role="document">
    <div class="webdesk_modal-content webdesk_shadow">
      <div class="webdesk_modal-header">
        <h5 class="mwebdesk_odal-title" id="removeAppModal"><i class="fa fa-exclamation-triangle fa-fw"></i> Remove project</h5>
        <button type="button" class="webdesk_close" data-dismiss="webdesk_modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php wd_urlSub($wd_type, $wd_app, 'projectFilesSub.php', ''); ?>">
        <input type="hidden" name="f" value="removeApp" />
      	<input type="hidden" name="editApp" value="<?php echo (!empty($req["editApp"])) ? $req["editApp"] : ""; ?>">
      	<input type="hidden" name="editType" value="<?php echo (!empty($req["editType"])) ? $req["editType"] : ""; ?>">
	      <div class="webdesk_modal-body">
	        
			    <p class="webdesk_lead">Are you sure you wish to delete this project? All associated files will be removed from the server. </p>
			    <p class="webdesk_lead">This action <b>CANNOT</b> be undone.</p>
				  
	      </div>
	      <div class="webdesk_modal-footer">
	        <button type="button" class="webdesk_btn webdesk_btn-secondary" data-dismiss="webdesk_modal">Cancel</button>
	        <button type="submit" class="webdesk_btn webdesk_btn-danger">Confirm delete</button>
	      </div>
	    </form>
    </div>
  </div>
</div>
<script type="text/javascript">
var devTools = {
	
	remove_characters: function(the_string){
		
		return the_string.replace(/[\-\.\\\"\'\s]/g,"");
		
	}
	
};
</script>
<script>
	if($(":input[name='con']").length > 0){
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
	}
</script>
<?php include("FunctionHelp.php"); ?>