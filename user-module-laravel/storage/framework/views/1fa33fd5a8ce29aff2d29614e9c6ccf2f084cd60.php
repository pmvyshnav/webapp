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
<div class="container">
            <h1 id="main-title">Sign Up</h1>
            <p id="subtitle">It only takes a minute!</p>
            <form method="post" id="OtpForm" action="/submitotp">
            <?php echo e(csrf_field()); ?>

                <div id="otp" class="placeholders">
                    <label id="pl_otp" for="text" class="">Enter OTP</label>
                    <input  id="pl_otp" type="text" name="otp" placeholder="Enter OTP...">
                    <!-- <input   type="text" name="id" value="<?php echo e(session('id')); ?>"> -->
                    <!-- <input   type="text" name="id" value="<?php echo e(session('otp')); ?>"> -->
                </div>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                
                <br><br>
            
                <button id="a-submit" type="submit">Submit</button>

              </form> 

        </div>

        <script src="<?php echo e(asset('assets/js/jquery-2.1.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
        <script>
            $('#OtpForm').validate({// initialize the plugin
                rules: {
                    otp: {
                        required: true,
                        digits: true,
                        minlength: 4,
                        maxlength: 4,
                    },                    
                }

            });
        </script>      

<!-- <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p> -->
</body>
</html>