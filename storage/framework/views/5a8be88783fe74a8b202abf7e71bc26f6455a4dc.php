
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crypterio</title>
    <?php echo $__env->make('assets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>
    <header>
        <div class="container-full-width">
            <div class="crypt-header">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="crypt-logo"><h4 style="margin:20px 0px 0px 30px; color:green;">OnlineTrade Buy/Sell</h4><!--<img src="images/logo.jpg" alt="">--></div>
                            </div>
                            <div class="col-xs-2">
                                <div class="crypt-mega-dropdown-menu"> <a href="#" class="crypt-mega-dropdown-toggle">BTC/USD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block d-lg-block">
                        <ul class="crypt-heading-menu fright">
                            <li class="crypto-has-dropdown"><a href="exchange.html">Dashboard</a>
                                
                            </li>
                            <li><a href="market-overview.html">Overview</a></li>
                            <li><a href="marketcap.html">Market Cap</a></li>
                            <li><a href="trading.html">Trading</a></li>
                            <li><a href="withdrawl.html">Account</a></li>
                            <li class="crypt-box-menu menu-red"><a href="register.html">register</a></li>
                            <li class="crypt-box-menu menu-green"><a href="login.html">login</a></li>
                        </ul>
                    </div><i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i></div>
            </div>
        </div>
        <div class="crypt-mobile-menu">
            <!-- <ul class="crypt-heading-menu">
                <li class="active"><a href="#">Exchange</a></li>
                <li><a href="#">Market Cap</a></li>
                <li><a href="#">Treanding</a></li>
                <li><a href="#">Tools</a></li>
                <li class="crypt-box-menu menu-red"><a href="#">register</a></li>
                <li class="crypt-box-menu menu-green"><a href="#">login</a></li>
            </ul> -->
            <div class="crypt-gross-market-cap">
                <h5>$34.795.90 <span class="crypt-up pl-2">+3.435 %</span></h5>
                <h6>0.7925.90 BTC <span class="crypt-down pl-2">+7.435 %</span></h6></div>
        </div>
    </header>