<option></option>
<option value="<?php echo $category['id'];?>" <?php if($category['id']==$this->model['parent_id']) echo " selected ";?><?php if($category['id']==$this->model['id']) echo " disabled ";?>>  
	<?php echo $tab.$category['name']; ?>
</option>
<?php if(isset($category['childs'])): ?>
	<? echo $this->getMenuHtml($category['childs'],$tab."--"); ?>
<?php endif; ?>

