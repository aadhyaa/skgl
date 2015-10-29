<?php include 'skglincludes/header.php'?>
        <div class="container-fluid">
            <div class="row-fluid">
<?php include 'skglincludes/sidebar.php'; ?>
                <!--/span-->
                <div class="span9" id="content">
  

                    

                     <!-- validation -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Change Password</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="" method="post">

    <div class="form-group input-group">
  <span class="input-group-addon">Username</span>
  <input type="text" class="form-control" disabled value="<?php echo $_SESSION['sess_username'] ?>" name="user">
</div>
                                         <div class="form-group input-group">
  <span class="input-group-addon">Password</span>
  <input type="password" required="required" class="form-control" name="pass">
</div>
   <input type="submit" class="btn btn-default" value="Change Password" name="btn1"/>   
   
   <?php
   
    $query = "SELECT id, username, password, salt
    FROM admin_details
    WHERE id=1";
     
    $result = mysql_query($query);
    $userData = mysql_fetch_array($result);
	
    $hash = hash('sha256', $userData['salt'] . hash('sha256', $_POST['pass']) );

   		if($_POST['btn1'])
   		{
	   
		mysql_query("UPDATE admin_details SET `password`='".$hash."' WHERE id=1");	
		?>
        <script>alert('Update Successfully');</script>
        <?php
		echo '<meta http-equiv="Refresh" content="0; url=" />';
		
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