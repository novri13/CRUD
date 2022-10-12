@extends('layouts.default')

@section('content')

    <section>
    <div class="container mt-3">
        <div class="row">
            <div class="text-center">
                <h1>CRUD Laravel</h1>
                <h6 class="pb-2 mb-2 text-primary"><b>Magang PT Kimia Farma Plant Banjaran</b></h6>
            </div>

            <div class="col-lg-12 mt-4">
                <a href="{{url('create')}}" class="btn btn-outline-success shadow p-2 mb-2 bg-body-success rounded"
                onclick="return confirm('Apakah kamu yakin ingin menambahkan data baru?')"> + Tambah buku</a>
                <table class="table table-dark table-striped text-center rounded-top mt-4">
                    <tr class="border border-success"> 
                        <td>NO</td>
                        <td>Judul Buku</td>
                        <td>Pengarang</td>
                        <td>Penerbit</td>
                        <td>ISBN</td>
                        <td>Tahun Terbit</td>
                        <td>Harga</td>
                        <td>Action</td>
                    </tr>
                    <?php $i=1; ?>
                    @foreach ($data as $index => $d) 
                        <tr class="border border-success">
                            <td>{{$index + $data -> firstItem()}}</td>
                            <td>{{$d->judul_buku}}</td>
                            <td >{{$d->pengarang}}</td>
                            <td>{{$d->penerbit}}</td>
                            <td>{{$d->ISBN}}</td>
                            <td>{{$d->tahun_terbit}}</td>
                            <td>{{$d->harga}}</td>
                            <td class="text-center" width=150px>
                                <a href="{{ url('/show/'.$d->id) }}" class="btn btn-outline-warning" onclick="return confirm('Apakah kamu yakin ingin mengeditnya?')">Edit</a>
                                <a href="{{url('/destroy/'.$d->id)}}" class="btn btn-outline-danger" onclick="return confirm('Apakah kamu yakin ingin menghapusnya?')">Delete</a>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </table>
                    <div class="d-flex flex-row-reverse">
                        {{$data->links() }}
                    </div>
            </div>
        </div>
    </div>
    </section>
@endsection