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

        <form method="post" action="{{url('/book/create')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku"
                       required >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pencipta</label>
                <input type="text" class="form-control" id="pencipta" name="pencipta"
                       placeholder="Masukkan nama pencipta"
                       required >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit"
                       placeholder="Masukkan nama penerbit" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"
                          placeholder="Masukkan deskirpsi"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="text" class="form-control" name="price" placeholder="Masukkan Harga">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gambar</label>
                <input type="file" accept="image/*" class="form-control" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')
