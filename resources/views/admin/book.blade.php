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
            <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
            <li class="active">Buku</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Judul</th>
                <th scope="col">Pencipta</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Tersedia</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Id</th>
                    <td>Judul</td>
                    <td>Pencipta</td>
                    <td>Penerbit</td>
                    <td>Deskripsi</td>
                    <td>Harga</td>
                    <td>Tersedia</td>
                    <td>Status</td>
                </tr>
            </tbody>
        </table>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')
