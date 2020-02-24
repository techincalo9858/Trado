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
                                                <th scope="col">Opened at</th>
                                                <th scope="col">Buy/sell</th>
                                                <th scope="col">Base price</th>
                                                <th scope="col">Quote price</th>
                                                <th scope="col">Asset</th>
                                                <th scope="col">Now</th>
                                                <th scope="col">Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            @if($order->status=="active")
                                            <tr>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->type}}</td>
                                                <td>{{$order->base_amount}} {{$order->base_c}}</td>
                                                <td>{{$order->quote_amount}} {{$order->quote_c}}</td>
                                                <td>{{$order->base_amount}} {{$order->base_c}}</td>
                                                <td>{{$order->base_amount}}</td>
                                                <td>{{$order->base_c}}/{{$order->quote_c}}</td>
                                                <td>
                                                    <a href="javascript:void(0)" id="closeorder{{$order->id}}" class="btn btn-danger btn-sm">close</a>
                                                </td>
                                            </tr>
                                            @endif

                                            <script type="text/javascript">
                                            $("#closeorder{{$order->id}}").on('click',function(){
                                                    $.ajax({
                                                        url: "{{url('trade/closeorder')}}/{{$order->id}}",
                                                        type: 'GET',
                                                        data:$("#closeorder{{$order->id}}").serialize(),
                                                        success: function (response) {
                                                            if(response.status ===200){
                                                                swal({
                                                                icon: "success",
                                                                text: response.message,
                                                                timer:3000,
                                                                });
                                                                location.reload(true);
                                                                }
                                                                else{
                                                                swal({
                                                                icon: "error",
                                                                text: response.message,
                                                                timer:3000,
                                                                });
                                                                location.reload(true);
                                                            }
                                                        console.log(response)
                                                        },
                                                        error: function (data) {
                                                            swal({
                                                            icon: "error",
                                                            text: "Something went wrong", 
                                                            timer:3000,
                                                            });
                                                        },

                                                    });
                                                });
                                            </script>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!--<div class="no-orders text-center"><img src="images/empty.png" alt="no-orders"></div>-->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="closed-orders">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">Opened at</th>
                                            <th scope="col">Closed at</th>
                                                <th scope="col">Buy/sell</th>
                                                <th scope="col">Base price</th>
                                                <th scope="col">Quote price</th>
                                                <th scope="col">Closed price</th>
                                                <th scope="col">Asset</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                            @if($order->status=="closed")
                                            <tr>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->closed_at}}</td>
                                                <td>{{$order->type}}</td>
                                                <td>{{$order->base_amount}} {{$order->base_c}}</td>
                                                <td>{{$order->quote_amount}} {{$order->quote_c}}</td>
                                                <td>{{$order->closed_amount}} {{$order->base_c}}</td>
                                                <td>{{$order->base_c}}/{{$order->quote_c}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="balance">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Wallet</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col">Last updated</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($balances as $balance)
                                            <tr>
                                                <th>{{$balance->wallet}}</th>
                                                <td>{{round($balance->balance,5)}}</td>
                                                <td>{{date_format($balance->updated_at,"Y/M/d H:i")}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>