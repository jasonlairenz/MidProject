<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Menu</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link " href="/addBook">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/viewBook">View</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <form class="form" action="{{ route('addBookpost')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input name="judul" type="text" class="form-control" id="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Buku">

	        @error('judul')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
	    </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input name="penulis" type="text" class="form-control" id="penulis" value="{{ old('penulis') }}" placeholder="Masukkan Penulis Buku">

            @error('penulis')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="halaman" class="form-label">Halaman</label>
            <input name="halaman" type="text" class="form-control" id="halaman" value="{{ old('halaman') }}" placeholder="Masukkan jumlah halaman Buku">

            @error('halaman')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input name="tahun" type="text" class="form-control" id="tahun" value="{{ old('tahun') }}" placeholder="Masukkan Tahun Terbit Buku">

            @error('tahun')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
