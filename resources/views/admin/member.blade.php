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
            <li class="active">Member</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @if(Session::has('new_member_saved'))
            <div class="alert alert-success">
                <span class="close"></span>
                {{ Session::get('new_member_saved') }}
            </div>
        @endif
        @if(Session::has('member_updated'))
            <div class="alert alert-success">
                <span class="close"></span>
                {{ Session::get('member_updated') }}
            </div>
        @endif

        <a class="btn btn-primary" href="{{url('/member/create')}}" role="button" style="float: right;">Buat baru</a>
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
                @foreach($members as $member)
                    <tr>
                        <th scope="row">{{$member->id}}</th>
                        <th scope="row">{{$member->nama}}</th>
                        <th scope="row">{{$member->alamat}}</th>
                        <th scope="row">{{$member->telepon}}</th>
                        <th scope="row">{{$member->email}}</th>
                        <th scope="row">{{$member->total_pinjam}}</th>
                        <th scope="row">{{$member->total_kembali}}</th>
                        <th scope="row"><a class="btn btn-success" href="{{url('/member/'.$member->id)}}" role="button">Edit</a>
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
