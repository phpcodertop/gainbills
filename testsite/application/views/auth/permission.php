<div class="container">
		<h2><?php echo $this->lang->line('Users Permissions');?>	</h2>
     
        
		<form id="permission_form">
        <div>
            <div>
                <p><strong><?php echo $this->lang->line('groups');?></strong></p>

                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs" id="p_t">
                        <?php 
                            foreach($groups as $group){ 
                                $gid = strtolower(str_replace(' ', '_', $group['name']));
                        ?>
                            <li ><a href="#<?php echo $gid; ?>" data-toggle="tab"><?php echo $group['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content" id="permissions">
                        <?php 
                            foreach($groups as $group){ 
                                $gid = strtolower(str_replace(' ', '_', $group['name']));
                        ?>
                        <div class="tab-pane" id="<?php echo $gid; ?>">
                            <input type="hidden" name="group_id" id="group_id" value="<?php echo $group['id']; ?>" />
                            <br/>
                            <br/>
                            
                            <p><strong><?php echo $this->lang->line('manage_components'); ?></strong></p>
                            <table class="table table-bordered table-hover list table-condensed table-striped" style="width: auto;">
                                <thead>
                                <tr>
                                    <th style="width: 30px;cursor:default; color:#333333;text-shadow: 0 1px 0 #FFFFFF;background-color: #e6e6e6;"><?php echo $this->lang->line('no_'); ?></th>
                                    <th style="width: 300px;cursor:default; color:#333333;text-shadow: 0 1px 0 #FFFFFF;background-color: #e6e6e6;"><?php echo $this->lang->line('component_name'); ?></th>
                                    <th style="width: 50px;cursor:default; color:#333333;text-shadow: 0 1px 0 #FFFFFF;background-color: #e6e6e6;">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
								$coms  = array('categories','articles', 'users', 'slider', 'oarticles', 'modules', 'menus', 'settings', 'history', 'vote', 'album', 'head_news', 'banners', 'photos', 'comments' );
								$i = 0; foreach($coms as  $com){ 
								//print_r($com);exit;
                                $i++;
                                ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $i ?></td>
                                    <td><?php echo $com; ?></td>
                                    <td style="text-align:center;">
                                        <input type="hidden" name="com_id" id="com_id" value="<?php echo $com; ?>" />
                                        <div style="width: 460px;">
											<label class="">
												<input type="checkbox" value="add" name="add" <?php if (isset($pt[$group['id'].'_'.$com.'_add']) && (int)$pt[$group['id'].'_'.$com.'_add'] == 'add'){ ?> checked="checked" <?php } ?> /> <?php echo $this->lang->line('add');?>
											</label>
											<label class=" ">
												<input type="checkbox" value="edit" name="editing" <?php if (isset($pt[$group['id'].'_'.$com.'_edit']) && (int)$pt[$group['id'].'_'.$com.'_edit'] == 'edit'){ ?> checked="checked" <?php } ?>  /> <?php echo $this->lang->line('edit');?>
											</label>
											<label class=" ">
												<input type="checkbox" value="delete" name="delete" <?php if (isset($pt[$group['id'].'_'.$com.'_delete']) && (int)$pt[$group['id'].'_'.$com.'_delete'] == 'delete'){ ?> checked="checked" <?php } ?>  /> <?php echo $this->lang->line('delete');?>
											</label>
                                            
											<label class=" ">
												<input type="checkbox" value="publish" name="publish" <?php if (isset($pt[$group['id'].'_'.$com.'_publish']) && (int)$pt[$group['id'].'_'.$com.'_publish'] == 'publish'){ ?> checked="checked" <?php } ?>  /> <?php echo $this->lang->line('publish');?>
											</label>
                                            
										
                                            
											<label class=" ">
												<input type="checkbox" value="global_access" name="global_access"  <?php if (isset($pt[$group['id'].'_'.$com.'_global_access']) && (int)$pt[$group['id'].'_'.$com.'_global_access'] == 'global_access'){ ?> checked="checked" <?php } ?> /> <?php echo $this->lang->line('global_access'); ?>
											</label>
										</div>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div> 
                <br />
                <div style="padding-left:300px;">
                    <input type="button" class="btn btn-primary" value="<?php echo $this->lang->line('save');?>" id="btn_save"/>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    $(document).ready(function(){
    	$('title').html($('h2').html());
        $($('#p_t  a').get(0)).tab('show');
        $('#btn_save').click(function(){
            var data = [];
            $('#permissions > div').each(function(){
                var obj = {};
                obj.group_id = $(this).children('#group_id').val();
                obj.coms = [];
				
				
                $(this).find('table > tbody > tr').each(function(){
                    var com = {}
                    var per = {add:0,edit:0,del:0,publish:0,configure:0};

                    if ($(this).find('input[name="add"]:checked').val() == 'add'){
                    	per.add = 'add';
                    }
                    if ($(this).find('input[name="editing"]:checked').val() == 'edit'){
                        per.editing = 'edit';
                    }
                    if ($(this).find('input[name="delete"]:checked').val() == 'delete'){
                        per.del = 'delete';
                    }
                    if ($(this).find('input[name="publish"]:checked').val() == 'publish'){
                        per.publish = 'publish';
                    }
                    if ($(this).find('input[name="global_access"]:checked').val() == 'global_access'){
                        per.global_access = 'global_access';
                    }
                    
                    com.com_id = $(this).find('#com_id').val();
                    com.permission_type = per;
                   
                    obj.coms[obj.coms.length] = com;
                });
                
                data[data.length] = obj;
            });
			
			
            $.post('<?php echo base_url(); ?>index.php/auth/savePermission', {data:data}, function(html){
               //console.log(data);
               // setTimeout(function(){ 
                    alert('saved');
               // },2000);
                
            }, 'html');

        });
    });
</script>
