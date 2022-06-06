<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 11:59:49 GMT -->

<head>
    <title>Inventaris</title>
    @include('template.head')
</head>

<body>
    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="clearfix"></div>
        <!--Start sidebar-wrapper-->
        @include('template.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('template.navbar')
        <!--End topbar header-->
        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <!-- Admin -->
                @if (auth()->user()->role == "admin")
                <div class="row mt-3">
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card bg-pattern-primary">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white"></h4>
                                        <span class="text-white">Total Orders</span>
                                    </div>
                                    <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                                        <i class="icon-basket-loaded text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card bg-pattern-danger">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">7850</h4>
                                        <span class="text-white">Total Expenses</span>
                                    </div>
                                    <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                                        <i class="icon-wallet text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card bg-pattern-success">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">87.5%</h4>
                                        <span class="text-white">Total Revenue</span>
                                    </div>
                                    <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                                        <i class="icon-pie-chart text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="card bg-pattern-warning">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body text-left">
                                        <h4 class="text-white">8400</h4>
                                        <span class="text-white">New Users</span>
                                    </div>
                                    <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                                        <i class="icon-user text-white"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Data Terbaru
                                <div class="card-action">
                                    <div class="dropdown">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>nama barang</th>
                                            <th>kode barang</th>
                                            <th>gudang</th>
                                            <th>status</th>
                                            <th>jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $item)
                                        <tr>
                                            <td>{{ $item ->nama_barang }}</td>
                                            <td>{{ $item ->kode_barang }}</td>
                                            <td>{{ $item ->gudang->gudang }}</td>
                                            <td>{{ $item ->status->status}}</td>
                                            <td>{{ $item ->jumlah }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- EndAdmin -->

                <!-- User -->

                <!-- endUser -->
            </div>
        </div>
    </div>
</body>

</html>
