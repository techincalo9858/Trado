
<!DOCTYPE html>
<html lang="en">
<head class="crypt-dark">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$settings->site_name."|".$title}}</title>
    @include('trade.assets')
</head>

<body class="crypt-dark">
    <header>
        <div class="container-full-width">
            <div class="crypt-header">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="crypt-logo"><h4 style="margin:20px 0px 0px 30px; color:#fff;">OnlineTrade Buy/Sell</h4><!--<img src="images/{{$settings->logo}}" alt="">--></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-8 col-lg-8 col-md-8 d-none d-md-block d-lg-block">
                        <ul class="crypt-heading-menu fright">
                            @foreach($bals as $bal)
                                 <li class="crypt-box-menu menu-green"><a href="#">{{$bal->wallet}} {{round($bal->balance,4)}}</a></li>
                              {{--  @if($bal->wallet == "USD")
                                <li class="crypt-box-menu menu-green"><a href="#">USD {{round($bal->balance,4)}}</a></li>
                                @endif
                                @if($bal->wallet == "BTC")
                                <li class="crypt-box-menu menu-green"><a href="#">BTC {{round($bal->balance,4)}}</a></li>
                                @endif
                                @if($bal->wallet == "ETH")
                                <li class="crypt-box-menu menu-green"><a href="#">ETH {{round($bal->balance,4)}}</a></li>
                                @endif
                                @if($bal->wallet == "BCH")
                                <li class="crypt-box-menu menu-green"><a href="#">BCH {{round($bal->balance,4)}}</a></li>
                                @endif
                                @if($bal->wallet == "LTC")
                                <li class="crypt-box-menu menu-green"><a href="#">LTC {{round($bal->balance,4)}}</a></li>
                                @endif
                                --}}
                            @endforeach
                            <li class="crypt-box-menu menu-red"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        </ul>
                    </div><i class="menu-toggle pe-7s-menu d-xs-block d-sm-block d-md-none d-sm-none"></i></div>
            </div>
        </div>
    </header>