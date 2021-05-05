<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @php
                    $slide_bar = [
                        'customer.statistical' => 'Tổng quan',
                        'customer.addOrders' => 'Tạo vận đơn',
                        'customer.delivered' => 'Vận đơn đã giao',
                        'customer.areDelivered' => 'Vận đơn đang giao',
                        'customer.cancelled' => 'Vận đơn đã hủy',
                        'customer.showOrders' => 'Tra cứu vận đơn',
                        'customer.statisticalOrder' => 'Thống kê vận đơn',
                        'customer.evaluate' => 'Nhận xét và đánh giá',
                    ];
                    // kiểm tra đang ở route nào để active
                    $route = Route::current();
                    $name = Route::currentRouteName();
                    foreach ($slide_bar as $key => $value) {
                        if($key === $name){
                            echo('<li class="nav-item admin-bar-active">
                                    <a href="' . route($key, 'id=' . $id) . '" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            ' . $value . '
                                        </p>
                                    </a>
                                </li>');
                        }else{
                            echo('<li class="nav-item">
                                    <a href="' . route($key, 'id=' . $id) . '" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            ' . $value . '
                                        </p>
                                    </a>
                                </li>');
                        }
                    }
                @endphp
            </ul>
        </nav>
    </div>
</aside>