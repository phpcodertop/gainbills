<div class="col-xs-8"> 

<?php 
if($result!=NULL){ 
	$id=$result[0]->id;
	$title=$result[0]->title;
	$description=$result[0]->description;
  $state=$result[0]->published;
	$parent_id=$result[0]->parent_id;
	//print_r($album_images);
 
	/*if($published==1){
		$s='Publish';
	}else{
		$s='Unpublish';
	}*/

}else{
	$id='';$title='';$description='';$state='';
}
$attributes = array('class' => '');
echo form_open_multipart('admin/products_cat/save',$attributes); ?>
<div class="col-xs-9">
    <div class="form-group">
        <label class="control-label">Category Title</label>
        <div class=" controls ">
            <input type="text" class="form-control" name="cat_title" size="30" value="<?php if(isset($title)) echo $title?>" required="required"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label">Sub Category</label>
        <div class=" controls ">
            <select name="parent_id">
              <option value="null" <?php if(isset($parent_id) && $parent_id == null) echo "selected"; ?> >Main Category</option>
              <?php foreach($category as $cat): ?>
                <option <?php if( isset($parent_id) && $parent_id == $cat['parent_id']) echo "selected"; ?> value="<?php if(isset($parent_id)) echo $cat['id']; ?>"  ><?php echo $cat['title']; ?></option>  
              <?php endforeach; ?>  
            </select>
        </div>
    </div>
   
      <div class="form-group">
       <label class="control-label">Product Description</label>
        <div class="controls">
           <textarea  id="edit" cols="70" rows="10" name="cat_desc"><?php if(isset($description)) echo $description;?></textarea>
            
        </div>
      </div> 
            
     <div class="form-group">
                 <p>Published : 
                    <input  type="checkbox"  role="yes-no" id="published" name="published" <?php if(isset($state) && $state == 1)echo 'checked="checked"';?>/>
                    <label for="published"><span class="ui"></span></label>
                 </p>
       </div>
    <div class="form-group">
    <input type="hidden" value="<?php echo $id?>" name="id" id="id" />
        <button type="submit" class="btn btn-primary btn-large">Save</button>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="btn btn-danger" href="
		 <?php echo base_url();?>admin/products_cat">Cancle</a>
    </div>
  
 </div>
  


<?php echo  form_close();?>
</div>