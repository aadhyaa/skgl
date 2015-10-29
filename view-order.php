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
                                <div class="muted pull-left">Orders List</div>
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
											    <th>User</th>
                                                <th>Product</th>
                                                <th>Category</th>
												<th>Model No</th>
                                                <th>Qty</th>
												<th>Price</th>
                                                <th>Amount</th>
												
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
<?php 
$tb_Sql=mysql_query("SELECT * FROM tbl_order");
while($tb_Row=mysql_fetch_array($tb_Sql)){
?>
                                            <tr class="odd gradeX">
                                                
												<td><?php echo $tb_Row['username'] ?></td>
                                                <td><?php echo $tb_Row['prod_name'] ?></td>
												<td><?php echo $tb_Row['category'] ?></td>
<td><?php echo $tb_Row['model_no'] ?></td>
<td><?php echo $tb_Row['qty'] ?></td>
<td><?php echo $tb_Row['prod_price'] ?></td>
<td><?php echo $tb_Row['tot_amount'] ?></td>

												
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