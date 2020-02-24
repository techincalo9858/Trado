
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crypterio</title>
    <link rel="stylesheet" href="trade/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="trade/css/style.css">
    <link rel="stylesheet" href="trade/css/icons.css">
    <link rel="stylesheet" href="trade/css/ui.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
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
  <?php $rates = app('App\Http\Controllers\GetRates'); ?>
  
  <?php
  $base="ETH";
  $quote="USD";
  
  $data=$rates->get_rate($base,$quote);
  ?>
  
    <div class="container-fluid">
        <div class="row sm-gutters">
            <?php echo $__env->make('cryptopairs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <div class="col-md-6 col-lg-6 col-xl-7 col-xxl-8">
                <div class="crypt-gross-market-cap mt-4">
                    <div class="row">
                        <div class="col-3 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <p>Last Price BTC/USD</p>
                                    <p><?php echo e($data["ticker"]["price"]); ?></p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <p>Change BTC/USD</p>
                                    <?php if($data["ticker"]["change"] < 0): ?>
                                    <p class="crypt-down"><?php echo e($data["ticker"]["change"]); ?></p>
                                    <?php else: ?>
                                    <p class="crypt-up"><?php echo e($data["ticker"]["change"]); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p>High BTC</p>
                            <p class="crypt-up"><?php echo e($data["ticker"]["price"]); ?></p>
                        </div>
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p>Low BTC</p>
                            <p class="crypt-down"><?php echo e($data["ticker"]["price"]); ?></p>
                        </div>
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p>Volume 24Hr</p>
                            <p class="crypt-down"><?php echo e($data["ticker"]["volume"]); ?></p>
                        </div>
                    </div>
                </div>
                
                
                <div class="tradingview-widget-container mb-3">
                    <div id="crypt-candle-chart"></div>
                    <!--<p>Your Trading Chart</p>-->

                </div>
                <!--<div id="depthchart" class="depthchart h-40"></div>-->
                <!-- this is the action controller ExchangeController@updatemarket -->
                <div class="crypt-boxed-area">
                    <h6 class="crypt-bg-head"><b class="crypt-up">BUY</b> / <b class="crypt-down">SELL</b></h6>
                    
                    <form id="selectform">
                    @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"> <span class="input-group-text"><strong style="text-align:center;">Select Market</strong></span> </div>
                            <select class="form-control" name="market" id="select">
                                <option value="BTC/USD">BTC/USD</option> 
                                <option value="ETH/USD">ETH/USD</option> 
                                <option value="LTC/USD">LTC/USD</option> 
                                <option value="BTC/ETH" >BTC/ETH</option> 
                                <option value="BTC/LTC" >BTC/LTC</option> 
                            </select>
                                        
                        </div> 
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    </form>
<script type="text/javascript">
    var frm = $('#select');

    frm.on('change',function(){
            $.ajax({
            url: '/exchange',
            type: 'POST',
            data: frm.serialize(),
            success: function (data) {
                swal({
                icon: "success",
                text: "Market changed successfully",
                timer:3000,
                });
            },
            error: function (data) {
                swal({
                icon: "error",
                text: "Something went wrong", 
                timer:3000,
                });
            },

            // frm.submit(function (e) {}
        });
    });
    
</script>
                    
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="crypt-buy-sell-form">
                                <form id="buyForm1" role="form" method="post" action="/buy">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <p>Buy <span class="crypt-up">BTC</span> <span class="fright">Available: <b class="crypt-up">20 BTC</b></span></p>
                                <div class="crypt-buy">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Price</span> </div>
                                        <input type="text" class="form-control" placeholder="0.02323476" readonly>
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Amount</span> </div>
                                        <input type="number" class="form-control">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Total</span> </div>
                                        <input type="text" class="form-control" readonly>
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div>
                                        <p>Fee: <span class="fright">100%x0.2=0.02</span></p>
                                    </div>
                                    <div class="text-center mt-3 mb-3 crypt-up">
                                        <p>You will approximately pay</p>
                                        <h4>0.09834 BTC</h4></div>
                                        <input type="submit" class="mb-2 crypt-button-green-full" value="Buy">
                                        <input type="submit" class=" crypt-button-red-full" value="Sell">
                                    </div>
                            </div>
                            </form>

                        </div>
                        <!-- <div class="col-md-6">
                            <div class="crypt-buy-sell-form">
                                <p>Sell <span class="crypt-down">BTC</span> <span class="fright">Available: <b class="crypt-down">20 BTC</b></span></p>
                                <div class="crypt-sell">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Price</span> </div>
                                        <input type="text" class="form-control" placeholder="0.02323476" readonly>
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Amount</span> </div>
                                        <input type="number" class="form-control">
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Total</span> </div>
                                        <input type="text" class="form-control" readonly>
                                        <div class="input-group-append"> <span class="input-group-text">BTC</span> </div>
                                    </div>
                                    <div>
                                        <p>Fee: <span class="fright">100%x0.2=0.02</span></p>
                                    </div>
                                    <div class="text-center mt-3 mb-3 crypt-down">
                                        <p>You will approximately pay</p>
                                        <h4>0.09834 BTC</h4></div>
                                    <div><a href="#" class="crypt-button-red-full">Sell</a></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                
            </div>
            
            
            <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-2">
            <div class="crypt-market-status mt-4">
                    <div>
                        <ul class="nav nav-tabs">
                            <li role="presentation"><a href="#history" class="active" data-toggle="tab">Order Book</a></li>
                            <li role="presentation"><a href="#market-trading" data-toggle="tab">market trading</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="history">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h6 class="text-center pt-2 pt-2">29384798 <span class="pl-3">938475</span></h6>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="market-trading">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000564</td>
                                            <td>6.6768876</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-down">0.000056</td>
                                            <td>5.3424984</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td>0.0000567</td>
                                            <td>4.3456600</td>
                                        </tr>
                                        <tr>
                                            <td>22:35:59</td>
                                            <td class="crypt-up">0.0000234</td>
                                            <td>4.3456600</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid">
        <div class="row sm-gutters">
            <div class="col-xl-12">
            <div>
                    <div class="crypt-market-status">
                        <div>
                            <ul class="nav nav-tabs">
                                <li role="presentation"><a href="#active-orders" class="active" data-toggle="tab">Active Orders</a></li>
                                <li role="presentation"><a href="#closed-orders" data-toggle="tab">Closed Orders</a></li>
                                <li role="presentation"><a href="#balance" data-toggle="tab">Balance</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="active-orders">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Time</th>
                                                <th scope="col">Buy/sell</th>
                                                <th scope="col">Price BTC</th>
                                                <th scope="col">Amount BPS</th>
                                                <th scope="col">Dealt BPS</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="no-orders text-center"><img src="images/empty.png" alt="no-orders"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="closed-orders">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Time</th>
                                                <th scope="col">Buy/sell</th>
                                                <th scope="col">Price BTC</th>
                                                <th scope="col">Amount BPS</th>
                                                <th scope="col">Dealt BPS</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-up">Buy</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-down">Sell</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-up">Buy</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-down">Sell</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-up">Buy</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-down">Sell</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-up">Buy</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-down">Sell</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.000056</td>
                                                <td class="crypt-down">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>22:35:59</th>
                                                <td class="crypt-up">Buy</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.000056</td>
                                                <td class="crypt-up">0.0003456</td>
                                                <td>5.3424984</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="balance">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Currency</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Volume</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>BTC</th>
                                                <td>0.0000564</td>
                                                <td>6.6768876</td>
                                            </tr>
                                            <tr>
                                                <th>ETC</th>
                                                <td>0.000056</td>
                                                <td>5.3424984</td>
                                            </tr>
                                            <tr>
                                                <th>LTC</th>
                                                <td>0.0000234</td>
                                                <td>4.3456600</td>
                                            </tr>
                                            <tr>
                                                <th>XMR</th>
                                                <td>0.0000234</td>
                                                <td>4.3456600</td>
                                            </tr>
                                            <tr>
                                                <th>BIT</th>
                                                <td>0.0000567</td>
                                                <td>4.3456600</td>
                                            </tr>
                                            <tr>
                                                <th>EGF</th>
                                                <td>0.0000234</td>
                                                <td>4.3456600</td>
                                            </tr>
                                            <tr>
                                                <th>EER</th>
                                                <td>0.0000567</td>
                                                <td>4.3456600</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script src="trade/amc/core.js"></script>
    <script src="trade/amc/charts.js"></script>
    <script src="trade/amc/dark.html"></script>
    <script src="trade/amc/animated.js"></script>
    <script src="trade/js/jquery.js"></script>
    <script src="trade/js/popper.min.js"></script>
    <script src="trade/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="trade/bootstrap/js/bootstrap.js"></script>
    <script src="trade/js/main.js"></script>
    <script src="trade/js/amc.js"></script>
    <script src="trade/js/tv.js"></script>
</body>

</html>