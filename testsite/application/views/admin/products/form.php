<div class="col-xs-8"> 

<?php 
if($result!=NULL){ 
	$id=$result[0]->id;
	$title=$result[0]->title;
	$description=$result[0]->description;
	$price=$result[0]->price;
	$image=$result[0]->image;
	$cat_id=$result[0]->cat_id;
	//print_r($album_images);
 
	/*if($published==1){
		$s='Publish';
	}else{
		$s='Unpublish';
	}*/

}else{
	$id='';$title='';$description='';$price='';$image='';$cat_id='';
}
$attributes = array('class' => '');
echo form_open_multipart('admin/products/save',$attributes); ?>
<div class="col-xs-9">
    <div class="form-group">
        <label class="control-label">Product Title</label>
        <div class=" controls ">
            <input type="text" class="form-control" name="product_title" size="30" value="<?php if(isset($title)) echo $title?>" required="required"/>
        </div>
    </div>
   
      <div class="form-group">
       <label class="control-label">Product Description</label>
        <div class="controls">
           <textarea  id="edit" cols="70" rows="10" name="product_desc"><?php if(isset($description)) echo $description;?></textarea>
            
        </div>
      </div> 
       <div class="form-group">
       <label class="control-label">Product Price</label>
        <div class="controls">
              <input type="text" class="form-control" name="product_price" size="30" value="<?php if(isset($price)) echo $price;?>" required="required"/>

        </div>
      </div> 
      <div class="form-group">
       <label class="control-label">Product Category</label>
        <div class="controls">
              <select name="product_cat" required>
              <option value="">----</option>
              <option value="1"<?php if ($cat_id==1) echo 'selected="selected"';?>>cat1</option>
              <option value="2" <?php if ($cat_id==2) echo 'selected="selected"';?>>cat2</option>

              </select>

        </div>
      </div>
      <div class="form-group">
              <label for="images" class="fileContainer btn btn-info btn-large"  ><i class="glyphicon glyphicon-camera"></i>              select product image<input  type="file" onchange="$('#imagefile').html(this.value)"  name="product_image" id="ads_image"  >
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
            
     <!-- <div class="form-group">
                 <p>Published : 
                    <input  type="checkbox"  role="yes-no" <?php if(isset($result[0]->featured) &&  $result[0]->featured== 1)echo                     'checked="checked"';?>  id="featured" name="featured"  />
                    <label for="published"><span class="ui"></span></label>
                 </p>
       </div>-->
    <div class="form-group">
    <input type="hidden" value="<?php echo $id?>" name="id" id="id" />
        <button type="submit" class="btn btn-primary btn-large">Save</button>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="btn btn-danger" href="
		 <?php echo base_url();?>admin/products">Cancle</a>
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
