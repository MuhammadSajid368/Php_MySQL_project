<?php 

$page = "Login";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-4 login">
                <h2 class="text-center mt-2">Login</h2>
               
                <div class="col-8 offset-2 form">
                <?php if(isset($error)){?>
                <div class="alert alert-danger">
                <?= $error ?>
                </div>
                <?php } ?>
                <form action="login.php" method="post">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                    <input type="submit" value="Login" class="btn btn-secondary mt-2" name="btnLogin">
                    <hr>
                </form>

                </div>
                
                

            </div>
        </div>
    </div>
    
 </body>
 </html>





