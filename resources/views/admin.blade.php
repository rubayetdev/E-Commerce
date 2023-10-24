<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/chart.css')}}">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Admin</title>
</head>
<style>
    a:hover{
        text-decoration: none;
    }
</style>


<body>


<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">SuperAdmin</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="#" class="toggle-dashboard">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="toggle-table">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">My Store</span>
            </a>
        </li>
        <li>
            <a href="#" class="toggle-analytics">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Message</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group' ></i>
                <span class="text">Team</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="/" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
{{--        <a href="#" class="notification">--}}
{{--            <i class='bx bxs-bell' ></i>--}}
{{--            <span class="num">8</span>--}}
{{--        </a>--}}
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <section id="dashboard">
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
						<h3>{{$ship}}</h3>
						<p>Shipping Orders</p>
					</span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
						<h3>{{$total2}}</h3>
						<p><a href="#" class="toggle-deliver"> Delivar Orders</a></p>
					</span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
						<h3>${{$total}}</h3>
						<p><a href="#" class="toggle-sells">Total Sales</a></p>
					</span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderinfo as $order)
                    <tr>
                        <td>
                            <p>{{$order->customer_name}}</p>
                        </td>
                        <td>{{$order->Date}}</td>
                        @if($order->order_status==='Delivered')
                        <td><span class="status completed">{{$order->order_status}}</span></td>
                        @elseif($order->order_status==='Shipping')
                            <td><span class="status pending">{{$order->order_status}}</span></td>
                        @else
                            <td><span class="status process">{{$order->order_status}}</span></td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Top Sold 5 Products</h3>
                    <i class='bx bx-plus' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <div class="charts-card">
                    <div id="bar-chart2"></div>
                </div>
            </div>
        </div>
            </section>
        <section id="my-store" style="display: none;">
            <div class="head-title">
                <div class="left">
                    <h1>My Store</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">My Store</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download' ></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Products</h3>

                    </div>
            <table>
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Pictuer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $prod)
                <tr>
                    <td>{{$prod->pro_name}}</td>
                    <td>{{$prod->category}}</td>
                    <td>{{ Str::limit($prod->pro_des, 30) }}</td>
                    <td>${{$prod->price}}</td>
                    <td><img src="{{asset('storage/' .$prod->pro_pic)}}"></td>
                </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </section>

        <section id="delivar" style="display: none;">
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="inactive" href="#">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Deliver</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download' ></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>
            <div class="table-data">
            <div class="order">
                <div class="head">
                    <a href="#" class="toggle-dashboard3"><i class="fa-solid fa-arrow-left"></i></a>
                    <h3>Recent Orders</h3>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderinfo2 as $order)
                        <tr>
                            <td>
                                <p>{{$order->customer_name}}</p>
                            </td>
                            <td>{{$order->Date}}</td>
                            @if($order->order_status==='Delivered')
                                <td><span class="status completed">{{$order->order_status}}</span></td>
                            @elseif($order->order_status==='Shipping')
                                <td><span class="status pending">{{$order->order_status}}</span></td>
                            @else
                                <td><span class="status process">{{$order->order_status}}</span></td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </section>

        <section id="totalsells" style="display: none;">
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="inactive" href="#">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Total Sells</a>
                        </li>
                    </ul>
                </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <a href="#" class="toggle-dashboard2"><i class="fa-solid fa-arrow-left"></i></a>
                        <h3>Total Sells</h3>
                    </div>
                    <table>
                        <thead>
                        <tr>
{{--                            <th>Serial</th>--}}
                            <th>Product</th>
                            <th>Quantity Sold</th>
                            <th>Unit Price</th>
{{--                            <th>Total Revenue</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sells as $sel)
                            <tr>
{{--                                <td>{{ $sel->pro_id }}</td>--}}
                                <input type="hidden" name="ids" value="{{ $sel->pro_id }}">
                                <td>{{ $sel->pro_name }}</td>

                                <td>{{ $sel->Quantity_Sold }}</td>

                                <td>${{ $sel->price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="analytics" style="display: none">
            <div class="charts">

                <div class="charts-card">
                    <h2 class="chart-title">Top 5 Products</h2>
                    <div id="bar-chart"></div>
                </div>

                <div class="charts-card">
                    <h2 class="chart-title">Purchase and Sales Orders</h2>
                    <div id="area-chart"></div>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->


<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/link.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    var product = @json($product);
    var productNames = @json($product2);
</script>
</body>
</html>
