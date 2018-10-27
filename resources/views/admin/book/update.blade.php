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

        <form method="post" action="{{url('/book/'.$buku->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku"
                       required value="{{$buku->nama}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pencipta</label>
                <input type="text" class="form-control" id="pencipta" name="pencipta"
                       placeholder="Masukkan nama pencipta"
                       required value="{{$buku->pencipta}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit"
                       placeholder="Masukkan nama penerbit" value="{{$buku->penerbit}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"
                          placeholder="Masukkan deskirpsi">{{$buku->deskripsi}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="text" class="form-control" value="{{$buku->harga}}" name="price" placeholder="Masukkan Harga">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gambar</label>
                <input type="image" class="form-control" value="{{$buku->gambar}}" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')
