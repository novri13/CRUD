@extends('layouts.default')

@section('content')
   <section>
      <div class="container mt-5">
         <h1>Data Buku</h1>
         <div class="row">
            <div class="col-log-8">
               <form class="row g-3" action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <label for="nama" class="form-label">Judul Buku *</label>
                     <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" autocomplete="on" value="{{old("judul_buku")}}">
                     {{-- Menampilkan Validasi--}}
                     @if($errors->has('judul_buku'))
                        <div class ="text-danger">
                           {{$errors->first('judul_buku')}}
                        </div>
                     @endif  
                  </div>
                  
                  <div class="col-md-6">
                     <label for="name" class="form-label">Pengarang *</label>
                     <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" autocomplete="on" value="{{old("pengarang")}}">
                     {{-- Menampilkan Validasi--}}
                     @if($errors->has('pengarang'))
                        <div class ="text-danger">
                           {{$errors->first('pengarang')}}
                        </div>
                     @endif
                  </div>

                  <div class="col-4">
                     <label for="name" class="form-label">Penerbit *</label>
                     <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" autocomplete="on" value="{{old("penerbit")}}">
                     {{-- Menampilkan Validasi--}}
                     @if($errors->has('penerbit'))
                        <div class ="text-danger">
                           {{$errors->first('penerbit')}}
                        </div>
                     @endif
                  </div>
                  
                  <div class="col-4">
                     <label for="nama" class="form-label">ISBN *</label>
                     <input type="number" name="ISBN" class="form-control" placeholder="No ISBN" autocomplete="on" value="{{old("ISBN")}}">
                     <div class="col-auto">
                        <span id="ISBN" class="form-text">
                           Min 5 & Max 14 characters.
                        </span>
                     </div>
                     {{-- Menampilkan Validasi--}}
                     @if($errors->has('ISBN'))
                        <div class ="text-danger">
                           {{$errors->first('ISBN')}}
                        </div>
                     @endif
                  </div>
                  
                  <div class="col-4">
                     <label for="tahun_terbit" class="form-label">Tahun Terbit Buku *</label>
                     <select id="tahun_terbit" name="tahun_terbit" class="form-select" autocomplete="on" value="{{old("tahun_terbit")}}">
                        <option value=""> Tahun terbit</option>
                        <option value="2022">2022</option>  <option value="2021">2021</option>
                        <option value="2020">2020</option>  <option value="2019">2019</option>
                        <option value="2018">2018</option>  <option value="2017">2017</option>
                        <option value="2016">2016</option>  <option value="2015">2015</option>
                        <option value="2014">2014</option>  <option value="2013">2013</option>
                        <option value="2012">2012</option>  <option value="2011">2011</option>
                        <option value="2010">2010</option>
                     </select>
                     {{-- Menampilkan Validasi--}}
                     @if($errors->has('tahun_terbit'))
                        <div class ="text-danger">
                           {{$errors->first('tahun_terbit')}}
                        </div>
                     @endif
                  </div>
                  
                  <div class="form-group p-2 d-flex justify-content-evenly">
                     <button type="sumbit" class="btn btn-outline-dark btn-primary" onclick="return confirm('Apakah kamu yakin ingin menambahkan?')"><b>Tambah Buku</b></button>
                     <a class="btn btn-outline-dark btn-primary  " href="{{url('/')}}" onclick="return confirm('Apakah kamu yakin ingin kembali?')"><b>Back To Home</b></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
@endsection