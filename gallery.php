<?php include 'skglincludes/header.php'?>
        <div class="container-fluid">
            <div class="row-fluid">
<?php include 'skglincludes/sidebar.php'; ?>
                <!--/span-->
                <div class="span9" id="content">
                    
<?php 
$GetSQL=mysql_query("SELECT * FROM tbl_gallery WHERE gallery_id='".$_GET['code']."'");
$GetRows=mysql_fetch_array($GetSQL);
?>
                     <!-- validation -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Gallery</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" style="min-height:600px;">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                    
                                      <fieldset>
                                        <legend>Add Gallery</legend>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="title" value="<?php echo $GetRows['title']?>" />
                                            <!--<p class="help-block"></p>-->
                                          </div>
                                        </div>
                                        
                                        
                                        
                                       

                                        
                                        
                                        
                                      <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="photo">
                                            <?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_gallery WHERE gallery_id=".$_GET['code']);
$tb_Row=mysql_fetch_array($tb_Sql);
if($_GET['code']){
?>

<img src="skgl/gallery/<?php echo $tb_Row['photo'] ?>" width="100" height="100"/>
<?php } else{}?>
                                          </div>
                                        </div>
                                        
                                       
                                        
                                        
                                        <div class="form-actions">
                                        <?php if($_GET['code']){ ?>
                                        <input type="submit" class="btn btn-primary" value="Update changes" name="btnUpdate"/>
                                        <?php } else {?>
                                          <input type="submit" class="btn btn-primary" value="Save changes" name="btnSave"/>
                                           <?php }?>
                                          <button type="reset" class="btn">Cancel</button>
                                          <a href="gallery-list.php" class="btn btn-success">View Gallery List</a>
                                        </div>
                                      </fieldset>
                                      
<?php 
$dir='skgl/gallery';
//$up=date('H-i-s');
if($_POST['btnSave']){
	

	
mysql_query("INSERT INTO tbl_gallery(title,photo) VALUES ('".$_POST['title']."','".$_FILES['photo']['name']."')");
move_uploaded_file($_FILES['photo']['tmp_name'],$dir.'/'.$_FILES['photo']['name']);	
?><script>alert('Successfully Inserted!!..');</script><?php
echo '<meta http-equiv="Refresh" content="0; url=" />';	
					
}


if($_POST['btnUpdate'])
{
	if($_FILES['photo']['name']!=''){
mysql_query("UPDATE tbl_gallery SET title ='".$_POST['title']."',photo ='".$_FILES['photo']['name']."' WHERE gallery_id=".$_GET['code']);
move_uploaded_file($_FILES['photo']['tmp_name'],$dir.'/'.$_FILES['photo']['name']);
	}
	else
	{
		mysql_query("UPDATE tbl_gallery SET  title ='".$_POST['title']."' WHERE gallery_id=".$_GET['code']);
	}
?><script>alert('Successfully Updated!!..');</script><?php
echo '<meta http-equiv="refresh" content="0; URL=">';
}

					
?>
                                      
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                     <!-- /validation -->
                     


                </div>
            </div>
            <hr>
<?php include 'skglincludes/footer.php'; ?>