<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="/index">
            <img src="{{ asset('images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            <h5 class="logo-text text-warning"><strong>Inventaris</strong></h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        @if (auth()->user()->role == "admin")
        <li>
            <a href="index.html" class="waves-effect">
                <i class="fa fa-archive"></i> <span>Kelola Barang</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('inputBarang') }}"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
                <li><a href="{{ route('gudang') }}"><i class="fa fa-circle-o"></i> Gudang</a></li>
            </ul>
        </li>

        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-user"></i> <span>Kelola User</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('kelolaUser') }}"><i class="fa fa-circle-o"></i> Lihat User</a></li>
            </ul>
        </li>
        @endif

        @if (auth()->user()->role == "user")
        <li>
            <a href="{{ route('pinjam') }}" class="waves-effect">
                <i class="fa fa-pencil-square-o"></i><span>Pinjam barang</span>
            </a>
        </li>
        @endif
        {{-- <li>
            <a href="/data" class="waves-effect">
                <i class="icon-calendar"></i> <span>Data Barang</span>
            </a>
        </li>

        <li>
            <a href="/data" class="waves-effect">
                <i class="icon-calendar"></i> <span>Data Barang</span>
            </a>
        </li> --}}
        {{-- <li>
       <a href="index.html" class="waves-effect">
         <i class="icon-home"></i> <span>Gudang</span> <i class="fa fa-angle-left pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
          @foreach ($kondisi as $item)
           <li><a href="/kelompok/{{ $item->id }}"><i class="fa-regular fa-circle"></i>{{ $item->kondisi }}</a></li>
        @endforeach
    </ul>
    </li> --}}


    </ul>
</div>
