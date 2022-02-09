<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      @include('inc.navbar')
    <div class="row">
        <div class="container">
            <h1 class"display-4 mt-3">Tambah Data</h1>
            <p class="lead" class="mb-3"></p>
            <form method="POST" action="/store_siswa">
                @csrf

                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input name="nama" name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                  </div>

                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="lahir">Tempat</label>
                    <input type="text" name="lahir" class="form-control" id="lahir" placeholder="tempat">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="tgl">Tanggal lahir</label>
                    <input type="date" name="tgl" class="form-control" id="tgl">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" class="form-control" >
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                      </div>
                    <div class="form-group col-md-6">
                        <label for="agama">Agama</label>
                        <select name="agama" class="form-control">
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                            <option value="budha">budha</option>
                            <option value="hindu">hindu</option>
                            <option value="konghucu">konghucu</option>
                        </select>
                      </div>
                </div>

                <div class="form-group">
                  <label for="inputAddr ess2">Hobi</label>
                  <input type="text" name="hobi" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-group">
                    <label for="inputAddr ess2">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Email</label>
                    <input type="email" name="email" class="form-control" id="inputCity">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Add Siswa
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
