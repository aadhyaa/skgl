<?php include 'skglincludes/header.php'?>
        <div class="container-fluid">
            <div class="row-fluid">
<?php include 'skglincludes/sidebar.php'; ?>
                <!--/span-->
                <div class="span9" id="content">
  
<?php 
$tb_count=mysql_query("SELECT * FROM `boot_count_tb` ORDER BY id DESC LIMIT 1");
$tbRow=mysql_fetch_array($tb_count);
$countID=$tbRow['id']+1;
$count='PRO_'.$countID;
?>
                    
<?php 
$GetSQL=mysql_query("SELECT * FROM tbl_product WHERE prod_id=".$_GET['code']);
$GetRows=mysql_fetch_array($GetSQL);
?>
                    
                    
                     <!-- validation -->
                    <div class="row-fluid">

                         <?php if($_GET['success']==1){ ?>
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                        	Login successfully</div>
                    <?php }else {}?>

                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Product</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                    
                                      <fieldset>
                                        <legend>Add Product</legend>
                                        
                                                                               
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Product Name</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="prodname"  name="prodname" value="<?php echo $GetRows['prod_name']?>" />
                                            </div>
                                        </div>
                                         
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">Category</label>
                                          <div class="controls">
                                              <input type="text" class="span6"  id="category"  name="category" value="<?php echo $GetRows['category']?>" />
                                            </div>
                                        </div>
										 
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">Model No</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="modelno"  name="modelno" value="<?php echo $GetRows['model_no']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Capacity</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="capacity"  name="capacity" value="<?php echo $GetRows['capacity']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Compressor</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="compressor"  name="compressor" value="<?php echo $GetRows['compressor']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Power Requirement</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="powerreq"  name="powerreq" value="<?php echo $GetRows['power_req']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Advantage</label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="advantage"  name="advantage" value="<?php echo $GetRows['advantage']?>" />
                                          </div>
                                        </div>
										
										
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">Manufacturer Date</label>
                                          <div class="controls">
                                              <input type="text" class="span6"  id="manfdate"  name="manfdate" value="<?php echo $GetRows['manf_date']?>" />
                                          </div>
                                        </div>
										
									
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Photo</label>
                                          <div class="controls">
									<input class="input-file uniform_on" id="fileInput" type="file" name="photo">
									<?php $bb=mysql_query("SELECT * FROM tbl_product WHERE prod_id=".$_GET['code']);
									$rowbb=mysql_fetch_array($bb);
									
									
									
								   if($_GET['code']){
  ?>
                                           <img src="skgl/product/<?php echo $rowbb['img_url'] ?>" width="100" height="100"/>
                                           <?php } else {}?>
                                          </div>
                                        </div>

							
							
										 <div class="control-group">
                                          <label class="control-label" for="fileInput">Youtube</label>
                                          <div class="controls">
                                          
<input class="input-xlarge focused" id="focusedInput" type="text" name="video_url" value="<?php echo $GetRows['video_url'] ?>" />
<br clear="all"/>
eg: https://www.youtube.com/watch?v=<strong style="color:#F00">aDEaAOcDKnA</strong> copy <strong style="color:#F00">aDEaAOcDKnA</strong> and paste in textfield
<br clear="all"/>
<?php if($_GET['code']){?>
<iframe width="200" height="100" src="//www.youtube.com/embed/<?php echo $GetRows['video_url'] ?>" frameborder="0" allowfullscreen></iframe>
<?php }else{}?>
                                           
                                          
                                          </div>
                                        </div>
							
							

										<div class="control-group">
                                          <label class="control-label" for="typeahead">Product Price</label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="prod_price"  name="prod_price" value="<?php echo $GetRows['prod_price']?>" />
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Offer Price</label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="offer_price"  name="offer_price" value="<?php echo $GetRows['offer_price']?>" />
                                          </div>
                                        </div>
										
								
										<div class="control-group">
                                          <label class="control-label" for="select01">Description</label>
                                          <div class="controls">
<textarea class="ckeditor" placeholder="Enter text ..." style="width: 810px; height: 200px" name="desc"><?php echo $GetRows['prod_desc']?></textarea>
                                          </div>
                                        </div>

									

                                        <div class="form-actions">
                                        <?php if($_GET['code']){ ?>
                                        <input type="submit" class="btn btn-primary" value="Update changes" name="btnUpdate"/>
                                        <?php } else {?>
                                          <input type="submit" class="btn btn-primary" value="Save changes" name="btnSave"/>
                                           <?php }?>
                                          <a href="add-product.php" class="btn">Cancel</a>
                                          
                                        </div>
                                      </fieldset>
                                      
<?php 

$product_photo = $_FILES['photo']['name'];
	 
$tmp = $_FILES['photo']['tmp_name'];

	 	 
$dir = 'skgl/product/';

//$up=date('H-i-s');
if($_POST['btnSave']){
	
	$CSql=mysql_query("SELECT * FROM tbl_product WHERE prod_name ='".$_POST['prodname']."'");
					$CRows=mysql_num_rows($CSql);
					
					if($CRows == 1)
					{
?><script>alert('Product Name Already There!!..');</script><?php
echo '<meta http-equiv="refresh" content="0; URL=">';
					}
					else
					{
	
mysql_query("INSERT INTO tbl_product(prod_name,model_no,capacity,compressor,power_req,advantage,manf_date,img_url,video_url,prod_desc,prod_price,offer_price,category) VALUES ('".$_POST["prodname"]."','".$_POST["modelno"]."','".$_POST["capacity"]."','".$_POST["compressor"]."','".$_POST["powerreq"]."','".$_POST["advantage"]."','".$_POST["manfdate"]."','".$_FILES['photo']['name']."','".$_POST["video_url"]."','".$_POST["desc"]."','".$_POST["prod_price"]."','".$_POST["offer_price"]."','".$_POST["category"]."')");

	 

	  move_uploaded_file($tmp,$dir.'/'.$product_photo);
  
     
echo '<meta http-equiv="refresh" content="0; URL=">';
					?><script>alert('Successfully Inserted..');</script><?php
					
					}
}


if($_POST['btnUpdate'])
{
	
		
if(!empty($_FILES['photo']['name'])) {
	
	 mysql_query("update tbl_product set prod_name = '".$_POST['prodname']."',category = '".$_POST['category']."',model_no = '".$_POST['modelno']."',capacity = '".$_POST['capacity']."',compressor = '".$_POST['compressor']."',power_req = '".$_POST['powerreq']."',advantage = '".$_POST['advantage']."',manf_date='".$_POST['manfdate']."',img_url = '".$_FILES['photo']['name']."',video_url='".$_POST['video_url']."',prod_desc = '".$_POST['desc']."',prod_price = '".$_POST['prod_price']."',offer_price = '".$_POST['offer_price']."' where prod_id =".$_GET['code']);
         
     move_uploaded_file($tmp,$dir.'/'.$product_photo);
	
}

else
{

  mysql_query("update tbl_product set prod_name = '".$_POST['prodname']."',category = '".$_POST['category']."',model_no = '".$_POST['modelno']."',capacity = '".$_POST['capacity']."',compressor = '".$_POST['compressor']."',power_req = '".$_POST['powerreq']."',advantage = '".$_POST['advantage']."',manf_date='".$_POST['manfdate']."',video_url='".$_POST['video_url']."',prod_desc = '".$_POST['desc']."',prod_price = '".$_POST['prod_price']."',offer_price = '".$_POST['offer_price']."' where prod_id =".$_GET['code']);
 
	
}


  
					echo '<meta http-equiv="refresh" content="0; URL=add-product.php">';
					?><script>alert('Successfully Updated..');</script><?php
					

}

					
?>
                                      
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                     <!-- /validation -->
                     
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Product List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
<!--<a href="pages.php"><button class="btn btn-success">Add New Pages <i class="icon-plus icon-white"></i></button></a> 

<a href="pages-list.php"><button class="btn btn-success">Pages List<i class="icon-plus icon-white"></i></button></a>-->
                                      </div>
                                      <div class="btn-group pull-right">
                                         
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Product</th>                                              
                                                <th>Model No</th>
												<th>Manf Date</th>
												<th>Photo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
<?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_product");
while($tb_Row=mysql_fetch_array($tb_Sql)){
?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $tb_Row['prod_name'] ?></td>
												<td><?php echo $tb_Row['model_no'] ?></td>
												<td><?php echo $tb_Row['manf_date'] ?></td>
												<td><img src="skgl/product/<?php echo $tb_Row['img_url'] ?>" width="50" height="50"/></td>
                                                <td class="center">
                                                <form method="post">
<a href="add-product.php?code=<?php echo $tb_Row['prod_id'];?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>
<input type="submit" class="btn btn-danger delete" value="Delete"  name="del_<?php echo $tb_Row['prod_id'];?>"/>
<?php
if($_POST['del_'.$tb_Row['prod_id']])
{
	mysql_query("DELETE FROM tbl_product WHERE prod_id=".$tb_Row['prod_id']);
	echo '<meta http-equiv="refresh" content="0; URL=add-product.php">';
}
?>
</form>
</td>
                                            </tr>
 <?php } ?>                                           
                                            
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                     


                </div>
            </div>
            <hr>
<?php include 'skglincludes/footer.php'; ?>