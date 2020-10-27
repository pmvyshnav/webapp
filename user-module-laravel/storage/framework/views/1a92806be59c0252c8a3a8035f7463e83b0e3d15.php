
<!DOCTYPE html>
<html lang="en">

    <?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body class="no-skin">

    <?php echo $__env->make('layouts.top_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="main-container" id="main-container">

        <?php  $nav='profile';  ?>

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
                            <h1> <b>USER PROFILE</b></h1>
                        </div>
                        <div class="row">

                        <?php if(session()->has('message')): ?>
                        <div class="alert alert-success" role="alert">
                        <strong>Message: </strong><?php echo e(session()->get('message')); ?>

                        </div>
                        <?php endif; ?>                    
                            
                            <div class="col-xs-12">
                                
                                <div class="table-header">
                                    User Profile Details
                                   
                                </div>                                
                                
                                <!-- PAGE CONTENT BEGINS -->
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">Username</th>
                                            <th class="center">Email</th>
                                            <th class="center">Date Of Birth</th>
                                            <th class="center">City</th>
                                            <th class="center">Edit</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                       <?php echo e($user->username); ?> 
                                                    </label>
                                                </td>
                                                <td class="center">
                                                <?php echo e($userdetails->email); ?> 
                                                </td >  
                                                <td class="center">
                                                <?php echo e($userdetails->dob); ?> 
                                                </td >   
                                                <td class="center">
                                                <?php echo e($userdetails->city); ?> 
                                                </td >                                                                                                                                           
                                                <td class="center">
                                                    <div class="hidden-sm hidden-xs action-buttons">

                                                        <a class="green" href="<?php echo e(asset('/users/edit/profile')); ?>" title="Edit">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>

                                    </tbody>
                                </table>


                                <!-- PAGE CONTENT ENDS -->
                            </div>
                        </div>
                        
                        

                    </div>



                </div>
            </div>
        </div>
          

        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </body>
</html>
