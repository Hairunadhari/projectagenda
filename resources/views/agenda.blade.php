@extends('layouts.admin')

@section('content')
      <div class="container">
      <a href="/createagenda" class="btn btn-success">Tambah</a>
     <div class="row">
       @if ($message = Session::get('success'))
           <div class="alert alert-success" role="alert">
             {{ $message }}
           </div>
       @endif
      <table class="table table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Materi Pelajaran</th>
            <th scope="col">Jenis Pembelajaran</th>
            <th scope="col">Link Pembelajaran</th>
            <th scope="col">Absensi</th>
            <th scope="col">Dokumentasi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Mulai Pelajaran</th>
            <th scope="col">Selesai Pelajaran</th>
            <th scope="col">Pilihan</th>
          </tr>
        </thead>
        <tbody>
          @php
              $no = 1;
          @endphp
         @foreach ($data as $d)
         <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $d->teacher->teacher }}</td>
          <td>{{ $d->matapelajaran }}</td>
          <td>{{ $d->materipelajaran }}</td>
          <td>{{ $d->jenispembelajaran }}</td>
          <td>{{ $d->linkpembelajaran }}</td>
          <td>{{ $d->absensi }}</td>
          {{-- <td>{{ $d->foto }}</td> --}}
          <td>
            <img src="{{ asset('dokumentasi/'.$d->foto) }}" alt="" style="width: 100px">
          </td>
          <td>{{ $d->kelas }}</td>
          <td>{{ $d->keterangan }}</td>
          <td>{{ $d->mulai }}</td>
          <td>{{ $d->selesai }}</td>
          <td>
            <a href="/showagenda/{{ $d->id }}" class="btn btn-primary">edit</a>
            <a href="/deleteagenda/{{ $d->id }}" class="btn btn-danger">hapus</a>
          </td>
        </tr>
         @endforeach
        
        </tbody>
      </table>
     </div>
    </div>
@endsection