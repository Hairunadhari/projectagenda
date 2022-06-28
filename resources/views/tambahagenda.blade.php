@extends('layouts.admin')
@section('content')
<body>
  <div class="container">
      <div class="row">
          <div class="card">
              <div class="card-body">
                  <form action="/storeagenda" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="mb-3">
                        <label class="form-label">Nama Guru</label>
                        <select class="form-select" name="teacher_id" id="teacher_id" aria-label="Default select example">
                          <option selected>Pilih Nama Guru</option>
                          @foreach ($teacher as $item)
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
                        <input type="text" class="form-control" name="linkpembelajaran" aria-describedby="emailHelp">
                          @error('linkpembelajaran')
                           <div class="text-warning">{{ $message }}</div>
                       @enderror
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Absensi</label>
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
                        <label class="form-label">selesei Pelajaran</label>
                        <input type="time" class="form-control" name="selesai">
                          @error('selesai')
                           <div class="text-warning">{{ $message }}</div>
                       @enderror
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
          </div>
      </div>
  </div>








  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
@endsection