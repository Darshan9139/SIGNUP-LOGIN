<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div>
    </div>
    <div>
    <form action="index.php" method="post">
        <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <h1>SIGN UP</h1>
            <br class="mb-3">
            <label for="firstname"><b>First Name</b></label>
            <input class="form-control" id="firstname" type="text" name="firstname" required>

            <label for="Lasttname"><b>Last Name</b></label>
            <input class="form-control" id="lastname" type="text" name="lastname" required>

            <label for="email"><b>Email</b></label>
            <input class="form-control" id="email" type="text" name="email" required>

            <label for="phoneno"><b>Phone No</b></label>
            <input class="form-control" id="phoneno" type="text" name="phoneno" required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" id="password" type="password" name="password" required>
            <br class="mb-3">
            <input class="btn btn-primary" id="register" type="submit" name="create" value="Sign Up">
        </div>
        </div>
        </div>
    </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phoneno = $('#phoneno').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'signupcheck.php',
					data: {firstname: firstname,lastname: lastname,email: email,phoneno: phoneno,password: password},
					success: function(data){
                        sweetAlert({
								'title': 'Successful',
								'text': data,
								'type': 'success',
								});
							
					},
					error: function(data){
						sweetAlert({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								});
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>