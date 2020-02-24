<div class="crypt-market-status mt-4">
                    <div>
                        <ul class="nav nav-tabs">
                            <li role="presentation"><a href="#history" class="active" data-toggle="tab">Order Book</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="history">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($n_orders as $orders)
                                        <tr>
                                            <td>{{date_format($orders->created_at,"M/d H:i")}}</td>
                                            <td class="crypt-down">{{round($orders->base_amount,4).' '.$orders->base_c}}</td>
                                            <td>{{round($orders->quote_amount,4).' '.$orders->quote_c}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>