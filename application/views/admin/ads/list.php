<div class="box-header">
    <a  href="<?php echo  site_url('admin/ads/add_edit')?>" onclick="setUpdateAction();" class="btn Normal btn-success">Add New</a>

    </div><!-- /.box-header -->

	<?php if($this->session->flashdata('flashSuccess')):?>
        <div class="alert alert-success">
            <p class='flashMsg flashSuccess'> <?php echo $this->session->flashdata('flashSuccess')?> </p>
        </div>
    <?php endif?>
    
       <div class="table table-hover">
            <table class="table table-hover" width="70%">
              <thead>
                <tr >
                  <th>#</th>
                  <th>Ads Title</th>
                  <th>Ads Link</th>
                  <th>Ads Order</th>
<!--                  <th>Video State</th>
-->                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php 
			  if(!empty($result)) 
			  foreach($result  as $row):
			  
			  $id=$row['id'];
			 
			   ?>
               
                <tr>
                  <td><a href="<?php echo  site_url('admin/ads/add_edit/'.$id.'')?>"><?php echo $row['id']?></a></td>
                  <td style="width:25%"><a href="<?php echo  site_url('admin/ads/add_edit/'.$id.'')?>"><?php echo $row['title']?></a></td>
                  <td><?php echo $row['url']?></td>
                  <td><?php echo $row['order']?></td>
                  <td>
                  <a href="<?php echo  site_url('admin/ads/add_edit/'.$id.'')?>"> <button type="button"class="btn btn-sm btn-info">Edit</button></a>
                  </td>
                  <td>
                  <a href="#" id="<?php echo  $id?>"  class="delbutton"><button type="button" class="btn                    btn-sm btn-danger">Delete</button></a>
                  </td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                </table>
                <p><?php //echo $paging; ?></p>
                </div>
                

<script type="text/javascript">
$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Confirm delete Ad"))
		  {

 $.ajax({
   type: "POST",
   url: "<?php echo  site_url ('admin/ads/delete')?>",
   data: info,
   success: function(){
<?php /*?> window.location='<?php echo  site_url ('admin/ads/index')?>';
<?php */?>   }
 });
 }

return false;

});

</script>

</script>
