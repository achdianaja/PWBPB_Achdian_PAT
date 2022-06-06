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
        @include('sweetalert::alert')


        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="col-sm-9">
                    <h4 class="page-title">Data Barang</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('trash') }}">Trash</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="default-datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>nama</th>
                                                <th>gender</th>
                                                <th>email</th>
                                                <th>password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $item)
                                            <tr>
                                                <td>{{ $item ->name }}</td>
                                                <td>{{ $item ->gender->gender }}</td>
                                                <td>{{ $item ->email }}</td>
                                                <td>{{ $item ->password}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="largesizemodal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-star"></i> Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    //Default data table
                    $('#default-datatable').DataTable();


                    var table = $('#example').DataTable({
                        lengthChange: false,
                        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
                    });

                    table.buttons().container()
                        .appendTo('#example_wrapper .col-md-6:eq(0)');

                });

            </script>
</body>
