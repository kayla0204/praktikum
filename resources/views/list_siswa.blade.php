@include('inc.navbar')
<h1>lihat siswa</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">lahir</th>
      <th scope="col">gender</th>
      <th scope="col">agama</th>
      <th scope="col">alamat</th>
      <th scope="col">telp</th>
      <th scope="col">email</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
        @php $i=0 @endphp
       @foreach ($siswas as $siswa)
        @php $i++ @endphp
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->lahir }}</td>
        <td>{{ $siswa->jk }}</td>
        <td>{{ $siswa->agama }}</td>
        <td>{{ $siswa->alamat }}</td>
        <td>{{ $siswa->telp }}</td>
        <td>{{ $siswa->email }}</td>
    <td>
        <button type="button" class="btn btn-warning">edit</button>
        <button type="button" class="btn btn-danger">delete</button>
        <button type="button" class="btn btn-primary">lihat</button>

    </td>
    </tr>
    @endforeach

  </tbody>
</table>
<a href="/form"><button type="button" class="btn btn-primary">add new</button></a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
