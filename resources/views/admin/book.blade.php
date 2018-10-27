@include('admin.layouts.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Buku
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
            <li class="active">Buku</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @if(Session::has('new_book_saved'))
            <div class="alert alert-success">
                <span class="close"></span>
                {{ Session::get('new_book_saved') }}
            </div>
        @endif
        @if(Session::has('book_updated'))
            <div class="alert alert-success">
                <span class="close"></span>
                {{ Session::get('book_updated') }}
            </div>
        @endif

        <a class="btn btn-primary" href="{{url('/book/create')}}" role="button" style="float: right;">Buat baru</a>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Judul</th>
                <th scope="col">Pencipta</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Harga</th>
                <th scope="col">Tersedia</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->judul}}</td>
                    <td>{{$book->pencipta}}</td>
                    <td>{{$book->penerbit}}</td>
                    <td>{{$book->price}}</td>
                    @if($book->avaiable==1)
                        <td>Tersedia</td>
                    @else
                        <td>Tidak Tersedia</td>
                    @endif
                    <th scope="row"><a class="btn btn-success" href="{{url('/book/'.$book->id)}}" role="button">Edit</a>
                </tr>
            @endforeach
            </tbody>
        </table>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')
