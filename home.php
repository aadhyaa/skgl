<?php include 'skglincludes/header.php';?>
        <div class="container-fluid">
            <div class="row-fluid">
<?php include 'tempincludes/sidebar.php';?>
                
                <!--/span-->
                
                   
                <div class="span9" id="content">
                    <div class="row-fluid">
                    <?php if($_GET['success']==1){ ?>
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                        	Login successfully</div>
                    <?php }else {}?>
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="#">Welcome to </a> <span class="divider">/</span>	
	                                    </li>
	                                    
	                                    <li class="active">Dashboard</li>
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                        <h3>Header Logos</h3>
        <form method="post" enctype="multipart/form-data" >
                    <div class="row-fluid">
                        <div class="span12">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Main Logo</div>
                                    
                                </div>
                                <div class="block-content collapse in">
                                   <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="image1">
                                            <input type="submit" class="btn btn-success btn-mini" value="Update" name="logo1" />
                                            <?php $sellog=mysql_query("SELECT * FROM `way_logos` WHERE id=1");
											$rowlog=mysql_fetch_array($sellog);
											?>
                                            <img src="../public/logos/<?php echo $rowlog['images']?>" width="200"/>
                                            <br clear="all"/>
                                            <input type="submit" class="btn btn-danger btn-mini" value="Delete" name="logo1del" />
                                            
 <?php 
 if($_POST['logo1']){
$log=mysql_query("UPDATE `way_logos` SET `images`='1_".$_FILES['image1']['name']."' WHERE id=1");	
move_uploaded_file($_FILES['image1']['tmp_name'],'../public/logos/1_'.$_FILES['image1']['name']);
echo '<meta http-equiv="Refresh" content="0; url=" />';
 }
  if($_POST['logo1del'])
 {
	 unlink('../public/logos/'.$rowlog['images']); 
	mysql_query("UPDATE `way_logos` SET images='' WHERE id=1");
		?>
        <script>alert('Deleted Successfully');</script>
        <?php
		echo '<meta http-equiv="Refresh" content="0; url=" />';
 }
?>
                                          </div>
                                        </div> 
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        
                    </div>
        </form>            
                        <h3>Top Contact & Email Address</h3>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Basic Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>Email</th>
	 <th>Phone</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>
                                          <form method="post">
										  <?php $emSql=mysql_query("SELECT * FROM `way_contact` WHERE id=1"); 
										  $emRows=mysql_fetch_array($emSql);
										  ?>
                                          <div class="controls">
                                            <input type="text" value="<?php echo $emRows['email']?>" id="focusedInput" name="con_email" class="input-xlarge focused">
                                             </td>
                                            <td>
                                            <input type="text" value="<?php echo $emRows['phone']?>" id="focusedInput" name="con_phone" class="input-xlarge focused">
                                          </div>
                                          </td>
                                          
                                          <td>
										 
                                         
                                           <input type="submit" class="btn btn-primary" value="Update"  name="upEmail"/>
                                           
                                           <?php 
										   if($_POST['upEmail']){
										   $upEmail=mysql_query("UPDATE `way_contact` SET `email`='".$_POST['con_email']."',`phone`='".$_POST['con_phone']."' WHERE id=1");
										   	?>
        <script>alert('Update Successfully');</script>
        <?php
		echo '<meta http-equiv="Refresh" content="0; url=" />';
										   }
										   ?>
                                           </form>
                                         
                                          </td>

						                </tr>
						                
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    
                    
                     <h3>Welcome & Slogan</h3>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Basic Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  
						                  <th>Welcome Content</th>
	 <th></th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  
						                  <td>
                                          <form method="post">
										  <?php $emSql=mysql_query("SELECT * FROM `way_wel_slo` WHERE id=1"); 
										  $emRows=mysql_fetch_array($emSql);
										  ?>
                                          <div class="controls">
                                           <textarea class="ckeditor" placeholder="Enter text ..." style="width:310px; height: 200px"  name="welcome"><?php echo $emRows['welcome']?></textarea>
                                             </td>
                                           
                                          
                                          <td>
										 
                                         
                                           <input type="submit" class="btn btn-primary" value="Update"  name="upwel"/>
                                           
                                           <?php 
										   if($_POST['upwel']){
										   $upEmail=mysql_query("UPDATE `way_wel_slo` SET `welcome`='".$_POST['welcome']."' WHERE id=1");
										   	?>
        <script>alert('Update Successfully');</script>
        <?php
		echo '<meta http-equiv="Refresh" content="0; url=" />';
										   }
										   ?>
                                           </form>
                                         
                                          </td>

						                </tr>
						                
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
        <?php include 'tempincludes/footer.php';?>