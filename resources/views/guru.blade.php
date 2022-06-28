@extends('layouts.admin')

@section('content')
<body>

    <div class="container">
        <a href="/createguru" class="btn btn-success">Tambah</a>
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
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">pilihan</th>
    
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                @endphp
               @foreach ($data as $g)
               <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $g->namaguru }}</td>
                <td>{{ $g->matapelajaran }}</td>
            
                <td>
                  <a href="/showguru/{{ $g->id }}" class="btn btn-primary">edit</a>
                  <a href="/deleteguru/{{ $g->id }}" class="btn btn-danger">hapus</a>
                </td>
              </tr>
               @endforeach
              
              </tbody>
                </tbody>
            </table>
        </div>
    </div>












    {{-- <script>
        var namaguru = ['agus']
        var matapelajaran = ['xi']

        var tampil = document.getElementById('tampilguru')

        function showData() {
            tampil.innerHTML = ""

            for (i = 0; i<namaguru.length; i++) {
                var nodata = i + 1

                tampil.innerHTML += "<tr>" +
                    "<th>"+nodata+"</th>" +
                    "<td>"+namaguru[i]+"</td>" +
                    "<td>"+matapelajaran[i]+"</td>" +
                    "<td>"+
                    "<button class='btn btn-warning'>edit</button>"+
                    "<button class='btn btn-danger'>hapus</button>"+
                    "</td>"+
                    "</tr>"

            }
        }

        showData()

        function add() {
            var namabaru = document.getElementById('nmguru').value
            var mapelbaru = document.getElementById('mapel').value

            namaguru.push(namabaru)
            matapelajaran.push(mapelbaru)

            showData()
        }

    </script> --}}


























































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
    
@endsection