<?php
session_start();
include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>
    
     <!-- *********** login **************  -->
		<div class="container">
		
		<div class="col-sm-4">
            
		</div>
		<div class="col-sm-4">
		    <h2> Admin Login </h2><hr>
			<div class="form-group">
				<form method="post" action="loginVer.php" name="login">
					<label for="Email">Email</label>
					<input type="email" name="cMail" class="form-control" required /> <br/>
					
					<label for="password">Password</label>
					<input type="password" name="cPass" class="form-control" required /><br/>
					
					<input type="submit" name="admin" value="Log in" class="btn btn-success" />
				</form>
				</div>
		</div>
		<div class="col-sm-4">
            
		</div>
			
			
			
		</div>
<?php include "includes/last.php" ?>
<?php include "includes/footer.php" ?>