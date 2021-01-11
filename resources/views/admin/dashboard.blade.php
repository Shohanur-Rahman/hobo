@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')
    @include('admin.partials.partial_assets.kendo')
    <script src="{{asset('admin/js/custom/multi-animated-counter.js')}}"></script>
    <style>
        .badge {
            font-size: 15px;
        }
        .dataTables_filter {
            display: none;
        }
        .dataTables_wrapper .btn-group{
            margin-bottom: 10px;
        }
    </style>
    <div class="row justify-content-center">

        <div class="col-md-4 col-xl-3">
            <div class="card box-margin">
                <div class="card-body">
                    <div class="float-right"><i class="fa fa-cart-plus text-primary font-30"></i></div>
                    <span class="badge badge-primary">Products</span>
                    <h4 class="my-3"><span class="counter" data-count="{{$products}}">0</span></h4>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-xl-3">
            <div class="card box-margin">
                <div class="card-body">
                    <div class="float-right"><i class="fa fa-group text-primary font-30"></i></div>
                    <span class="badge badge-primary">Customers</span>
                    <h4 class="my-3"><span class="counter" data-count="{{$customers}}">0</span></h4>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card box-margin">
                <div class="card-body">
                    <div class="float-right"><i class="fa fa-truck text-primary font-30"></i></div>
                    <span class="badge badge-primary">Orders</span>
                    <h4 class="my-3"><span class="counter" data-count="{{$orders}}">0</span></h4>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card box-margin">
                <div class="card-body">
                    <div class="float-right"><i class="fa fa-dollar text-primary font-30"></i></div>
                    <span class="badge badge-primary">Amount</span>
                    <h4 class="my-3">$<span class="counter" data-count="{{$amounts}}">0</span></h4>
                </div>
            </div>
        </div>


    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>
        <div class="col-xl-6 box-margin height-card">
            <div class="card">
                <div class="card-body">
                    <!--  Chart -->
                    <div class="dashboard-area">
                        <div id="monthlySell"  style="background: center no-repeat url('{{asset("admin/world-map.png")}}');"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 box-margin height-card">
            <div class="card">
                <div class="card-body">
                    <!--  Chart -->
                    <div class="dashboard-area">
                        <div id="dailySell"  style="background: center no-repeat url('{{asset("admin/world-map.png")}}');"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row justify-content-center d-flex">

        <div class="col-xl-12 box-margin height-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">New Orders</h6>
                    <div class="table-responsive">
                        <table id="datatable-buttons"
                               class="table table-striped dt-responsive js-exportable nowrap w-100">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>#P_ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Invoice</th>
                                <th>Method</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($recentOrders as $order)
                                <?php $customerInfo = \App\User::find($order->customer_id);?>
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->payer_email}}</td>
                                    <td>{{$customerInfo->name}}</td>
                                    <td>{{$customerInfo->email}}</td>
                                    <td>#{{$order->invoice_number}}</td>
                                    <td>{{$order->payment_method}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{date('d F Y H:m', strtotime($order->created_at))}}</td>
                                    <td>
                                        <a class="btn btn-outline-primary table-btn btn-sm"
                                           href="{{route('orders.show',$order->id )}}" title="Edit"><i
                                                class="fa fa-eye"></i></a>
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-6 col-md-6 box-margin">
            <div class="card">
                <div class="card-body">
                    <div id="sellByCategory" style="background: center no-repeat url('{{asset("admin/world-map.png")}}');"></div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 col-md-6 box-margin">
            <div class="card">
                <div class="card-body">
                    <div id="productsOnCategory" style="background: center no-repeat url('{{asset("admin/world-map.png")}}');"></div>
                </div>
            </div>
        </div>


    </div>

    @include('admin.partials.partial_assets.datatable')


    <script>
        function monthlySellsReports() {

            $("#monthlySell").kendoChart(
                {
                    dataSource: {
                        transport: {
                            read: {
                                url: "{{route('dashboard.monthly_sell')}}",
                                dataType: "json"
                            }
                        },
                        sort: {
                            field: "year",
                            dir: "asc"
                        }
                    },
                    chartArea: {
                        background: ""
                    },
                    title: {
                        text: "Monthly sales reports"
                    },
                    legend: {
                        position: "top"
                    },
                    seriesDefaults: {
                        type: "column"
                    },
                    series:
                        [{
                            field: "orders",
                            categoryField: "month",
                            name: "Monthly Sell"
                        }],
                    categoryAxis: {
                        labels: {
                            rotation: -100
                        },
                        majorGridLines: {
                            visible: false
                        }
                    },
                    valueAxis: {
                        labels: {
                            format: "N0"
                        },
                        majorUnit: 5000,
                        line: {
                            visible: false
                        }
                    },
                    tooltip: {
                        visible: true,
                        format: "N0"
                    }
                }
            );
        }


        function sellOnThisMonthChart() {
            $("#dailySell").kendoChart(
                {
                    dataSource: {
                        transport: {
                            read: {
                                url: "{{route('dashboard.daily_sell')}}",
                                dataType: "json"
                            }
                        },
                        sort: {
                            field: "year",
                            dir: "asc"
                        }
                    },
                    chartArea: {
                        background: ""
                    },
                    title: {
                        text: "Sales on current month"
                    },
                    legend: {
                        position: "top"
                    },
                    seriesDefaults: {
                        type: "column"
                    },
                    series:
                        [{
                            field: "orders",
                            categoryField: "month",
                            name: "Daily Sell"
                        }],
                    categoryAxis: {
                        labels: {
                            rotation: -100
                        },
                        majorGridLines: {
                            visible: false
                        }
                    },
                    valueAxis: {
                        labels: {
                            format: "N0"
                        },
                        majorUnit: 2000,
                        line: {
                            visible: false
                        }
                    },
                    tooltip: {
                        visible: true,
                        format: "N0"
                    }
                }
            );
        }


        function sellByCategory() {
            $("#sellByCategory").kendoChart(
                {
                    dataSource: {
                        transport: {
                            read: {
                                url: "{{route('dashboard.sell_by_category')}}",
                                dataType: "json"
                            }
                        },
                        sort: {
                            field: "year",
                            dir: "asc"
                        }
                    },
                    chartArea: {
                        background: ""
                    },
                    title: {
                        text: "Sales on category"
                    },
                    legend: {
                        position: "top"
                    },
                    seriesDefaults: {
                        type: "pie"
                    },
                    series:
                        [{
                            field: "total_order",
                            categoryField: "category_name",
                            name: "Category"
                        }],
                    categoryAxis: {
                        labels: {
                            rotation: -100
                        },
                        majorGridLines: {
                            visible: false
                        }
                    },
                    valueAxis: {
                        labels: {
                            format: "N0"
                        },
                        majorUnit: 200,
                        line: {
                            visible: false
                        }
                    },
                    tooltip: {
                        visible: true,
                        format: "N0"
                    }
                }
            );
        }
        function productsOnCategory() {
            $("#productsOnCategory").kendoChart(
                {
                    dataSource: {
                        transport: {
                            read: {
                                url: "{{route('dashboard.product_on_category')}}",
                                dataType: "json"
                            }
                        },
                        sort: {
                            field: "year",
                            dir: "asc"
                        }
                    },
                    title: {
                        text: "Products on category"
                    },
                    chartArea: {
                        background: ""
                    },
                    legend: {
                        position: "top"
                    },
                    seriesDefaults: {
                        type: "pie"
                    },
                    series:
                        [{
                            field: "total_product",
                            categoryField: "category_name",
                            name: "Category"
                        }],
                    categoryAxis: {
                        labels: {
                            rotation: -100
                        },
                        majorGridLines: {
                            visible: false
                        }
                    },
                    valueAxis: {
                        labels: {
                            format: "N0"
                        },
                        majorUnit: 200,
                        line: {
                            visible: false
                        }
                    },
                    tooltip: {
                        visible: true,
                        format: "N0"
                    }
                }
            );
        }

    </script>

    <script src="{{asset('admin/js/custom/dashboard.js')}}"></script>

@endsection
