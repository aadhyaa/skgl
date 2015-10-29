<?php ob_start();
session_start();?>
<!DOCTYPE html>
<html>
  <head>
  <?php require 'skglfunction/db_connector.php'; error_reporting(0); ?>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="vendors/jquery-1.9.1.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" method="post" >
        <h2 class="form-signin-heading">Administrator</h2>
        <?php 
		if($_GET['error']==1)
		{
		echo '<div class="alert alert-error">
				<strong>Error!</strong> Wrong username or password.
			 </div>';
		}
		?>
        <label>Username</label>
       <input type="text" name="username" class="input-block-level" placeholder="Username"/>
       <label>Password</label>
        <input type="password" name="password"  class="input-block-level" placeholder="Password"/>
        
        <input type="submit" name="button" class="btn btn-large btn-primary" value="Login"/>
         <?php
    
if($_POST['button']){

    $username = $_POST['username'];
    $password = $_POST['password'];
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
    $query = "SELECT id, username, password, salt
    FROM admin_details
    WHERE username = '$username';";
     
    $result = mysql_query($query);
     
    if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
    {
		
    header('Location: index.php?error=1');

    }
     
    $userData = mysql_fetch_array($result, MYSQL_ASSOC);
	
    $hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );

    if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
    {
    //header('Location: home.php');
	
	echo '<meta http-equiv="refresh" content="0; URL=index.php?error=1">';
	
	
    }else{ // Redirect to home page after successful login.
	session_start();
    session_regenerate_id();
    $_SESSION['sess_user_id'] = $userData['id'];
    $_SESSION['sess_username'] = $userData['username'];
    session_write_close();
    header('Location: add-product.php?success=1');
	echo '<meta http-equiv="refresh" content="0; URL=add-product.php?success=1">';
    }
}
    ?>   
      </form>

    </div> <!-- /container -->
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>