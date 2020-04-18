<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Entry</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Data Entry<?php echo $_SESSION['username']; ?></h2>
  </div>
	
  <form method="post" action="data.php">
  	<?php include('errors.php'); ?>

	

	<?php echo "

	<div class=\"input-group\">
  	  <input type=\"text\" name=\"username\" value=\"Username\">
  	  <input type=\"text\" name=\"password_1\" value=\"Contact Person\">
  	  <input type=\"text\" name=\"password_2\" value=\"Location\">
	</div>"; ?>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_data">Enter Data</button>
  	</div>
  	<!-- <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p> -->
  </form>
</body>
</html>