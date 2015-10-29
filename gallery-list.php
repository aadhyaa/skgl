<?php include 'skglincludes/header.php'?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include 'skglincludes/sidebar.php'; ?>
                <!--/span-->
                <div class="span9" id="content">
                <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Gallery List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="gallery.php"><button class="btn btn-success">Add Gallery <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <!--<div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>-->
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Gallery Image</th>
                                           
                                                
                                                
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
<?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_gallery");
while($tb_Row=mysql_fetch_array($tb_Sql)){
?>
                                            <tr class="odd gradeX">
                                                
												<td><?php echo $tb_Row['title'] ?></td>
                                                <td><img src="skgl/gallery/<?php echo $tb_Row['photo'] ?>" width="100" height="100"/></td>

                                                <!--<td><?php //echo $tb_Row['twitter'] ?></td>-->
                                                
                                                <td class="center">
                                                <form method="post">
<a href="gallery.php?code=<?php echo $tb_Row['gallery_id'];?>" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a>
<input type="submit" class="btn btn-danger delete" value="Delete"  name="del_<?php echo $tb_Row['gallery_id'];?>"/>
<?php
if($_POST['del_'.$tb_Row['gallery_id']])
{
	unlink('skgl/gallery/'.$tb_Row['photo']); 
	mysql_query("DELETE FROM tbl_gallery WHERE gallery_id=".$tb_Row['gallery_id']);
		?>
        <script>alert('Deleted Successfully');</script>
        <?php
		echo '<meta http-equiv="Refresh" content="0; url=" />';
	
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