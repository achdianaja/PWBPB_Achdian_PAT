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
                <div class="col-sm-9">
                    <h4 class="page-title">Form Input</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">kembali</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-uppercase">Text Input</div>
                            <div class="card-body">
                                <form action="/update/{{ $data->id }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="1" class="col-sm-3 col-form-label">nama barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="1" class="form-control form-control-rounded"
                                                name="nama_barang" value="{{ $data->nama_barang }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="2" class="col-sm-3 col-form-label">Kode Barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="2" class="form-control form-control-rounded"
                                                name="kode_barang" value="{{ $data->kode_barang }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="5" class="col-sm-3 col-form-label">Kondisi Barang</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select" style="border-radius: 100px;" id="5"
                                                name="gudang">
                                                <option value="{{ $data->gudang_id }}">{{ $data->gudang->gudang }}</option>
                                                @foreach ($gudang as $item)
                                                <option value="{{ $item->id }}">{{ $item->gudang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="3" class="col-sm-3 col-form-label">Kondisi Barang</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select" style="border-radius: 100px;" id="3"
                                                name="status">
                                                <option value="{{ $data->status_id }}">{{ $data->status->status }}</option>
                                                @foreach ($status as $item)
                                                <option value="{{ $item->id }}">{{ $item->status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="4" class="col-sm-3 col-form-label">Jumlah Barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="4" class="form-control form-control-rounded"
                                                name="jumlah" value="{{ $data->jumlah }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
