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
                                    <?php $__currentLoopData = $n_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($orders->created_at); ?></td>
                                            <td class="crypt-down"><?php echo e($orders->base_amount); ?></td>
                                            <td><?php echo e($orders->quote_amount); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>