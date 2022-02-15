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

      <table class="table table-info table-striped">
        <thead>
          <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Halaman</th>
            <th scope="col">Tahun</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->halaman }}</td>
                <td>{{ $book->tahun }}</td>
                <td>
                    <a href="{{route('updateBook', ['id'=>$book->id])}}"><button type="submit" class="btn btn-primary">Update</button></a>

                    <form action="{{route('delete', ['id' => $book->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
      </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
