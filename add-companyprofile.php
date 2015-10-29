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
$GetSQL=mysql_query("SELECT * FROM tbl_companyinfo WHERE company_id=".$_GET['code']);
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
                                <div class="muted pull-left">Add Company Profile</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                    
                                      <fieldset>
                                        <legend>Add Company Profile</legend>
                                        
                                                                               
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Company Name</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="companyname"  name="companyname" value="<?php echo $GetRows['company_name']?>" />
                                            </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Sub Name</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="subname"  name="subname" value="<?php echo $GetRows['sub_name']?>" />
                                            </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Tag Line</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="tagline"  name="tagline" value="<?php echo $GetRows['tag_line']?>" />
                                            </div>
                                        </div>
                                         
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Reg.Office Address</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="compadd1"  name="compadd1" value="<?php echo $GetRows['company_add1']?>" />
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="compadd2"  name="compadd2" value="<?php echo $GetRows['company_add2']?>" />
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="compadd3"  name="compadd3" value="<?php echo $GetRows['company_add3']?>" />
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="compadd4"  name="compadd4" value="<?php echo $GetRows['company_add4']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Postal Address</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="postadd1"  name="postadd1" value="<?php echo $GetRows['post_add1']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="postadd2"  name="postadd2" value="<?php echo $GetRows['post_add2']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="postadd3"  name="postadd3" value="<?php echo $GetRows['post_add3']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="postadd4"  name="postadd4" value="<?php echo $GetRows['post_add4']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Telephone No</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="telphone"  name="telphone" value="<?php echo $GetRows['telephone_no']?>" />
                                          </div>
                                        </div>
										
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Dealer First</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="dealfadd1"  name="dealfadd1" value="<?php echo $GetRows['dealerf_add1']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealfadd2"  name="dealfadd2" value="<?php echo $GetRows['dealerf_add2']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealfadd3"  name="dealfadd3" value="<?php echo $GetRows['dealerf_add3']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealfadd4"  name="dealfadd4" value="<?php echo $GetRows['dealerf_add4']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealfadd5"  name="dealfadd5" value="<?php echo $GetRows['dealerf_add5']?>" />
                                          </div>
                                        </div>
										
										
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead">Dealer Second</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="dealsadd1"  name="dealsadd1" value="<?php echo $GetRows['dealersc_add1']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealsadd2"  name="dealsadd2" value="<?php echo $GetRows['dealersc_add2']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealsadd3"  name="dealsadd3" value="<?php echo $GetRows['dealersc_add3']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealsadd4"  name="dealsadd4" value="<?php echo $GetRows['dealersc_add4']?>" />
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealsadd5"  name="dealsadd5" value="<?php echo $GetRows['dealersc_add5']?>" />
                                          </div>
                                        </div>
										
										 <div class="control-group">
                                          <label class="control-label" for="typeahead"></label>
                                          <div class="controls">
                                              <input type="text" class="span6"   id="dealsadd6"  name="dealsadd6" value="<?php echo $GetRows['dealersc_add6']?>" />
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Email Id</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="emailid"  name="emailid" value="<?php echo $GetRows['company_email_id']?>" />
                                          </div>
                                        </div>
									
									
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Website Url</label>
                                          <div class="controls">
                                              <input type="text" class="span6" required="required"  id="weburl"  name="weburl" value="<?php echo $GetRows['company_url']?>" />
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="fileInput">Youtube Image</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="photo">
                                            <?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_companyinfo WHERE company_id=".$_GET['code']);
$tb_Row=mysql_fetch_array($tb_Sql);
if($_GET['code']){
?>

<img src="skgl/video/<?php echo $tb_Row['photo'] ?>" width="100" height="100"/>
<?php } else{}?>
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
                                          <label class="control-label" for="select01">Description</label>
                                          <div class="controls">
<textarea class="ckeditor" placeholder="Enter text ..." style="width: 810px; height: 200px" name="desc"><?php echo $GetRows['company_desc']?></textarea>
                                          </div>
                                        </div>

									
									<div class="control-group">
                                          <label class="control-label" for="select01">Advantages Of Skgl</label>
                                          <div class="controls">
<textarea class="ckeditor" placeholder="Enter text ..." style="width: 810px; height: 200px" name="adv"><?php echo $GetRows['skgl_adv']?></textarea>
                                          </div>
                                        </div>

										
									<div class="control-group">
                                          <label class="control-label" for="select01">Working Of Skgl</label>
                                          <div class="controls">
<textarea class="ckeditor" placeholder="Enter text ..." style="width: 810px; height: 200px" name="work"><?php echo $GetRows['skl_working']?></textarea>
                                          </div>
                                        </div>
										
                                        <div class="form-actions">
                                        <?php if($_GET['code']){ ?>
                                        <input type="submit" class="btn btn-primary" value="Update changes" name="btnUpdate"/>
                                        <?php } else {?>
                                          <input type="submit" class="btn btn-primary" value="Save changes" name="btnSave"/>
                                           <?php }?>
                                          <a href="add-companyprofile.php" class="btn">Cancel</a>
                                          
                                        </div>
                                      </fieldset>
                                      
<?php 


$video = $_FILES['photo']['name'];
	 
$tmp = $_FILES['photo']['tmp_name'];

	 	 
$dir = 'skgl/video/';

//$up=date('H-i-s');
if($_POST['btnSave']){
	
	$CSql=mysql_query("SELECT * FROM tbl_companyinfo WHERE company_name ='".$_POST['companyname']."'");
					$CRows=mysql_num_rows($CSql);
					
					if($CRows == 1)
					{
?><script>alert('Company Name Already There!!..');</script><?php
echo '<meta http-equiv="refresh" content="0; URL=">';
					}
					else
					{
	
mysql_query("INSERT INTO tbl_companyinfo(company_name,sub_name,tag_line,company_add1,company_add2,company_add3,company_add4,post_add1,post_add2,post_add3,post_add4,telephone_no,dealerf_add1,dealerf_add2,dealerf_add3,dealerf_add4,dealerf_add5,dealersc_add1,dealersc_add2,dealersc_add3,dealersc_add4,dealersc_add5,dealersc_add6,company_email_id,company_url,video_url,company_desc,skgl_adv,skl_working,photo) VALUES ('".$_POST["companyname"]."','".$_POST["subname"]."','".$_POST["tagline"]."','".$_POST["compadd1"]."','".$_POST["compadd2"]."','".$_POST["compadd3"]."','".$_POST["compadd4"]."','".$_POST["postadd1"]."','".$_POST["postadd2"]."','".$_POST["postadd3"]."','".$_POST["postadd4"]."','".$_POST["dealfadd1"]."','".$_POST["dealfadd2"]."','".$_POST["dealfadd3"]."','".$_POST["dealfadd4"]."','".$_POST["dealfadd5"]."','".$_POST["dealsadd1"]."','".$_POST["dealsadd2"]."','".$_POST["dealsadd3"]."','".$_POST["dealsadd4"]."','".$_POST["dealsadd5"]."','".$_POST["dealsadd6"]."','".$_POST["telphone"]."','".$_POST["emailid"]."','".$_POST["weburl"]."','".$_POST["video_url"]."','".$_POST["desc"]."','".$_POST["adv"]."','".$_POST["work"]."','".$_FILES['photo']['name']."')");

 move_uploaded_file($tmp,$dir.'/'.$video);
	
echo '<meta http-equiv="refresh" content="0; URL=">';
					?><script>alert('Successfully Inserted..');</script><?php
					
					}
}


if($_POST['btnUpdate'])
{
	
		
   if($_FILES['photo']['name']!=''){
	   
	   mysql_query("update tbl_companyinfo set company_name = '".$_POST['companyname']."',sub_name = '".$_POST['subname']."',photo = '".$_FILES['photo']['name']."',tag_line = '".$_POST['tagline']."',company_add1 = '".$_POST['compadd1']."',company_add2 = '".$_POST['compadd2']."',company_add3 = '".$_POST['compadd3']."',company_add4 = '".$_POST['compadd4']."',post_add1 = '".$_POST['postadd1']."',post_add2 = '".$_POST['postadd2']."',post_add3 = '".$_POST['postadd3']."',post_add4 = '".$_POST['postadd4']."',dealerf_add1 = '".$_POST['dealfadd1']."',dealerf_add2 = '".$_POST['dealfadd2']."',dealerf_add3 = '".$_POST['dealfadd3']."',dealerf_add4 = '".$_POST['dealfadd4']."',dealerf_add5 = '".$_POST['dealfadd5']."',dealersc_add1 = '".$_POST['dealsadd1']."',dealersc_add2 = '".$_POST['dealsadd2']."',dealersc_add3 = '".$_POST['dealsadd3']."',dealersc_add4 = '".$_POST['dealsadd4']."',dealersc_add5 = '".$_POST['dealsadd5']."',dealersc_add6 = '".$_POST['dealsadd6']."',telephone_no='".$_POST['telphone']."',company_email_id = '".$_POST["emailid"]."',company_url = '".$_POST["weburl"]."',video_url='".$_POST['video_url']."',company_desc = '".$_POST['desc']."',skgl_adv = '".$_POST['adv']."',skl_working = '".$_POST['work']."' where company_id =".$_GET['code']);
       move_uploaded_file($tmp,$dir.'/'.$video);
   }
   else
   {
mysql_query("update tbl_companyinfo set company_name = '".$_POST['companyname']."',sub_name = '".$_POST['subname']."',tag_line = '".$_POST['tagline']."',company_add1 = '".$_POST['compadd1']."',company_add2 = '".$_POST['compadd2']."',company_add3 = '".$_POST['compadd3']."',company_add4 = '".$_POST['compadd4']."',post_add1 = '".$_POST['postadd1']."',post_add2 = '".$_POST['postadd2']."',post_add3 = '".$_POST['postadd3']."',post_add4 = '".$_POST['postadd4']."',dealerf_add1 = '".$_POST['dealfadd1']."',dealerf_add2 = '".$_POST['dealfadd2']."',dealerf_add3 = '".$_POST['dealfadd3']."',dealerf_add4 = '".$_POST['dealfadd4']."',dealerf_add5 = '".$_POST['dealfadd5']."',dealersc_add1 = '".$_POST['dealsadd1']."',dealersc_add2 = '".$_POST['dealsadd2']."',dealersc_add3 = '".$_POST['dealsadd3']."',dealersc_add4 = '".$_POST['dealsadd4']."',dealersc_add5 = '".$_POST['dealsadd5']."',dealersc_add6 = '".$_POST['dealsadd6']."',telephone_no='".$_POST['telphone']."',company_email_id = '".$_POST["emailid"]."',company_url = '".$_POST["weburl"]."',video_url='".$_POST['video_url']."',company_desc = '".$_POST['desc']."',skgl_adv = '".$_POST['adv']."',skl_working = '".$_POST['work']."' where company_id =".$_GET['code']);

   }

 
  
					echo '<meta http-equiv="refresh" content="0; URL=add-companyprofile.php">';
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
                                <div class="muted pull-left">Company List</div>
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
                                                <th>Company</th>                                              
                                                <th>Company Url</th>
												<th>Telephone</th>
												<th>Email Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
<?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_companyinfo");
while($tb_Row=mysql_fetch_array($tb_Sql)){
?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $tb_Row['company_name'] ?></td>
												<td><?php echo $tb_Row['company_url'] ?></td>
												<td><?php echo $tb_Row['telephone_no'] ?></td>
												<td><?php echo $tb_Row['company_email_id'] ?></td>
                                                <td class="center">
                                                <form method="post">
<a href="add-companyprofile.php?code=<?php echo $tb_Row['company_id'];?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>
<input type="submit" class="btn btn-danger delete" value="Delete"  name="del_<?php echo $tb_Row['company_id'];?>"/>
<?php
if($_POST['del_'.$tb_Row['company_id']])
{
	mysql_query("DELETE FROM tbl_companyinfo WHERE company_id=".$tb_Row['company_id']);
	echo '<meta http-equiv="refresh" content="0; URL=add-companyprofile.php">';
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