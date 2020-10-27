
<!DOCTYPE html>
<html lang="en">

    <?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body class="no-skin">

    <?php echo $__env->make('layouts.top_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="main-container" id="main-container">

        <?php  $nav='edit';  ?>

        <?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="./">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>


                    <div class="page-content">

                    <div class="page-header">
                            <h1>
                                <b> UPDATE USER PROFILE DETAILS</b>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <form class="form-horizontal" id="UpdateForm" role="form" method="POST" action="<?php echo e(asset('users/update')); ?>" >
                                <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

                                        <div class="col-sm-6">
                                            <input type="text" name="usernmae" readonly value="<?php echo e($user->username); ?>" class="col-xs-10 col-sm-10" />
                                        </div>
                                    </div>                               
                                <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

                                        <div class="col-sm-6">
                                            <input type="email" name="email" value="<?php echo e($userdetails->email); ?>" class="col-xs-10 col-sm-10" required/>
                                        </div>
                                    </div>                                   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Birth </label>

                                        <div class="col-sm-6">
                                            <input type="date" name="dob" value="<?php echo e($userdetails->dob); ?>" class="col-xs-10 col-sm-10" required/>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> City </label>

                                        <div class="col-sm-6">
                                            <input type="text" name="city" value="<?php echo e($userdetails->city); ?>" class="col-xs-10 col-sm-10" required/>
                                        </div>
                                    </div>     
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">  
                                     
                                    <div class="">
                                        <div class="col-md-offset-3 col-md-9">                                            
                                            <button type="submit" class="btn btn-info" name="submit">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>                                    
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                        
                        

                    </div>



                </div>
            </div>
        </div>
          

        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <script src="<?php echo e(asset('assets/js/jquery-2.1.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
        <script type="text/javascript">
                        $(document).ready(function (){
                $('#UpdateForm').validate({// initialize the plugin
//                    ignore: ":hidden:not(.appr-select)",
                    rules: {                      

                        dob: {
                            required: true,
                        },
                        city: {
                            required: true,
                        },                        
                        email: {
                            required: true,
                        },
                       
                    },



                });                
            });
        </script> 

    </body>
</html>
