@include('admin.layouts.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Customer
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
            <li class="active">Peminjaman</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @if(Session::has('new_peminjaman_saved'))
            <div class="alert alert-success">
                <span class="close"></span>
                {{ Session::get('new_peminjaman_saved') }}
            </div>
        @endif
        @if(Session::has('peminjaman_updated'))
            <div class="alert alert-success">
                <span class="close"></span>
                {{ Session::get('peminjaman_updated') }}
            </div>
        @endif

        <a class="btn btn-primary" href="{{url('/peminjaman/create')}}" role="button" style="float: right;">Buat baru</a>
        <div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pinjam</th>
                    <th scope="col">Kembali</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($peminjamans as $peminjaman)
                    <tr>
                        <th scope="row">{{$peminjaman->getBook()->judul}}</th>
                        <th scope="row">{{$peminjaman->getBook()->penerbit}}</th>
                        <th scope="row">{{$peminjaman->getMember()->nama}}</th>
                        <th scope="row">{{$peminjaman->getMember()->telepon}}</th>
                        <th scope="row">{{$peminjaman->price}}</th>
                        <th scope="row">{{$peminjaman->lunas}}</th>
                        <th scope="row">{{$peminjaman->tanggal_pinjam}}</th>
                        <th scope="row">{{$peminjaman->tanggal_kembali}}</th>
                        <th scope="row"><a class="btn btn-success" href="{{url('/peminjaman/'.$peminjaman->id)}}" role="button">Edit</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')
