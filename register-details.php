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
                                <div class="muted pull-left">Registered Users List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <!--<div class="table-toolbar">
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
                                  <!-- </div>-->
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
											    <th>First Name</th>
                                                <th>User / Email Id</th>
                                                <th>Mobile No</th>
												
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
<?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_register");
while($tb_Row=mysql_fetch_array($tb_Sql)){
?>
                                            <tr class="odd gradeX">
                                                
												<td><?php echo $tb_Row['fname'] ?></td>
                                                <td><?php echo $tb_Row['username'] ?></td>
												<td><?php echo $tb_Row['mobileno'] ?></td>


												
                                                <!--<td><?php //echo $tb_Row['twitter'] ?></td>-->
                                                
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