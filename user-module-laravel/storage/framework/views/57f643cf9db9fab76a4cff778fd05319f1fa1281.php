<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('assets/custom-css/custom.css')); ?>" rel="stylesheet" type="text/css">
    </head>
<body>
<?php if(session()->has('message')): ?>
<div class="alert alert-success" role="alert">
<strong>Message: </strong><?php echo e(session()->get('message')); ?>

    </div>
<?php endif; ?>
<div class="container" style="height:500px !important">

            <h1 id="main-title">Sign In</h1>
            <p id="subtitle">It only takes a minute!</p>
            <form method="post" id="LoginForm" action="<?php echo e(asset('users')); ?>">
            <?php echo e(csrf_field()); ?>

                <div id="username" class="placeholders">
                    <label id="pl_username" for="text" class="">Enter Username</label>
                    <input  id="pl_username" type="text" name="username" placeholder="Enter Username...">
                </div>
                <div id="password" class="placeholders">
                    <label id="pl_password" for="text" class="">Enter Password</label>
                    <input  id="pl_password" type="password" name="password" placeholder="Enter Password...">
                </div>                

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                
                <br><br>
            
                <button id="a-submit" type="submit">Submit</button>

              </form> 

              <p id="subtitle"><a href="<?php echo e(url('/')); ?>">Back to home</a></p>
        </div>

        <script src="<?php echo e(asset('assets/js/jquery-2.1.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
        <script>
            $('#LoginForm').validate({// initialize the plugin
                rules: {
                    username: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },                    
                }

            });
        </script>  

<!-- <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p> -->
</body>
</html>