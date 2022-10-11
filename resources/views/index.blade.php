@extends('layouts.default')

@section('content')

    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h1>CRUD LARAVEL</h1>
                <a href="{{url('create')}}" class="btn btn-outline-dark"
                onclick="return confirm('Apakah kamu yakin ingin menambahkan data baru?')"> + Tambah buku</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table table-dark table-striped text-center rounded-top ">
                    <tr>   
                        <th>NO</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>ISBN</th>
                        <th>Tahun Terbit</th>
                        <th>Action</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach ($data as $index => $d) 
                        <tr>
                            <td>{{$index + $data -> firstItem()}}</td>
                            <td>{{$d->judul_buku}}</td>
                            <td>{{$d->pengarang}}</td>
                            <td>{{$d->penerbit}}</td>
                            <td>{{$d->ISBN}}</td>
                            <td>{{$d->tahun_terbit}}</td>
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