
<!DOCTYPE html>
<html lang="en">
<head class="crypt-dark">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($settings->site_name."|".$title); ?></title>
    <?php echo $__env->make('trade.assets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body class="crypt-dark">
    <header>
        <div class="container-full-width">
            <div class="crypt-header">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="crypt-logo"><h4 style="margin:20px 0px 0px 30px; color:#fff;">OnlineTrade Buy/Sell</h4><!--<img src="images/<?php echo e($settings->logo); ?>" alt="">--></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block d-lg-block">
                        <ul class="crypt-heading-menu fright">
                            <li class="crypt-box-menu menu-green"><a href="<?php echo e(url('dashboard')); ?>">Dashboard</a></li>
                        </ul>
                    </div><i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i></div>
            </div>
        </div>
    </header>