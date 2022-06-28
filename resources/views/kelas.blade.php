@extends('layouts.admin')

@section('content')
<body>
    
  <div class="container">
    <a href="/createkelas" class="btn btn-success">Tambah</a>
   <div class="row">
     @if ($message = Session::get('success'))
         <div class="alert alert-success" role="alert">
           {{ $message }}
         </div>
     @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama kelas</th>
          <th scope="col">Wali Kelas</th>
          <th scope="col">Pilihan</th>
          
        </tr>
      </thead>
      <tbody>
        @php
            $no = 1;
        @endphp
       @foreach ($data as $k)
       <tr>
        <th scope="row">{{ $no++ }}</th>
        <td>{{ $k->namakelas }}</td>
        <td>{{ $k->walikelas }}</td>
        
        <td>
          <a href="/showkelas/{{ $k->id }}" class="btn btn-primary">edit</a>
          <a href="/deletekelas/{{ $k->id }}" class="btn btn-danger">hapus</a>
        </td>
      </tr>
       @endforeach
      
      </tbody>
    </table>
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