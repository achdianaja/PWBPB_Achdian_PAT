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
                    @include('sweetalert::alert')

                    {{-- @if ( session()->has('error') )
                    <div class="alert alert-danger alert-dismissible alert-round" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="alert-icon">
                            <i class="icon-close"></i>
                        </div>
                        <div class="alert-message">
                            <span><strong>Gagal!</strong> {{ session('error') }}</span>
                        </div>
                    </div>
                    @endif --}}

                    {{-- @if ( session()->has('success') )
                    <div class="alert alert-success alert-dismissible alert-round" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="alert-icon">
                            <i class="icon-close"></i>
                        </div>
                        <div class="alert-message">
                            <span><strong>Berhasil!</strong> {{ session('success') }}</span>
                        </div>
                    </div>
                    @endif --}}

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

                                <form action="{{ route('store') }}" method="post">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="1" class="col-sm-3 col-form-label">nama barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="1"
                                                class="form-control form-control-rounded @error('nama_barang')is-invalid @enderror"
                                                name="nama_barang" value="{{ old('nama_barang') }}">
                                            @error('nama_barang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="2" class="col-sm-3 col-form-label">Kode Barang</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="2"
                                                class="form-control form-control-rounded @error('kode_barang')is-invalid @enderror"
                                                name="kode_barang" value="{{ old('kode_barang') }}">
                                            @error('kode_barang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="5" class="col-sm-3 col-form-label">Gudang</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select" style="border-radius: 100px;" id="5"
                                                name="gudang" {{ old('gudang') }}>
                                                <option selected muted disabled>Gudang</option>
                                                @foreach ($gudang as $item)
                                                <option value="{{ $item->id }}">{{ $item->gudang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="3" class="col-sm-3 col-form-label">Kondisi Barang</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select @error('status')is-invalid @enderror"
                                                style="border-radius: 100px;" id="3" name="status">
                                                <option selected muted disabled>status</option>
                                                @foreach ($status as $item)
                                                <option value="{{ $item->id }}">{{ $item->status }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="4" class="col-sm-3 col-form-label ">Jumlah Barang</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="4"
                                                class="form-control form-control-rounded @error('jumlah')is-invalid @enderror"
                                                name="jumlah">
                                            @error('jumlah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <button type="submit" id="rounded-input" class="btn btn-info">kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
