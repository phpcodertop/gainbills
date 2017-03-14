<div class="col-xs-8"> 

<?php 
if($result!=NULL){ 
	$id=$result[0]->id;
	$title=$result[0]->title;
	$description=$result[0]->description;
	$url=$result[0]->url;
	$image=$result[0]->image;
	$state=$result[0]->published;
	$duration=$result[0]->duration;
	$points=$result[0]->points;
	$order=$result[0]->order;

}else{
	$id='';$title='';$description='';$url='';$image='';$state='';$duration='';$points;$order='';
}
$attributes = array('class' => '');
echo form_open_multipart('admin/ads/save',$attributes); ?>
<div class="col-xs-9">
    <div class="form-group">
        <label class="control-label">Ads Title</label>
        <div class=" controls ">
            <input type="text" class="form-control" name="ads_title" size="30" value="<?php if(isset($title)) echo $title?>" required="required"/>
        </div>
    </div>
   
      <div class="form-group">
       <label class="control-label">Ads Description</label>
        <div class="controls">
           <textarea  id="edit" cols="70" rows="10" name="ads_desc"><?php if(isset($description)) echo $description;?></textarea>
            
        </div>
      </div> 
       <div class="form-group">
       <label class="control-label">Ads Link</label>
        <div class="controls">
              <input type="text" class="form-control" name="ads_link" size="30" value="<?php if(isset($url)) echo $url;?>" required="required"/>

        </div>
      </div> 
      <div class="form-group">
              <label for="images" class="fileContainer btn btn-info btn-large"  ><i class="glyphicon glyphicon-camera"></i>              select ads image<input  type="file" onchange="$('#imagefile').html(this.value)"  name="ads_image" id="ads_image"  >
              </label> 
                    <div class="imagefile" id="imagefile" > 
					<?php if($image!=NULL){
						if(!empty($image)){
							//echo file_exists('/home/alwafd/public_html/images/news/532387012sdfsdsdf.jpg');
						 echo ' <img id="article_image" width="175" src="'.base_url().$image.'">';
						 
					}else{
						echo '<img  id="article_image" width="175" src="">';	
					} }?>

                    </div>
                  <?php /*?>  <input type="hidden" value="<?php if(isset($image))echo $image?>" name="old_image"/>
                  
                    <input  type="hidden" value="" name="hiddenimage" id="imgid"><?php */?>
      </div>
        <div class="form-group">
		 <label class="control-label">Ads Duration (in seconds)</label>
		  <input type="text" class="form-control" name="ads_duration" size="15" value="<?php if(isset($duration)) echo $duration?>" required="required"/>
        </div>
        <div class="form-group">
		   <label class="control-label">Ads Points</label>
		   <input type="text" class="form-control" name="ads_point" size="15" value="<?php if(isset($points)) echo $points?>" required="required" />
        </div>			
     <div class="form-group">
                 <p>Published : 
                    <input  type="checkbox"  role="yes-no" id="published" name="published" <?php if(isset($state) && $state == 1)echo 'checked="checked"';?>/>
                    <label for="published"><span class="ui"></span></label>
                 </p>
       </div>
        <div class="form-group">
		   <label class="control-label">Ads Order</label>
		   <input type="number" class="form-control" name="ads_order" size="15" value="<?php if(isset($order)) echo $order?>"/>
        </div>
    <div class="form-group">
    <input type="hidden" value="<?php echo $id?>" name="id" id="id" />
        <button type="submit" class="btn btn-primary btn-large">Save</button>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="btn btn-danger" href="
		 <?php echo base_url();?>admin/ads">Cancle</a>
    </div>
  
 </div>
  


<?php echo  form_close();?>

<style>
.fileContainer {
    overflow: hidden;
    position: relative;
}

.fileContainer [type=file] {
    cursor: inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
}



</style>
</div>
