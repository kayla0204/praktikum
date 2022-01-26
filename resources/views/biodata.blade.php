@include('inc.navbar')
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Biodata Siswa</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="{{ $photo }}" class="rounded-circle" width="80%">
          </div>
          <div class="col-md-6">
            Informasi Pribadi
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Informasi Ku</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">Nama Lengkap</div>
                    <div class="col-md-6">: {{ $nama }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Tempat, Tanggal Lahir</div>
                    <div class="col-md-6">: {{ $lahir }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Hobby</div>
                    <div class="col-md-6">: {{ $hobi }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Jenis Kelamin</div>
                    <div class="col-md-6">: {{ $jk }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Agama</div>
                    <div class="col-md-6">: {{ $hobi }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Alamat</div>
                    <div class="col-md-6">: {{ $alamat }}</div>
                 </div>
                  <div class="row">
                     <div class="col-md-6">Telp</div>
                     <div class="col-md-6">: {{ $telp }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">Email</div>
                    <div class="col-md-6">: {{ $email }}</div>
                 </div>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            Riwayat Pendidikan
            <div class="list-group">
                <div class="list-group-item list-group-item-action">
                  <h5 class="mb-1">Universitas Pendidikan Indonesia</h5>
                  <p class="mb-1">Pendidikan Guru Sekolah Dasar</p>
                  <small>2022 - 2025</small>
                </div>
                <div class="list-group-item list-group-item-action">
                  <h5 class="mb-1">SMK Bakti Nusantara</h5>
                  <p class="mb-1">Rekayasa Perangkat Lunak</p>
                  <small>2019 - 2022</small>
                </div>
                <div class="list-group-item list-group-item-action">
                  <h5 class="mb-1">SMP PGRI Rancaekek</h5>
                  <small>2017 - 2019</small>
                </div>
          </div>
        </div>
        <div class="text-center mt-5 mb-5"><h4>Pencapaian dan Pengalaman</h4></div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header"><h5 class="card-title">Pencapaian</h5></div>
            <div class="list-group list-group-horizontal">
              <div class="list-group-item">Pencapaian 1</div>
              <div class="list-group-item">Pencapaian 2</div>
              <div class="list-group-item">Pencapaian 3</div>
              <div class="list-group-item">Pencapaian 4</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header"><h5 class="card-title">Pengalaman</h5></div>
            <div class="list-group list-group-horizontal">
              <div class="list-group-item">Pengalaman 1</div>
              <div class="list-group-item">Pengalaman 2</div>
              <div class="list-group-item">Pengalaman 3</div>
              <div class="list-group-item">Pengalaman 4</div>
            </div>
          </div>
        </div>
      </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
