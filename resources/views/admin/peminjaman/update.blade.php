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
            <li class="">Member</li>
            <li class="active">Buat Baru</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <form method="post" action="{{url('/member/'.$member->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required value="{{$member->nama}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Masukkan alamat">{{$member->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon"
                       maxlength="15" required value="{{$member->telepon}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{$member->email}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Total Pinjam</label>
                <input type="text" class="form-control" value="{{$member->total_pinjam}}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Total Kembali</label>
                <input type="text" class="form-control" value="{{$member->total_kembali}}" disabled>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')
