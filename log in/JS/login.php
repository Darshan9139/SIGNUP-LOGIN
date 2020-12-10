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
    <form  method="post">
        <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <h1>LOG IN</h1>
            <br class="mb-3">
            <label for="email"><b>Email</b></label>
            <input class="form-control" id="email" type="text" name="email" required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" id="password" type="password" name="password" required>
            <br class="mb-3">
            <input class="btn btn-primary" id="login" type="submit" name="create" value="Log in">
        </div>
        </div>
        </div>
    </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		$('#login').click(function(e){
			var valid = this.form.checkValidity();

			if(valid){



			var email 		= $('#email').val();
			var password 	= $('#password').val();
			

            e.preventDefault();	

            $.ajax({
                type: 'POST',
                url: 'logincheck.php',
                data: {email: email ,password: password},
                success: function(data){
                    if(data.includes("Welcome")){
                        Swal.fire({
                            title: data,
                            icon: 'success',
                            })    
                    }
                    else if(data.includes("Invalid Password")){
                        Swal.fire({
                            title: 'Log In Failed',
                            icon: 'error',
                            
                            })
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'No Account Found ! ',
                            footer: '<a href="signup.php">Sign Up</a>'
                            })
                    }
           
                }
            });


            }else{

            }





        });		


    });
                    
                
</script>
</body>
</html>