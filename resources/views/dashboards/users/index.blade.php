@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('storeagenda') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Guru</label>
                            <select class="form-select" name="teacher_id" id="teacher_id"
                                aria-label="Default select example">
                                <option selected>Pilih Nama Guru</option>
                                @foreach ($tcr as $item)
                                <option value="{{ $item->id }}">{{ $item->teacher }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mata Pelajaran</label>
                            <select class="form-select" name="matapelajaran" aria-label="Default select example">
                                <option selected>Pilih Mata Pelajaran</option>
                                <option value="PBO">PBO</option>
                                <option value="DDG">DDG</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Materi Pelajaran</label>
                            <input type="text" name="materipelajaran" class="form-control" aria-describedby="emailHelp">
                            @error('materipelajaran')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Pembelajaran</label>
                            <select class="form-select" name="jenispembelajaran" aria-label="Default select example">
                                <option selected>Pilih Jenis Pelajaran</option>
                                <option value="Daring">Daring</option>
                                <option value="Ofline">Ofline</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Pembelajaran</label>
                            <input type="text" class="form-control" name="linkpembelajaran"
                                aria-describedby="emailHelp">
                            @error('linkpembelajaran')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Absensi</label>
                            <input type="text" class="form-control" name="absensi" aria-describedby="emailHelp">
                            @error('absensi')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dokumentasi</label>
                            <input type="file" class="form-control" name="foto" aria-describedby="emailHelp">
                            @error('foto')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" aria-describedby="emailHelp">
                            @error('kelas')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                            @error('keterangan')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mulai Pelajaran</label>
                            <input type="time" class="form-control" name="mulai">
                            @error('mulai')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mulai Pelajaran</label>
                            <input type="time" class="form-control" name="selesai">
                            @error('selesai')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" name="user" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
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
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $d)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $d->teacher->  }}</td>
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
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<h4>Hi User: {{ Auth::user()->name }}</h4>
<hr>
Dashboard
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}
@endsection
